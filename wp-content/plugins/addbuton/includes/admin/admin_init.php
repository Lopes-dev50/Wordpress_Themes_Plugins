<?php
include 'metabox_df_buton_opcoes.php';
include 'enqueue.php';

function df_butons_admin_init(){
    add_action('add_meta_boxes_buton', 'df_butons_metaboxes');
    add_action('admin_enqueue_script', 'df_admin_enqueue');

    }

function  df_butons_metaboxes(){

   add_meta_box(
    'df_buton_opcoes',
    'Links dos botões', 
    'df_buton_opcoes',
    'buton',
    'normal',
    
   );


}   

function df_save_post_admin($post_id, $post, $update){

    if(!$update){
        return;

    }

    $buton_data = array(
        'pagamento' => $_POST['df_pagamento'],
        'link' => $_POST['df_link'],
    );

update_post_meta($post_id, 'buton_data', $buton_data );

}