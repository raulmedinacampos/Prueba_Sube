function Init() {
	$('#btnContacto').click(function(e) {
		e.preventDefault();
		
		if ( $('#formContacto').valid() ) {
			$('#btnContacto').attr('disabled', 'disabled');
			
			$.post(
				'send-email',
				$('#formContacto').serialize(),
				function(resp) {
					$('#btnContacto').parent().append('<small class="ps-3 text-danger">Correo enviado</small>');
					$('#nombre').val('');
					$('#correo').val('');
					$('#mensaje').val('');
				}
			);
		}
	});
}

function Validar() {
	$('#formContacto').validate({
		rules: {
			nombre: {
				required: true
			},
			correo: {
				required: true,
				email: true
			},
			mensaje: {
				required: true
			}
		}
	});
}

$(function() {
	$.validator.methods.email = function( value, element ) {
		return this.optional( element ) || /^.+@.+\..+$/.test( value );
	}
	
	$.validator.setDefaults({
		ignore: [],
		highlight: function(element) {
			$(element).addClass('is-invalid');
		},
		unhighlight: function(element) {
			$(element).removeClass('is-invalid');
		},
		errorElement: 'span',
		errorClass: 'label label-danger',
		errorPlacement: function(error, element) {
			if(element.parent('.input-group').length) {
				error.insertAfter(element.parent());
			}
		}
	});
	
	Init();
	Validar();
});