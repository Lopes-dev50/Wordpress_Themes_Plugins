</header><!-- #masthead -->
    <div class="header-menu">
    <div class="desktop-menu">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary', // Nome do menu registrado no WordPress
            'container' => false,
            'menu_class' => 'menu-desktop'
        ));
        ?>
    </div>

    <div class="mobile-menu-toggle">
        <div class="hamburger"></div>
    </div>

    <div class="mobile-menu">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary', // Nome do menu registrado no WordPress
            'container' => false,
            'menu_class' => 'menu-mobile'
        ));
        ?>
    </div>
</div>

<style>
    .header-menu {
     background-color: <?php echo esc_html( get_theme_mod( 'fundo_menu_color' )); ?>;
 }
.menu-desktop a {
    color: <?php echo esc_html( get_theme_mod( 'texto_menu_color' )); ?>;
}
.menu-desktop a:hover {
    color: <?php echo esc_html( get_theme_mod( 'mouse_menu_color' )); ?>;
}
</style>