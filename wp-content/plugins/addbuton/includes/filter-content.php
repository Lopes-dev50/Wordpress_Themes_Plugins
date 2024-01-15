<?php

function df_filter_buton_content( ){

  

    global $post;

    $buton_html = file_get_contents('buton-template.php', true);
    $buton_data = get_post_meta($post->ID, 'buton_data', true);

    $buton_html = str_replace('PAGAMENTO_PH', $buton_data['pagamento'], $buton_html);
    $buton_html = str_replace('LINK_PH', $buton_data['link'], $buton_html);

    return $buton_html;

}