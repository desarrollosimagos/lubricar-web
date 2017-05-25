<div class="modal inmodal fade" id="modal_cliente" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close cerrar_modal" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h5 class="modal-title"><span id="titulo"></span> Cliente</h5>
            </div>
            <div class="modal-body" >
                <form id="form_client" action="" method="post" class="form">
                    <div class="form-group">
                        <label >Usuario *</label>
                        <input id="username" name="username" class="form-control" type="text" maxlength="100">
                        <label>Contraseña *</label>
                        <input id="password" name="password" class="form-control" type="password" maxlength="20" >
                        <label>Repetir Contraseña *</label>
                        <input id="confirm" name="confirm" class="form-control" type="password" maxlength="20" >
                        <label >Nombre *</label>
                        <input id="name" name="name" class="form-control" type="text" maxlength="150">
                        <label>Apellido *</label>
                        <input id="lastname" name="lastname" class="form-control" type="text" maxlength="20">
                        <label>Telefono 1 *</label>
                        <input id="phone" name="phone" class="form-control" type="text" maxlength="20">
                        <label>Teléfono 2</label>
                        <input id="cell_phone" name="cell_phone" class="form-control" type="text" maxlength="20">
                        <input id="status" name="status" class="form-control" type="hidden" value="activo" maxlength="20">
                    </div>
                </form>
            </div>
            <div class="modal-footer" >
                <button class="btn btn-primary" type="button" id="add_client">
                    Registrar
                </button>
            </div>
        </div>
    </div>
</div>


<div class="modal inmodal fade" id="modal_direccion" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close cerrar_modal" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h5 class="modal-title"><span id="titulo"></span> Dirección</h5>
            </div>
            <div class="modal-body" >
                <form id="form_address" action="" method="post" class="form">
                    <div class="form-group">
                        <label >Descripción</label>
                        <input id="description" name="description" class="form-control" type="text" maxlength="100">
                        <label >Ciudad</label>
                        <input id="city" name="city" class="form-control" type="text" maxlength="100">
                        <label>Código Postal </label>
                        <input id="zip" name="zip" class="form-control" type="text" maxlength="20" >
                        <label>Dirección 1 *</label>
                        <input id="address_1" name="address_1" class="form-control" type="text" maxlength="150" >
                        <label >Dirección 2</label>
                        <input id="address_2" name="address_2" class="form-control" type="text" maxlength="150">
                        <label>Teléfono 1 *</label>
                        <input id="phone_1" name="phone_1" class="form-control" type="text" maxlength="20">
                        <label>Teléfono 2 *</label>
                        <input id="cell_phone_1" name="cell_phone_1" class="form-control" type="text" maxlength="20">
                        <input id="customer_id" name="customer_id" class="form-control" type="hidden" maxlength="50">

                    </div>
                </form>
            </div>
            <div class="modal-footer" >
                <button class="btn btn-primary" type="button" id="add_direccion">
                    Registrar
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal inmodal fade" id="modal_vehiculo" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close cerrar_modal" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title"><span id="titulo"></span> Vehiculo</h4>
            </div>
            <div class="modal-body">
                <form id="form_vehi" action="" method="post" class="form">
                    <div class="form-group">
                        <label >Marca</label>
                        <input id="trademark" name="trademark" class="form-control" type="text" maxlength="50">
                        <label>Modelo </label>
                        <input id="model" name="model" class="form-control" type="text" maxlength="50">
                        <label >Color *</label>
                        <input id="color" name="color" class="form-control" type="text" maxlength="50">
                        <label >Año</label>
                        <input type="text" class="form-control"  id="year" name="year" maxlength="4">
                        <label >Placa</label>
                        <input id="license_plate" name="license_plate" class="form-control" type="text" maxlength="50">
                        <input id="customer_id2" name="customer_id2" class="form-control" type="hidden" maxlength="50">

                    </div>
                </form>
            </div>
            <div class="modal-footer" >
                <button class="btn btn-primary" type="button" id="add_car">
                    Registrar
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal fade" id="modal_servicio" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close cerrar_modal" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h5 class="modal-title"><span id="titulo"></span> Servicios</h5>
            </div>
            <div class="modal-body" >
                <form id="servicio" action="" method="post" class="form">
                    <div class="form-group">
                        <label >Servicio</label>
                        <input id="service_id" name="service_id" autocomplete="off" class="typeahead_3 form-control" type="text" maxlength="50" >
                        <div class="col-sm-12"></div>
                        <label >Precio unitario</label>
                        <input id="price" name="price" class="form-control" type="text" maxlength="20">
                        <label>Impuesto</label>
                        <input id="impuesto" name="impuesto" class="form-control" type="text" maxlength="20" >
                        <input id="id_service"  class="form-control" type="hidden" >
                        <input id="accion"  class="form-control" type="hidden" >
                        <input id="posicion"  class="form-control" type="hidden" >
                    </div>
                </form>
            </div>
            <div class="modal-footer" >
                <button class="btn btn-primary" type="button" id="agregar">
                    Aceptar
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal inmodal fade" id="modal_producto" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close cerrar_modal" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h5 class="modal-title"><span id="titulo"></span> Producto</h5>
            </div>
            <div class="modal-body" >
                <form id="servicio" action="" method="post" class="form">
                    <div class="form-group">
                        <label >Producto</label>
                        <input id="product_id" autocomplete="off" name="product_id" class="typeahead_4 form-control" type="text" maxlength="100">
                        <label >Precio unitario</label>
                        <input id="price1" name="price1" class="form-control" type="text" maxlength="20">
                        <label >Cantidad</label>
                        <input id="quantity1" name="quantity1" class="form-control" type="text" maxlength="10">
                        <label>Impuesto</label>
                        <input id="impuesto1" name="impuesto1" class="form-control" type="text" maxlength="20" >
                        <input id="accion1"  class="form-control" type="hidden" >
                        <input id="posicion1"  class="form-control" type="hidden" >
                        <input id="id_product"  class="form-control" type="hidden" >
                    </div>
                </form>
            </div>
            <div class="modal-footer" >
                <button class="btn btn-primary" type="button" id="agregar2">
                    Aceptar
                </button>
            </div>
        </div>
    </div>
