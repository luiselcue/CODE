<?php
//Create new cookie

function setNewCookie() {

	setcookie('cookie_name', 1, time()+3600, "/");
	exit;
}
//add_action('wp_ajax_setNewCookie', 'setNewCookie');
add_action('wp_ajax_nopriv_setNewCookie', 'setNewCookie');
?>