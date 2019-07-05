<?php
// Change default dashboard Posts to Proyecto
function change_post_object() {
    $Post_type = get_post_type_object('post');
    $Post_type->menu_position = 6;//five to five
    $Post_type->menu_icon = 'dashicons-admin-customizer';//https://developer.wordpress.org/resource/dashicons

    $Labels = $Post_type->labels;
	$Labels->name = 'Proyectos';
	$Labels->singular_name = 'Proyecto';
	$Labels->menu_name = 'Proyectos';
	$Labels->name_admin_bar = 'Proyectos';
	$Labels->archives = 'Archivo de proyectos';
	$Labels->attributes = 'Atributos de proyectos';
	$Labels->parent_item_colon = 'Proyecto padre';
	$Labels->all_items = 'Todos los proyectos';
	$Labels->add_new_item = 'Añadir nuevo proyecto';
	$Labels->add_new = 'Añadir nuevo';
	$Labels->new_item = 'Nuevo proyecto';
	$Labels->edit_item = 'Editar proyecto';
	$Labels->update_item = 'Actualizar proyecto';
	$Labels->view_item = 'Ver proyecto';
	$Labels->view_items = 'Ver proyectos';
	$Labels->search_items = 'Buscar proyectos';
	$Labels->not_found = 'Proyecto no encontrado';
	$Labels->not_found_in_trash = 'No encontrado en la papelera';
	$Labels->featured_image = 'Imagen destacada';
	$Labels->set_featured_image = 'Asignar imagen destacada';
	$Labels->remove_featured_image = 'Eliminar imagen destacada';
	$Labels->use_featured_image = 'Usar como imagen destacada';
	$Labels->insert_into_item = 'Insertar en proyecto';
	$Labels->uploaded_to_this_item = 'Subido a este proyecto';
	$Labels->items_list = 'Lista de proyectos';
	$Labels->items_list_navigation = 'Navegador Proyectos';
	$Labels->filter_items_list = 'Filtro de Proyectos';
}

add_action( 'init', 'change_post_object' );
?>