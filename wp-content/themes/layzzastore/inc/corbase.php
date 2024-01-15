<?php


?>

<style>
    /** Single */
    /* Estilo personalizado para o botão "Comprar" */
.single-product .product .single_add_to_cart_button {
  background-color: <?php echo esc_html( get_theme_mod( 'fundo_menu_color' )); ?> !important; /* Cor de fundo do botão */
  color: <?php echo esc_html( get_theme_mod( 'texto_menu_color' )); ?> !important; /* Cor do texto do botão */
  border: none;
  border-radius: 110px; /* Cantos arredondados */
  padding: 10px 20px; /* Espaçamento interno do botão */
  font-size: 20px; /* Tamanho da fonte do botão */
  cursor: pointer;
  transition: background-color 0.3s ease;
}
/* Estilização do botão "Leia mais" dentro de elementos <li> */
ul.products li.product .button {
    background-color: <?php echo esc_html( get_theme_mod( 'fundo_menu_color' )); ?> !important; /* Cor de fundo do botão */
    color: <?php echo esc_html( get_theme_mod( 'texto_menu_color' )); ?> !important; /* Cor do texto do botão */
    padding: 10px 20px;
    border: none;
    border-radius: 110px; /* Cantos arredondados */
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-decoration: none; /* Remova a decoração de link */
    display: inline-block; /* Certifique-se de que o botão ocupe apenas o espaço necessário */
    margin-bottom: 10px;
}


/* Estilos para o botão de finalização da compra */
.woocommerce-checkout #place_order {
    background-color: <?php echo esc_html( get_theme_mod( 'fundo_menu_color' )); ?> !important; /* Cor de fundo do botão */
    color: <?php echo esc_html( get_theme_mod( 'texto_menu_color' )); ?> !important; /* Cor do texto do botão */
    border: none;
    border-radius: 110px; /* Cantos arredondados */
    padding: 10px 20px;
    text-transform: uppercase;
    transition: background-color 0.3s;
}

/** page */



    /* Estilização do botão "Leia mais" dentro de elementos <li> */
ul.products li.product .button {
    background-color: <?php echo esc_html( get_theme_mod( 'fundo_menu_color' )); ?> !important; /* Cor de fundo do botão */
    color: <?php echo esc_html( get_theme_mod( 'texto_menu_color' )); ?> !important; /* Cor do texto do botão */
    padding: 10px 20px;
    border: none;
    border-radius: 110px; /* Cantos arredondados */
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-decoration: none; /* Remova a decoração de link */
    display: inline-block; /* Certifique-se de que o botão ocupe apenas o espaço necessário */
    margin-bottom: 10px;
}


   /* Estilo para os círculos rede social */
 
   .container1 {
  
  width: 100%;

}
.icon-wrapper {
      width: 100%;
      display: flex;
      justify-content: center; /* Centralizar horizontalmente */
  }

  /* Estilo para a linha de ícones */
  .icon-container {
      display: flex;
      justify-content: space-around; /* Espaço igual entre os ícones */
      flex-wrap: wrap; /* Quebra para a próxima linha se necessário */
      max-width: 800px; /* Defina uma largura máxima para os ícones se desejar */
      width: 100%;
     
  }
 .icon-container .fa-stack i.fa-circle {
      font-size: 40px; /* Tamanho do círculo */
      padding: 10px; /* Espaçamento interno do círculo */
      background-color: <?php echo esc_html( get_theme_mod( 'fundo_menu_color' )); ?>; /* Cor de fundo azul */
      border-radius: 50%; /* Para tornar o círculo */
      display: flex;
      justify-content: center;
      align-items: center;
  }

  /* Estilo para os ícones das redes sociais */
  .icon-container .fa-stack i.fab {
      font-size: 30px; /* Tamanho do ícone */
      color: white; /* Cor do ícone */
    
  }

  /* Estilo para centralizar os ícones dentro dos círculos */
  .icon-container .icon {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 15px; /* Mova 2px para baixo */
      margin-left: 10px; /* Mova 5px para a direita */
     
  }

  /* Estilo de hover (opcional) */
  .icon-container .fa-stack a:hover .fa-circle {
      background-color: #333; /* Cor do círculo ao pass */
     
}
.title {
    font-size: 32px; /* Tamanho da fonte do título */
    color: <?php echo esc_html( get_theme_mod( 'texto_loja_color' )); ?>; /* Cor do título (substitua pelo código da cor desejada) */
    margin-top: 15px; /* Espaçamento superior para as opções */

    
}

/* Estilo para o título do produto */
ul.products li.product h2.woocommerce-loop-product__title {
    font-size: 20px; /* Tamanho da fonte do título */
    color: #000; /* Cor do texto do título */
    margin: 10px 0; /* Espaçamento superior e inferior do título */
}

</style>