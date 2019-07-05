<?php
//ACF - Adding option menu compatibility 
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Opciones del tema',
		'menu_title'	=> 'Opciones',
		'menu_slug' 	=> 'options',
		'position' => 11,
	));
}
?>