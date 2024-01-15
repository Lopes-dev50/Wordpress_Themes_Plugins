<?php
/*
Plugin Name: CronBr
Description: Este plugin exibirá um card com cronômetro de aviso na tela automaticamente, 15 segundos após o usuário acessar o conteúdo. É uma ferramenta útil para comunicar informações importantes aos visitantes do seu site.
Version: 1.0
Author: Sandro Lopes - DevFree
Author URI: https://devfree.com.br
*/

if (!function_exists('add_action')) {
    echo 'Opa! ';
    exit;
}



// Função para adicionar o menu personalizado
function snlcromobr_menu() {
    add_menu_page(
        'CronBr',
        'CronBr',
        'manage_options',
        'snlcromobr',
        'snlcromobr_page',
        'dashicons-admin-generic', // Ícone para o menu (opcional)
        26 // Posição do menu abaixo de "Comentários"
    );
}
add_action('admin_menu', 'snlcromobr_menu');

// Função para exibir a página de configurações
function snlcromobr_page()
{?>
    <div class="wrap">
        <h2>CronBr</h2>
        <form method="post" action="options.php">
            <?php settings_fields('snlcromobr_settings_group');?>
            <?php do_settings_sections('snlcromobr');?>
            <?php submit_button();?>
        </form>
    </div>
<?php
}

// Função de registro de configurações e campos personalizados
function snlcromobr_register_settings()
{
    register_setting('snlcromobr_settings_group', 'snlcromobr_titulo');
    register_setting('snlcromobr_settings_group', 'snlcromobr_texto');
    register_setting('snlcromobr_settings_group', 'snlcromobr_link');
    register_setting('snlcromobr_settings_group', 'snlcromobr_cor_de_fundo');
    register_setting('snlcromobr_settings_group', 'snlcromobr_cor_de_titulo');
    register_setting('snlcromobr_settings_group', 'snlcromobr_cor_de_texto');
    register_setting('snlcromobr_settings_group', 'snlcromobr_ativar');
    register_setting('snlcromobr_settings_group', 'snlcromobr_data_inicial'); // Campo Data Inicial
    register_setting('snlcromobr_settings_group', 'snlcromobr_data_final');   // Campo Data Final

    add_settings_section('snlcromobr_section_id', 'Campos de CronBr', 'snlcromobr_section_callback', 'snlcromobr');

    add_settings_field('snlcromobr_field_titulo', 'Título', 'snlcromobr_field_titulo_callback', 'snlcromobr', 'snlcromobr_section_id');
    add_settings_field('snlcromobr_field_texto', 'Texto', 'snlcromobr_field_texto_callback', 'snlcromobr', 'snlcromobr_section_id');
    add_settings_field('snlcromobr_field_link', 'Link', 'snlcromobr_field_link_callback', 'snlcromobr', 'snlcromobr_section_id');
    add_settings_field('snlcromobr_field_cor_de_titulo', 'Cor de Título', 'snlcromobr_field_cor_de_titulo_callback', 'snlcromobr', 'snlcromobr_section_id');
    add_settings_field('snlcromobr_field_cor_de_texto', 'Cor de Texto', 'snlcromobr_field_cor_de_texto_callback', 'snlcromobr', 'snlcromobr_section_id');
    add_settings_field('snlcromobr_field_cor_de_fundo', 'Cor de Fundo', 'snlcromobr_field_cor_de_fundo_callback', 'snlcromobr', 'snlcromobr_section_id');
    add_settings_field('snlcromobr_field_ativar', 'Ativar/Desativar', 'snlcromobr_field_ativar_callback', 'snlcromobr', 'snlcromobr_section_id');
    add_settings_field('snlcromobr_field_data_inicial', 'Data Inicial', 'snlcromobr_field_data_inicial_callback', 'snlcromobr', 'snlcromobr_section_id'); // Campo Data Inicial
    add_settings_field('snlcromobr_field_data_final', 'Data Final', 'snlcromobr_field_data_final_callback', 'snlcromobr', 'snlcromobr_section_id');     // Campo Data Final
}

add_action('admin_init', 'snlcromobr_register_settings');

// Função de callback da seção de configurações
function snlcromobr_section_callback()
{
    echo 'Configure os campos de CronBr:';
}

// Função de callback do campo de título
function snlcromobr_field_titulo_callback()
{
    $titulo = get_option('snlcromobr_titulo');
    echo '<input type="text" name="snlcromobr_titulo" value="' . esc_attr($titulo) . '"style="width: 50%;" />';
}

// Função de callback do campo de texto
function snlcromobr_field_texto_callback()
{
    $texto = get_option('snlcromobr_texto');
    echo '<textarea name="snlcromobr_texto" style="width: 100%;" rows="3">' . esc_textarea($texto) . '</textarea>';
}

