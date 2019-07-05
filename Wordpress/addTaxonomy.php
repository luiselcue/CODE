<?php
//Custom taxonomy TIPOS
if ( ! function_exists('qe_set_taxonomies') ) {

	// Register Custom Taxonomy
	function qe_set_taxonomies() {

		$labels = array(
			'name'                       => 'Tipos',
			'singular_name'              => 'Tipo',
			'menu_name'                  => 'Tipos',
			'all_items'                  => 'Todos los tipos',
			'parent_item'                => 'Tipo padre',
			'parent_item_colon'          => 'Padre:',
			'new_item_name'              => 'Nombre de nuevo tipo',
			'add_new_item'               => 'Añadir nuevo tipo',
			'edit_item'                  => 'Editar tipo',
			'update_item'                => 'Actualizar tipo',
			'view_item'                  => 'Ver tipo',
			'separate_items_with_commas' => 'Separar tipos con comas',
			'add_or_remove_items'        => 'Añadir o eliminar tipos',
			'choose_from_most_used'      => 'Elegir el más usado',
			'popular_items'              => 'Tipos populares',
			'search_items'               => 'Buscar por tipo',
			'not_found'                  => 'No encontrado',
			'no_terms'                   => 'No hay tipos',
			'items_list'                 => 'Lista de tipos',
			'items_list_navigation'      => 'Navegación de lista de tipos',
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => false,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'type', array( 'project' ), $args );

	}
	add_action( 'init', 'qe_set_taxonomies', 0 );

}
?>