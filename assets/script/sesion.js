$(document).ready(function() {
	// Capturamos la base_url
    var base_url = $("#base_url").val();
    
	//abrir modal de registro/inicio
	$("#inicio").click(function (e) {
		e.preventDefault();  // Para evitar que se envíe por defecto
		$("#modal_cliente").modal('show');  // Mostramos la modal
		// Definimos el título y la acción
		$("span#titulo").text('Iniciar sesión');
		$("#accion").val('Iniciar');
		// Mostramos y ocultamos los campos y textos necesarios
		$("label.username").css('display','block');
		$("#username").css('display','block');
		$("label.password").css('display','block');
		$("#password").css('display','block');
		$("label.confirm").css('display','none');
		$("#confirm").css('display','none');
		$("label.name").css('display','none');
		$("#name").css('display','none');
		$("label.lastname").css('display','none');
		$("#lastname").css('display','none');
		$("label.phone").css('display','none');
		$("#phone").css('display','none');
		$("label.cell_phone").css('display','none');
		$("#cell_phone").css('display','none');
		$("#question_account").css('display','block');
		$("#reg_client").css('display','block');
		$("#hidden_reg_client").css('display','none');
		// Mostramos y ocultamos los botones necesarios
		$("#add_client").css('display','none');
		$("#iniciar").css('display','block');
		// Ocultamos el div del recapcha
		$("#recapcha").css('display','none');
		$("#form_client").attr("action", "login_public");
	});
	
	//Preparar modal de registro de usuario cliente
	$("#reg_client").click(function (e) {
		// Definimos el título y la acción
		$("span#titulo").text('Registrar cliente');
		$("#accion").val('Registrar');
		// Mostramos y ocultamos los campos necesarios
		$("label.username").css('display','block');
		$("#username").css('display','block');
		$("label.password").css('display','block');
		$("#password").css('display','block');
		$("label.confirm").css('display','block');
		$("#confirm").css('display','block');
		$("label.name").css('display','block');
		$("#name").css('display','block');
		$("label.lastname").css('display','block');
		$("#lastname").css('display','block');
		$("label.phone").css('display','block');
		$("#phone").css('display','block');
		$("label.cell_phone").css('display','block');
		$("#cell_phone").css('display','block');
		$("#username").focus();
		$("#question_account").css('display','none');
		$("#reg_client").css('display','none');
		$("#hidden_reg_client").css('display','block');
		// Mostramos y ocultamos los botones necesarios
		$("#add_client").css('display','block');
		$("#iniciar").css('display','none');
		// Mostramos el div del recapcha
		$("#recapcha").css('display','block');
		$("#form_client").attr("action", "");
	});
	
	//Preparar modal de inicio de sesión
	$("#hidden_reg_client").click(function (e) {
		// Definimos el título y la acción
		$("span#titulo").text('Iniciar sesión');
		$("#accion").val('Registrar');
		// Mostramos y ocultamos los campos necesarios
		$("label.username").css('display','block');
		$("#username").css('display','block');
		$("label.password").css('display','block');
		$("#password").css('display','block');
		$("label.confirm").css('display','none');
		$("#confirm").css('display','none');
		$("label.name").css('display','none');
		$("#name").css('display','none');
		$("label.lastname").css('display','none');
		$("#lastname").css('display','none');
		$("label.phone").css('display','none');
		$("#phone").css('display','none');
		$("label.cell_phone").css('display','none');
		$("#cell_phone").css('display','none');
		$("#username").focus();
		$("#question_account").css('display','block');
		$("#reg_client").css('display','block');
		$("#hidden_reg_client").css('display','none');
		// Mostramos y ocultamos los botones necesarios
		$("#add_client").css('display','none');
		$("#iniciar").css('display','block');
		// Ocultamos el div del recapcha
		$("#recapcha").css('display','none');
		$("#form_client").attr("action", "login_public");
	});
	
	$('input').on({
        keypress: function () {
            $(this).parent('div').removeClass('has-error');
        }
    });
    
    $("#phone,#cell_phone").numeric(); // Sólo permite valores numéricos
	
	//registar usuario cliente nuevo
	$("#add_client").click(function (e) {
		//~ alert($('#g-recaptcha-response').val()); // El campo g-recaptcha-response es añadido automáticamente por el plugin de google
		e.preventDefault();  // Para evitar que se envíe por defecto
		// Expresion regular para validar el correo
		var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

        if ($('#username').val().trim() == "") {
          
		   swal("Disculpe,", "para continuar debe ingresar el nombre de usuario");
	       $('#username').parent('div').addClass('has-error');
	       $('#username').focus();
		   
        } else if (!(regex.test($('#username').val().trim()))){
			
			swal("Disculpe,", "el usuario debe ser una dirección de correo electrónico válida");
			$('#username').parent('div').addClass('has-error');
			
		}  else if ($('#password').val().trim() === "") {
          
		   swal("Disculpe,", "para continuar debe ingresar una contraseña");
	       $('#password').parent('div').addClass('has-error');
		   
        } else if ($('#confirm').val().trim() === "") {
          
		   swal("Disculpe,", "debe confirmar la contraseña");
	       $('#confirm').parent('div').addClass('has-error');
		   
        }else if ($('#confirm').val().trim() != $('#password').val().trim()) {
          
		   swal("Disculpe,", "las contraseñas deben ser iguales");
	       $('#password').parent('div').addClass('has-error');
		   $('#confirm').parent('div').addClass('has-error');
		   
        } else if ($('#name').val().trim() === "") {
          
		   swal("Disculpe,", "para continuar debe ingresar el nombre");
	       $('#name').parent('div').addClass('has-error');
	       
        } else if ($('#lastname').val().trim() === "") {
          
		   swal("Disculpe,", "para continuar debe ingresar el apellido");
	       $('#lastname').parent('div').addClass('has-error');
		   
        } else if ($('#phone').val() == '') {
			
		  swal("Disculpe,", "para continuar debe indicar un teléfono principal");
	       $('#phone').parent('div').addClass('has-error');
		   
		} else if ($('#g-recaptcha-response').val() == '') {
			
		  swal("Disculpe,", "para continuar debe marcar el boton de captcha");
		   
		} else {
			$.post(base_url+'CClient/add3', $('#form_client').serialize(), function (response) {
				//~ alert(response);
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
						window.location.href = base_url+'public_perfil';
					});
				}
			});
		}
	});
	
	//registar usuario cliente nuevo
	$("#iniciar").click(function (e) {
		//~ alert($('#g-recaptcha-response').val()); // El campo g-recaptcha-response es añadido automáticamente por el plugin de google
		e.preventDefault();  // Para evitar que se envíe por defecto
		// Expresion regular para validar el correo
		var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

        if ($('#username').val().trim() == "") {
          
		   swal("Disculpe,", "para continuar debe ingresar el nombre de usuario");
	       $('#username').parent('div').addClass('has-error');
	       $('#username').focus();
		   
        }/* else if (!(regex.test($('#username').val().trim()))){
			
			swal("Disculpe,", "el usuario debe ser una dirección de correo electrónico válida");
			$('#username').parent('div').addClass('has-error');
			
		}*/  else if ($('#password').val().trim() === "") {
          
		   swal("Disculpe,", "para continuar debe ingresar una contraseña");
	       $('#password').parent('div').addClass('has-error');
		   
        }/* else if ($('#g-recaptcha-response').val() == '') {
			
		  swal("Disculpe,", "para continuar debe marcar el boton de captcha");
		   
		}*/ else {
			// Enviamos el formulario
			$('#form_client').submit();
		}
	});
	
	//abrir modal de registro/inicio
	$("#cerrar").click(function (e) {
		window.location.href = base_url+'logout_public';
	});
});
        
   
