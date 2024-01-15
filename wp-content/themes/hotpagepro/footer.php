<div class="widget-section">
    <?php if (is_active_sidebar('central_widgets')) : ?>
        <?php dynamic_sidebar('central_widgets'); ?>
    <?php endif; ?>
 </div>


    <!-- Copyright -->
    <div class="copyright" style="background:#000">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p><?php echo esc_html( get_theme_mod( 'set_copyright' )); ?> 
                    <a class="devfree" href="https://devfree.com.br">- Desenvolvido por DevFree</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
   
    <!-- Popper tooltip library for Bootstrap -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.min.js'?>"></script>
    <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/bootstrap.min.js'?>"></script>
    <!-- Bootstrap framework -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.easing.min.js'?>"></script>
    <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/swiper.min.js'?>"></script>
    <!-- Swiper for image and text sliders -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js'?>"></script>
    <!-- Magnific Popup for lightboxes -->
   
    <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/scripts.js'?>"></script> <!-- Custom scripts -->
</body>

</html>
<style>
    .devfree{
	font-size: 8px; /* Tamanho dos ícones */
	text-decoration: none;
	color: #999; 
}
</style>