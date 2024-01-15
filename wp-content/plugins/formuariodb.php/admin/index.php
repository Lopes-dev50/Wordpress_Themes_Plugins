<?php
function meu_plugin_exibir_dados() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'dados_formulario';

    $dados = $wpdb->get_results("SELECT * FROM $table_name");

    echo "<table>";
    echo "<tr><th>ID</th><th>Nome</th><th>Celular</th><th>Email</th><th>Mensagem</th><th>Opção</th><th>Data de Registro</th></tr>";
    
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

    echo "</table>";
}

add_action('admin_menu', 'meu_plugin_menu');

function meu_plugin_menu() {
    add_menu_page('Formulário', 'Formulário', 'manage_options', 'meu-plugin-dados', 'meu_plugin_exibir_dados');
}

