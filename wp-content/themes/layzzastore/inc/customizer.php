<?php 

function snlwloja_customizer( $wp_customize ){

		/* Home Page Panel */
		$wp_customize->add_panel('LayzzaStores', array(
			'priority' => 19,
			'capability' => 'edit_theme_options',
			'title' => esc_html__('TEMA LAYZZASTORE', 'snlwloja'),
		));
	  

	

	
	
	  //**********************************************************
	//       SLIDER IMAGEM
	//**********************************************************	

	$wp_customize->add_setting(
		'set_banner_img_option', array(
			'type' => 'theme_mod',
			'default' => '2',
			'sanitize_callback' => 'snlwloja_sanitize_select'
		)
	);

	$wp_customize->add_control(
		'set_banner_img_option', array(
			'label' => __( 'Banner 1920 X 600', 'snlwloja' ),
		
			'section' => 'sec_banner_img',
			'type' => 'radio', // Altere para 'radio'
			'choices' => array(
				'1' => __( 'MOSTRAR', 'snlwloja' ),
				'2' => __( 'OCULTAR', 'snlwloja' ),
			)
		)
	);
		
	
	
	
	$wp_customize->add_section( 
		'sec_banner_img', array(
			'title' => __( 'Banner slider', 'snlwloja'),
			'description' => __( 'LayzzaStore', 'snlwloja' ),
			'panel' => 'LayzzaStores'
		)
	);
	

   

	// Defina os controles de imagem para os três banners
	$wp_customize->add_section('pdn_banner_img_section_1', array(
		'title' => 'Banner rodape 1',
		'description' => 'Atualizar imagem do banner 1',
		'panel' => 'LayzzaStores'
	));
	
	$wp_customize->add_setting('pdn_banner_img_settings_1', array(
		// Valor padrão
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'pdn_banner_img_control_1', array(
		'label' => 'Slider 1',
		'settings' => 'pdn_banner_img_settings_1',
		'section' => 'sec_banner_img'
	)));
	
	$wp_customize->add_section('pdn_banner_img_section_2', array(
		'title' => 'Banner 2',
		'description' => 'Atualizar imagem do banner 2',
		'panel' => 'LayzzaStores'
	));
	
	$wp_customize->add_setting('pdn_banner_img_settings_2', array(
		// Valor padrão
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'pdn_banner_img_control_2', array(
		'label' => 'Slider 2',
		'settings' => 'pdn_banner_img_settings_2',
		'section' => 'sec_banner_img'
	)));
	
	$wp_customize->add_section('pdn_banner_img_section_3', array(
		'title' => 'Banner rodape 3',
		'description' => 'Atualizar imagem do banner 3',
		'panel' => 'LayzzaStores'
	));
	
	$wp_customize->add_setting('pdn_banner_img_settings_3', array(
		// Valor padrão
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'pdn_banner_img_control_3', array(
		'label' => 'Slider 3',
		'settings' => 'pdn_banner_img_settings_3',
		'section' => 'sec_banner_img'
	)));

	
	



	  //**********************************************************
	//      BANNER 
	//**********************************************************	

	$wp_customize->add_setting(
		'set_banner_option', array(
			'type' => 'theme_mod',
			'default' => '2',
			'sanitize_callback' => 'snlwloja_sanitize_select'
		)
	);

	$wp_customize->add_control(
		'set_banner_option', array(
			'label' => __( 'Banner', 'snlwloja' ),
		
			'section' => 'sec_banner',
			'type' => 'radio', // Altere para 'radio'
			'choices' => array(
				'1' => __( 'MOSTRAR', 'snlwloja' ),
				'2' => __( 'OCULTAR', 'snlwloja' ),
			)
		)
	);
		
	
	
	
	$wp_customize->add_section( 
		'sec_banner', array(
			'title' => __( 'Banner ', 'snlwloja'),
			'description' => __( 'LayzzaStore', 'snlwloja' ),
			'panel' => 'LayzzaStores'
		)
	);

	$wp_customize->add_setting(
		'set_banner', array(
			'type' => 'theme_mod',
			'default' => __( 'O Poder das palavras certas muda tudo!', 'sLayzzaStore' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);


	$wp_customize->add_control(
		'set_banner', array(
			'label' => __( 'Use a categoria banner, para mostrar produto  ', 'sLayzzaStore' ),
			'description' => __( 'Frase impacto da promoção  ', 'sLayzzaStore' ),
			'section' => 'sec_banner',
			'type' => 'text'
		)
	);



	
	
	
	//**Cor do titulo **/
	  $wp_customize->add_setting('cor_frase_color', array(
	  	'default' => '#fff',
	  	'sanitize_callback' => 'sanitize_hex_color',
	  ));
	  
	  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_frase_color', array(
	  			'label' => esc_html__('Cor do frase', 'spicepress'),
	  			'section' => 'sec_banner',
	  			'settings' => 'cor_frase_color',)
	  ));

	  //**Cor do titulo **/
	  $wp_customize->add_setting('cor_titulo_color', array(
		'default' => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_titulo_color', array(
				'label' => esc_html__('Cor do titulo', 'spicepress'),
				'section' => 'sec_banner',
				'settings' => 'cor_titulo_color',)
	));


	 //**Cor do texto **/
	 $wp_customize->add_setting('cor_texto_color', array(
		'default' => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_texto_color', array(
				'label' => esc_html__('Cor do texto', 'spicepress'),
				'section' => 'sec_banner',
				'settings' => 'cor_texto_color',)
	));

	 //**Cor do botão **/
	 $wp_customize->add_setting('cor_texto_botao_color', array(
		'default' => '#FFF',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_texto_botao_color', array(
				'label' => esc_html__('Cor do texto botão', 'spicepress'),
				'section' => 'sec_banner',
				'settings' => 'cor_texto_botao_color',)
	));

	 //**Cor do fundo botão **/
	 $wp_customize->add_setting('cor_fundo_botao_color', array(
		'default' => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_fundo_botao_color', array(
				'label' => esc_html__('Cor do fundo botão', 'spicepress'),
				'section' => 'sec_banner',
				'settings' => 'cor_fundo_botao_color',)
	));

	 //**Cor do fundo 1 **/
	 $wp_customize->add_setting('cor_fundo_1_color', array(
		'default' => '#333',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_fundo_1_color', array(
				'label' => esc_html__('Primeira cor do banner', 'spicepress'),
				'section' => 'sec_banner',
				'settings' => 'cor_fundo_1_color',)
	));

	 //**Cor do fundo 2 **/
	 $wp_customize->add_setting('cor_fundo_2_color', array(
		'default' => '#666',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_fundo_2_color', array(
				'label' => esc_html__('Segunda cor do banner', 'spicepress'),
				'section' => 'sec_banner',
				'settings' => 'cor_fundo_2_color',)
	));


		
    //**********************************************************
	//      MENU CATEGORIA  
	//**********************************************************	

	$wp_customize->add_setting(
		'set_categoria_option', array(
			'type' => 'theme_mod',
			'default' => '2',
			'sanitize_callback' => 'snlwloja_sanitize_select'
		)
	);

	$wp_customize->add_control(
		'set_categoria_option', array(
			'label' => __( 'Menu categoria', 'snlwloja' ),
		
			'section' => 'sec_categoria',
			'type' => 'radio', // Altere para 'radio'
			'choices' => array(
				'1' => __( 'MOSTRAR', 'snlwloja' ),
				'2' => __( 'OCULTAR', 'snlwloja' ),
			)
		)
	);
		
	
	$wp_customize->add_section( 
		'sec_categoria', array(
			'title' => __( 'Categoria ', 'snlwloja'),
			'description' => __( 'LayzzaStore', 'snlwloja' ),
			'panel' => 'LayzzaStores'
		)
	);
	
	
	
	//**********************************************************
	//      REDES SOCIAIS   
	//**********************************************************	

	$wp_customize->add_setting(
		'set_social_option', array(
			'type' => 'theme_mod',
			'default' => '2',
			'sanitize_callback' => 'snlwloja_sanitize_select'
		)
	);

	$wp_customize->add_control(
		'set_social_option', array(
			'label' => __( 'Rede sociais', 'snlwloja' ),
		
			'section' => 'sec_social',
			'type' => 'radio', // Altere para 'radio'
			'choices' => array(
				'1' => __( 'MOSTRAR', 'snlwloja' ),
				'2' => __( 'OCULTAR', 'snlwloja' ),
			)
		)
	);
	


	
	
	$wp_customize->add_section( 
		'sec_social', array(
			'title' => __( 'Social ', 'snlwloja'),
			'description' => __( 'LayzzaStore', 'snlwloja' ),
			'panel' => 'LayzzaStores'
		)
	);
	
	$wp_customize->add_setting(
		'set_instagram', array(
			'type' => 'theme_mod',
			'default' => __( '#', 'snlwloja' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	
	$wp_customize->add_control(
		'set_instagram', array(
			'label' => __( '', 'snlwloja' ),
			'description' => __( 'Instagem', 'snlwloja' ),
			'section' => 'sec_social',
			'type' => 'text'
		)
	);
	
	/**facebook**/
	$wp_customize->add_setting(
		'set_facebook', array(
			'type' => 'theme_mod',
			'default' => __( '#', 'snlwloja' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	
	$wp_customize->add_control(
		'set_facebook', array(
			'label' => __( '', 'snlwloja' ),
			'description' => __( 'Facebook', 'snlwloja' ),
			'section' => 'sec_social',
			'type' => 'text'
		)
	);
	/**youtube**/
	$wp_customize->add_setting(
		'set_youtube', array(
			'type' => 'theme_mod',
			'default' => __( '#', 'snlwloja' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	
	$wp_customize->add_control(
		'set_youtube', array(
			'label' => __( '', 'snlwloja' ),
			'description' => __( 'YouTube', 'snlwloja' ),
			'section' => 'sec_social',
			'type' => 'text'
		)
	);
	
	/**twitter**/
	$wp_customize->add_setting(
		'set_twitter', array(
			'type' => 'theme_mod',
			'default' => __( '#', 'snlwloja' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	
	$wp_customize->add_control(
		'set_twitter', array(
			'label' => __( '', 'snlwloja' ),
			'description' => __( 'Twitter', 'snlwloja' ),
			'section' => 'sec_social',
			'type' => 'text'
		)
	);
	
	/**linkedin**/
	$wp_customize->add_setting(
		'set_linkedin', array(
			'type' => 'theme_mod',
			'default' => __( '#', 'snlwloja' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	
	$wp_customize->add_control(
		'set_linkedin', array(
			'label' => __( '', 'snlwloja' ),
			'description' => __( 'Linkedin', 'snlwloja' ),
			'section' => 'sec_social',
			'type' => 'text'
		)
	);
	
	/**pinterest**/
	$wp_customize->add_setting(
		'set_pinterest', array(
			'type' => 'theme_mod',
			'default' => __( '#', 'snlwloja' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	
	$wp_customize->add_control(
		'set_pinterest', array(
			'label' => __( '', 'snlwloja' ),
			'description' => __( 'Pinterest', 'snlwloja' ),
			'section' => 'sec_social',
			'type' => 'text'
		)
	);
	
	
	
	//**********************************************************
	//  COR FUNDO DO SITE
	//**********************************************************
	
	$wp_customize->add_section( 
		'sec_color_site', array(
			'title' => __( 'Color site', 'snlwloja'),
			'description' => __( 'LayzzaStore', 'snlwloja' ),
			'panel' => 'LayzzaStores'
		)
	);
	

	//**Cor do Site **/
	$wp_customize->add_setting('fundo_site_color', array(
		'default' => '#FFF',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'fundo_site_color', array(
				'label' => esc_html__('Cor do fundo do site', 'spicepress'),
				'section' => 'sec_color_site',
				'settings' => 'fundo_site_color',)
	));
	







    //**********************************************************
	//  COR RODAPE
	//**********************************************************
	
	//$wp_customize->add_section( 
	//	'sec_color_rodape', array(
	//		'title' => __( 'Color do rodape', 'snlwloja'),
	//		'description' => __( 'LayzzaStore', 'snlwloja' ),
	//		'panel' => 'LayzzaStores'
	//	)
	//);
//
    //$wp_customize->add_setting('texto_rodape_color', array(
	//	'default' => '#ffffff',
	//	'sanitize_callback' => 'sanitize_hex_color',
	//));
	//
	//$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'texto_rodape_color', array(
	//			'label' => esc_html__('Cor do texto do rodape', 'spicepress'),
	//			'section' => 'sec_color_rodape',
	//			'settings' => 'texto_rodape_color',)
	//));
	//
//
	////**Cor do fundo rodape **/
	//$wp_customize->add_setting('rodape_color', array(
	//	'default' => '#0073e6',
	//	'sanitize_callback' => 'sanitize_hex_color',
	//));
	//
	//$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rodape_color', array(
	//			'label' => esc_html__('Cor do fundo rodape', 'spicepress'),
	//			'section' => 'sec_color_rodape',
	//			'settings' => 'rodape_color',)
	//));
//



      //**********************************************************
	//  COR MENU
	//**********************************************************
	
	$wp_customize->add_section( 
		'sec_color_menu', array(
			'title' => __( 'Color do menu', 'snlwloja'),
			'description' => __( 'LayzzaStore', 'snlwloja' ),
			'panel' => 'LayzzaStores'
		)
	);

	//**Cor do texto Menu **/
	$wp_customize->add_setting('texto_menu_color', array(
		'default' => '#FFFFFF',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'texto_menu_color', array(
				'label' => esc_html__('Cor do texto do menu', 'spicepress'),
				'section' => 'sec_color_menu',
				'settings' => 'texto_menu_color',)
	));

	   //**Cor do fundo Menu **/
	   $wp_customize->add_setting('fundo_menu_color', array(
		'default' => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'fundo_menu_color', array(
				'label' => esc_html__('Cor do fundo do menu', 'spicepress'),
				'section' => 'sec_color_menu',
				'settings' => 'fundo_menu_color',)
	));


	//**Cor do texto Menu **/
	$wp_customize->add_setting('mouse_menu_color', array(
		'default' => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mouse_menu_color', array(
				'label' => esc_html__('Cor ao passar o mouse', 'spicepress'),
				'section' => 'sec_color_menu',
				'settings' => 'mouse_menu_color',)
	));



	   //**********************************************************
	//  COR DA LOJA
	//**********************************************************
	
	$wp_customize->add_section( 
		'sec_color_loja', array(
			'title' => __( 'Color da loja', 'snlwloja'),
			'description' => __( 'LayzzaStore', 'snlwloja' ),
			'panel' => 'LayzzaStores'
		)
	);


	//**Cor do texto Menu **/
	$wp_customize->add_setting('texto_loja_color', array(
		'default' => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'texto_loja_color', array(
				'label' => esc_html__('Cor texto loja', 'spicepress'),
				'section' => 'sec_color_loja',
				'settings' => 'texto_loja_color',)
	));
	
	

 
	
	
	//**********************************************************
	//    PRIMEIRO RODAPE 1
	//**********************************************************	
	
	$wp_customize->add_section( 
		'sec_rodape1', array(
			'title' => __( 'Rodape Modulo 1 ', 'snlwloja'),
			'description' => __( 'LayzzaStore', 'snlwloja' ),
			'panel' => 'LayzzaStores'
		)
	);
    

	$wp_customize->add_setting(
		'set_rodape1_option', array(
			'type' => 'theme_mod',
			'default' => '2',
			'sanitize_callback' => 'snlwloja_sanitize_select'
		)
	);

	$wp_customize->add_control(
		'set_rodape1_option', array(
			'label' => __( 'Libera módulo rodape1', 'snlwloja' ),
		
			'section' => 'sec_rodape1',
			'type' => 'radio', // Altere para 'radio'
			'choices' => array(
				'1' => __( 'MOSTRAR', 'snlwloja' ),
				'2' => __( 'OCULTAR', 'snlwloja' ),
			)
		)
	);
	
	$wp_customize->add_setting(
		'set_rodape1', array(
			'type' => 'theme_mod',
			'default' => __( 'Titulo ', 'snlwloja' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_rodape1', array(
			'section' => 'sec_rodape1',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'set_rodapelinha1', array(
			'type' => 'theme_mod',
			'default' => __( 'De Segunda à Sexta, ', 'snlwloja' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_rodapelinha1', array(
			'section' => 'sec_rodape1',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'set_rodapelinha2', array(
			'type' => 'theme_mod',
			'default' => __( 'das 09h às 17h ', 'snlwloja' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_rodapelinha2', array(
			'section' => 'sec_rodape1',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'set_rodapelinha3', array(
			'type' => 'theme_mod',
			'default' => __( '(exceto feriados) ', 'snlwloja' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_rodapelinha3', array(
			'section' => 'sec_rodape1',
			'type' => 'text'
		)
	);


	
	//**********************************************************
	//    PRIMEIRO RODAPE 2
	//**********************************************************	
	
	$wp_customize->add_section( 
		'sec_rodape2', array(
			'title' => __( 'Rodape Modulo 2 ', 'snlwloja'),
			'description' => __( 'LayzzaStore', 'snlwloja' ),
			'panel' => 'LayzzaStores'
		)
	);
    

	$wp_customize->add_setting(
		'set_rodape2_option', array(
			'type' => 'theme_mod',
			'default' => '2',
			'sanitize_callback' => 'snlwloja_sanitize_select'
		)
	);

	$wp_customize->add_control(
		'set_rodape2_option', array(
			'label' => __( 'Menu rodape', 'snlwloja' ),
		
			'section' => 'sec_rodape2',
			'type' => 'radio', // Altere para 'radio'
			'choices' => array(
				'1' => __( 'MOSTRAR', 'snlwloja' ),
				'2' => __( 'OCULTAR', 'snlwloja' ),
			)
		)
	);
	
	


    //**********************************************************
	//     IMAGEM RODAPE MODULO 3 
	//**********************************************************	
    

	$wp_customize->add_setting(
		'set_rpbanner_option', array(
			'type' => 'theme_mod',
			'default' => '2',
			'sanitize_callback' => 'snlwloja_sanitize_select'
		)
	);

	$wp_customize->add_control(
		'set_rpbanner_option', array(
			'label' => __( 'Menu rodape', 'snlwloja' ),
		
			'section' => 'sec_rpbanner',
			'type' => 'radio', // Altere para 'radio'
			'choices' => array(
				'1' => __( 'MOSTRAR', 'snlwloja' ),
				'2' => __( 'OCULTAR', 'snlwloja' ),
			)
		)
	);
	


	$wp_customize->add_section( 
		'sec_rpbanner', array(
			'title' => __( 'Rodape modelo 3', 'snlwloja'),
			'description' => __( 'LayzzaStore', 'snlwloja' ),
			'panel' => 'LayzzaStores'
		)
	);
		
	  
	$wp_customize-> add_section ('pdn_rpbanner_section', array (
		'title' => 'Banner rodape',
		'descrição' => 'Atualizar imagem',
		'panel' => 'LayzzaStores'
	));
	
	$wp_customize-> add_setting ('pdn_rpbanner_img_settings', array (
		//valor padrão
	));
	
	$wp_customize-> add_control (new WP_Customize_Image_Control ($wp_customize, 'pdn_rpbanner_img_control', array (
		'label' => 'Imagem Rodape',
		'settings' => 'pdn_rpbanner_img_settings',
		'section' => 'sec_rpbanner'
	)));
	

    //**********************************************************
	//     FRASE FINAL DO SITE
	//**********************************************************

	$wp_customize->add_section( 
		'sec_frasefinal', array(
			'title' => __( 'Rodape Informações ', 'snlwloja'),
			'description' => __( 'LayzzaStore', 'snlwloja' ),
			'panel' => 'LayzzaStores'
		)
	);

	$wp_customize->add_setting(
		'set_frasefinal', array(
			'type' => 'theme_mod',
			'default' => __( 'CNPJ: 00.000.100/0001-00 | Razão Social: xxx comercial importadora e exportadora ltda | Inscrição Estadual: 000.000.000.000
			Av. Tomas Pinheiro, n° 000 – bairro Centro – Alvorada/RS – CEP:000000-000', 'snlwloja' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_frasefinal', array(
			'label' => __( 'Informações sobre empresa', 'snlwloja' ),
			
			'section' => 'sec_frasefinal',
			'type' => 'text'
		)
	);


	}

		
	
	add_action('customize_register', 'snlwloja_customizer');

	

	function snlwloja_sanitize_select( $input, $setting ){
	 
		//input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
		$input = sanitize_key($input);
	
		//get the list of possible select options 
		$choices = $setting->manager->get_control( $setting->id )->choices;
						 
		//return input if valid or return default option
		return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
		 
	}