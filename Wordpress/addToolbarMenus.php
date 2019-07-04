<?php
// Add Toolbar Menus
function custom_toolbar() {
	global $wp_admin_bar;

	$args = array(
		'id'     => 'menu-1',
		'title'  => __( 'Menú', 'text_domain' ),
	);
	$wp_admin_bar->add_menu( $args );

	$args = array(

		'id'     => 'submenu-1',
		'parent' => 'menu-1',
		'title'  => __( 'Submenú', 'text_domain' ),
		'href'   => '#',
		'meta'   => array(
			'html'     => '<span>Hola</span>',
			'class'    => 'custom-toolbar-class',
			'target'   => '_top',
			'onclick'  => 'alert("hola");',
			'title'    => 'Toolbar Menu',
			'tabindex' => '1',
		),
	);
	$wp_admin_bar->add_menu( $args );

}
add_action( 'wp_before_admin_bar_render', 'custom_toolbar', 999 );
?>