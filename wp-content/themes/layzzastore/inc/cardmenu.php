<?php
// Template para exibir categorias com nomes e imagens

$categories = get_terms(array(
    'taxonomy' => 'product_cat',
    'hide_empty' => false,
));

if (!empty($categories)) {
    echo '<div class="category-cards-container">'; // Inicie o contêiner fora do loop
    
    foreach ($categories as $category) {
        // Verifique se a categoria não é 'png', 'banner', 'slider1', 'slider2', 'slider3', ou 'sem-categoria'
        if (!in_array($category->slug, array('png', 'banner', 'slider1', 'slider2', 'slider3', 'sem-categoria'))) {
            $category_link = esc_url(get_term_link($category));
            $category_name = esc_html($category->name);
            $category_image = get_term_meta($category->term_id, 'thumbnail_id', true);
            
            // Obtém a URL da imagem em uma única consulta
            $image = '';
            if (!empty($category_image)) {
                $image = wp_get_attachment_url($category_image);
            }

            echo '<div class="ver-button">';
            echo '<a href="' . $category_link . '">';
            echo '<h4>' . $category_name . '</h4>';
            echo '</a>';
            echo '</div>';
        }
    }
    
    echo '</div>'; // Feche o contêiner fora do loop
}
?>



<style>
/* Estilo para o contêiner dos cards de categoria */
.category-cards-container {
    overflow-x: auto; /* Adiciona uma barra de rolagem horizontal se necessário */
    white-space: nowrap; /* Impede que os cards quebrem em várias linhas */
    display: flex; /* Exibe os cards lado a lado */
    flex-wrap: nowrap; /* Impede que os cards quebrem em várias linhas no eixo principal (horizontal) */
}


/* Estilos do botão "Ver Oferta" */
.ver-button {
    background-color: <?php echo esc_html( get_theme_mod( 'fundo_menu_color' )); ?>;
    color: <?php echo esc_html( get_theme_mod( 'texto_menu_color' )); ?>;
    text-align: center;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s;
    margin-left: 20px;
    margin-bottom: 15px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.9); /* Sombra mais destacada */
}

.ver-button h4 {
   
    color: <?php echo esc_html( get_theme_mod( 'texto_menu_color' )); ?>;
    }

.ver-button:hover {
    background-color: #0057b3;
}





</style>
