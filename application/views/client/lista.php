<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Clientes</h2>
        <ol class="breadcrumb">
            <li>
                <a href="">Inicio</a>
            </li>
            <li class="active">
                <strong>Clientes</strong>
            </li>
        </ol>
       
    </div>

</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo base_url() ?>clients/register">
            <button class="btn btn-outline btn-primary dim" type="button"><i class="fa fa-plus"></i> Agregar</button></a>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Listado de Clientes </h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table id="tab_client" class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Usuario</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($listar as $list) { ?>
                                    <tr style="text-align: center">
                                        <td>
                                            <?php echo $i; ?>
                                        </td>
                                        <td>
                                            <?php echo $list->name; ?>
                                        </td>
                                        <td>
                                            <?php echo $list->lastname; ?>
                                        </td>
                                        <td>
                                            <?php echo $list->username; ?>
                                        </td>
                                      
                                        <td style='text-align: center'>
                                            <a href="<?php echo base_url() ?>clients/edit/<?= $list->id; ?>" title="Editar" style='color: #1ab394'><i class="fa fa-edit fa-2x"></i></a>
                                        </td>
                                        <td style='text-align: center'>
                                            
                                            <a class='borrar' id='<?php echo $list->id; ?>' style='color: #1ab394' title="Eliminar"><i class="fa fa-trash-o fa-2x"></i></a>
                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <script>
$(document).ready(function() {

    $('#tab_client').DataTable({
       "autoWidth": false,
       "searching": true,
       "aLengthMenu": [5, 10, 15],
       "oLanguage": {"sUrl": "<?= assets_url() ?>js/es.txt"},
       buttons: [
           { extend: 'copy'},
           {extend: 'csv'},
           {extend: 'excel', title: 'ExampleFile'},
           {extend: 'pdf', title: 'ExampleFile'},

           {extend: 'print',
            customize: function (win){
                   $(win.document.body).addClass('white-bg');
                   $(win.document.body).css('font-size', '10px');

                   $(win.document.body).find('table')
                           .addClass('compact')
                           .css('font-size', 'inherit');
           }
           }
       ],
      
       "aoColumns": [
           {"sClass": "registro center", "sWidth": "5%"},
           {"sClass": "registro center", "sWidth": "10%"},
           {"sClass": "registro center", "sWidth": "10%"},
           {"sClass": "registro center", "sWidth": "10%"},
           {"sWidth": "3%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false},
           {"sWidth": "3%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false}
       ]
   });
             
        // Validacion para borrar
    $("table#tab_client").on('click', 'a.borrar', function (e) {
        e.preventDefault();
        var id = this.getAttribute('id');
    
        swal({
            title: "Borrar registro",
            text: "¿Está seguro de borrarlo?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Eliminar",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: true
        },
            function(isConfirm){
                if (isConfirm) {
    
                    $.post('<?= base_url() ?>clients/delete/' + id + '', function () {
        
                        swal({ 
                            title: "Eliminar",
                            text: "Registro eliminado con exito",
                            type: "success" 
                        },
                        function(){
                            window.location.href = '<?= base_url() ?>clients';
                        });
                    });
               } 
            });
            
    });
	
});
 
 </script>

