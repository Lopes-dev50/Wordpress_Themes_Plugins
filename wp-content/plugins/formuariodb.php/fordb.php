<?php
/*
Plugin Name: Meu formulario
Description: Um plugin de exemplo para coletar e exibir informações.
*/

// Função para criar a tabela no banco de dados durante a ativação do plugin
function meu_plugin_ativacao() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'dados_formulario';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        nome varchar(255) NOT NULL,
        celular varchar(15) NOT NULL,
        email varchar(255) NOT NULL,
        mensagem text NOT NULL,
        opcao varchar(50) NOT NULL,
        data_registro datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

register_activation_hook(__FILE__, 'meu_plugin_ativacao');

// Função para exibir o formulário
function meu_plugin_formulario() {
    ob_start(); ?>

    <form method="post" action="" class="meu-plugin-form">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="celular">Celular:</label>
        <input type="text" name="celular" required><br>
       
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="opcao">Selecione:</label>
        <select name="opcao">
            <option value="app">Um App em Flutter</option>
            <option value="laravel">Um site em Laravel</option>
            <option value="temawordpress">Um tema em Wordpress</option>
            <option value="pluginwordpress">Um plugin em Wordpress</option>
            <option value="woocommerce">Uma loja woocommerce</option>
            <option value="landing">Uma landing page</option>
        </select><br>

        <label for="mensagem">Descreva em detalhes do que gostaria:</label>
        <textarea name="mensagem" required></textarea><br>

       

        <input type="submit" name="enviar" value="Enviar" class="meu-plugin-submit">
    </form>

    <?php
    return ob_get_clean();
}


add_shortcode('meu_plugin_formulario', 'meu_plugin_formulario');

// Função para processar e salvar os dados do formulário
function meu_plugin_processar_formulario() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'dados_formulario';

    if (isset($_POST['enviar'])) {
        $nome = sanitize_text_field($_POST['nome']);
        $celular = sanitize_text_field($_POST['celular']);
        $email = sanitize_email($_POST['email']);
        $mensagem = sanitize_textarea_field($_POST['mensagem']);
        $opcao = sanitize_text_field($_POST['opcao']);

        $wpdb->insert(
            $table_name,
            array(
                'nome' => $nome,
                'celular' => $celular,
                'email' => $email,
                'mensagem' => $mensagem,
                'opcao' => $opcao,
            )
        );

        echo "Dados enviados com sucesso! Logo entro em contato.";
    }
}

add_action('init', 'meu_plugin_processar_formulario');

// Adicione o menu de administração para visualizar dados
function meu_plugin_menu() {
    add_menu_page('Formulário', 'Formulário', 'manage_options', 'meu-plugin-dados', 'meu_plugin_exibir_dados');
}

add_action('admin_menu', 'meu_plugin_menu');

// Função para exibir os dados na página de administração
function meu_plugin_exibir_dados() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'dados_formulario';

    $dados = $wpdb->get_results("SELECT * FROM $table_name");

    echo "<h2>Dados do Formulário</h2>";
    echo "<table class='widefat'>";
    echo "<thead><tr><th>ID</th><th>Nome</th><th>Celular</th><th>Email</th><th>Mensagem</th><th>Opção</th><th>Data de Registro</th></tr></thead><tbody>";
    
    foreach ($dados as $dado) {
        echo "<tr>";
        echo "<td>{$dado->id}</td>";
        echo "<td>{$dado->nome}</td>";
        echo "<td>{$dado->celular}</td>";
        echo "<td>{$dado->email}</td>";
        echo "<td>{$dado->mensagem}</td>";
        echo "<td>{$dado->opcao}</td>";
        echo "<td>{$dado->data_registro}</td>";
        echo "</tr>";
    }

    echo "</tbody></table>";
}

// Função para adicionar estilos CSS
function meu_plugin_adicionar_estilos() {
    wp_enqueue_style('meu-plugin-styles', plugin_dir_url(__FILE__) . 'meu-plugin.css');
}

add_action('wp_enqueue_scripts', 'meu_plugin_adicionar_estilos');
