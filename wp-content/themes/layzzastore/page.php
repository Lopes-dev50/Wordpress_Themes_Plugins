<?php
/**
 * O modelo para exibir páginas individuais.
 *
 * @package WordPress
 * @subpackage Seu_Tema
 * @since Seu_Tema 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        while (have_posts()) :
            the_post();

            // Verifica se a página tem uma imagem em destaque (thumbnail) e a exibe
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            }

            // Exibe o título da página
            the_title('<h1 class="entry-title">', '</h1>');

            // Exibe o conteúdo da página
            the_content();

            // Se houver comentários ativados, exibe a seção de comentários
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile; // Fim do loop.

        ?>
     
    </main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
