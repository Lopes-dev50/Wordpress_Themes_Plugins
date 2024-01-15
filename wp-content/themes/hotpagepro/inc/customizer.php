<?php 

function snlwhotpage_customizer( $wp_customize ){

  

    /* Home Page Panel */
    $wp_customize->add_panel('hotpages', array(
        'priority' => 19,
        'capability' => 'edit_theme_options',
        'title' => esc_html__('TEMA HOTPAGE', 'snlwhotpage'),
    ));
   /*******PRO****/



	$wp_customize->add_setting(
		'set_pro', array(
			'type' => 'theme_mod',
			'default' => __( 'Página inicial do aplicativo', 'snlwhotpage' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_pro', array(
			'label' => __( 'Frase e imagem principal', 'snlwhotpage' ),
			'description' => __( 'Frase ao lado da imagem do e-book', 'snlwhotpage' ),
			'section' => 'sec_pro',
			'type' => 'text'
		)
	);


	//**********************************************************
	//     FRASE PRINCIPAL 
	//**********************************************************

	$wp_customize->add_section( 
		'sec_frase', array(
			'title' => __( 'Frase Principal', 'snlwhotpage'),
			'description' => __( 'HotPage', 'snlwhotpage' ),
			'panel' => 'hotpages'
		)
	);

	$wp_customize->add_setting(
		'set_frase', array(
			'type' => 'theme_mod',
			'default' => __( 'O Poder das palavras certas muda tudo!', 'snlwhotpage' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_frase', array(
			'label' => __( 'Frase e imagem principal', 'snlwhotpage' ),
			'description' => __( 'Frase ao lado da imagem do e-book', 'snlwhotpage' ),
			'section' => 'sec_frase',
			'type' => 'text'
		)
	);
    //**********************************************************
	//     TEXTO ABAIXO DA FRASE PRINCIPAL 
	//**********************************************************	
	
	$wp_customize->add_section( 
		'sec_texto1', array(
			'title' => __( 'Texto Abaixo da Frase ', 'snlwhotpage'),
			'description' => __( 'HotPage', 'snlwhotpage' ),
			'panel' => 'hotpages'
		)
	);

	$wp_customize->add_setting(
		'set_texto1', array(
			'type' => 'theme_mod',
			'default' => __( 'Um punhado de letras e conjuntos de palavras pode mudar vidas com seu conhecimento, uma linda corrente de vogais.', 'snlwhotpage' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_texto1', array(
			'label' => __( 'Texto ', 'snlwhotpage' ),
			'description' => __( 'Esta é o texto abaixo frase principal', 'snlwhotpage' ),
			'section' => 'sec_texto1',
			'type' => 'text'
		)
	);
	//**********************************************************
	//     FRASE TOP SEGUNDO BLOCO
	//**********************************************************
	
	$wp_customize->add_section( 
		'sec_bloco2', array(
			'title' => __( 'Segundo bloco', 'snlwhotpage'),
			'description' => __( 'Hotpage', 'snlwhotpage' ),
			'panel' => 'hotpages'
		)
	);


    $wp_customize->add_setting(
		'set_bloco2_option', array(
			'type' => 'theme_mod',
			'default' => '2',
			'sanitize_callback' => 'snlwhotpage_sanitize_select'
		)
	);

	$wp_customize->add_control(
		'set_bloco2_option', array(
			'label' => __( 'Libera segundo bloco  ', 'snlwhotpage' ),
			'description' => __( 'Selecione ativar bloco', 'snlwhotpage' ),
			'section' => 'sec_bloco2',
			'type' => 'select',
			'choices' => array(
				'1' => __( 'ATIVADO ', 'snlwhotpage' ),
				'2' => __( 'DESATIVADO ', 'snlwhotpage' ),
				
			)
		)
	);


	$wp_customize->add_setting(
		'set_texto2', array(
			'type' => 'theme_mod',
			'default' => __( 'Marketing trará mais vendas qualificados', 'snlwhotpage' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_texto2', array(
			'label' => __( 'Frase em destaque', 'snlwhotpage' ),
			'description' => __( 'Pode mudar frase aqui.', 'snlwhotpage' ),
			'section' => 'sec_bloco2',
			'type' => 'text'
		)
	);
    //**********************************************************
	//     TITULO 1 DO SEGUNDO BLOCO FRASE PRINCIPAL 
	//**********************************************************	
	
	$wp_customize->add_section( 
		'sec_titulo1', array(
			'title' => __( 'Titulo e ', 'snlwhotpage'),
			'description' => __( 'Texto Destaque Section', 'snlwhotpage' ),
			'panel' => 'hotpages'
		)
	);


	
	$wp_customize->add_setting(
		'set_titulo1', array(
			'type' => 'theme_mod',
			'default' => __( 'QUE MUDA EM POUCO', 'snlwhotpage' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_titulo1', array(
			'label' => __( 'Titulo Destaque 1', 'snlwhotpage' ),
			'description' => __( 'Esta é o titulo um destaque ', 'snlwhotpage' ),
			'section' => 'sec_bloco2',
			'type' => 'text'
		)
	);
//**********************************************************
//     TITULO 2 DO SEGUNDO BLOCO FRASE PRINCIPAL 
//**********************************************************	
$wp_customize->add_setting(
	'set_titulo2', array(
		'type' => 'theme_mod',
		'default' => __( 'PALAVRAS SUBRINHADAS', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses',
		'panel' => 'hotpages'
	)
);

$wp_customize->add_control(
	'set_titulo2', array(
		'label' => __( 'Titulo Destaque 2', 'snlwhotpage' ),
		'description' => __( 'Esta é o titulo 2 destaque ', 'snlwhotpage' ),
		'section' => 'sec_bloco2',
		'type' => 'text'
	)
);
//**********************************************************
//     TITULO 3 DO SEGUNDO BLOCO FRASE PRINCIPAL 
//**********************************************************	
$wp_customize->add_setting(
	'set_titulo3', array(
		'type' => 'theme_mod',
		'default' => __( 'CONTADOR LETRAS', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses',
		'panel' => 'hotpages'
	)
);

$wp_customize->add_control(
	'set_titulo3', array(
		'label' => __( 'Titulo Destaque 2', 'snlwhotpage' ),
		'description' => __( 'Esta é o titulo 3 destaque ', 'snlwhotpage' ),
		'section' => 'sec_bloco2',
		'type' => 'text'
	)
);

//**********************************************************
//     TEXTO 1 DO SEGUNDO BLOCO  
//**********************************************************	
	
	
	$wp_customize->add_setting(
		'set_textodestaque1', array(
			'type' => 'theme_mod',
			'default' => __( 'Nada melhor que intender que livros tem poder demudar pessoas, vidas a cidades', 'snlwhotpage' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses',
			'panel' => 'hotpages'
		)
	);
	
	$wp_customize->add_control(
		'set_textodestaque1', array(
			'label' => __( 'Texto Destaque 1', 'snlwhotpage' ),
			'description' => __( 'Esta é o texto do destaque 1 destaque ', 'snlwhotpage' ),
			'section' => 'sec_bloco2',
			'type' => 'textarea'
		)
	);
//**********************************************************
//     TEXTO 2 DO SEGUNDO BLOCO  
//**********************************************************	

    $wp_customize->add_setting(
		'set_textodestaque2', array(
			'type' => 'theme_mod',
			'default' => __( 'Algumas palavras merecem seu lugar de destaque em um texto porque deixam marcas', 'snlwhotpage' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses',
			'panel' => 'hotpages'
		)
	);
	
	$wp_customize->add_control(
		'set_textodestaque2', array(
			'label' => __( 'Texto Destaque 2', 'snlwhotpage' ),
			'description' => __( 'Esta é o texto do destaque 2 destaque ', 'snlwhotpage' ),
			'section' => 'sec_bloco2',
			'type' => 'textarea'
		)
	);
//**********************************************************
//     TEXTO 3 DO SEGUNDO BLOCO  
//**********************************************************	

	$wp_customize->add_setting(
		'set_textodestaque3', array(
			'type' => 'theme_mod',
			'default' => __( 'Não importa quantas palavras possa ler por minuto importante que leia cada vez mais a cada dia', 'snlwhotpage' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses',
			'panel' => 'hotpages'
		)
	);
	
	$wp_customize->add_control(
		'set_textodestaque3', array(
			'label' => __( 'Texto Destaque 3', 'snlwhotpage' ),
			'description' => __( 'Esta é o texto do destaque 3 destaque ', 'snlwhotpage' ),
			'section' => 'sec_bloco2',
			'type' => 'textarea'
		)
	);

//**********************************************************
//     BLOCO DOS  MOTIVOS  
//**********************************************************	

$wp_customize->add_section( 
	'sec_motivo', array(
		'title' => __( 'Motivos', 'snlwhotpage'),
		'description' => __( 'Hotpage', 'snlwhotpage' ),
		'panel' => 'hotpages'
	)
);

 
$wp_customize->add_setting(
	'set_motivo_option', array(
		'type' => 'theme_mod',
		'default' => '2',
		'sanitize_callback' => 'snlwhotpage_sanitize_select'
	)
);

$wp_customize->add_control(
	'set_motivo_option', array(
		'label' => __( 'Libera modulo motivo  ', 'snlwhotpage' ),
		'description' => __( 'Selecione ativar motivo', 'snlwhotpage' ),
		'section' => 'sec_motivo',
		'type' => 'select',
		'choices' => array(
			'1' => __( 'ATIVADO ', 'snlwhotpage' ),
			'2' => __( 'DESATIVADO ', 'snlwhotpage' ),
			
		)
	)
);



// frase motivo 
$wp_customize->add_setting(
	'set_motivo_frase1', array(
		'type' => 'theme_mod',
		'default' => __( 'Três grande motivos ', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	)
);

$wp_customize->add_control(
	'set_motivo_frase1', array(
		'label' => __( 'Frase 1', 'snlwhotpage' ),
		'description' => __( 'Primeira Frase ', 'snlwhotpage' ),
		'section' => 'sec_motivo',
		'type' => 'text'
	)
);
//frase motivo 2
$wp_customize->add_setting(
	'set_motivo_frase2', array(
		'type' => 'theme_mod',
		'default' => __( 'Nunca fique assim', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	)
);

$wp_customize->add_control(
	'set_motivo_frase2', array(
		'label' => __( 'Frase 2', 'snlwhotpage' ),
		'description' => __( 'Segunda Frase ', 'snlwhotpage' ),
		'section' => 'sec_motivo',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'set_motivo1', array(
		'type' => 'theme_mod',
		'default' => __( 'Visibilidade Online ', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	)
);

$wp_customize->add_control(
	'set_motivo1', array(
		'label' => __( 'Titulo 1', 'snlwhotpage' ),
		'description' => __( 'Primeiro Motivo', 'snlwhotpage' ),
		'section' => 'sec_motivo',
		'type' => 'text'
	)
);
/**MOTIVO 2 **/
$wp_customize->add_setting(
'set_motivo2', array(
	'type' => 'theme_mod',
	'default' => __( 'Credibilidade e Profissionalismo', 'snlwhotpage' ),
	'sanitize_callback' => 'wp_filter_nohtml_kses'
)
);

$wp_customize->add_control(
'set_motivo2', array(
	'label' => __( 'Titulo 2', 'snlwhotpage' ),
	'description' => __( 'O Grande Motivo ', 'snlwhotpage' ),
	'section' => 'sec_motivo',
	'type' => 'text'
)
);
/**MOTIVO 3 **/
$wp_customize->add_setting(
'set_motivo3', array(
	'type' => 'theme_mod',
	'default' => __( 'Comunicação Eficiente', 'snlwhotpage' ),
	'sanitize_callback' => 'wp_filter_nohtml_kses'
)
);

$wp_customize->add_control(
'set_motivo3', array(
	'label' => __( 'Titulo 3', 'snlwhotpage' ),
	'description' => __( 'O melhor motivo ', 'snlwhotpage' ),
	'section' => 'sec_motivo',
	'type' => 'text'
)
);

//**CAIXA DE TEXTO MOTIVOS**/


$wp_customize->add_setting(
	'set_textomotivo1', array(
		'type' => 'theme_mod',
		'default' => __( 'Ter um site aumenta a visibilidade da sua presença online. Com bilhões de pessoas navegando na internet diariamente, ter uma plataforma digital permite que você seja encontrado por um público global a qualquer momento. Isso é especialmente importante para empresas, pois ajuda a alcançar potenciais clientes que buscam produtos ou serviços semelhantes aos seus. ', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses',
		'panel' => 'hotpages'
	)
);

$wp_customize->add_control(
	'set_textomotivo1', array(
		'label' => __( 'Texto  1', 'snlwhotpage' ),
		'description' => __( 'Esta é o texto do motivo 1 ', 'snlwhotpage' ),
		'section' => 'sec_motivo',
		'type' => 'textarea'
	)
);
			
$wp_customize->add_setting(
	'set_textomotivo2', array(
		'type' => 'theme_mod',
		'default' => __( 'Um site bem projetado transmite uma imagem de profissionalismo e credibilidade. Os consumidores frequentemente pesquisam online antes de tomar decisões de compra ou contratação. Ter um site informativo e atraente pode gerar confiança em seu público-alvo e ajudá-lo a se destacar como uma opção confiável no mercado.', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	)
);

$wp_customize->add_control(
	'set_textomotivo2', array(
		'label' => __( 'Texto motivo 2', 'snlwhotpage' ),
		'description' => __( 'Esta é o texto do motivo 2 ', 'snlwhotpage' ),
		'section' => 'sec_motivo',
		'type' => 'textarea'
	)
);

$wp_customize->add_setting(
	'set_textomotivo3', array(
		'type' => 'theme_mod',
		'default' => __( 'Um site é uma ferramenta poderosa para a comunicação. Ele permite que você compartilhe informações detalhadas sobre sua empresa, produtos, serviços e valores. Além disso, um blog ou seção de notícias pode ser usado para manter seus clientes informados sobre as últimas novidades e tendências em seu setor. Isso não apenas ajuda a construir relacionamentos, mas também melhora a fidelidade do cliente. ', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	)
);

$wp_customize->add_control(
	'set_textomotivo3', array(
		'label' => __( 'Texto motivo 3', 'snlwhotpage' ),
		'description' => __( 'Esta é o texto do motivo 3 ', 'snlwhotpage' ),
		'section' => 'sec_motivo',
		'type' => 'textarea'
	)
);


//**********************************************************
//     AUTOR  
//**********************************************************	

	$wp_customize->add_section( 
		'sec_autor', array(
			'title' => __( 'Autor ', 'snlwhotpage'),
			'description' => __( 'hotpage', 'snlwhotpage' ),
			'panel' => 'hotpages'
		)
	);
    

	$wp_customize->add_setting(
		'set_autor_option', array(
			'type' => 'theme_mod',
			'default' => '2',
			'sanitize_callback' => 'snlwhotpage_sanitize_select'
		)
	);

	$wp_customize->add_control(
		'set_autor_option', array(
			'label' => __( 'Libera modulo autor  ', 'snlwhotpage' ),
			'description' => __( 'Selecione ativar Modulo autor', 'snlwhotpage' ),
			'section' => 'sec_autor',
			'type' => 'select',
			'choices' => array(
				'1' => __( 'ATIVADO ', 'snlwhotpage' ),
			    '2' => __( 'DESATIVADO ', 'snlwhotpage' ),
				
			)
		)
	);



	$wp_customize->add_setting(
		'set_autor', array(
			'type' => 'theme_mod',
			'default' => __( 'Dev Free ', 'snlwhotpage' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_autor', array(
			'label' => __( 'Autor ', 'snlwhotpage' ),
			'description' => __( 'Cadastre nome do autor', 'snlwhotpage' ),
			'section' => 'sec_autor',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'set_autortexto', array(
			'type' => 'theme_mod',
			'default' => __( 'É um fato estabelecido há muito tempo que um leitor se distrairá com o conteúdo legível de uma página ao examinar seu layout. O objetivo de usar Lorem Ipsum é que ele tem uma distribuição de letras mais ou menos normal, ao contrário de usar \'Conteúdo aqui, conteúdo aqui\', fazendo com que pareça inglês legível. Muitos pacotes de editoração eletrônica e editores de páginas da web agora usam Lorem Ipsum como seu texto de modelo padrão, e uma pesquisa por \'lorem ipsum\' revelará muitos sites ainda em sua infância. Várias versões evoluíram ao longo dos anos, às vezes por acidente, às vezes de propósito (humor injetado e coisas do gênero).', 'snlwhotpage' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_autortexto', array(
			'label' => __( 'Autor ', 'snlwhotpage' ),
			'description' => __( 'Descrição sobre autor', 'snlwhotpage' ),
			'section' => 'sec_autor',
			'type' => 'textarea'
		)
	);

	

//**********************************************************
//     VIDEO  
//**********************************************************	

$wp_customize->add_section( 
	'sec_video', array(
		'title' => __( 'Video', 'snlwhotpage' ),
		'description' => __( 'Hotpage', 'snlwhotpage' ),
		'panel' => 'hotpages'
	)
);

$wp_customize->add_setting(
	'set_video_option', array(
		'type' => 'theme_mod',
		'default' => '2',
		'sanitize_callback' => 'snlwhotpage_sanitize_select'
	)
);

$wp_customize->add_control(
	'set_video_option', array(
		'label' => __( 'Libera vídeo  ', 'snlwhotpage' ),
		'description' => __( 'Selecione ativa vídeo', 'snlwhotpage' ),
		'section' => 'sec_video',
		'type' => 'select',
		'choices' => array(
			'1' => __( 'ATIVADO ', 'snlwhotpage' ),
			'2' => __( 'DESATIVADO ', 'snlwhotpage' ),
			
		)
	)
);


$wp_customize->add_setting(
	'set_link_video', array(
		'type' => 'theme_mod',
		'default' => __( '#', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	)
);

$wp_customize->add_control(
	'set_link_video', array(
		'label' => __( 'Link video', 'snlwhotpage' ),
		'description' => __( 'Informe o link para video do youtube', 'snlwhotpage' ),
		'section' => 'sec_video',
		'type' => 'text'
	)
);
//**********************************************************
//     DEPOIMENTOS  
//**********************************************************	

$wp_customize->add_section( 
	'sec_depoimento', array(
		'title' => __( 'Depoimento', 'snlwhotpage' ),
		'description' => __( 'Hotpage', 'snlwhotpage' ),
		'panel' => 'hotpages'
	)
);


$wp_customize->add_setting(
	'set_depoimento_option', array(
		'type' => 'theme_mod',
		'default' => '2',
		'sanitize_callback' => 'snlwhotpage_sanitize_select'
	)
);

$wp_customize->add_control(
	'set_depoimento_option', array(
		'label' => __( 'Libera modulo depoimento  ', 'snlwhotpage' ),
		'description' => __( 'Selecione ativar depoimento', 'snlwhotpage' ),
		'section' => 'sec_depoimento',
		'type' => 'select',
		'choices' => array(
			'1' => __( 'ATIVADO ', 'snlwhotpage' ),
			'2' => __( 'DESATIVADO ', 'snlwhotpage' ),
			
		)
	)
);




/**PRIMEIRO DEPOIMENTO**/
	
	$wp_customize->add_setting(
		'set_depoimento1', array(
			'type' => 'theme_mod',
			'default' => __( 'Nome ', 'snlwhotpage' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_depoimento1', array(
			'label' => __( 'Nome depoimento', 'snlwhotpage' ),
			'description' => __( 'Fulano1 ', 'snlwhotpage' ),
			'section' => 'sec_depoimento',
			'type' => 'text'
		)
	);
/**SEGUNDO DEPOIMENTO**/
$wp_customize->add_setting(
	'set_depoimento2', array(
		'type' => 'theme_mod',
		'default' => __( 'Nome', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	)
);

$wp_customize->add_control(
	'set_depoimento2', array(
		'label' => __( 'Segundo depoimento', 'snlwhotpage' ),
		'description' => __( 'Fulano2 ', 'snlwhotpage' ),
		'section' => 'sec_depoimento',
		'type' => 'text'
	)
);
/**TERCEIRO DEPOIMENTO**/
$wp_customize->add_setting(
	'set_depoimento3', array(
		'type' => 'theme_mod',
		'default' => __( 'Nome', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	)
);

$wp_customize->add_control(
	'set_depoimento3', array(
		'label' => __( 'Terceiro depoimento', 'snlwhotpage' ),
		'description' => __( 'Fulano 3 ', 'snlwhotpage' ),
		'section' => 'sec_depoimento',
		'type' => 'text'
	)
);

/**TEXTO DEPOIMENTO**/
		
	$wp_customize->add_setting(
		'set_textodepoimento1', array(
			'type' => 'theme_mod',
			'default' => __( 'Minha experiência com o tema Hotpage tem sido incrivelmente positiva. A facilidade de uso e edição desse tema me impressionou desde o início. Mesmo sem conhecimento técnico avançado, consegui personalizar minha página da web de forma rápida e descomplicada.', 'snlwhotpage' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	
	$wp_customize->add_control(
		'set_textodepoimento1', array(
			'label' => __( 'Texto  1', 'snlwhotpage' ),
			'description' => __( 'Esta é o texto do depoimento 1 ', 'snlwhotpage' ),
			'section' => 'sec_depoimento',
			'type' => 'textarea'
		)
	);
	/**SEGUNDO TEXTO DEPOIMENTO**/
			
    $wp_customize->add_setting(
		'set_textodepoimento2', array(
			'type' => 'theme_mod',
			'default' => __( 'A interface intuitiva do Hotpage tornou a edição de conteúdo e a inserção de elementos uma tarefa simples. A variedade de opções de personalização me permitiu dar vida à minha visão de forma criativa, sem obstáculos técnicos.', 'snlwhotpage' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	
	$wp_customize->add_control(
		'set_textodepoimento2', array(
			'label' => __( 'Texto 2', 'snlwhotpage' ),
			'description' => __( 'Esta é o texto do depoimento 2 ', 'snlwhotpage' ),
			'section' => 'sec_depoimento',
			'type' => 'textarea'
		)
	);
	/**TERCEIRO DEPOIMENTO**/
	$wp_customize->add_setting(
		'set_textodepoimento3', array(
			'type' => 'theme_mod',
			'default' => __( 'Recomendo amplamente para qualquer pessoa que deseje uma solução eficaz e amigável para suas necessidades de design na web.
			', 'snlwhotpage' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	
	$wp_customize->add_control(
		'set_textodepoimento3', array(
			'label' => __( 'Texto 3', 'snlwhotpage' ),
			'description' => __( 'Esta é o texto do depoimento 3 ', 'snlwhotpage' ),
			'section' => 'sec_depoimento',
			'type' => 'textarea'
		)
	);





//**********************************************************
//      REDES SOCIAIS   
//**********************************************************	

$wp_customize->add_section( 
	'sec_social', array(
		'title' => __( 'Social ', 'snlwhotpage'),
		'description' => __( 'Hotpage', 'snlwhotpage' ),
		'panel' => 'hotpages'
	)
);

$wp_customize->add_setting('social_color', array(
	'default' => '#063318',
	'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'social_color', array(
			'label' => esc_html__('Cor do icon', 'spicepress'),
			'section' => 'sec_social',
			'settings' => 'social_color',)
));

$wp_customize->add_setting(
	'set_instagram', array(
		'type' => 'theme_mod',
		'default' => __( '#', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	)
);

$wp_customize->add_control(
	'set_instagram', array(
		'label' => __( '', 'snlwhotpage' ),
		'description' => __( 'Instagem', 'snlwhotpage' ),
		'section' => 'sec_social',
		'type' => 'text'
	)
);

/**facebook**/
$wp_customize->add_setting(
	'set_facebook', array(
		'type' => 'theme_mod',
		'default' => __( '#', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	)
);

$wp_customize->add_control(
	'set_facebook', array(
		'label' => __( '', 'snlwhotpage' ),
		'description' => __( 'Facebook', 'snlwhotpage' ),
		'section' => 'sec_social',
		'type' => 'text'
	)
);
/**youtube**/
$wp_customize->add_setting(
	'set_youtube', array(
		'type' => 'theme_mod',
		'default' => __( '#', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	)
);

$wp_customize->add_control(
	'set_youtube', array(
		'label' => __( '', 'snlwhotpage' ),
		'description' => __( 'YouTube', 'snlwhotpage' ),
		'section' => 'sec_social',
		'type' => 'text'
	)
);

/**twitter**/
$wp_customize->add_setting(
	'set_twitter', array(
		'type' => 'theme_mod',
		'default' => __( '#', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	)
);

$wp_customize->add_control(
	'set_twitter', array(
		'label' => __( '', 'snlwhotpage' ),
		'description' => __( 'Twitter', 'snlwhotpage' ),
		'section' => 'sec_social',
		'type' => 'text'
	)
);

/**linkedin**/
$wp_customize->add_setting(
	'set_linkedin', array(
		'type' => 'theme_mod',
		'default' => __( '#', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	)
);

$wp_customize->add_control(
	'set_linkedin', array(
		'label' => __( '', 'snlwhotpage' ),
		'description' => __( 'Linkedin', 'snlwhotpage' ),
		'section' => 'sec_social',
		'type' => 'text'
	)
);

/**pinterest**/
$wp_customize->add_setting(
	'set_pinterest', array(
		'type' => 'theme_mod',
		'default' => __( '#', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	)
);

$wp_customize->add_control(
	'set_pinterest', array(
		'label' => __( '', 'snlwhotpage' ),
		'description' => __( 'Pinterest', 'snlwhotpage' ),
		'section' => 'sec_social',
		'type' => 'text'
	)
);


//**********************************************************
//     PAGAMENTO  
//**********************************************************	

$wp_customize->add_section( 
	'sec_pagamento', array(
		'title' => __( 'Link para pagamento', 'snlwhotpage'),
		'description' => __( 'Hotpage', 'snlwhotpage' ),
		'panel' => 'hotpages'
	)
);

$wp_customize->add_setting(
	'set_link', array(
		'type' => 'theme_mod',
		'default' => __( '#', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	)
);

$wp_customize->add_control(
	'set_link', array(
		'label' => __( 'Link de pagamento', 'snlwhotpage' ),
		'description' => __( 'Informe o link de pagamento para pagina da hotmart', 'snlwhotpage' ),
		'section' => 'sec_pagamento',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'set_preco', array(
		'type' => 'theme_mod',
		'default' => __( 'R$ 49,90', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	)
);

$wp_customize->add_control(
	'set_preco', array(
		'label' => __( 'Valor', 'snlwhotpage' ),
		'description' => __( 'Informe valor do produto', 'snlwhotpage' ),
		'section' => 'sec_pagamento',
		'type' => 'text'
	)
);


$wp_customize->add_section( 
	'sec_btn', array(
		'title' => __( 'Texto Botão', 'snlwhotpage'),
		'description' => __( 'HotPage', 'snlwhotpage' ),
		'panel' => 'hotpages'
	)
);

$wp_customize->add_setting(
	'set_btn', array(
		'type' => 'theme_mod',
		'default' => __( 'Não Comprar Agora!', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	)
);

$wp_customize->add_control(
	'set_btn', array(
		'label' => __( 'Texto do botão', 'snlwhotpage' ),
		'description' => __( 'Comprar', 'snlwhotpage' ),
		'section' => 'sec_pagamento',
		'type' => 'text'
	)
);



//**********************************************************
//     COPYRIGHT  
//**********************************************************	

$wp_customize->add_section( 
	'sec_copyright', array(
		'title' => __( 'Copyright', 'snlwhotpage'),
		'description' => __( 'Hotpage', 'snlwhotpage' ),
		'panel' => 'hotpages'
	)
);

$wp_customize->add_setting(
	'set_copyright', array(
		'type' => 'theme_mod',
		'default' => __( 'Copyright X - All rights reserved', 'snlwhotpage' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	)
);

$wp_customize->add_control(
	'set_copyright', array(
		'label' => __( 'Copyright', 'snlwhotpage' ),
		'description' => __( '', 'snlwhotpage' ),
		'section' => 'sec_copyright',
		'type' => 'text'
	)
);

//**********************************************************
//           IMAGEM PRINCIPAL  
//**********************************************************	

  $wp_customize-> add_section ('pdn_home_section', array (
	'title' => 'Home',
	'descrição' => 'Atualizar imagem inicial'
));

$wp_customize-> add_setting ('pdn_home_img_settings', array (
	//valor padrão
));

$wp_customize-> add_control (new WP_Customize_Image_Control ($wp_customize, 'pdn_home_img_control', array (
	'label' => 'Adicionar nova imagem',
	'settings' => 'pdn_home_img_settings',
	'section' => 'sec_frase'
)));
//**********************************************************
//     IMAGEMS BLOCO 2   
//**********************************************************	

 $wp_customize-> add_section ('pdn_destaque1_section', array (
	'title' => 'Destaque',
	'descrição' => 'Atualizar imagem destaque 1'
));

$wp_customize-> add_setting ('pdn_destaque1_img_settings', array (
	//valor padrão
));

$wp_customize-> add_control (new WP_Customize_Image_Control ($wp_customize, 'pdn_destaque1_img_control', array (
	'label' => 'Mudar imagem 1',
	'settings' => 'pdn_destaque1_img_settings',
	'section' => 'sec_bloco2'
)));

 //**SEGUNDA IMAGEM**/  
 $wp_customize-> add_section ('pdn_destaque2_section', array (
	'title' => 'Destaque',
	'descrição' => 'Atualizar imagem destaque 2'
));

$wp_customize-> add_setting ('pdn_destaque2_img_settings', array (
	//valor padrão
));

$wp_customize-> add_control (new WP_Customize_Image_Control ($wp_customize, 'pdn_destaque2_img_control', array (
	'label' => 'Mudar imagem 2',
	'settings' => 'pdn_destaque2_img_settings',
	'section' => 'sec_bloco2'
)));

 //**TERCEIRA IMAGEM**/  
 $wp_customize-> add_section ('pdn_destaque3_section', array (
	'title' => 'Destaque',
	'descrição' => 'Atualizar imagem destaque 3'
));

$wp_customize-> add_setting ('pdn_destaque3_img_settings', array (
	//valor padrão
));

$wp_customize-> add_control (new WP_Customize_Image_Control ($wp_customize, 'pdn_destaque3_img_control', array (
	'label' => 'Mudar imagem 3',
	'settings' => 'pdn_destaque3_img_settings',
	'section' => 'sec_bloco2'
)));


//**********************************************************
//     IMAGEMS DEPOIMENTO  
//**********************************************************	

 $wp_customize-> add_section ('pdn_depoimento1_section', array (
	'title' => 'Destaque',
	'descrição' => 'Atualizar imagem depoimento 1'
));

$wp_customize-> add_setting ('pdn_depoimento1_img_settings', array (
	//valor padrão
));

$wp_customize-> add_control (new WP_Customize_Image_Control ($wp_customize, 'pdn_depoimento1_img_control', array (
	'label' => 'Mudar imagem 1',
	'settings' => 'pdn_depoimento1_img_settings',
	'section' => 'sec_depoimento'
)));

 //**SEGUNDA IMAGEM**/  
 $wp_customize-> add_section ('pdn_depoimento2_section', array (
	'title' => 'Destaque',
	'descrição' => 'Atualizar imagem depoimento 2'
));

$wp_customize-> add_setting ('pdn_depoimento2_img_settings', array (
	//valor padrão
));

$wp_customize-> add_control (new WP_Customize_Image_Control ($wp_customize, 'pdn_depoimento2_img_control', array (
	'label' => 'Mudar imagem 2',
	'settings' => 'pdn_depoimento2_img_settings',
	'section' => 'sec_depoimento'
)));

 //**TERCEIRA IMAGEM**/  
 $wp_customize-> add_section ('pdn_depoimento3_section', array (
	'title' => 'Destaque',
	'descrição' => 'Atualizar imagem depoimento 3'
));

$wp_customize-> add_setting ('pdn_depoimento3_img_settings', array (
	//valor padrão
));

$wp_customize-> add_control (new WP_Customize_Image_Control ($wp_customize, 'pdn_depoimento3_img_control', array (
	'label' => 'Mudar imagem 3',
	'settings' => 'pdn_depoimento3_img_settings',
	'section' => 'sec_depoimento'
)));

//**********************************************************
//     IMAGEM AUTOR  
//**********************************************************	
  
$wp_customize-> add_section ('pdn_autor_section', array (
	'title' => 'Autor',
	'descrição' => 'Atualizar imagem autor'
));

$wp_customize-> add_setting ('pdn_autor_img_settings', array (
	//valor padrão
));

$wp_customize-> add_control (new WP_Customize_Image_Control ($wp_customize, 'pdn_autor_img_control', array (
	'label' => 'Mudar imagem do autor',
	'settings' => 'pdn_autor_img_settings',
	'section' => 'sec_autor'
)));

//**********************************************************
//  COR VALOR
//**********************************************************

$wp_customize->add_section( 
	'sec_colores', array(
		'title' => __( 'Colors', 'snlwhotpage'),
		'description' => __( 'Hotpage', 'snlwhotpage' ),
		'panel' => 'hotpages'
	)
);


$wp_customize->add_setting('h1_color', array(
	'default' => '#063318',
	'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h1_color', array(
			'label' => esc_html__('Cor do valor', 'spicepress'),
			'section' => 'sec_colores',
			'settings' => 'h1_color',)
));


//**Cor do frase **/
$wp_customize->add_setting('frase_color', array(
	'default' => '#063318',
	'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'frase_color', array(
			'label' => esc_html__('Cor da frase', 'spicepress'),
			'section' => 'sec_colores',
			'settings' => 'frase_color',)
));
//**Cor do texto **/
$wp_customize->add_setting('texto_color', array(
	'default' => '#063318',
	'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'texto_color', array(
			'label' => esc_html__('Cor do texto', 'spicepress'),
			'section' => 'sec_colores',
			'settings' => 'texto_color',)
));
//**Cor do cor site **/
$wp_customize->add_setting('site_color', array(
	'default' => '#063318',
	'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'site_color', array(
			'label' => esc_html__('Cor do site', 'spicepress'),
			'section' => 'sec_colores',
			'settings' => 'site_color',)
));


 
}



/***********caso ainda nate ter imagem colocar nossa
$my_img = get_template_directory_uri (). '/images/Pradip_Debnath.jpg';
if (get_theme_mod ('pdn_home_img_settings')! = '') {
    $my_img = get_theme_mod ('pdn_home_img_settings');
}

Para obter o valor desse campo do personalizador para nosso tema, 
podemos echo  get_theme_mod ('pdn_home_img_settings')  onde o parâmetro é o nome de nossa configuração.
***/




add_action( 'customize_register', 'snlwhotpage_customizer' );
/******************************fim imagem*******************/

add_action( 'customize_register', 'snlwhotpage_customizer' );

function snlwhotpage_sanitize_select( $input, $setting ){
 
    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible select options 
    $choices = $setting->manager->get_control( $setting->id )->choices;
                     
    //return input if valid or return default option
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
     
}