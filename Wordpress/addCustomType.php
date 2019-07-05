<?php
//Custom type PROYECTOS
if ( ! function_exists('qe_custom_post_type') ) {

	// Register Custom Post Type
	function qe_custom_post_type() {

		$labels = array(
			'name'                  => 'Proyectos',
			'singular_name'         => 'Proyecto',
			'menu_name'             => 'Proyectos',
			'name_admin_bar'        => 'Proyectos',
			'archives'              => 'Archivo de proyectos',
			'attributes'            => 'Atributos de proyectos',
			'parent_item_colon'     => 'Proyecto padre',
			'all_items'             => 'Todos los proyectos',
			'add_new_item'          => 'Añadir nuevo proyecto',
			'add_new'               => 'Añadir nuevo',
			'new_item'              => 'Nuevo proyecto',
			'edit_item'             => 'Editar proyecto',
			'update_item'           => 'Actualizar proyecto',
			'view_item'             => 'Ver proyecto',
			'view_items'            => 'Ver proyectos',
			'search_items'          => 'Buscar proyectos',
			'not_found'             => 'Proyecto no encontrado',
			'not_found_in_trash'    => 'No encontrado en la papelera',
			'featured_image'        => 'Imagen destacada',
			'set_featured_image'    => 'Asignar imagen destacada',
			'remove_featured_image' => 'Eliminar imagen destacada',
			'use_featured_image'    => 'Usar como imagen destacada',
			'insert_into_item'      => 'Insertar en proyecto',
			'uploaded_to_this_item' => 'Subido a este proyecto',
			'items_list'            => 'Lista de proyectos',
			'items_list_navigation' => 'Navegador Proyectos',
			'filter_items_list'     => 'Filtro de Proyectos',
		);
		$args = array(
			'label'                 => 'Proyectos',
			'description'           => 'Proyectos realizados',
			'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail', 'comments', 'custom-fields', 'post-formats' ),//'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' (template and menu order) (hierarchical must be true), 'post-formats'
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 6,//five to five
			'menu_icon'             => 'dashicons-admin-customizer',//https://developer.wordpress.org/resource/dashicons
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => true,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'project', $args );

	}
	add_action( 'init', 'qe_custom_post_type', 0 );

}
?>