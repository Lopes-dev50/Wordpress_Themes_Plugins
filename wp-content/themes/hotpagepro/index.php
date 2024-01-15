<?php

get_header();
?>

<body data-spy="scroll" data-target=".fixed-top">

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <p class="navbar-brand logo-text" style="color:<?php echo esc_html( get_theme_mod( 'site_color' )); ?>"><?php echo esc_html(get_bloginfo( 'nome' )); ?></p>


            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">

            </button>
            <!-- end of mobile menu toggle button -->
            <span class="nav-item">
                <a class="btn-outline-sm" href="<?php echo esc_url(get_theme_mod( 'set_link' )); ?>"><?php echo esc_html( get_theme_mod( 'set_btn' )); ?></a>
            </span>

        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->

    <!-- Header -->
    <header id="header" class="header"  >
        <div class="header-content" style="background-image: url(<?php esc_url(header_image()); ?>)">
            <div class="container">
           
                <div class="row">
                    <div class="col-lg-6 col-xl-7">
                        
                            <h1 class="frase" style="color:<?php echo esc_html( get_theme_mod( 'h1_color' )); ?>">
                                <?php echo esc_html( get_theme_mod( 'set_preco' )); ?></h1>
                            <br>
                            <h1 class="frase" style="color:<?php echo esc_html( get_theme_mod( 'frase_color' )); ?>"><?php echo esc_html( get_theme_mod( 'set_frase' )); ?></h1>
                            <p class="p-large" style="color:<?php echo esc_html( get_theme_mod( 'texto_color' )); ?>"><?php echo esc_html( get_theme_mod( 'set_texto1' )); ?></p>
                            <a class="btn-solid-lg page-scroll"
                                style="color:<?php echo esc_html( get_theme_mod( 'site_color' )); ?>"
                                href="<?php echo esc_html( get_theme_mod( 'set_link' )); ?>"><?php echo esc_html( get_theme_mod( 'set_btn' )); ?></a>
                      
                    </div> <!-- end of col -->
                    <div class="col-lg-6 col-xl-4">
                        <div class="image-container">
                           

                                <?php if (esc_html( get_theme_mod ('pdn_home_img_settings') != '')) { ?>
                                <img class="img-fluid"
                                    src="<?php  echo esc_html( get_theme_mod ('pdn_home_img_settings'))?>"  >

                                <?php } else {?>
                               
                                <?php }?>

                           
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
   


    <?php if ( esc_html( get_theme_mod( 'set_depoimento_option' ) == 1 )) {?>
    <!-- Testimonials -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Text Slider -->
                    <div class="slider-container">
                        <div class="swiper-container text-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <?php if ( esc_html ( get_theme_mod ('pdn_depoimento1_img_settings') != '')) { ?>
                                        <img class="img-fluid"
                                            src="<?php echo esc_html( get_theme_mod ('pdn_depoimento1_img_settings'))?>">
                                        <?php } else {?>
                                        <img class="img-fluid"
                                            src="<?php echo esc_html( get_template_directory_uri() . '/assets/images/testimonial-1.jpg')?>"
                                            alt="alternative">
                                        <?php }?>

                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text">
                                            <?php echo esc_html( get_theme_mod('set_textodepoimento1')); ?></div>
                                        <div class="testimonial-author"
                                            style="color:<?php echo esc_html( get_theme_mod( 'site_color' )); ?>">
                                            <?php echo esc_html( get_theme_mod( 'set_depoimento1')); ?></div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <?php if ( esc_html( get_theme_mod ('pdn_depoimento2_img_settings') != '')) { ?>
                                        <img class="img-fluid"
                                            src="<?php echo esc_html( get_theme_mod ('pdn_depoimento2_img_settings'))?>">
                                        <?php } else {?>
                                        <img class="img-fluid"
                                            src="<?php echo esc_html( get_template_directory_uri() . '/assets/images/testimonial-2.jpg')?>"
                                            alt="alternative">
                                        <?php }?>

                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text">
                                            <?php echo esc_html( get_theme_mod('set_textodepoimento2')); ?></div>
                                        <div class="testimonial-author"
                                            style="color:<?php echo esc_html( get_theme_mod( 'site_color' )); ?>">
                                            <?php echo esc_html( get_theme_mod( 'set_depoimento2')); ?></div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <?php if ( esc_html( get_theme_mod ('pdn_depoimento3_img_settings') != '')) { ?>
                                        <img class="img-fluid"
                                            src="<?php echo esc_html( get_theme_mod ('pdn_depoimento3_img_settings'))?>">
                                        <?php } else {?>
                                        <img class="img-fluid"
                                            src="<?php echo esc_html( get_template_directory_uri() . '/assets/images/testimonial-3.jpg')?>"
                                            alt="alternative">
                                        <?php }?>

                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text">
                                            <?php echo esc_html( get_theme_mod('set_textodepoimento3')); ?></div>
                                        <div class="testimonial-author"
                                            style="color:<?php echo esc_html( get_theme_mod( 'site_color' )); ?>">
                                            <?php echo esc_html( get_theme_mod( 'set_depoimento3')); ?></div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->



                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of text slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->

    <?php } else { }?>


    <?php if ( esc_html( get_theme_mod( 'set_motivo_option' ) == 1 )) {?>
    <div id="features" class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h2 class="motivotitulo"><?php echo esc_html( get_theme_mod( 'set_motivo_frase1' )); ?></h2>
                    <p class="motivofrase"><?php echo esc_html( get_theme_mod( 'set_motivo_frase2' )); ?></p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Tabs Links -->
                    <ul class="nav nav-tabs" id="argoTabs" role="tablist">
                        <li class="nav-item ">
                            <a style="color:<?php echo esc_html( get_theme_mod( 'site_color' )); ?>"
                                class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab"
                                aria-controls="tab-1"
                                aria-selected="true"><?php echo esc_html( get_theme_mod( 'set_motivo1' )); ?></a>
                        </li>
                        <li class="nav-item">
                            <a style="color:<?php echo esc_html( get_theme_mod( 'site_color' )); ?>" class="nav-link"
                                id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2"
                                aria-selected="false"><?php echo esc_html( get_theme_mod( 'set_motivo2' )); ?></a>
                        </li>
                        <li class="nav-item">
                            <a style="color:<?php echo esc_html( get_theme_mod( 'site_color' )); ?>" class="nav-link"
                                id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3"
                                aria-selected="false"><?php echo esc_html( get_theme_mod( 'set_motivo3' )); ?></a>
                        </li>
                    </ul>
                    <!-- end of tabs links -->

                    <!-- Tabs Content -->
                    <div class="tab-content" id="argoTabsContent">

                        <!-- Tab -->
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="text-container">
                                       
                                        <p class="motivotexto"><?php echo esc_html( get_theme_mod( 'set_textomotivo1' )); ?></p>

                                        <a class="btn-solid-reg popup-with-move-anim"
                                            style="background:<?php echo esc_html( get_theme_mod( 'site_color' )); ?>"
                                            href="#details-lightbox-1"><?php echo esc_html( get_theme_mod( 'set_btn' )); ?></a>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->

                        <!-- Tab -->
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="text-container">
                                      
                                        <p class="motivotexto"><?php echo esc_html(get_theme_mod( 'set_textomotivo2' )); ?></p>

                                        <a class="btn-solid-reg popup-with-move-anim"
                                            style="background:<?php echo esc_html( get_theme_mod( 'site_color' )); ?>"
                                            href="#details-lightbox-2"><?php echo esc_html( get_theme_mod( 'set_btn' )); ?></a>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->

                        <!-- Tab -->
                        <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="text-container">
                                       
                                        <p class="motivotexto"><?php echo esc_html( get_theme_mod( 'set_textomotivo3' )); ?></p>

                                        <a class="btn-solid-reg popup-with-move-anim"
                                            style="background:<?php echo esc_html( get_theme_mod( 'site_color' )); ?>"
                                            href="#details-lightbox-3"><?php echo esc_html( get_theme_mod( 'set_btn' )); ?></a>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->

                    </div> <!-- end of tab content -->
                    <!-- end of tabs content -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of tabs -->

    <?php } else { }?>
   

    <?php if ( esc_html(get_theme_mod( 'set_bloco2_option' ) == 1 )) {?>
    <!-- Description -->
  
 
    <!-- end of header -->
    <div class="cards-1" >
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">

                    <p class="marktitulo1"><?php echo esc_html( get_theme_mod( 'set_texto2' )); ?></p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <?php if (esc_html( get_theme_mod ('pdn_destaque1_img_settings') != '')) { ?>
                            <img class="img-fluid"
                                src="<?php echo esc_html( get_theme_mod ('pdn_destaque1_img_settings'))?>">

                            <?php } else {?>
                            <img class="img-fluid"
                                src="<?php echo esc_html( get_template_directory_uri() . '/assets/images/description-1.png')?>"
                                alt="alternative">

                            <?php }?>

                        </div>
                        <div class="card-body">
                            <h4 class="card-title marktitulo"><?php echo esc_html( get_theme_mod( 'set_titulo1' )); ?></h4>
                            <p class="marktexto"><?php echo esc_html( get_theme_mod( 'set_textodestaque1' )); ?></p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <?php if (esc_html( get_theme_mod ('pdn_destaque2_img_settings') != '')) { ?>
                            <img class="img-fluid"
                                src="<?php echo esc_html( get_theme_mod ('pdn_destaque2_img_settings'))?>">

                            <?php } else {?>
                            <img class="img-fluid"
                                src="<?php echo get_template_directory_uri() . '/assets/images/description-2.png'?>"
                                alt="alternative">

                            <?php }?>

                        </div>
                        <div class="card-body">
                            <h4 class="card-title marktitulo"><?php echo esc_html( get_theme_mod( 'set_titulo2' )); ?></h4>
                            <p class="marktexto"><?php echo esc_html( get_theme_mod( 'set_textodestaque2' )); ?></p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <?php if (esc_html( get_theme_mod ('pdn_destaque3_img_settings') != '')) { ?>
                            <img class="img-fluid"
                                src="<?php echo esc_html( get_theme_mod ('pdn_destaque3_img_settings'))?>">
                            <?php } else {?>
                            <img class="img-fluid"
                                src="<?php echo esc_html( get_template_directory_uri() . '/assets/images/description-3.png')?>"
                                alt="alternative">
                            <?php }?>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title marktitulo"><?php echo esc_html( get_theme_mod( 'set_titulo3' )); ?></h4>
                            <p class="marktexto"><?php echo esc_html( get_theme_mod( 'set_textodestaque3' )); ?></p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> 
    <svg width="100%" height="30" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="degrade" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" style="stop-color: white; stop-opacity: 1" />
                <stop offset="100%" style="stop-color: gray; stop-opacity: 1" />
            </linearGradient>
        </defs>
        <rect width="100%" height="130" fill="url(#degrade)" />
    </svg>

    <?php } else { }?>

    <?php if ( esc_html (get_theme_mod( 'set_autor_option' ) == 1 )) {?>
    <div id="details" class="basic-1">
        <div class="container">
            <h2 style="color:<?php echo esc_html( get_theme_mod( 'site_color' )); ?>">Sobre o Autor</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">

                        <h2><?php echo esc_html( get_theme_mod( 'set_autor' )); ?></h2>
                        <p class="motivotexto"><?php echo esc_html( get_theme_mod( 'set_autortexto' )); ?></p>


                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <?php if ( esc_html( get_theme_mod ('pdn_autor_img_settings') != '')) { ?>
                        <img class="img-fluid" src="<?php echo esc_html( get_theme_mod ('pdn_autor_img_settings'))?>">

                        <?php } else {?>
                        <img class="img-fluid"
                            src="<?php echo esc_html( get_template_directory_uri() . '/assets/images/details.png')?>"
                            alt="alternative">

                        <?php }?>

                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <?php } else { }?>


  
   


    <?php if ( esc_html( get_theme_mod( 'set_video_option' ) == 1 )) {?>
    <!-- Video -->
    <div id="video" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                        <iframe width="560" height="315" src="<?php echo esc_url( get_theme_mod( 'set_link_video')); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                    <div class="p-heading" style="color:<?php  echo esc_html( get_theme_mod( 'site_color' )); ?>">Fiz um
                        vídeo para mostrar mais detalhes sobre o produto.</div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of video -->
    <?php } else { }?>
 

        <div class="social-icons"  >
            <div class="col-lg-4">
                <div class="icon-container">
                    <?php if ( get_theme_mod( 'set_facebook' ) != ''  ) {?>
                    <span class="fa-stack">
                        <a href="<?php echo esc_url( get_theme_mod( 'set_facebook' ));?>">
                            <i style="color:<?php echo esc_html( get_theme_mod( 'social_color' )); ?>"
                                class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook fa-stack-1x"></i>
                        </a>
                    </span>
                    <?php } else { ?> <?php } ?>

                    <?php if ( get_theme_mod( 'set_twitter' ) != ''  ) {?>
                    <span class="fa-stack">
                        <a href="<?php echo esc_url( get_theme_mod( 'set_twitter' ));?>">
                            <i style="color:<?php echo esc_html( get_theme_mod( 'social_color' )); ?>"
                                class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                    <?php } else { ?> <?php } ?>

                    <?php if ( get_theme_mod( 'set_pinterest' ) != ''  ) {?>
                    <span class="fa-stack">
                        <a href="<?php echo esc_url( get_theme_mod( 'set_pinterest' ));?>">
                            <i style="color:<?php echo esc_html( get_theme_mod( 'social_color' )); ?>"
                                class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-pinterest-p fa-stack-1x"></i>
                        </a>
                    </span>
                    <?php } else { ?> <?php } ?>

                    <?php if ( get_theme_mod( 'set_instagram' ) != ''  ) {?>
                    <span class="fa-stack">
                        <a href="<?php echo esc_url( get_theme_mod( 'set_instagram' ));?>">
                            <i style="color:<?php echo esc_html( get_theme_mod( 'social_color' )); ?>"
                                class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x"></i>
                        </a>
                    </span>
                    <?php } else { ?> <?php } ?>

                    <?php if ( get_theme_mod( 'set_linkedin' ) != ''  ) {?>
                    <span class="fa-stack">
                        <a href="<?php echo esc_url( get_theme_mod( 'set_linkedin' ));?>">
                            <i style="color:<?php echo esc_html( get_theme_mod( 'social_color' )); ?>"
                                class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-linkedin-in fa-stack-1x"></i>
                        </a>
                    </span>
                    <?php } else { ?> <?php } ?>
                    <?php if ( get_theme_mod( 'set_youtube' ) != ''  ) {?>
                    <span class="fa-stack">
                        <a href="<?php echo esc_url( get_theme_mod( 'set_youtube' ));?>">
                            <i style="color:<?php echo esc_html( get_theme_mod( 'social_color' )); ?>"
                                class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-youtube fa-stack-1x"></i>
                        </a>
                    </span>
                    <?php } else { ?> <?php } ?>
                </div> <!-- end of col -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->

    

    </div> <!-- end of container -->
    </div> <!-- end of form -->
    <!-- end of newsletter -->
<?php
    get_footer();