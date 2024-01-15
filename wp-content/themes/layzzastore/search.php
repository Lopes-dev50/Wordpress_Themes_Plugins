<?php
/**
 * O modelo para exibir resultados de pesquisa.
 *
 * @package WordPress
 * @subpackage Seu_Tema
 * @since Seu_Tema 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <header class="page-header">
                <h1 class="page-title"><?php printf( esc_html__( 'Resultados da pesquisa por: %s', 'seu-tema' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </header><!-- .page-header -->

            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();

                    // Inclui o modelo de conteúdo da postagem
                    get_template_part( 'template-parts/content', 'search' );

                endwhile;

                // Paginação
                the_posts_pagination();

            else :
                // Se não houver resultados, exibe uma mensagem de "Nada encontrado"
                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
