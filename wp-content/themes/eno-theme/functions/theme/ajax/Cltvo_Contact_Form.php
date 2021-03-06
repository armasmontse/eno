<?php

require_once get_template_directory().'/ajax/CltvoAjaxMail.php';

class Cltvo_Contact_Form extends Cltvo_Ajax_Master
{
	static function privMethod()
	{

		header('Content-Type: application/json; charset=UTF-8');
        //
		// die(json_encode(  $_POST));
		$id_form = "contact_form_JS";

		$rules = array(
			'Nombre' 		=> 'required',
			'Email' 		=> 'mail',
			'Mensaje'		=> 'required'
        );

		$messages = array(
			'Nombre' 			=> __('El nombre es un campo requerido.',TRANSDOMAIN),
			'Email' 			=> __('El email no es valido.',TRANSDOMAIN),
			'Mensaje' 			=> __('El mensaje es un campo requerido.',TRANSDOMAIN),
        );

		if (!isset($_POST[$id_form])) {
			header('HTTP/1.1 403 Unauthorized');

			$data = array(
				'message' => __('Llena todos los campos del formulario.',TRANSDOMAIN),
			);

			die(json_encode($data));
		}

        foreach ($rules as $input => $rule) {
        	if ($rule == 'required') {
        		if (!isset($_POST[$id_form][$input]) || empty($_POST[$id_form][$input])) {

        			header('HTTP/1.1 403 Unauthorized');


        			$data = array(
        				'message' => isset($messages[$input]) ? $messages[$input]: __('Llena todos los campos del formulario correctamente.',TRANSDOMAIN),
        			);

        			die(json_encode($data));

        		}
        	}

			if ($rule == 'email') {
        		if (!isset($_POST[$id_form][$input]) || empty($_POST[$id_form][$input]) || !filter_var($_POST[$id_form][$input], FILTER_VALIDATE_EMAIL)) {

        			header('HTTP/1.1 403 Unauthorized');


        			$data = array(
        				'message' => isset($messages[$input]) ? $messages[$input]: __('Llena todos los campos del formulario correctamente.',TRANSDOMAIN),
        			);

        			die(json_encode($data));

        		}
        	}

        }
		try {
			$c = new Cltvo_Page_Home;

	        if ( filter_var($c->social_net->email, FILTER_VALIDATE_EMAIL) ){
	        	$mail = $c->social_net->email;
	        }

			$mail = empty($c->social_net->email) ? "dev-accounts@elcultivo.com" : $c->social_net->email;


	        $sendMail = new CltvoAjaxMail($mail);

			$sendMail->setPostForm($id_form, "Email", "Nombre");

	        if( defined('CLTVO_ISLOCAL') && ( CLTVO_ISLOCAL == true) ){ $sendMail->setSMTP(); }
	        $send = $sendMail->CltvoSuscribe();
		} catch (Error $e) {
			header('HTTP/1.1 500 Message could not be sent.');
			header('Content-Type: text/html; charset=utf-8');
			dd($e);
		}

		if($send != '__okcode__'){
			header('HTTP/1.1 500 Message could not be sent.');
		}

        $data = array(
        	'message' => $send,
        );

        die(json_encode($data));
    }

}
