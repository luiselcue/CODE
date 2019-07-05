<?php
//Declare new menus
function starter_menu() {
	register_nav_menu('left-main-menu','Menú principal izquierdo');
	register_nav_menu('right-main-menu','Menú principal derecho');
	register_nav_menu('footer-menu','Menú footer');
}
add_action( 'init', 'starter_menu' );
?>

<!-- RIGHT MENU Insert into HTML page -->
<?php wp_nav_menu( array( 'theme_location' => 'right-main-menu' ) ); ?>