<?php
//Create new widget area
function custom_sidebars() {
	register_sidebar(
		array (
			'name' => __( 'Footer Widget Area', 'starter' ),
			'id' => 'footer-side-bar',
			'description' => __( 'Footer Widget Area', 'starter' ),
			'before_widget' => '<div class="widget-content">',
			'after_widget' => "</div>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'custom_sidebars' );
?>