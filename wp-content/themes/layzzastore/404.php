<?php
/**
 * O modelo para exibir a página de erro 404 (Página não encontrada).
 *
 * @package WordPress
 * @subpackage Seu_Tema
 * @since Seu_Tema 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <section class="error-404 not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Página não encontrada', 'seu-tema' ); ?></h1>
                </header><!-- .page-header -->

                <div class="page-content">
                    <p><?php esc_html_e( 'Desculpe, mas a página que você está procurando não existe.', 'seu-tema' ); ?></p>
                    <p><?php esc_html_e( 'Você pode usar a pesquisa abaixo para encontrar algo que lhe interesse.', 'seu-tema' ); ?></p>

                    <?php get_search_form(); ?>

                </div><!-- .page-content -->
            </section><!-- .error-404 -->

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