// Função de callback do campo de link para botão
function snlcromobr_field_link_callback()
{
    $link = get_option('snlcromobr_link');
    echo '<input type="text" name="snlcromobr_link" value="' . esc_url($link) . '"style="width: 100%;" />';
}

// Função de callback do campo de cor de fundo
function snlcromobr_field_cor_de_fundo_callback()
{
    $cor_de_fundo = get_option('snlcromobr_cor_de_fundo');
    echo '<input type="text" name="snlcromobr_cor_de_fundo" id="snlcromobr_cor_de_fundo" value="' . esc_attr($cor_de_fundo) . '" class="snlcromobr-color-picker" />';
    echo '<script>
        jQuery(document).ready(function($) {
            $(".snlcromobr-color-picker").wpColorPicker();
        });
    </script>';
}

// Função de callback do campo de cor de título
function snlcromobr_field_cor_de_titulo_callback()
{
    $cor_de_titulo = get_option('snlcromobr_cor_de_titulo');
    echo '<input type="text" name="snlcromobr_cor_de_titulo" id="snlcromobr_cor_de_titulo" value="' . esc_attr($cor_de_titulo) . '" class="snlcromobr-color-picker" />';
    echo '<script>
        jQuery(document).ready(function($) {
            $(".snlcromobr-color-picker").wpColorPicker();
        });
    </script>';
}

// Função de callback do campo de cor de texto
function snlcromobr_field_cor_de_texto_callback()
{
    $cor_de_texto = get_option('snlcromobr_cor_de_texto');
    echo '<input type="text" name="snlcromobr_cor_de_texto" id="snlcromobr_cor_de_texto" value="' . esc_attr($cor_de_texto) . '" class="snlcromobr-color-picker" />';
    echo '<script>
        jQuery(document).ready(function($) {
            $(".snlcromobr-color-picker").wpColorPicker();
        });
    </script>';
}

// Função de callback do campo de cor de texto
function snlcromobr_field_cor_de_numero_callback()
{
    $cor_de_numero = get_option('snlcromobr_cor_de_numero');
    echo '<input type="text" name="snlcromobr_cor_de_numero" id="snlcromobr_cor_de_texto" value="' . esc_attr($cor_de_numero) . '" class="snlcromobr-color-picker" />';
    echo '<script>
        jQuery(document).ready(function($) {
            $(".snlcromobr-color-picker").wpColorPicker();
        });
    </script>';
}

// Função de callback do campo de cor de texto
function snlcromobr_field_cor_de_cromo_callback()
{
    $cor_de_cromo = get_option('snlcromobr_cor_de_cromo');
    echo '<input type="text" name="snlcromobr_cor_de_texto" id="snlcromobr_cor_de_cromo" value="' . esc_attr($cor_de_cromo) . '" class="snlcromobr-color-picker" />';
    echo '<script>
        jQuery(document).ready(function($) {
            $(".snlcromobr-color-picker").wpColorPicker();
        });
    </script>';
}

// Função de callback para o campo de ativar/desativar a visualização
function snlcromobr_field_ativar_callback()
{
    $ativar = get_option('snlcromobr_ativar');?>
    <label>
        <input type="radio" name="snlcromobr_ativar" value="1" <?php checked($ativar, 1);?>>
        Ativar
    </label>
    <label>
        <input type="radio" name="snlcromobr_ativar" value="0" <?php checked($ativar, 0);?>>
        Desativar
    </label>
    <?php
}

// Função de callback do campo de data inicial
function snlcromobr_field_data_inicial_callback()
{
    $data_inicial = get_option('snlcromobr_data_inicial');
    echo '<input type="date" name="snlcromobr_data_inicial" value="' . esc_attr($data_inicial) . '" />';
}

// Função de callback do campo de data final
function snlcromobr_field_data_final_callback()
{
    $data_final = get_option('snlcromobr_data_final');
    echo '<input type="date" name="snlcromobr_data_final" value="' . esc_attr($data_final) . '" />';
}

// Função para enfileirar scripts e estilos
function snlcromobr_enqueue_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('wp-color-picker');
    wp_enqueue_style('wp-color-picker');
    wp_enqueue_script('custom-script', plugin_dir_url(__FILE__) . 'custom.js', array('jquery', 'wp-color-picker'), '1.0', true);
}

add_action('admin_enqueue_scripts', 'snlcromobr_enqueue_scripts');

