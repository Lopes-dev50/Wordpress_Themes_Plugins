<?php if ( esc_html(get_theme_mod( 'set_social_option' ) == 1 )) {?>
<?php get_template_part('inc/redesocial'); ?>
<?php } else { }?>
</div><!-- #content -->
<div class="footer-base">
<?php if ( esc_html(get_theme_mod( 'set_rodape1_option' ) == 1 )) {?>
       <div class="footer-base-div">
            <h4><?php echo esc_html( get_theme_mod( 'set_rodape1' )); ?></h4>
            <p><?php echo esc_html( get_theme_mod( 'set_rodapelinha1' )); ?></p>
            <p><?php echo esc_html( get_theme_mod( 'set_rodapelinha2' )); ?></p>
            <p><?php echo esc_html( get_theme_mod( 'set_rodapelinha3' )); ?></p>
        </div>
        <?php } else { }?>
        <!-- Segunda div do footer -->
        <?php if ( esc_html(get_theme_mod( 'set_rodape2_option' ) == 1 )) {?>
        <div class="footer-base-div menu-rodape">
            <p>Links úteis</p>
            <?php
          if (has_nav_menu('second')) {
              wp_nav_menu(array(
                  'theme_location' => 'second',
                  'container' => 'nav',
                  'container_class' => 'second',
                  'menu_class' => 'second-lista'
              ));
          }
          ?>

        </div>
        <?php } else { }?>
        <!-- Terceira div do footer -->
        <?php if ( esc_html (get_theme_mod( 'set_rpbanner_option' ) == 1 )) {?>
        <div class="footer-base-div">
        <p>Formas de pagamento</p>
       

<?php ( esc_html( get_theme_mod ('pdn_rpbanner_img_settings')))  ?>
          <img class="img-rodape" src="<?php echo esc_html( get_theme_mod ('pdn_rpbanner_img_settings'))?>">
          <?php } else { }?>
        </div>
        
</div>
<footer  class="site-footer" role="contentinfo">
    <div class="site-info">
    
        <?php
        printf( esc_html__( '© %1$s %2$s. Todos os direitos reservados.', 'text-domain' ), date( 'Y' ), get_bloginfo( 'name' ) );
        ?>
      
    </div><!-- .site-info -->
   
    <p class="site-info"> <?php echo esc_html( get_theme_mod( 'set_frasefinal' )); ?></p>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