</div>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Orden de Servicio </h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url() ?>home">Inicio</a>
            </li>
            <li>
                <a href="<?php echo base_url() ?>order">Orden de Servicio</a>
            </li>
            <li class="active">
                <strong>Registrar Orden de Servicio</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Orden # <?php printf("%08d", $listar) ?></h5>
                </div>
                <div class="ibox-content">
                    <form id="form_order" method="post" accept-charset="utf-8" class="form-horizontal">
                        <div class="col-lg-12">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Cliente * </label>
                                    <div class="input-group mar-btm">
                                        <span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
                                        <input type="hidden"  style="width: 30%;"  readonly="true" name="codcliente" id="codcliente" class="form-control">
                                        <input type="text" id="typeahead_2" autocomplete="off" placeholder="Buscar Cliente..." class="typeahead_2 form-control" />
                                        <span style="cursor: pointer" class="add_cliente input-group-addon"><span class="fa fa-plus" style="color: green"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4" style="margin-left: 2%">
                                <div class="form-group">
                                    <label>Franquicia *</label>

                                    <select style="width: 100%" class="span12" name="franchise_id" id="franchise_id" class="form-control">
                                        <option selected="" value="0">Seleccione</option>  
                                        <?php
                                        // Imprimiendo los menús
                                        $franquicias = $this->session->userdata('logged_in')['franquicias'];
                                        foreach ($franquicias as $franquicias) {
                                            foreach ($franquicias as $franquicia) {
                                                ?>
                                                <option value="<?php echo $franquicia->id ?>"><?php echo $franquicia->name ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-3" style="margin-left: 2%">
                                <div class="form-group">
                                    <label>Fecha de emisión *</label>
                                    <div class="input-group mar-btm">
                                        <span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
                                        <input type="text" data-original-title="Fecha Emision" value="<?php echo date('d-m-Y'); ?>" data-toggle="tooltip" data-placement="bottom" readonly="true" name="fecha_emision" id="fecha_emision" placeholder="Fecha Emisión" class="form-control add-tooltip">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Vehiculo *</label>
                                    <div class="input-group mar-btm">
                                        <span class="input-group-addon"><i class="fa fa-car fa-lg"></i></span>
                                        <select style="width: 100%" class="span12" name="vehiculo" id="vehiculo" class="form-control">
                                            <option selected="" value="0">Seleccione</option>  
                                        </select>
                                        <span style="cursor: pointer" class="add_vehiculo input-group-addon"><span class="fa fa-plus" style="color: green"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4" style="margin-left: 2%">
                                <div class="form-group">
                                    <label>Dirección *</label>
                                    <div class="input-group mar-btm">
                                        <span class="input-group-addon"><i class="fa fa-building fa-lg"></i></span>
                                        <select style="width: 100%" class="span12" name="address" id="address" class="form-control">
                                            <option selected="" value="0">Seleccione</option>  
                                        </select>
                                        <span style="cursor: pointer" class="add_direccion input-group-addon"><span class="fa fa-plus" style="color: green"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3" style="margin-left: 2%">
                                <div class="form-group">
                                    <label>Estatus *</label>
                                    <select style="width: 100%" class="span12" name="status" id="status"   class="form-control">
                                        <?php foreach ($status as $status) { ?>
                                            <option value="<?php echo $status->id ?>"><?php echo $status->name ?></option>
                                        <?php } ?>
                                       
                                   </select>
                                </div>
                            </div>

                            <div class="tabs-container" style="margin-top: 10%">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-1"> Servicios</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-2">Productos</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane active">
                                        <div class="panel-body">
                                            <button  class="btn btn-w-m btn-primary" id="i_new_line"><i class="fa fa-plus"></i>&nbsp;Agregar Servicio</button>
                                            <div class="table-responsive">
                                                <table style="width: 100%" class="tab_servicio table dataTable table-striped table-bordered dt-responsive jambo_table bulk_action" id="tab_servicio">
                                                    <thead>
                                                        <tr>
                                                            <th>Servicio</th>
                                                            <th>Precio</th>
                                                            <th>Impuesto</th>
                                                            <th>Importe</th>
                                                            <th>Editar</th>
                                                            <th>Eliminar</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-2" class="tab-pane">
                                        <div class="panel-body">
                                            <button  class="btn btn-w-m btn-primary" id="i_new_line2"><i class="fa fa-plus"></i>&nbsp;Agregar Producto</button>
                                            <div class="table-responsive">
                                                <table style="width: 100%" class="tab_producto table dataTable table-striped table-bordered dt-responsive jambo_table bulk_action" id="tab_producto">
                                                    <thead>
                                                        <tr>
                                                            <th>Producto</th>
                                                            <th>Precio</th>
                                                            <th>Cantidad</th>
                                                            <th>Impuesto</th>
                                                            <th>Importe</th>
                                                            <th>Editar</th>
                                                            <th>Eliminar</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4"></div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-6">
                            <div class="ibox float-e-margins" style="margin-top: 5%">
                                <div class="ibox-title">
                                    <h5>Total Orden de Servicio</h5>
                                </div>
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <li class="list-group-item ">
                                                <span class="pull-right">
                                                    <h4><span id="span_sub_total">0</span></h4>
                                                </span>
                                                SubTotal
                                            </li>
                                            <li class="list-group-item ">
                                                <span class="pull-right">
                                                    <h4><span id="span_iva">0</span></h4>
                                                </span>
                                                Impuesto
                                            </li>
                                            <li class="list-group-item ">
                                                <span class="pull-right">
                                                    <h4><span id="span_total">0</span></h4>
                                                </span>
                                                Total
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" >
                            <div class="col-sm-4 col-sm-offset-2">
                                <input type="hidden" id="sub_total" name="sub_total" value="0">
                                <input type="hidden" id="iva_total" name="iva_total"  value="0">
                                <input type="hidden" id="total" name="total"  value="0">
                                <button class="btn btn-white" id="volver" type="button">Volver</button>
                                <button class="btn btn-primary" id="registrar" type="submit">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {

        $('input').on({
            keypress: function () {
                $(this).parent('div').removeClass('has-error');
            }
        });



        $('#year').datepicker({

            format: " yyyy",
            viewMode: "years",
            minViewMode: "years"
        });

        $("#phone,#cell_phone,#zip, #phone_1,#cell_phone_1,#price,#impuesto,#price1,#impuesto1,#quantity1").numeric(); //Valida solo permite valores numericos

        $('#tab_servicio').DataTable({
            "bLengthChange": false,
            "iDisplayLength": 10,
            "iDisplayStart": 0,
            destroy: true,
            paging: false,
            searching: false,
            "order": [[0, "asc"]],
            "pagingType": "full_numbers",
            "language": {"url": "<?= assets_url() ?>js/es.txt"},
            "aoColumns": [
                {"sWidth": "10%"},
                {"sWidth": "8%"},
                {"sWidth": "8%"},
                {"sWidth": "8%"},
                {"sWidth": "4%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false},
                {"sWidth": "4%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false}
            ]
        });

        $('#tab_producto').DataTable({
            "bLengthChange": false,
            "iDisplayLength": 10,
            "iDisplayStart": 0,
            destroy: true,
            paging: false,
            searching: false,
            "order": [[0, "asc"]],
            "pagingType": "full_numbers",
            "language": {"url": "<?= assets_url() ?>js/es.txt"},
            "aoColumns": [
                {"sWidth": "10%"},
                {"sWidth": "8%"},
                {"sWidth": "8%"},
                {"sWidth": "8%"},
                {"sWidth": "8%"},
                {"sWidth": "4%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false},
                {"sWidth": "4%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false}
            ]
        });




        //abrir modal
        $(".add_cliente").click(function (e) {
            e.preventDefault();  // Para evitar que se envíe por defecto
            $("#modal_cliente").modal('show');
            $("span#titulo").text('Registrar');
            $("#accion").val('Registrar');
        });

        //registar cliente nuevo
        $("#add_client").click(function (e) {
            e.preventDefault();  // Para evitar que se envíe por defecto
            $.post('<?php echo base_url(); ?>CClient/add2', $('#form_client').serialize(), function (response) {

                if (response[0] == '1') {
                    swal("Disculpe,", "este nombre se encuentra registrado");
                } else {
                    swal({
                        title: "Registro",
                        text: "Guardado con exito",
                        type: "success"
                    },
                            function () {
                                $("#modal_cliente").modal('hide');
                                window.location.href = '<?php echo base_url(); ?>order/register';
                            });
                }
            });
        });
        //abrir modal direccion
        $(".add_direccion").click(function (e) {
            e.preventDefault();  // Para evitar que se envíe por defecto

            if ($("#typeahead_2").val() === '') {
                swal("Disculpe,", "debe seleccionar un cliente para registrar una dirección", 'warning');
                $('#typeahead_2').parent('div').addClass('has-error');
            } else {
                $("#customer_id").val($("#codcliente").val());
                $("#modal_direccion").modal('show');
                $("span#titulo").text('Registrar');

            }
        });

        //agregar direccion nueva
        $("#add_direccion").click(function (e) {
            e.preventDefault();  // Para evitar que se envíe por defecto
            $.post('<?php echo base_url(); ?>CClient/addAddress', $('#form_address').serialize(), function (response) {

                swal({
                    title: "Registro",
                    text: "Guardado con exito",
                    type: "success"
                },
                        function () {
                            $("#modal_direccion").modal('hide');
                            $('#codcliente').val();
                            var cliente_id = $('#codcliente').val();
                            $('#address').find('option:gt(0)').remove().end().select2('val', '0');
                            $.get('<?php echo base_url(); ?>CClient/ajax_address/' + cliente_id + '', function (data) {
                                var option = "";
                                $.each(data, function (i) {
                                    option += "<option value=" + data[i]['id'] + ">" + data[i]['city'] + ' - ' + data[i]['address_1'] + "</option>";

                                });

                                $('#address').append(option);

                            }, 'json');
                        });

            });
        });


        //agregar carro nuevo
        $("#add_car").click(function (e) {
            e.preventDefault();  // Para evitar que se envíe por defecto
            $.post('<?php echo base_url(); ?>CClient/addCar', $('#form_vehi').serialize(), function (response) {
                if (response[0] == 'e') {

                    swal("Disculpe,", "este vehiculo se encuentra registrado");

                } else {
                    swal({
                        title: "Registro",
                        text: "Guardado con exito",
                        type: "success"
                    },
                            function () {
                                $("#modal_vehiculo").modal('hide');
                                $('#codcliente').val();
                                var cliente_id = $('#codcliente').val();
                                $('#vehiculo').find('option:gt(0)').remove().end().select2('val', '0');
                                $.get('<?php echo base_url(); ?>CClient/ajax_car/' + cliente_id + '', function (data) {
                                    var option = "";
                                    $.each(data, function (i) {
                                        option += "<option value=" + data[i]['id'] + ">" + data[i]['license_plate'] + ' - ' + data[i]['trademark'] + "</option>";
                                    });

                                    $('#vehiculo').append(option);



                                }, 'json');
                            });
                }
            });
        });
        //abrir modal vehiculo
        $(".add_vehiculo").click(function (e) {
            e.preventDefault();  // Para evitar que se envíe por defecto

            if ($("#typeahead_2").val() === '') {
                swal("Disculpe,", "debe seleccionar un cliente para registrar un vehiculo", 'warning');
                $('#typeahead_2').parent('div').addClass('has-error');
            } else {
                $("#customer_id2").val($("#codcliente").val());
                $("#modal_vehiculo").modal('show');
                $("span#titulo").text('Registrar');
            }

        });


        $("#i_new_line").click(function (e) {

            e.preventDefault();  // Para evitar que se envíe por defecto
            if ($("#typeahead_2").val() === '') {
                swal("Disculpe,", "debe seleccionar un cliente para continuar", 'warning');
                $('#typeahead_2').parent('div').addClass('has-error');
            } else {
                $("#modal_servicio").modal('show');
                $("span#titulo").text('Agregar');
                $("#accion").val('Registrar');


                $.get('<?php echo base_url(); ?>CServices/ajax_service', function (data) {

                    $(".typeahead_3").typeahead({
                        source: data,
                        autoSelect: true,
                        updater: function (item) {
                            return item;
                        },
                        afterSelect: function (item) {
                            $('#price').val(item.price);
                            $('#id_service').val(item.id);
                            //var cliente_id = $('#codcliente').val();

                        }
                    });

                }, 'json');
            }
        });


        $("#agregar").click(function () {

            var table = $('#tab_servicio').DataTable();
            var accion = $("#accion").val();
            var servicio0;
            var posi = $("#posicion").val();
            var id_service = $("#id_service").val();
            var service = $("#service_id").val();
            var price = $("#price").val();
            var impuesto = $("#impuesto").val();
            var botonEdit = "<a style='color: #1ab394' class='editar'><i class='fa fa-edit fa-2x'></i></a>";
            var botonQuitar = "<a style='color: #1ab394' class='quitar'><i class='fa fa-trash fa-2x'></i></a>";

            $("#tab_servicio tbody tr").each(function () {

                servicio0 = $(this).attr('id');  // Código correlativo del registro en la tabla 

            });

            
            if (accion === 'Registrar') {
                
                //validar que no existan otro servicio igual en la tabla
                if (id_service === servicio0) {
                    swal("Disculpe,", "el servicio se encuentra añadido", 'warning');
                    $("#modal_servicio").modal('hide');
                    $("#service_id").val('');
                    $("#price").val('');
                    $("#impuesto").val('');
                    $('#posicion').val('');
                    $('#accion').val('');
                    
                } else {

                    if (service !== '' & price !== '' & impuesto !== '') {

                        var i = table.row.add([service, price, impuesto, price, botonEdit, botonQuitar]).draw();
                        table.rows(i).nodes().to$().attr("id", id_service);

                        // Ejecución de los cálculos de la factura
                        calculos(subtotal(), iva_total());  // Cálculo del subtotal, IVA y Total

                        $("#modal_servicio").modal('hide');
                        $("#service_id").val('');
                        $("#price").val('');
                        $("#impuesto").val('');
                        $('#posicion').val('');
                        $('#accion').val('');

                    } else {
                        swal({
                            title: "Disculpe,",
                            text: "No se admite campos vacios",
                            type: "warning"
                        },
                                function () {
                                    //window.location.href = '<?php echo base_url(); ?>clients';
                                });
                    }
                }
            } else if (accion === 'Editar') {


                if (service !== '' & price !== '' & impuesto !== '') {


                    var j = table.row(posi).data([service, price, impuesto, price, botonEdit, botonQuitar]).draw();
                    table.rows(j).nodes().to$().attr("id", id_service);
                    
                      // Ejecución de los cálculos de la factura
                    calculos(subtotal(), iva_total());  // Cálculo del subtotal, IVA y Total
                    
                    $("#modal_servicio").modal('hide');
                    $("#service_id").val('');
                    $("#price").val('');
                    $("#impuesto").val('');
                    $('#posicion').val('');
                    $('#accion').val('');

                } else {
                    swal({
                        title: "Disculpe,",
                        text: "No se admite campos vacios",
                        type: "warning"
                    },
                    function () {
                        //window.location.href = '<?php echo base_url(); ?>clients';
                    });
                }
            }

        });


        $("table#tab_servicio").on('click', 'a.editar', function () {

            posicion = $(this).closest('tr').index();

            $("#modal_servicio").modal('show');
            $('#posicion').val(posicion);
            $('#accion').val('Editar');
            $("span#titulo").text('Editar');

            $(this).closest('tr').each(function () {
                var servicio0, servicio1, servicio2, servicio3;
                servicio0 = $(this).attr('id');  // Código correlativo del registro en la tabla 
                servicio1 = $(this).find('td').eq(0).text();
                servicio2 = $(this).find('td').eq(1).text();
                servicio3 = $(this).find('td').eq(2).text();
                servicio4 = $(this).find('td').eq(3).text();

                servicios = servicio0 + ';' + servicio1 + ';' + servicio2 + ';' + servicio3 + ';' + servicio4 + ';';

                $("#service_id").val(servicio1);
                $("#price").val(servicio2);
                $("#impuesto").val(servicio3);


            });

        });

        $("#i_new_line2").click(function (e) {
            e.preventDefault();  // Para evitar que se envíe por defecto
            if ($("#typeahead_2").val() === '') {
                swal("Disculpe,", "debe seleccionar un cliente para continuar", 'warning');
                $('#typeahead_2').parent('div').addClass('has-error');
            } else {
                $("#modal_producto").modal('show');
                $("#product_id").val('');
                $("#quantity1").val('');
                $("#price1").val('');
                $('#impuesto1').val('');
                $("span#titulo").text('Agregar');
                $("#accion1").val('Registrar');


                $.get('<?php echo base_url(); ?>CProduct/ajax_product', function (data) {

                    $(".typeahead_4").typeahead({
                        source: data,
                        autoSelect: true,
                        updater: function (item) {
                            return item;
                        },
                        afterSelect: function (item) {
                            $('#price').val(item.price);
                            $('#id_product').val(item.id);
                            //var cliente_id = $('#codcliente').val();

                        }
                    });

                }, 'json');
            }
        });

        $("#agregar2").click(function () {

            var producto0;
            var table = $('#tab_producto').DataTable();
            var accion = $("#accion1").val();
            var posi = $("#posicion1").val();
            var id_producto = $("#id_product").val();
            var producto = $("#product_id").val();
            var cantidad = $("#quantity1").val();
            var precio = $("#price1").val();
            var impuesto = $("#impuesto1").val();
            var importe = parseFloat(cantidad) * parseFloat(precio);
            var botonEdit = "<a style='color: #1ab394' class='editar'><i class='fa fa-edit fa-2x'></i></a>";
            var botonQuitar = "<a style='color: #1ab394' class='quitar'><i class='fa fa-trash fa-2x'></i></a>";

            $("#tab_producto tbody tr").each(function () {

                producto0 = $(this).attr('id');  // Código correlativo del registro en la tabla 


            });
            

            if (accion === 'Registrar') {

                if (id_producto === producto0) {

                    swal("Disculpe,", "el producto se encuentra añadido", 'warning');
                    $("#modal_producto").modal('hide');
                    $("#product_id").val('');
                    $("#quantity1").val('');
                    $("#price1").val('');
                    $('#impuesto1').val('');
                    $('#posicion1').val('');
                    $('#accion1').val('');

                } else {

                    if (producto !== '' & cantidad !== '' & precio !== '' & impuesto !== '') {

                        var i = table.row.add([producto, precio, cantidad, impuesto, importe, botonEdit, botonQuitar]).draw();
                        table.rows(i).nodes().to$().attr("id", id_producto);

                        // Ejecución de los cálculos de la factura
                        calculos(subtotal(), iva_total());  // Cálculo del subtotal, IVA y Total

                        $("#modal_producto").modal('hide');
                        $("#product_id").val('');
                        $("#quantity1").val('');
                        $("#price1").val('');
                        $('#impuesto1').val('');
                        $('#posicion1').val('');
                        $('#accion1').val('');

                    } else {
                        swal({
                            title: "Disculpe,",
                            text: "No se admite campos vacios",
                            type: "warning"
                        },
                        function () {
                            //window.location.href = '<?php echo base_url(); ?>clients';
                        });

                    }

                }

            } else if (accion === 'Editar') {

                if (producto !== '' & cantidad !== '' & precio !== '' & impuesto !== '') {

                    var j = table.row(posi).data([producto, precio, cantidad, impuesto, importe, botonEdit, botonQuitar]).draw();
                    table.rows(j).nodes().to$().attr("id", id_producto);
                    
                    // Ejecución de los cálculos de la factura
                    calculos(subtotal(), iva_total());  // Cálculo del subtotal, IVA y Total
                    
                    $("#modal_producto").modal('hide');
                    $("#product_id").val('');
                    $("#quantity1").val('');
                    $("#price1").val('');
                    $('#impuesto1').val('');
                    $('#posicion1').val('');
                    $('#accion1').val('');

                } else {
                    swal({
                        title: "Disculpe,",
                        text: "No se admite campos vacios",
                        type: "warning"
                    },
                    function () {
                        //window.location.href = '<?php echo base_url(); ?>clients';
                    });
                }
            }


        });


        $("table#tab_servicio").on('click', 'a.quitar', function () {


            var aPos = $("table#tab_servicio").dataTable().fnGetPosition(this.parentNode.parentNode);
            $("table#tab_servicio").dataTable().fnDeleteRow(aPos);

            // Ejecución de los cálculos de la factura
            calculos(subtotal(), iva_total());  // Cálculo subtotal, IVA y Total


        });

        $("table#tab_producto").on('click', 'a.quitar', function () {

            var aPos = $("table#tab_producto").dataTable().fnGetPosition(this.parentNode.parentNode);
            $("table#tab_producto").dataTable().fnDeleteRow(aPos);

            // Ejecución de los cálculos de la factura
            calculos(subtotal(), iva_total());  // Cálculo del subtotal, IVA y Total


        });

        $('#volver').click(function () {
            url = '<?php echo base_url() ?>order/';
            window.location = url;
        });



        $.get('<?php echo base_url(); ?>clients/ajax_client', function (data) {

            $(".typeahead_2").typeahead({
                source: data,
                autoSelect: true,
                updater: function (item) {
                    return item;
                },
                afterSelect: function (item) {
                    $('#codcliente').val(item.id);
                    var cliente_id = $('#codcliente').val();
                    $('#vehiculo').find('option:gt(0)').remove().end().select2('val', '0');
                    $.get('<?php echo base_url(); ?>CClient/ajax_car/' + cliente_id + '', function (data) {
                        var option = "";
                        $.each(data, function (i) {
                            option += "<option value=" + data[i]['id'] + ">" + data[i]['license_plate'] + ' - ' + data[i]['trademark'] + "</option>";

                        });

                        $('#vehiculo').append(option);



                    }, 'json');

                    $('#address').find('option:gt(0)').remove().end().select2('val', '0');
                    $.get('<?php echo base_url(); ?>CClient/ajax_address/' + cliente_id + '', function (data) {
                        var option = "";
                        $.each(data, function (i) {
                            option += "<option value=" + data[i]['id'] + ">" + data[i]['city'] + ' - ' + data[i]['address_1'] + "</option>";

                        });

                        $('#address').append(option);



                    }, 'json');
                }
            });



        }, 'json');


        $("table#tab_producto").on('click', 'a.editar', function () {

            posicion = $(this).closest('tr').index();

            $("#modal_producto").modal('show');
            $('#posicion1').val(posicion);
            $('#accion1').val('Editar');
            $("span#titulo").text('Editar');

            $(this).closest('tr').each(function () {
                var producto0, producto1, producto2, producto3;
                producto0 = $(this).attr('id');  // Código correlativo del registro en la tabla 
                producto1 = $(this).find('td').eq(0).text();
                producto2 = $(this).find('td').eq(1).text();
                producto3 = $(this).find('td').eq(2).text();
                producto4 = $(this).find('td').eq(3).text();
                producto5 = $(this).find('td').eq(4).text();


                productos = producto0 + ';' + producto1 + ';' + producto2 + ';' + producto3 + ';' + producto4 + ';' + ';' + producto5 + ';';

                $("#product_id").val(producto1);
                $("#price1").val(producto2);
                $("#quantity1").val(producto3);
                $('#impuesto1').val(producto4);



            });

        });



        $("#registrar").click(function (e) {


            e.preventDefault();  // Para evitar que se envíe por defecto
            var datos;

            // recorriendo la tabla servicio para verificar que tenga datos
            $("#tab_servicio tbody tr").each(function () {

                datos = $(this).find('td').eq(0).text();

            });

            if (datos == 'Ningún dato disponible en esta tabla') {
                swal("Disculpe,", "debe añadir al menos un servicio");


            } else {

                if ($('#franchise_id').val() == '0') {

                    swal("Disculpe,", "para continuar debe seleccionar la franquicia");
                    $('#franchise_id').parent('div').addClass('has-error');

                } else if ($('#vehiculo').val() == '0') {

                    swal("Disculpe,", "para continuar debe seleccionar el vehiculo");
                    $('#vehiculo').parent('div').addClass('has-error');

                } else if ($('#address').val() == '0') {

                    swal("Disculpe,", "para continuar debe seleccionar la dirección");
                    $('#address').parent('div').addClass('has-error');

                } else {
                    var accion = 'add';
                    var data_send;
                    var servicio = "";
                    var producto = "";
                    data_send = new FormData($("#form_order")[0]);

                    $("#tab_servicio tbody tr").each(function () {
                        var servicio0, servicio1, servicio2, servicio3, servicio4;
                        servicio0 = $(this).attr('id');  // Código correlativo del registro en la tabla 
                        servicio1 = $(this).find('td').eq(0).text();
                        servicio2 = $(this).find('td').eq(1).text();
                        servicio3 = $(this).find('td').eq(2).text();
                        servicio4 = $(this).find('td').eq(3).text();


                        servicio = servicio0 + ';' + servicio1 + ';' + servicio2 + ';' + servicio3 + ';' + servicio4 + ';';
                        servicio = servicio.substring(0, servicio.length - 1);
                        data_send.append("servicio[]", servicio);

                    });

                    $("#tab_producto tbody tr").each(function () {
                        var producto0, producto1, producto2, producto3, producto4, producto5;
                        producto0 = $(this).attr('id');  // Código correlativo del registro en la tabla 
                        producto1 = $(this).find('td').eq(0).text();
                        producto2 = $(this).find('td').eq(1).text();
                        producto3 = $(this).find('td').eq(2).text();
                        producto4 = $(this).find('td').eq(3).text();
                        producto5 = $(this).find('td').eq(4).text();

                        producto = producto0 + ';' + producto1 + ';' + producto2 + ';' + producto3 + ';' + producto4 + ';' + producto5 + ';';
                        producto = producto.substring(0, producto.length - 1);
                        data_send.append("producto[]", producto);

                    });

                    var $url = '<?= base_url() ?>COrder/' + accion;
                    $.ajax({
                        url: $url,
                        type: 'POST',
                        cache: false,
                        data: data_send,
                        processData: false,
                        contentType: false,
                        dataType: "html"
                    }).done(function (data) {
                        if (data === '') {
                            swal({
                                title: "Registro",
                                text: "Guardado con exito",
                                type: "success"
                            },
                                    function () {
                                       window.location.href = '<?php echo base_url(); ?>order';
                                    });
                        }
                    });


                }
            }

        });
    });

    // Cálculo del subtotal
    function subtotal() {

        var importe1 = 0;
        var importe2 = 0;
        var sub_iva = 0;
        var sub_total = 0;

        $("#tab_servicio tbody tr").each(function (index) {

            $(this).children("td").each(function (index2)
            {
                switch (index2)
                {
                    // Leer el campo de importe
                    case 3:
                        importe1 = parseFloat($(this).text());
                        break;
                }
            })

            sub_total += importe1;
        })

        $("#tab_producto tbody tr").each(function (index) {

            $(this).children("td").each(function (index2)
            {
                switch (index2)
                {
                    // Leer el campo de importe
                    case 3:
                        importe2 = parseFloat($(this).text());
                        break;
                }
            })

            sub_total += importe2;
        })

        //~ alert(sub_total);

        return sub_total;
    }

    // Cálculo del iva total
    function iva_total() {

        var total_iva = 0;
        var sub_iva1 = 0;
        var sub_iva2 = 0;
        var cantidad = 0;
        var precio = 0;

        $("#tab_servicio tbody tr").each(function (index) {

            $(this).children("td").each(function (index2)
            {
                //~ base_imponible = base_imponible + parseFloat($(this).text());
                switch (index2)
                {
                    // Leer el campo de iva
                    case 1:
                        precio = parseFloat($(this).text());
                        break;
                        // Leer el campo de importe
                    case 2:
                        sub_iva1 = parseFloat($(this).text());
                        break;
                }
            })

            sub_iva1 = precio * sub_iva1 / 100;

            total_iva = total_iva + sub_iva1;
        })

        $("#tab_producto tbody tr").each(function (index) {

            $(this).children("td").each(function (index2)
            {
                //~ base_imponible = base_imponible + parseFloat($(this).text());
                switch (index2)
                {
                    // Leer el campo de iva
                    case 1:
                        precio = parseFloat($(this).text());
                        break;
                        // Leer el campo de importe
                    case 2:
                        cantidad = parseFloat($(this).text());
                        break;
                        // Leer el campo de importe
                    case 3:
                        sub_iva2 = parseFloat($(this).text());
                        break;
                }
            })

            sub_iva2 = precio * sub_iva2 / 100;

            total_iva = total_iva + (sub_iva2 * cantidad);
        })

        //~ alert(total_iva);

        return total_iva;
    }

    // Función para la realización de los cálculos del subtotal, IVA y Total
    function calculos(subtotal, iva_total) {
        var st = subtotal;
        var iva = iva_total;

        // Cáculo del sub_total
        if (st == '') {
            st = 0;
        }

        $("#sub_total").val(st);  // Cargamos la base imponible en el campo oculto para guardarlo en base de datos
        $("#span_sub_total").text(st.toFixed(2));  // Cargamos la base imponible en la página sólo para visualización

        // Cálculo del IVA
        $("#iva_total").val(iva);
        $("#span_iva").text(iva.toFixed(2));

        // Cálculo del Total
        $("#total").val((parseFloat($("#sub_total").val()) + parseFloat($("#iva_total").val())).toFixed(2));  // Cargamos el total en el campo oculto para guardarlo en base de datos
        $("#span_total").text((parseFloat($("#sub_total").val()) + parseFloat($("#iva_total").val())).toFixed(2));  //Cargamos el total en la página sólo para visualización
    }

</script>
