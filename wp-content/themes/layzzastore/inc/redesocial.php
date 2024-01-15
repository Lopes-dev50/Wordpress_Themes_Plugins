<div class="container1">
    <div class="row">
        <div class="col-lg-12">
            <div class="icon-wrapper"> <!-- Nova div para envolver os ícones -->
                <div class="icon-container center-icons"> <!-- Mantenha a classe center-icons para centralizar os ícones -->
               
            <?php if ( get_theme_mod( 'set_facebook' ) != '#'  ) {?>
                    <span class="fa-stack">
                        <a href="<?php echo esc_url( get_theme_mod( 'set_facebook' ));?>">
                            <i style="color:<?php echo esc_html( get_theme_mod( 'site_color' )); ?>"
                                class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook fa-stack-1x icon"></i> <!-- Adicione a classe icon -->
                        </a>
                    </span>
                    <?php } else { ?> <?php } ?>

                    <?php if ( get_theme_mod( 'set_twitter' ) != '#'  ) {?>
                    <span class="fa-stack">
                        <a href="<?php echo esc_url( get_theme_mod( 'set_twitter' ));?>">
                            <i style="color:<?php echo esc_html( get_theme_mod( 'site_color' )); ?>"
                                class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x icon"></i> <!-- Adicione a classe icon -->
                        </a>
                    </span>
                    <?php } else { ?> <?php } ?>

                    <?php if ( get_theme_mod( 'set_pinterest' ) != '#'  ) {?>
                    <span class="fa-stack">
                        <a href="<?php echo esc_url( get_theme_mod( 'set_pinterest' ));?>">
                            <i style="color:<?php echo esc_html( get_theme_mod( 'site_color' )); ?>"
                                class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-pinterest-p fa-stack-1x icon"></i> <!-- Adicione a classe icon -->
                        </a>
                    </span>
                    <?php } else { ?> <?php } ?>

                    <?php if ( get_theme_mod( 'set_instagram' ) != '#'  ) {?>
                    <span class="fa-stack">
                        <a href="<?php echo esc_url( get_theme_mod( 'set_instagram' ));?>">
                            <i style="color:<?php echo esc_html( get_theme_mod( 'site_color' )); ?>"
                                class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x icon"></i> <!-- Adicione a classe icon -->
                        </a>
                    </span>
                    <?php } else { ?> <?php } ?>

                    <?php if ( get_theme_mod( 'set_linkedin' ) != '#'  ) {?>
                    <span class="fa-stack">
                        <a href="<?php echo esc_url( get_theme_mod( 'set_linkedin' ));?>">
                            <i style="color:<?php echo esc_html( get_theme_mod( 'site_color' )); ?>"
                                class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-linkedin-in fa-stack-1x icon"></i> <!-- Adicione a classe icon -->
                        </a>
                    </span>
                    <?php } else { ?> <?php } ?>
                    <?php if ( get_theme_mod( 'set_youtube' ) != '#'  ) {?>
                    <span class="fa-stack">
                        <a href="<?php echo esc_url( get_theme_mod( 'set_youtube' ));?>">
                            <i style="color:<?php echo esc_html( get_theme_mod( 'site_color' )); ?>"
                                class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-youtube fa-stack-1x icon"></i> <!-- Adicione a classe icon -->
                        </a>
                    </span>
                    <?php } else { ?> <?php } ?>

                <!-- Continue para as outras redes sociais da mesma maneira -->
            </div> <!-- end of icon-container -->
        </div> <!-- end of col-lg-12 -->
    </div> <!-- end of row -->
    </div>
</div>
<?php
get_template_part('inc/corbase');
?>