<?php



require get_template_directory() . '/inc/customizer.php';

add_action( 'after_setup_theme', 'setup_features' );
function setup_features() {
    add_theme_support( 'post-thumbnails' );
}
// Carregando nossos scripts e folhas de estilos
function load_scripts()
{
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all');
    wp_enqueue_style('templantes', get_template_directory_uri() . '/assets/templantes.css', array(), '1.0', 'all');
}

// adicionar campos personalizados


// Adicionando fontes ao backend do Gutenberg
function snlwhotpage_gutenberg_fonts()
{
    wp_enqueue_style('lato-font', 'https://fonts.googleapis.com/css?family=Lato:400,900');
    wp_enqueue_style('oswald-font', 'https://fonts.googleapis.com/css?family=Oswald:400,900');
}
add_action('enqueue_block_editor_assets', 'snlwhotpage_gutenberg_fonts');

add_action('wp_enqueue_scripts', 'load_scripts');

$args = array(
    'height' => 680,
    'width' => 1920,
);

add_theme_support('custom-header', $args);



function register_central_widgets_sidebar() {
    register_sidebar(
        array(
            'name' => __('HotPage Widgets', 'snlwhotpage'),
            'id' => 'central_widgets',
            'description' => __('Widgets para exibir na página central', 'snlwhotpage'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'register_central_widgets_sidebar');

 