// Função para exibir o card no site
function snlcromobr_mostra_site()
{
    $ativar = get_option('snlcromobr_ativar');

    // Verificar se o cookie "snlcromobr_closed" está definido
    if (!isset($_COOKIE['snlcromobr_closed']) && $ativar == 1) {
        $titulo = get_option('snlcromobr_titulo');
        $texto = get_option('snlcromobr_texto');
        $link = get_option('snlcromobr_link');
        $cor_de_texto = get_option('snlcromobr_cor_de_texto');
        $cor_de_titulo = get_option('snlcromobr_cor_de_titulo');
        $cor_de_fundo = get_option('snlcromobr_cor_de_fundo');
        $data_inicial = strtotime(get_option('snlcromobr_data_inicial'));
        $data_final = strtotime(get_option('snlcromobr_data_final'));

        // Obter a data atual
        $data_atual = current_time('timestamp');

        // Verificar se a data atual está dentro do intervalo definido e se o cronômetro está ativado
        if ($data_atual >= $data_inicial && $data_atual <= $data_final) {
            $diferenca = $data_final - $data_atual;
            $dias = floor($diferenca / (60 * 60 * 24));
            $horas = floor(($diferenca % (60 * 60 * 24)) / (60 * 60));
            $minutos = floor(($diferenca % (60 * 60)) / 60);
            $segundos = $diferenca % 60;?>
            <div class="background-div" style="background-color: <?php echo esc_attr($cor_de_fundo);?>">
                <button id="close-button" style="background-color: <?php echo esc_attr($cor_de_fundo);?>">x</button>
                <a href="<?php echo esc_url($link);?>">
                    <div class="content">
                        <h1 style="color: <?php echo esc_attr($cor_de_titulo); ?>"><?php echo esc_html($titulo);?></h1>
                        <p style="color: <?php echo esc_attr($cor_de_texto); ?>"><?php echo esc_html($texto);?></p>
                    </div>
                </a>
                <!-- Adicionar o cronômetro aqui -->

                <div id="cronometro" class="cronometro">
                    <?php echo $dias . ' Dias ' . $horas . ' Horas ' . $minutos . ' Minutos ' . $segundos . ' Segundos';?>
                </div>

            </div>
            <script>
                // JavaScript para atualizar o cronômetro
                function atualizarCronometro() {
                    var cronometroElement = document.getElementById('cronometro');
                    var segundos = <?php echo $segundos;?>;
                    var minutos = <?php echo $minutos;?>;
                    var horas = <?php echo $horas;?>;
                    var dias = <?php echo $dias;?>;

                    function atualizar() {
                        segundos--;
                        if (segundos < 0) {
                            segundos = 59;
                            minutos--;
                            if (minutos < 0) {
                                minutos = 59;
                                horas--;
                                if (horas < 0) {
                                    horas = 23;
                                    dias--;
                                }
                            }
                        }

                        // Atualizar o texto do cronômetro
                        cronometroElement.innerHTML = dias + ' Dias ' + horas + ' Horas ' + minutos + ' Minutos ' + segundos + ' Segundos';

                        // Verificar se o tempo expirou
                        if (dias === 0 && horas === 0 && minutos === 0 && segundos === 0) {
                            cronometroElement.style.display = 'none';
                            var backgroundDiv = document.querySelector('.background-div');
                            backgroundDiv.style.display = 'none';

                            // Defina o cookie "snlcromobr_closed" para que o card não seja exibido novamente
                            document.cookie = "snlcromobr_closed=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
                        }
                    }

                    // Atualizar a cada segundo
                    setInterval(atualizar, 1000);
                }

                // Chamar a função para iniciar o cronômetro
                atualizarCronometro();

                // JavaScript para controlar o temporizador e mostrar a div após 15 segundos
                document.addEventListener('DOMContentLoaded', function() {
                    var backgroundDiv = document.querySelector('.background-div');
                    var closeButton = document.getElementById('close-button');

                    // Adicionar ouvinte de eventos para o botão "X"
                    closeButton.addEventListener('click', function() {
                        backgroundDiv.style.display = 'none';

                        // Defina o cookie "snlcromobr_closed" quando o card for fechado
                        document.cookie = "snlcromobr_closed=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
                    });

                    // Chamar a função para mostrar a div após o temporizador
                    showDivAfterTimer();
                });

                // Função para mostrar a div após o temporizador (15 segundos)
                function showDivAfterTimer() {
                    setTimeout(function() {
                        var backgroundDiv = document.querySelector('.background-div');
                        backgroundDiv.style.display = 'block';
                    }, 15000); // 15 segundos
                }

            </script>
            <?php
        }
    }
}
add_action('wp_footer', 'snlcromobr_mostra_site');




// Enfileirar estilos CSS
wp_enqueue_style('custom-style', plugin_dir_url(__FILE__) . 'custom.css');
