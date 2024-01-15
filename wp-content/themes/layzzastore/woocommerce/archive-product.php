<?php
/**
 * O modelo para exibir a página de arquivamento de produtos WooCommerce.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SeuTema
 * @subpackage WooCommerce
 * @since 1.0.0
 */

get_header(); // Inclui o cabeçalho padrão do WordPress.
?>
<?php
if (esc_html(get_theme_mod('set_banner_img_option')) == 1) {
    get_template_part('inc/bannderimg');
}
if (esc_html(get_theme_mod('set_banner_option')) == 1) {
    get_template_part('inc/card');
}
if (esc_html(get_theme_mod('set_categoria_option')) == 1) {
    get_template_part('inc/cardmenu');
}

?>
<div id="primary" class="content-area bordacentral">
    <main id="main" class="site-main">

        <header class="page-header">
            <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
        </header><!-- .page-header -->

        <?php
        // Adicione seus hooks personalizados aqui, se desejar
        do_action('seu_tema_before_content');
        ?>

        <ul class="products">
            <?php
            if (woocommerce_product_loop()) {
                do_action('woocommerce_before_shop_loop');

                $product_count = 0;
                while (have_posts()) {
                    the_post();
                    $product_count++;

                    wc_get_template_part('content', 'product');
                    
                    // Fecha a linha após cada quarto produto
                    if ($product_count % 4 == 0) {
                        echo '</ul><ul class="products">';
                    }
                }

                do_action('woocommerce_after_shop_loop');
            } else {
                /**
                 * Se nenhum produto for encontrado.
                 */
                do_action('woocommerce_no_products_found');
            }
            ?>
        </ul><!-- .products -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_template_part('inc/corbase');
get_footer(); // Inclui o rodapé padrão do WordPress.
?>

<style>
    /* CSS para mostrar 4 produtos por linha */
    ul.products {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    ul.products li.product {
        width: calc(22% - 2%); /* 25% de largura para 4 produtos por linha com 1% de margem */
        margin-bottom: 20px; /* Adicione margem inferior para espaçamento entre as linhas */
        box-sizing: border-box; /* Garantir que a largura inclua a borda e o preenchimento */
    }
</style>
