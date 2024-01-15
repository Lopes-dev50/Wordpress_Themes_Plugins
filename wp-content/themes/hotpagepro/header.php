<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="<?php  echo get_template_directory_uri() . '/assets/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php  echo get_template_directory_uri() . '/assets/css/fontawesome-all.css'?>" rel="stylesheet">
    <link href="<?php  echo get_template_directory_uri() . '/assets/css/swiper.css'?>" rel="stylesheet">
    <link href="<?php  echo get_template_directory_uri() . '/assets/css/style.css'?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Favicon  -->
    <link rel="icon" href="<?php echo esc_html( do_action( 'do_faviconico' ));?>">
    <?php wp_head(); ?>
</head>