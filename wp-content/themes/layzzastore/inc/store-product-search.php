<div class="busca">
       <form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="text" name="s" id="s" >
    <input id="searchsubmit" type="submit" value="Buscar">
</form>
 <!-- Carrinho de Compras -->
 <div class="shopping_cart_content">
 <?php
    // Verifique se o WooCommerce está ativo
    if (class_exists('WooCommerce')) {
        ?>
        <div class="cart-icon">
           
                <i class="fa fa-shopping-cart"></i> <!-- Ícone do carrinho -->
                <span class="cart-total"><?php echo WC()->cart->get_cart_total(); ?></span> <!-- Valor total do carrinho -->
           
        </div>
        <?php
    }
    ?>
 </div>
<?php
if (isset($_GET['s']) && !empty($_GET['s'])) {
    $search_query = sanitize_text_field($_GET['s']);
    $args = array(
        'post_type' => 'product', // Defina o tipo de postagem como 'product'
        's' => $search_query,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) : $query->the_post();
            // Exiba aqui os resultados da pesquisa, como o título do produto, a imagem, o preço, etc.
        endwhile;
        wp_reset_postdata();
    } else {
        echo 'Nenhum resultado encontrado.';
    }
}
?>
       </div>
       <style>
     /* Estilize a caixa de pesquisa de texto */

/* Estilize o botão de pesquisa */
#searchsubmit {
    background-color: <?php echo esc_html( get_theme_mod( 'fundo_menu_color' )); ?>;
    color: <?php echo esc_html( get_theme_mod( 'texto_menu_color' )); ?>;
   
}

  .shopping_cart_content {
       
        background-color: <?php echo esc_html( get_theme_mod( 'fundo_menu_color' )); ?>;
        color: <?php echo esc_html( get_theme_mod( 'texto_menu_color' )); ?>;
       
       
    }
</style>