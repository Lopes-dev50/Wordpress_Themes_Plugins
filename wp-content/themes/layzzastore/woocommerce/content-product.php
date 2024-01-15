<?php
/**
 * The template for displaying product content in the loop.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.9.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
    return;
}
?>

<li <?php wc_product_class('custom-product-class', $product); ?>>
    <a href="<?php echo esc_url($product->get_permalink()); ?>" class="woocommerce-LoopProduct-link">
        <?php
        /**
         * Hook: woocommerce_before_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_open - 10
         */
        do_action('woocommerce_before_shop_loop_item');

        /**
         * Hook: woocommerce_before_shop_loop_item_title.
         *
         * @hooked woocommerce_show_product_loop_sale_flash - 10
         * @hooked woocommerce_template_loop_product_thumbnail - 10
         */
        do_action('woocommerce_before_shop_loop_item_title');

        /**
         * Hook: woocommerce_shop_loop_item_title.
         *
         * @hooked woocommerce_template_loop_product_title - 10
         */
        do_action('woocommerce_shop_loop_item_title');

        /**
         * Hook: woocommerce_after_shop_loop_item_title.
         *
         * @hooked woocommerce_template_loop_rating - 5
         * @hooked woocommerce_template_loop_price - 10
         */
        do_action('woocommerce_after_shop_loop_item_title');

        /**
         * Hook: woocommerce_after_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_close - 5
         * @hooked woocommerce_template_loop_add_to_cart - 10
         */
        do_action('woocommerce_after_shop_loop_item');
        ?>
    </a>
</li>
<style>
    /* Estilo personalizado para produtos com a classe custom-product-class */
.custom-product-class {
    /* Adicione suas personalizações de estilo aqui */
    background-color: #f7f7f7;
    border: 1px solid #ccc;
    padding: 10px;
    text-align: center;
}

.custom-product-class a {
    text-decoration: none;
    color: #333;
}

.custom-product-class:hover {
    /* Adicione estilos de hover personalizados aqui */
    background-color: #e0e0e0;
}

/* CSS para mostrar 4 produtos por linha */
ul.products li.product {
    width: 24%; /* Defina a largura desejada para cada produto (ajuste conforme necessário) */
    margin-right: 1%; /* Adicione margem à direita para separar os produtos */
    float: left; /* Alinhe os produtos à esquerda para formar uma linha */
    clear: none; /* Não limpe o alinhamento (não force quebras de linha) */
}

/* Limpe a margem à direita do último produto em cada linha */
ul.products li.product:nth-child(4n) {
    margin-right: 0;
}

</style>