<?php
$args1 = array(
    'post_type' => 'product',
    'posts_per_page' => 1,
    'product_cat' => 'banner',
);

$args2 = array(
    'post_type' => 'product',
    'posts_per_page' => 1,
    'product_cat' => 'card1',
);

$args3 = array(
    'post_type' => 'product',
    'posts_per_page' => 1,
    'product_cat' => 'card2',
);

$products_query1 = new WP_Query($args1);
$products_query2 = new WP_Query($args2);
$products_query3 = new WP_Query($args3);

if ($products_query1->have_posts() || $products_query2->have_posts() || $products_query3->have_posts()) :
?>

<div class="product-grid1">
    <?php
    if ($products_query1->have_posts()) :
        while ($products_query1->have_posts()) : $products_query1->the_post();
    ?>
            <div class="product-card1 large-card1 gradient">
           
                <div class="product-details1">
                <h4 class="product-frase"> <?php echo esc_html( get_theme_mod( 'set_banner' )); ?></h4>
                    <h2 class="product-title1"><?php the_title(); ?></h2>
                    <p class="product-description1"><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="ver-oferta-button1">Ver Oferta</a>
                </div>
                <div class="product-image1">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                    </a>
                </div>
               
            </div>
    <?php
        endwhile;
    endif;
    ?>

    <div class="small-cards-container">
        <?php
        if ($products_query2->have_posts() || $products_query3->have_posts()) :
            if ($products_query2->have_posts()) :
                while ($products_query2->have_posts()) : $products_query2->the_post();
        ?>
                    <div class="product-card1 small-card1 gradient2">
                    <div class="product-details2">
                            <h2 class="product-title2"><?php the_title(); ?></h2>
                            <p class="product-description2"><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                         
                        </div>   
                       
                           <div class="product-image2">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        </div>
                      
                    </div>
        <?php
                endwhile;
            endif;
            if ($products_query3->have_posts()) :
                while ($products_query3->have_posts()) : $products_query3->the_post();
        ?>
                    <div class="product-card1 small-card1 gradient2">
                    <div class="product-details3">
                            <h2 class="product-title2"><?php the_title(); ?></h2>
                            <p class="product-description2"><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                          
                        </div> 
                       
                    <div class="product-image2">
                            <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                            </a>
                        </div>
                       
                    </div>
        <?php
                endwhile;
            endif;
        endif;
        ?>
    </div>
</div>

<?php
    wp_reset_postdata();
endif;
?>

<style>
.product-grid1 {
    display: grid;
    grid-template-columns: 40% 30% 30%; /* Três colunas com larguras definidas */
    grid-gap: 10px; /* Espaçamento entre os cards */
}

.product-card1 {
    display: flex;
    border: 1px solid #333;
    padding: 20px;
    box-sizing: border-box;
    margin-bottom: 20px; /* Espaço entre os cards */
    border-radius: 5px;
    
}

/* Estilo do card maior */
.large-card1 {
    grid-column: span 2; /* Card ocupa duas colunas */
}

/* Estilo dos cards menores (Card 2 e Card 3) */
.small-card1 {
    grid-column: span 1; /* Card ocupa uma coluna */
}

/* Estilos da imagem do produto */
.product-image1 img {
    max-width: 100%;
    height: auto;
    margin-right: 20px; /* Espaço à direita da imagem */
    margin-top: 30px;
    border-radius: 5px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Sombra mais destacada */
}

/* Estilos da imagem do produto */
.product-image2 img {
    max-width: 100%;
    height: auto;
    margin-right: 5px; /* Espaço à direita da imagem */
    border-radius: 5px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Sombra mais destacada */
}

/* Estilos do título e descrição do produto */
.product-details1 {
    flex: 1; /* Expande para preencher o espaço disponível */
}

.product-details2 {
  color:#0073e6;/* Expande para preencher o espaço disponível */
}

.product-frase {
    font-size: 28px;
    margin: 20 0 10px; /* Espaço na parte inferior do título */
    color: <?php echo esc_html( get_theme_mod( 'cor_frase_color' )); ?>;
}

.product-title1 {
    font-size: 28px;
    margin: 20 0 10px; /* Espaço na parte inferior do título */
    color: <?php echo esc_html( get_theme_mod( 'cor_titulo_color' )); ?>;
}

.product-title2 {
    font-size: 18px;
    margin: 0 0 10px; /* Espaço na parte inferior do título */
    color: <?php echo esc_html( get_theme_mod( 'cor_titulo_card_color' )); ?>;
}

.product-description1 {
    font-size: 24px;
    color: <?php echo esc_html( get_theme_mod( 'cor_texto_color' )); ?>;
    margin-bottom: 20px 20px 20px 10px; /* Espaço na parte inferior da descrição */
}

.product-description2 {
    font-size: 14px;
    color: <?php echo esc_html( get_theme_mod( 'cor_texto_card_color' )); ?>;
    margin-bottom: 10px; /* Espaço na parte inferior da descrição */
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

/* Estilos dos cartões menores */
.small-cards-container {
    display: flex;
    flex-direction: column;
    gap: 0px;
}


.gradient {
        background: linear-gradient(45deg, <?php echo esc_html( get_theme_mod( 'cor_fundo_1_color' )); ?> 0%, <?php echo esc_html( get_theme_mod( 'cor_fundo_2_color' )); ?> 100%);
}

 
.gradient2 {
        background: linear-gradient(45deg, <?php echo esc_html( get_theme_mod( 'cor_card_1_color' )); ?> 0%, <?php echo esc_html( get_theme_mod( 'cor_card_2_color' )); ?> 100%);
}  

</style>
