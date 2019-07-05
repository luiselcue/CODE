<?php
//Receive FormData and process it 
function enviaForm() {

	if(isset($_POST)) {
		foreach($_POST as $p_name => $p_value) {

			$$p_name = $p_value;
		}
		//Verifica elementos recibidos
		if( get_bloginfo('admin_email') && isset($name) && isset($email) && isset($content) ) {

			$subject = "Mensaje recibido de [...]";
			$message = $content;
			$name .= (isset($company))?" ({$company})": "";
			$Headers[] = "From: {$name} <{$email}>\r\n";
			if( wp_mail( get_bloginfo('admin_email'), $subject, $message, $Headers ) ) {

				_e('Envío correcto.', '[...]');

			}
			else{

				_e('Sucedió algún error durante el envío.', '[...]');

			}
		}
	}
	exit();
}

//Privileges
/*add_action('wp_ajax_enviaForm', 'enviaForm');*/
add_action('wp_ajax_nopriv_enviaForm', 'enviaForm' );
?>