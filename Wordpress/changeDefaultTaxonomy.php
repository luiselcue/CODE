<?php
// Change default dashboard Category name
function change_taxonomy_object() {
	$Taxonomies = get_object_taxonomies( 'post', 'objects' );
	$Taxonomy_type = $Taxonomies['category'];
	$Taxonomy_type->label = 'Tipos';
	$Taxonomy_type->description = 'Clasificación de proyectos por tipo';

	$Labels = $Taxonomy_type->labels;
	$Labels->name = 'Tipos';
	$Labels->singular_name = 'Tipo';
	$Labels->search_items = 'Buscar tipos';
	$Labels->popular_items = 'Tipos más populares';
	$Labels->all_items = 'Todas los tipos';
	$Labels->parent_item = 'Tipo padre';
	$Labels->parent_item_colon = 'Tipo padre:';
	$Labels->edit_item = 'Editar tipo';
	$Labels->view_item = 'Ver tipo';
	$Labels->update_item = 'Actualizar tipo';
	$Labels->add_new_item = 'Añadir nuevo tipo';
	$Labels->new_item_name = 'Nombre del nuevo tipo';
	$Labels->separate_items_with_commas = 'Separa los tipos con comas';
	$Labels->add_or_remove_items = 'Añade o elimina tipo';
	$Labels->choose_from_most_used = 'Elige entre los tipos más usados';
	$Labels->not_found = 'No se encontraron tipos.';
	$Labels->no_terms = 'No hay tipos';
	$Labels->items_list_navigation = 'Navegación por la lista de tipos';
	$Labels->items_list = 'Lista de tipos';
	$Labels->most_used = 'Más utilizados';
	$Labels->back_to_items = '← Volver a tipos';
	$Labels->menu_name = 'Tipos';
	$Labels->name_admin_bar = 'tipo';
}

add_action( 'init', 'change_taxonomy_object' );
?>