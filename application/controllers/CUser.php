<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CUser extends CI_Controller {

	public function __construct() {
        parent::__construct();

		// Load database
        $this->load->model('MUser');
		$this->load->model('MPerfil');
        $this->load->model('MAcciones');
        $this->load->model('MFranchises');
		
    }
	
	public function index()
	{
		$this->load->view('base');
		$data['listar'] = $this->MUser->obtener();
		$data['franquicias'] = $this->MFranchises->obtener();
		$data['users_franquicias'] = $this->MUser->obtenerUsersFranchises();
		$data['acciones'] = $this->MAcciones->obtener();
		$data['permisos'] = $this->MUser->obtener_permisos();
		$this->load->view('user/lista', $data);
		$this->load->view('footer');
	}
	
	public function register()
	{
		$this->load->view('base');
		$data['list_perfil'] = $this->MPerfil->obtener();
		$data['franquicias'] = $this->MFranchises->obtener();
		$data['acciones'] = $this->MAcciones->obtener_without_home();
		//~ $data['user_franquicias'] = $this->MUser->obtenerUsersFranchises();
		$this->load->view('user/registrar',$data);
		$this->load->view('footer');
	}
	
	// Método para guardar un nuevo registro
    public function add() {
		
		$data = array(
			'username' => $this->input->post('username'),
			'name' => $this->input->post('name'),
			'lastname' => $this->input->post('lastname'),
			'profile_id' => $this->input->post('profile_id'),
			'admin' => $this->input->post('admin'),
			'password' => 'pbkdf2_sha256$12000$' . hash("sha256", $this->input->post('password')),
			'status' => $this->input->post('status'),
			'd_create' => date('Y-m-d H:i:s'),
			'd_update' => date('Y-m-d H:i:s'),

		);
        $result = $this->MUser->insert($data);
        
        echo $result;  // No comentar, esta impresión es necesaria para que se ejecute el método insert()
        
        if ($result != 'existe'){
			// Si hay franquicias asociadas al usuario, registramos la relación en la tabla 'users_franchises'
			if($this->input->post('franquicias_ids') != ""){
				// Inserción de las relaciones usuario-franquicia				
				foreach($this->input->post('franquicias_ids') as $franchise_id){
					$data = array('user_id'=>$result, 'franchise_id'=>$franchise_id);
					$this->MUser->insert_franchise($data);
				}
			}
			// Si hay acciones asociadas al usuario, registramos la relación en la tabla 'permissions'
			if($this->input->post('actions_ids') != ""){
				// Inserción de las relaciones usuario-franquicia				
				foreach($this->input->post('actions_ids') as $action_id){
					$data = array('user_id'=>$result, 'action_id'=>$action_id, 'parameter_permit'=>'777');
					$this->MUser->insert_action($data);
				}
			}
			       
        }
    }
	
	// Método para editar
    public function edit() {
		$this->load->view('base');
        $data['id'] = $this->uri->segment(2);
		$data['list_perfil'] = $this->MPerfil->obtener();
		$data['franquicias'] = $this->MFranchises->obtener();
		//~ $data['user_franquicias'] = $this->MUser->obtenerUsersFranchises();
        $data['editar'] = $this->MUser->obtenerUsers($data['id']);
        // Lista de ids de franquicias asociadas al usuario
        $ids_franchises = "";
        $query_franchises = $this->MUser->obtenerFranchisesUserId($data['id']);
        if(count($query_franchises) > 0){
			foreach($query_franchises as $franchise){
				$ids_franchises .= $franchise->franchise_id.",";
			}
		}
		$ids_franchises = substr($ids_franchises,0,-1);  // Quitamos la última coma de la cadena
		$data['ids_franchises'] = $ids_franchises;
		$data['permissions'] = $this->MUser->obtener_permisos_id($data['id']);
		$data['acciones'] = $this->MAcciones->obtener_without_home();
		// Lista de ids de acciones asociadas al usuario
        $ids_actions = "";
        $query_actions = $this->MUser->obtener_permisos_id($data['id']);
        if(count($query_actions) > 0){
			foreach($query_actions as $action){
				$ids_actions .= $action->action_id.",";
			}
		}
		$ids_actions = substr($ids_actions,0,-1);
        $data['ids_actions'] = $ids_actions;
        $this->load->view('user/editar', $data);
		$this->load->view('footer');
    }
	
	// Método para actualizar
    public function update() {
		
		$data = array(
			'id' => $this->input->post('id'),
			'username' => $this->input->post('username'),
			'name' => $this->input->post('name'),
			'lastname' => $this->input->post('lastname'),
			'profile_id' => $this->input->post('profile_id'),
			'admin' => $this->input->post('admin'),
			'status' => $this->input->post('status'),
			'd_update' => date('Y-m-d H:i:s'),

		);
		
        $result = $this->MUser->update($data);
        
        echo $result;
        
        if ($result) {
			// Si hay nuevas franquicias asociadas al usuario, los registramos en la tabla 'users_franchises'
			if($this->input->post('franquicias_ids') != ""){
				// Proceso de registro de frasnquicias asociados al usuario
				$ids_franchises = array(); // Aquí almacenaremos los ids de las franquicias a asociar
				// Asociamos las nuevas franquicias seleccionadas del combo select
				foreach($this->input->post('franquicias_ids') as $franchise_id){
					// Primero verificamos si ya está asociada cada franquicia, si no lo está, la insertamos
					$check_associated = $this->MUser->obtenerUserFranchiseId($this->input->post('id'), $franchise_id);
					//~ echo count($check_associated);
					if(count($check_associated) == 0){
						$data_franchise = array('user_id'=>$this->input->post('id'), 'franchise_id'=>$franchise_id);
						$this->MUser->insert_franchise($data_franchise);
					}
					// Vamos colectando los ids recorridos
					$ids_franchises[] = $franchise_id;
				}
				
				// Validamos qué franquicias han sido quitadas del combo select para proceder a borrar las relaciones
				// Primero buscamos todas las franquicias asociadas al usuario
				$query_associated = $this->MUser->obtenerFranchisesUserId($this->input->post('id'));
				if(count($query_associated) > 0){
					// Verificamos cuales de las franquicias no están en la nueva lista
					foreach($query_associated as $association){
						if(!in_array($association->franchise_id, $ids_franchises)){
							// Eliminamos la asociacion de la tabla users_franchises
							$this->MUser->delete_user_franchise($this->input->post('id'), $association->franchise_id);
						}
					}
				}
			}else{
				// Eliminamos las asociaciones de la tabla users_franchises correspondientes al usuario seleccionado
				// Primero buscamos todas las franquicias asociados al usuario
				$query_associated = $this->MUser->obtenerFranchisesUserId($this->input->post('id'));
				if(count($query_associated) > 0){
					// Eliminamos las asociaciones encontradas
					foreach($query_associated as $association){
						$this->MUser->delete_user_franchise($this->input->post('id'), $association->franchise_id);
					}
				}
			}
			
			// Si hay nuevas acciones asociadas al usuario, los registramos en la tabla 'permissions'
			if($this->input->post('actions_ids') != ""){
				// Proceso de registro de acciones asociadas al perfil
				$ids_actions = array(); // Aquí almacenaremos los ids de las acciones a asociar
				// Asociamos las nuevas acciones seleccionadas del combo select
				foreach($this->input->post('actions_ids') as $action_id){
					// Primero verificamos si ya está asociado cada acción, si no lo está, lo insertamos
					$check_associated = $this->MUser->obtener_permiso_ids($data['id'], $action_id);
					//~ echo count($check_associated);
					if(count($check_associated) == 0){
						$data_action = array('user_id'=>$data['id'], 'action_id'=>$action_id, 'parameter_permit'=>'777');
						$this->MUser->insert_action($data_action);
					}
					// Vamos colectando los ids recorridos
					$ids_actions[] = $action_id;
				}
				
				// Validamos qué acciones han sido quitadas del combo select para proceder a borrar las relaciones
				// Primero buscamos todas las acciones asociadas al perfil
				$query_associated = $this->MUser->obtener_permisos_id($data['id']);
				if(count($query_associated) > 0){
					// Verificamos cuales de las acciones no están en la nueva lista
					foreach($query_associated as $association){
						// Primero verificamos los datos correspondientes a la acción para omitir el proceso si es de la clase Home
						$query_action = $this->MAcciones->obtenerAccion($association->action_id);
						if($query_action[0]->class != 'Home'){
							if(!in_array($association->action_id, $ids_actions)){
								// Eliminamos la asociacion de la tabla profile_actions
								$this->MUser->delete_user_action($data['id'], $association->action_id);
							}
						}
					}
				}
				
				// Actualizamos la permisología
				$data_permisos = $this->input->post('data');
				
				foreach ($data_permisos as $campo){
					// Concatenamos los permisos como una cadena
					$parameter = $campo['crear'].$campo['editar'].$campo['eliminar'];
					
					// Nuevos datos de la acción asociada
					$data_ps = array(
						'user_id' => $data['id'],
						'action_id' => $campo['id'],
						'parameter_permit' => $parameter,
					);
					
					// Actualizamos los permisos para la acción asociada
					$result = $this->MUser->update_action($data_ps);
				}
			}else{
				// Eliminamos las asociaciones de la tabla permissions correspondientes al usuario seleccionado
				// Primero buscamos todas las acciones asociados al usuario
				$query_associated = $this->MUser->obtener_permisos_id($this->input->post('id'));
				if(count($query_associated) > 0){
					// Eliminamos las asociaciones encontradas
					foreach($query_associated as $association){
						$this->MUser->delete_user_action($this->input->post('id'), $association->action_id);
					}
				}
			}
        }else{
			return $result;
		}
    }
    
    // Método para actualizar de forma directa el status de un usuario
    public function update_status($id) {
		$accion = $this->input->post('accion');
		$estatus = 1;
		
		if ($accion == 'desactivar'){
			$estatus = 0;
		}
		
		// Armamos la data a actualizar
        $data_usuario = array(
			'id' => $id,
			'status' => $estatus,
			'd_update' => date('Y-m-d H:i:s'),
        );
        
        // Actualizamos el usuario con los datos armados
		$result = $this->MUser->update_status($data_usuario);
	}
    
	// Método para eliminar
	function delete($id) {
        $result = $this->MUser->delete($id);
    }
    
    // Método público para cargar un json con las acciones no asignadas al perfil seleccionado
    public function search_actions()
    {
		$id_profile = $this->input->post('profile_id');  // id del perfil
		
        $result = $this->MUser->search_profile_actions($id_profile);  // Consultamos los ids de las acciones asociadas al perfil
        // Armamos una lista de ids de las acciones asociadas al perfil
        $list_actions_ids = array();
        foreach($result as $relation){
			$list_actions_ids[] = $relation->action_id;
		}
		
		if(count($list_actions_ids) > 0){
			// Si hay acciones asociadas al perfil
			$result2 = $this->MUser->search_actions($list_actions_ids);  // Buscamos las acciones que no están asociadas al perfil
		}else{
			// Si no hay acciones asociadas al perfil
			$result2 = $this->MAcciones->obtener_without_home();  // Buscamos todas las acciones
		}
		
        echo json_encode($result2);
    }
	
	// Método público para cargar un json con las acciones no asignadas al usuario seleccionado
    public function search_actions2()
    {
		$id_usuario = $this->input->post('user_id');  // id del usuario
		
        $result = $this->MUser->search_permissions($id_usuario);  // Consultamos los ids de las acciones asociadas al usuario
        // Armamos una lista de ids de las acciones asociadas al usuario
        $list_actions_ids = array();
        foreach($result as $relation){
			$list_actions_ids[] = $relation->action_id;
		}
		
		if(count($list_actions_ids) > 0){
			// Si hay acciones asociadas al usuario
			$result2 = $this->MUser->search_actions2($list_actions_ids);  // Buscamos las acciones que están asociadas al usuario
		}else{
			// Si no hay acciones asociadas al usuario
			$result2 = $list_actions_ids;
		}
		
        echo json_encode($result2);
    }
}
