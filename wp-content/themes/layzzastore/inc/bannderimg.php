<?php
// Recupere a URL da imagem definida no controle 'pdn_banner_img_control' para cada seção
$banner_img_url_1 = get_theme_mod('pdn_banner_img_settings_1');
$banner_img_url_2 = get_theme_mod('pdn_banner_img_settings_2');
$banner_img_url_3 = get_theme_mod('pdn_banner_img_settings_3');

$args1 = array(
    'post_type' => 'product',
    'posts_per_page' => 1,
    'product_cat' => 'slider1',
);

$args2 = array(
    'post_type' => 'product',
    'posts_per_page' => 1,
    'product_cat' => 'slider2',
);

$args3 = array(
    'post_type' => 'product',
    'posts_per_page' => 1,
    'product_cat' => 'slider3',
);

$products_query1 = new WP_Query($args1);
$products_query2 = new WP_Query($args2);
$products_query3 = new WP_Query($args3);

if ($products_query1->have_posts() || $products_query2->have_posts() || $products_query3->have_posts()) :
?>

<div class="container3">
    <div class="slider-container">
        <div class="slider">
            <?php if (!empty($banner_img_url_1) && $products_query1->have_posts()) : ?>
            <div class="slide">
                <?php while ($products_query1->have_posts()) : $products_query1->the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <img class="img-banner" src="<?php echo esc_url($banner_img_url_1); ?>">
                </a>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>

            <?php if (!empty($banner_img_url_2) && $products_query2->have_posts()) : ?>
            <div class="slide">
                <?php while ($products_query2->have_posts()) : $products_query2->the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <img class="img-banner" src="<?php echo esc_url($banner_img_url_2); ?>">
                </a>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>

            <?php if (!empty($banner_img_url_3) && $products_query3->have_posts()) : ?>
            <div class="slide">
                <?php while ($products_query3->have_posts()) : $products_query3->the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <img class="img-banner" src="<?php echo esc_url($banner_img_url_3); ?>">
                </a>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>

            <?php wp_reset_postdata(); // Restaura os dados do post original ?>
        </div>
    </div>
</div>

<?php endif; ?>

<style>
/* Estilize o card */

.container3 {
    width: 100%;
    margin-bottom: 20px;
}

/* Estilos para o slider container */
.slider-container {
    max-width: 100%;
    overflow: hidden;
}

/* Estilos para o slider */
.slider {
    display: flex;
    transition: transform 0.5s ease;
}

/* Estilos para cada slide */
.slide {
    flex: 0 0 100%;
    padding: 0 0px; /* Espaçamento entre slides, ajuste conforme necessário */
}

/* Estilos para a imagem do banner */
.img-banner {
    width: 100%;
    height: auto;
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
jQuery(document).ready(function ($) {
    // Configurações do slider
    var $slider = $('.slider');
    var $slides = $('.slide');
    var slideCount = $slides.length;
    var currentIndex = 0;
    var interval = 5000; // Intervalo em milissegundos entre as transições

    // Função para avançar para o próximo slide
    function nextSlide() {
        currentIndex = (currentIndex + 1) % slideCount;
        updateSlider();
    }

    // Função para atualizar o slider para o slide atual
    function updateSlider() {
        var translateValue = -currentIndex * 100 + '%';
        $slider.css('transform', 'translateX(' + translateValue + ')');
    }

    // Iniciar o slider
    var sliderInterval = setInterval(nextSlide, interval);

    // Parar o slider quando o mouse estiver sobre ele
    $slider.on('mouseenter', function () {
        clearInterval(sliderInterval);
    });

   // Retomar o slider quando o mouse sair
    $slider.on('mouseleave', function () {
        sliderInterval = setInterval(nextSlide, interval);
    });
});
</script>
