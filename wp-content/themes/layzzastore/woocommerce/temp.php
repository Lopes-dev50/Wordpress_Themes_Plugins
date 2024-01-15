<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
    <div class="product-wrapper">
        <div class="product-image">
            <?php
            /**
             * Hook: woocommerce_before_single_product_summary.
             *
             * @hooked woocommerce_show_product_sale_flash - 10
             * @hooked woocommerce_show_product_images - 20
             */
            do_action( 'woocommerce_before_single_product_summary' );
            ?>
        </div>
        <div class="product-summary">
            <h1 class="product-title"><?php the_title(); ?></h1>
            <div class="product-price">
                <?php woocommerce_template_single_price(); ?>
            </div>
            <div class="product-description">
                <?php the_content(); ?>
            </div>
            <div class="product-rating">
                <?php woocommerce_template_single_rating(); ?>
            </div>
            <div class="product-button">
                <?php woocommerce_template_single_add_to_cart(); ?>
            </div>
        </div>
    </div>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>


<style>
/* Estilo para a imagem do produto */
.product-wrapper .product-image {
    max-width: 50%; /* Largura da imagem (ajuste conforme necessário) */
    float: left; /* Alinhar a imagem à esquerda */
    margin-right: 20px; /* Espaço entre a imagem e os elementos de texto (ajuste conforme necessário) */
}

/* Estilo para o título do produto */
.product-title {
    font-size: 24px;
    font-weight: bold;
    color: #333; /* Cor do texto */
    margin-bottom: 10px;
}

/* Estilo para o preço do produto */
.product-price {
    font-size: 20px;
    color: #cc0000; /* Cor do preço */
    margin-top: 10px;
}

/* Estilo para a descrição do produto */
.product-description {
    font-size: 16px;
    color: #666; /* Cor do texto da descrição */
    margin-top: 20px;
}

/* Estilo para a avaliação do produto */
.product-rating {
    font-size: 16px;
    margin-top: 10px;
}

/* Estilo para o botão de compra */
.product-button {
    background-color: #0073e6; /* Cor de fundo do botão */
    color: #fff; /* Cor do texto do botão */
    padding: 10px 20px; /* Espaçamento interno do botão (ajuste conforme necessário) */
    text-decoration: none; /* Remover sublinhado do link */
    display: inline-block;
    margin-top: 20px;
    border-radius: 5px;
}
/* Estilo para a imagem do produto */
.product-image {
    position: relative;
    overflow: hidden;
    display: inline-block;
}

.product-image img {
    transition: transform 0.3s ease-in-out;
}

/* Adicione o efeito de lupa quando o mouse estiver sobre a imagem */
.product-image:hover img {
    transform: scale(1.2);
    cursor: zoom-in;
}

  /* CSS para mostrar 4 produtos por linha */
  ul.products li.product {
        text-align: center; /* Centralizar o conteúdo */
        display: inline-block; /* Use display inline-block para mostrar 4 produtos por linha */
        vertical-align: top; /* Alinhar os produtos no topo da linha */
        width: 22%; /* Defina a largura para 22% para mostrar 4 por linha */
        margin-right: 1%; /* Adicione margem à direita para separar os produtos */
        margin-bottom: 20px; /* Adicione margem inferior para espaçamento entre linhas */
        box-sizing: border-box; /* Garantir que a largura inclua a borda e o preenchimento */
    }

    /* Estilizando o título do produto dentro de cada elemento da lista */
    ul.products li.product .titulo-produto {
        font-weight: bold; /* Torna o texto do título em negrito */
        text-transform: uppercase; /* Converte o texto do título em maiúsculas */
        color: #000; /* Cor do texto do título (azul) */
    }

    /* Limpar margens para o último item em cada linha */
    ul.products li.product:nth-child(4n) {
        margin-right: 0;
    }

</style>