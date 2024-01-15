<?php
/*
Plugin Name: AvisoBR
Description: Este plugin exibirá um card de aviso na tela automaticamente, 15 segundos após o usuário acessar o conteúdo. É uma ferramenta útil para comunicar informações importantes aos visitantes do seu site.
Version: 1.0
Author: Sandro Lopes - DevFree
Author URI: https://devfree.com.br
*/

// Função para adicionar o menu personalizado
function snlcardbr_menu() {
    add_menu_page(
        'Aviso BR',
        'Aviso BR',
        'manage_options',
        'snlcardbr',
        'snlcardbr_page',
        'dashicons-admin-generic', // Ícone para o menu (opcional)
        26 // Posição do menu abaixo de "Comentários"
    );
}
add_action('admin_menu', 'snlcardbr_menu');

// Função para exibir a página de configurações
function snlcardbr_page() {?>
    <div class="wrap">
        <h2>Aviso BR</h2>
        <form method="post" action="options.php">
            <?php settings_fields('snlcardbr_settings_group');?>
            <?php do_settings_sections('snlcardbr');?>
            <?php submit_button();?>
        </form>
    </div>
<?php }
// Função para mostrar o card de aviso na administração
function snlcardbr_mostra_site() {
    $ativar = get_option('snlcardbr_ativar');
    if ($ativar == 1) {
        $titulo = get_option('snlcardbr_titulo');
        $texto = get_option('snlcardbr_texto');
        $link = get_option('snlcardbr_link');
        $cor_de_texto = get_option('snlcardbr_cor_de_texto');
        $cor_de_titulo = get_option('snlcardbr_cor_de_titulo');
        $cor_de_fundo = get_option('snlcardbr_cor_de_fundo');?>
        <div class="background-div" style="background-color: <?php echo esc_attr($cor_de_fundo);?>">
            <button id="close-button" style="background-color: <?php echo esc_attr($cor_de_fundo);?>">x</button>
            <a href="<?php echo esc_url($link);?>">
                <div class="content">
                    <h2 style="color: <?php echo esc_attr($cor_de_titulo);?>"><?php echo esc_html($titulo);?></h2>
                    <p style="color: <?php echo esc_attr($cor_de_texto);?>"><?php echo esc_html($texto);?></p>
                </div>
            </a>
        </div>

        <script>
       document.addEventListener('DOMContentLoaded', function() {
    var backgroundDiv = document.querySelector('.background-div');
    var closeButton = document.getElementById('close-button');
    var timer;
    
    // Função para mostrar a div após o tempo especificado
    function showDivAfterTimer() {
        timer = setTimeout(function() {
            backgroundDiv.style.display = 'block';
        }, 15000); // 15000 milissegundos = 15 segundos
    }

    // Função para definir um cookie de aviso
    function setAvisoCookie() {
        var expirationDate = new Date();
        expirationDate.setHours(expirationDate.getHours() + 12); // Expira após 12 horas
        document.cookie = "aviso_exibido=true; expires=" + expirationDate.toUTCString() + "; path=/";
    }

    // Função para verificar se o cookie de aviso existe
    function checkAvisoCookie() {
        var cookies = document.cookie.split('; ');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i].split('=');
            if (cookie[0] === 'aviso_exibido' && cookie[1] === 'true') {
                return true;
            }
        }
        return false;
    }

    // Verificar se o cookie de aviso existe
    if (checkAvisoCookie()) {
        backgroundDiv.style.display = 'none'; // Ocultar a div se o cookie existir
    } else {
        showDivAfterTimer(); // Mostrar a div se o cookie não existir
    }

    // Adicionar ouvinte de eventos para o botão "Close"
    closeButton.addEventListener('click', function() {
        backgroundDiv.style.display = 'none';
        clearTimeout(timer); // Cancelar o temporizador atual
        setAvisoCookie(); // Definir um cookie de aviso após o botão "Close" ser clicado
    });
});


        </script>
    <?php }
}

// Adicionar a função para exibir o card na administração
add_action('wp_footer', 'snlcardbr_mostra_site');



// Função para enfileirar scripts e estilos
function snlcardbr_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('wp-color-picker');
    wp_enqueue_style('wp-color-picker');
    
    // Enfileirar estilos CSS personalizados
    wp_enqueue_style('custom-style', plugin_dir_url(__FILE__) . 'custom.css');

    // Enfileirar script JavaScript personalizado
    wp_enqueue_script('custom-script', plugin_dir_url(__FILE__) . 'custom.js', array('jquery', 'wp-color-picker'), '1.0', true);
}
add_action('admin_enqueue_scripts', 'snlcardbr_enqueue_scripts');

