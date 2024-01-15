<?php
/**
 * O modelo para exibir uma única postagem.
 *
 * @package WordPress
 * @subpackage Seu_Tema
 * @since Seu_Tema 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area bordacentral">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) :
                the_post();

                // Inclui o modelo de conteúdo da postagem
                get_template_part( 'template-parts/content', get_post_format() );

                // Se houver comentários, exibe a seção de comentários
              

            endwhile; // Fim do loop.

            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();

?>


