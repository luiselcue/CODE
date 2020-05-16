<?php
	//Starter scripts to Owl Carousel
	function owlcarousel_scripts() {

		wp_enqueue_style( 'owlcarousel-style', get_template_directory_uri() . '/inc/owlcarousel234/assets/owl.carousel.min.css' );
		wp_enqueue_style( 'owlcarousel-style-default', get_template_directory_uri() . '/inc/owlcarousel234/assets/owl.theme.default.min.css' );
		wp_enqueue_script( 'owlcarousel-js', get_template_directory_uri() . '/inc/owlcarousel234/owl.carousel.min.js', array( 'jquery' ), false, true );
	}
	add_action( 'wp_enqueue_scripts', 'owlcarousel_scripts' );
?>