// Função de registro de configurações e campos personalizados
function snlcardbr_register_settings() {
    register_setting('snlcardbr_settings_group', 'snlcardbr_titulo');
    register_setting('snlcardbr_settings_group', 'snlcardbr_texto');
    register_setting('snlcardbr_settings_group', 'snlcardbr_link');
    register_setting('snlcardbr_settings_group', 'snlcardbr_cor_de_fundo');
    register_setting('snlcardbr_settings_group', 'snlcardbr_cor_de_titulo');
    register_setting('snlcardbr_settings_group', 'snlcardbr_cor_de_texto');
    register_setting('snlcardbr_settings_group', 'snlcardbr_ativar');

    add_settings_section('snlcardbr_section_id', 'Campos do Aviso Br', 'snlcardbr_section_callback', 'snlcardbr');

    add_settings_field('snlcardbr_field_titulo', 'Título', 'snlcardbr_field_titulo_callback', 'snlcardbr', 'snlcardbr_section_id');
    add_settings_field('snlcardbr_field_texto', 'Texto', 'snlcardbr_field_texto_callback', 'snlcardbr', 'snlcardbr_section_id');
    add_settings_field('snlcardbr_field_link', 'Link', 'snlcardbr_field_link_callback', 'snlcardbr', 'snlcardbr_section_id');
    add_settings_field('snlcardbr_field_cor_de_titulo', 'Cor de Título', 'snlcardbr_field_cor_de_titulo_callback', 'snlcardbr', 'snlcardbr_section_id');
    add_settings_field('snlcardbr_field_cor_de_texto', 'Cor de Texto', 'snlcardbr_field_cor_de_texto_callback', 'snlcardbr', 'snlcardbr_section_id');
    add_settings_field('snlcardbr_field_cor_de_fundo', 'Cor de Fundo', 'snlcardbr_field_cor_de_fundo_callback', 'snlcardbr', 'snlcardbr_section_id');
    add_settings_field('snlcardbr_field_ativar', 'Ativar/Desativar', 'snlcardbr_field_ativar_callback', 'snlcardbr', 'snlcardbr_section_id');
}
add_action('admin_init', 'snlcardbr_register_settings');

// Função de callback da seção de configurações
function snlcardbr_section_callback() {
    echo 'Configure os campos de Aviso Br:';
}

// Função de callback do campo de título
function snlcardbr_field_titulo_callback() {
    $titulo = get_option('snlcardbr_titulo');
    echo '<input type="text" name="snlcardbr_titulo" value="' . esc_attr($titulo) . '"style="width: 50%;" />';
}

// Função de callback do campo de texto
function snlcardbr_field_texto_callback() {
    $texto = get_option('snlcardbr_texto');
    echo '<textarea name="snlcardbr_texto" style="width: 100%;" rows="3">' . esc_textarea($texto) . '</textarea>';
}

// Função de callback do campo de link para botão
function snlcardbr_field_link_callback() {
    $link = get_option('snlcardbr_link');
    echo '<input type="text" name="snlcardbr_link" value="' . esc_url($link) . '"style="width: 100%;" />';
}

// Função de callback do campo de cor de fundo
function snlcardbr_field_cor_de_fundo_callback() {
    $cor_de_fundo = get_option('snlcardbr_cor_de_fundo');
    echo '<input type="text" name="snlcardbr_cor_de_fundo" id="snlcardbr_cor_de_fundo" value="' . esc_attr($cor_de_fundo) . '" class="snlcardbr-color-picker" />';
    echo '<script>
        jQuery(document).ready(function($) {
            $(".snlcardbr-color-picker").wpColorPicker();
        });
    </script>';
}

// Função de callback do campo de cor de título
function snlcardbr_field_cor_de_titulo_callback() {
    $cor_de_titulo = get_option('snlcardbr_cor_de_titulo');
    echo '<input type="text" name="snlcardbr_cor_de_titulo" id="snlcardbr_cor_de_titulo" value="' . esc_attr($cor_de_titulo) . '" class="snlcardbr-color-picker" />';
    echo '<script>
        jQuery(document).ready(function($) {
            $(".snlcardbr-color-picker").wpColorPicker();
        });
    </script>';
}

// Função de callback do campo de cor de texto
function snlcardbr_field_cor_de_texto_callback() {
    $cor_de_texto = get_option('snlcardbr_cor_de_texto');
    echo '<input type="text" name="snlcardbr_cor_de_texto" id="snlcardbr_cor_de_texto" value="' . esc_attr($cor_de_texto) . '" class="snlcardbr-color-picker" />';
    echo '<script>
        jQuery(document).ready(function($) {
            $(".snlcardbr-color-picker").wpColorPicker();
        });
    </script>';
}
// Enfileirar estilos CSS
wp_enqueue_style('custom-style', plugin_dir_url(__FILE__) . 'custom.css');
// Função de callback para o campo de ativar/desativar a visualização
function snlcardbr_field_ativar_callback() {
    $ativar = get_option('snlcardbr_ativar');?>
    <label>
        <input type="radio" name="snlcardbr_ativar" value="1" <?php checked($ativar, 1);?>>
        Ativar
    </label>
    <label>
        <input type="radio" name="snlcardbr_ativar" value="0" <?php checked($ativar, 0);?>>
        Desativar
    </label>

    
<?php } ?>
