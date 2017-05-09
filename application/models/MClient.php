<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class MClient extends CI_Model {


    public function __construct() {
       
        parent::__construct();
        $this->load->database();
    }

    //Metodo publico para obterner los perfiles
    public function obtener() {
        $query = $this->db->get('customers');

        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }

    // Metodo publico, forma de insertar los datos
    public function insert($datos) {
        $result = $this->db->where('username =', $datos['username']);
        $result = $this->db->get('customers');
        if ($result->num_rows() > 0) {
            echo '1';
        } else {
            $result = $this->db->insert("customers", $datos);
            //return $result;
            $id = $this->db->insert_id();
            return $id;
        }
    }

     // Metodo publico, forma de insertar los datos
    public function insertCars($datos) {
        $result = $this->db->where('license_plate =', $datos['license_plate']);
        $result = $this->db->get('vehicles');
        if ($result->num_rows() > 0) {
            echo '1';
        } else {
            $result = $this->db->insert("vehicles", $datos);
            return $result;
        }
    }
     // Metodo publico, forma de insertar los datos
    public function insertAddress($datos) {
        $result = $this->db->where('address_1 =', $datos['address_1']);
        $result = $this->db->get('addresses');
        if ($result->num_rows() > 0) {
            echo '1';
        } else {
            $result = $this->db->insert("addresses", $datos);
            return $result;
        }
    }

    // Metodo publico, para obterner la unidad de medida por id
    public function obtenerUsers($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('customers');
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }

    // Metodo publico, para actualizar un registro 
    public function update($datos) {
        $result = $this->db->where('username =', $datos['username']);
        $result = $this->db->where('id !=', $datos['id']);
        $result = $this->db->get('customers');

        if ($result->num_rows() > 0) {
            echo '1';
        } else {
            $result = $this->db->where('id', $datos['id']);
            $result = $this->db->update('users', $datos);
            return $result;
        }
    }


    // Metodo publico, para eliminar un registro 
     public function delete($id) {
        
        $result = $this->db->delete('customers', array('id' => $id));
        $result = $this->db->delete('addresses', array('customers_id' => $id));
        $result = $this->db->delete('vehicles', array('customers_id' => $id));
        return $result;
    }
    

}
?>