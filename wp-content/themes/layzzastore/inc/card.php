<?php
$args1 = array(
    'post_type' => 'product',
    'posts_per_page' => 1,
    'product_cat' => 'banner',
);

$products_query1 = new WP_Query($args1);

if ($products_query1->have_posts() || $products_query2->have_posts() || $products_query3->have_posts()) :
?>

<div >
    <?php
    if ($products_query1->have_posts()) :
        while ($products_query1->have_posts()) : $products_query1->the_post();
    ?>
    
   <div class="container gradient">
    <div class="left-side">
    <h4 class="product-frase"> <?php echo esc_html( get_theme_mod( 'set_banner' )); ?></h4>
    <h2 class="product-title1"><?php the_title(); ?></h2>
    <p class="product-description1"><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
    <a href="<?php the_permalink(); ?>" class="ver-oferta-button1">Ver Oferta</a>
    </div>
    <div class="middle">
       
    </div>
   
    <div class="right-side moldura">
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('medium'); ?>
    </a>
    </div>
    <div class="middle">
       
       </div>
</div>
</div>


    <?php
        endwhile;
    endif;
    ?>
</div>

<?php
    wp_reset_postdata();
endif;
?>

<style>
/* Estilize o card */

.product-frase {
    font-size: 42px;
  
    color: <?php echo esc_html( get_theme_mod( 'cor_frase_color' )); ?>;
    padding: 2%;
}

.product-title1 {
    font-size: 48px;
  
    color: <?php echo esc_html( get_theme_mod( 'cor_titulo_color' )); ?>;
}
.product-description1 {
    font-size: 24px;
    color: <?php echo esc_html( get_theme_mod( 'cor_texto_color' )); ?>;
   
}


/* Estilos do botão "Ver Oferta" */
.ver-oferta-button1 {
    background-color: <?php echo esc_html( get_theme_mod( 'cor_fundo_botao_color' )); ?>;
    color: <?php echo esc_html( get_theme_mod( 'cor_texto_botao_color' )); ?>;
    text-align: center;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.ver-oferta-button1:hover {
    background-color: #0057b3;
}

.container {
    display: flex;
    align-items: center; /* Centralize verticalmente */
    width: 100%;
    height: 450px; /* Metade da altura da janela de visualização */
    background-color: #333; /* Cor de fundo do container */
    position: relative;
    border-radius: 65px; /* Cantos arredondados */
}

.left-side {
    flex-basis: 90%; /* 30% da largura do container para o lado esquerdo */
    text-align: center;
   
}

.middle {
    flex-basis: 5%; /* 40% da largura do container para o meio (meia lua) */
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: transparent; /* Cor de fundo transparente */
    position: relative;
}


.right-side img {
    max-width: 72%; /* Garante que a imagem não seja maior que o container */
    max-height: 72%; /* Garante que a imagem não seja maior que o container */
    object-fit: cover; /* Redimensionar a imagem para cobrir todo o espaço */
    margin-left: 1%;
}

.moldura{
    flex-basis: 40%; /* 30% da largura do container para o lado esquerdo */
    padding: 30px;
    background-color: #fff; /* Cor de fundo do lado esquerdo */
    text-align: center;
    border-top-left-radius: 15%; /* Canto superior esquerdo arredondado */
    border-bottom-left-radius: 45%; /* Canto inferior esquerdo arredondado */
    border-top-right-radius: 45%; /* Canto superior esquerdo arredondado */
    border-bottom-right-radius: 15%; /* Canto inferior esquerdo arredondado */
    margin-left: 1%;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.9); /* Sombra mais destacada */
}

h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

p {
    font-size: 16px;
    margin-bottom: 20px;
}



/* Estilize a borda circular em torno da imagem */
.middle {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%; /* Garante que a meia lua cubra todo o espaço verticalmente */
}

.gradient {
        background: linear-gradient(45deg, <?php echo esc_html( get_theme_mod( 'cor_fundo_1_color' )); ?> 0%, <?php echo esc_html( get_theme_mod( 'cor_fundo_2_color' )); ?> 100%);
}
@media screen and (max-width: 768px) {

    .product-frase {
    font-size: 22px;
    margin: 20 0 10px; /* Espaço na parte inferior do título */
    color: <?php echo esc_html( get_theme_mod( 'cor_frase_color' )); ?>;
    padding: 2%;
}

.product-title1 {
    font-size: 28px;
    margin: 20 0 10px; /* Espaço na parte inferior do título */
    color: <?php echo esc_html( get_theme_mod( 'cor_titulo_color' )); ?>;
}
.product-description1 {
    font-size: 14px;
    color: <?php echo esc_html( get_theme_mod( 'cor_texto_color' )); ?>;
    margin-bottom: 20px 20px 20px 10px; /* Espaço na parte inferior da descrição */
}

     }

</style>
