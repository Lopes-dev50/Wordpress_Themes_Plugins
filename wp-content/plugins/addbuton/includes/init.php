<?php
function df_butons_init(){

$labels = array(
    'name' => 'Butons',
    'singular_name' => 'Buton',
    'menu_name' => 'Butons',
    'name_admin_bar' => 'Buton',
    'add_new' => 'Adicionar novo buton',
    'add_new_item' => 'Novo Botun',
    'edit_item' => 'Editar Botun',
    'view_item' => 'Visualizar Botun',
    'all_items' => 'Todos Butons',
    'search_items' => 'Todos Botuns',
    'parent_item_colon' => 'Botuns Filhos',
    'not_found' => 'Nenhum Botun',
    'not_found_in_trash' => 'Nada no lixo',
);

$array = array(
    'labels' => $labels,
    'description' => 'Um tipo de botão',
    'public' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'rewrite' => array('slug' => 'buton'),
    'capability_type' => 'post',
    'has_archive' => true, // Corrigi a chave 'true'
    'hierarchical' => true, // Corrigi a chave 'false'
    'menu_position' => 5,
    'supports' => array('title')
);
register_post_type('buton', $array);
}
