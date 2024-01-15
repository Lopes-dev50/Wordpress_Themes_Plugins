<?php

function df_buton_opcoes($post){
    $buton_data = get_post_meta($post->ID, 'buton_data', true);

    if(empty($buton_data)){
        $buton_data = array(
            'pagamento' => '',
            'link' => '',
        );
    }
    ?>

   Link pagamanto:<br/>
   <input type="text" name="df_pagamento" value="<?php  echo $buton_data['pagamento'];?>"/> <br/>

   Link Video:<br/>
   <input type="text" name="df_link" value="<?php  echo $buton_data['link'];?>"/> <br/>


<?php

}