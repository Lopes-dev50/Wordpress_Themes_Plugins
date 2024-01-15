<?php

function df_admin_enqueue(){
    global $typenow;
    if($typenow != 'buton'){
        return;
    }

    //Register
     wp_register_style(
        'df_style',
        plugins_url('/assets/css/style.css', BUTON_PLUGIN_URL)
     );


    //Usos
    wp_enqueue_style('df_style');


}