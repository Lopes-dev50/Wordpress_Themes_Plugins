<?php
$args = array(
    'post_type' => 'buton',
    'posts_per_page' => -1,
);

$links = new WP_Query($args);

if ($links->have_posts()) :
    while ($links->have_posts()) : $links->the_post();
        $link_pagamento = get_post_meta(get_the_ID(), 'pagamento', true);
        $link_video = get_post_meta(get_the_ID(), 'link', true);

        $link_pagamento = get_post_meta(get_the_ID(), 'pagamento', true);
$link_video = get_post_meta(get_the_ID(), 'link', true);

echo 'Link de Pagamento: ' . esc_url($link_pagamento) . '<br>';
echo 'Link de Vídeo: ' . esc_url($link_video) . '<br>';


        ?>

        <div class="campo">
            <p class="texto">Faça o upgrade para a versão Pro agora!
                <a class="comprar-tema" href="<?php echo esc_url($link_pagamento); ?>">COMPRAR TEMA HOTPAGE</a>
                Assista ao vídeo de demonstração do tema.
                <a class="video-tema" href="<?php echo esc_url($link_video); ?>">VIDEO DE APRESENTAÇÃO</a>
            </p>
        </div>
        

    <?php endwhile;
    wp_reset_postdata();
endif;
?>



<style>
.campo {
    position: fixed;
    bottom: 1px;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.7);
    z-index: 9999;
    text-align: center; /* Centralize o conteúdo horizontalmente */
}

.texto {
    align-items: center;
    font-size: 16px;
}

.comprar-tema, .video-tema {
    display: inline-block; /* Exibe os botões lado a lado */
    border-radius: 5px;
    background-color: #ff8747;
    padding: 5px 10px;
    border: 1px solid #000;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    text-decoration: none;
    z-index: 9999;
    color: #fff;
    margin: 0 10px; /* Adicione algum espaçamento entre os botões */
    font-size: 10px;
    margin-top: 10px;
}

.comprar-tema:hover, .video-tema:hover {
    text-decoration: none;
    color: #fff;
}
</style>