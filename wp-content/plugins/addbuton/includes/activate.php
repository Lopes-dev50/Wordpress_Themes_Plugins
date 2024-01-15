<?php

function df_activate_plugin(){

    if(version_compare(get_bloginfo('version'), '4.5', '<')){
        wp_die('Necessario atualizar wordpress');
    };
   
}
