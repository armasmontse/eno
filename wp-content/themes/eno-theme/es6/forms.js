var sendContactForm = function( form_id , action, rules) {
	var $form = $('#' + form_id );

	if ($form.length > 0 ) {

		$form.validate({

			submitHandler: function(form, e) {

				e.stopPropagation();
				e.preventDefault();

				const $submit = $($form.find('input[type=submit]').get(0));
				const $error = $form.find('.post_error_JS');
				$submit.val('...Enviando');
				$error.text("");

				var data = $(form).serializeArray();
				data.push({ name: "action", value: action });

				const ajax = $.post(cltvo_js_vars.ajax_url, data);

				ajax.done(function(data) {

					if ( typeof  data.message !== "undefined" && data.message == "__okcode__" ) {
						$form.hide();
						$('#' +form_id +'_thank_JS').show();
					}else{
						$error.text('No podemos recibir tu información en este momento, intentalo más tarde.');
						$submit.val('Enviar');
					}
				});

				ajax.fail(function(data){
					let response_json = data.responseJSON;
					$error.text((typeof  response_json !== "undefined" && typeof  response_json.message !== "undefined" ) ? response_json.message : 'No podemos recibir tu información en este momento, intentalo más tarde.');
					$submit.val('Enviar');
				});

			},

			errorClass: 'error form__error form_error_JS',

			invalidHandler() {
				setTimeout(() => {
					let errors = $form.find('.form_error_JS').filter((i, el) => el.style.display !== 'none')
				}, 200)
			},


			errorPlacement: function(error, element) {
				element.parent().append(error);
			},


			rules: rules
		})
	}
};

export default function(){

	sendContactForm("contact_form_JS", "Cltvo_Csontact_Form", {
		'contact_form_JS[Nombre]' : 'required',
		'contact_form_JS[Email]' : {
			required: true,
			email: true
	  },
		'contact_form_JS[Teléfono]' : 'required',
		'contact_form_JS[Fecha]' : 'required',
		'contact_form_JS[Personas]' : 'required',
		'contact_form_JS[Mensaje]' : 'required',
	});

}
