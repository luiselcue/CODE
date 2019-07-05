<?php
//Adding customized logo to login pannel
function custom_css() { 
?>
	<style type="text/css">
		#login h1 a, .login h1 a {
			background-image: url(<?=get_template_directory_uri()?>/imgs/QE_logo_100.png);
		}
	</style>
<?php }

add_action( 'login_enqueue_scripts', 'custom_css' );
?>