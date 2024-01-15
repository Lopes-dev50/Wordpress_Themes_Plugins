<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <?php wp_head(); snlwloja_scripts(); ?>
</head>
<body <?php body_class(); ?> style="background:<?php echo esc_html( get_theme_mod( 'fundo_site_color' )); ?>">
    <header id="masthead" class="site-header" role="banner" style="background-image: url(<?php esc_url(header_image()); ?>)">
        <div class="site-branding">
            <?php
            if ( has_custom_logo() ) :
                the_custom_logo();
            else :
                if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php endif;
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                    <p class="site-description"><?php echo $description; ?></p>
                <?php endif;
            endif;
            ?>
            
        </div><!-- .site-branding -->
    
       
        <?php get_template_part('inc/store-product-search'); ?>
    </header><!-- #masthead -->
    <?php get_template_part('inc/menu'); ?>
    <div id="content" class="site-content">

   

   