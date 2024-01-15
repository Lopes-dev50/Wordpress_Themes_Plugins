<?php
/**
 * Funções e definições do tema.
 *
 * @package Snlwloja
 */
require get_template_directory() . '/inc/customizer.php';
if ( ! function_exists( 'snlwloja_setup' ) ) :
    function snlwloja_setup() {
        // Ativar suporte a imagem de destaque (thumbnail)
        add_theme_support( 'post-thumbnails' );

        // Registrar um menu de navegação personalizado
        register_nav_menus( array(
            'primary' => esc_html__( 'Menu Principal', 'snlwloja' ),
            'second' => esc_html__( 'Menu do Rodapé', 'snlwloja' ),
        ) );

        // Habilitar tradução de strings
        load_theme_textdomain( 'snlwloja', get_template_directory() . '/languages' );

        // Adicionar suporte para formatos de post
        add_theme_support( 'post-formats', array( 'aside', 'gallery', 'video' ) );
    }
endif;
add_action( 'after_setup_theme', 'snlwloja_setup' );









// Registrar e carregar estilos e scripts
function snlwloja_scripts() {
    // Registrar estilos
    wp_enqueue_style('snlwloja-icon', get_template_directory_uri() . '/assets/css/fontawesome-all.css', array(), '1.0', 'all');
    wp_enqueue_style( 'snlwloja-style', get_stylesheet_uri() );
 
    // Registrar script personalizado
    wp_enqueue_script( 'snlwloja-custom-script', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'snlwloja_scripts' );




// Registrar barra lateral
function snlwloja_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Barra Lateral', 'snlwloja' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Adicione widgets aqui para exibir na barra lateral.', 'snlwloja' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'snlwloja_widgets_init' );

/**
 * Registra imagem topo.
 */
$args = array(
    'height' => 385,
    'width' => 1920,
);

add_theme_support('custom-header', $args);
/**
 * Adiciona suporte a logotipo personalizado.
 */
function snlwloja_custom_logo_support() {
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 160,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'snlwloja_custom_logo_support');



/**
 * woocommece
 */

 function snlwloja_config(){
    add_theme_support( 'woocommerce' ); 
}
add_action( 'after_setup_theme', 'snlwloja_config', 0 );


// Remove o título da página da loja
add_filter( 'woocommerce_show_page_title', '__return_false' );


// Remove a opção "Exibir todos os resultados"
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

// Remove as opções de ordenação
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

function remover_categoria_single_produto() {
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
}
add_action( 'woocommerce_before_single_product', 'remover_categoria_single_produto' );

add_filter( 'woocommerce_product_tabs', 'remove_product_tabs', 98 );

function remove_product_tabs( $tabs ) {
   // unset( $tabs['description'] );         // Remove a guia de descrição do produto
    unset( $tabs['additional_information'] ); // Remove a guia de informações adicionais
    return $tabs;
}





add_action('after_switch_theme', 'criar_categoria_destaque_ao_ativar_tema');
// Função para criar uma categoria ao ativar o tema
function criar_categoria_destaque_ao_ativar_tema() {
    $categoria_nome = 'banner'; // Substitua pelo nome da categoria desejada

    // Verifique se a categoria já existe
    $categoria = get_term_by('name', $categoria_nome, 'product_cat');

    // Se a categoria não existir, crie-a
    if (empty($categoria)) {
        wp_insert_term($categoria_nome, 'product_cat');
    }

    $categoria_nome_card1 = 'slider1'; // Substitua pelo nome da categoria desejada

    // Verifique se a categoria já existe
    $categoria = get_term_by('name', $categoria_nome_card1, 'product_cat');

    // Se a categoria não existir, crie-a
    if (empty($categoria)) {
        wp_insert_term($categoria_nome_card1, 'product_cat');
    }

    $categoria_nome_card2 = 'slider2'; // Substitua pelo nome da categoria desejada

    // Verifique se a categoria já existe
    $categoria = get_term_by('name', $categoria_nome_card2, 'product_cat');

    // Se a categoria não existir, crie-a
    if (empty($categoria)) {
        wp_insert_term($categoria_nome_card2, 'product_cat');
    }

    $categoria_nome_card3 = 'slider3'; // Substitua pelo nome da categoria desejada

    // Verifique se a categoria já existe
    $categoria = get_term_by('name', $categoria_nome_card3, 'product_cat');

    // Se a categoria não existir, crie-a
    if (empty($categoria)) {
        wp_insert_term($categoria_nome_card3, 'product_cat');
    }
}







