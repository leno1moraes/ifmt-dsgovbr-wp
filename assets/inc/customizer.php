<?php


function ifmtwp_customizer( $wp_customize ){


    /**
     * Habilita o bloco de notícias com conteúdo do wordpress ou implementando
     */
    $wp_customize->add_section(
        'sec_text_page_blocodenoticias',
        array(
             'title' => 'Personaliza: bloco de notícias',
             'description' => 'Habilita o bloco de notícias (1-Padrão do Sistema ou 2-Personalizado pelo usuário)'
        )
    );
    
        $wp_customize->add_setting(
            'set_text_page_blocodenoticias',
            array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_text_page_blocodenoticias',
            array(
                'label' => 'Personaliza: bloco de notícias',
                'section' => 'sec_text_page_blocodenoticias',
                'type' => 'text'
            )
        );
    
    /**
     * Componentes em tela "full size"
     */
    $wp_customize->add_section(
        'sec_text_full_size',
        array(
             'title' => 'Componentes Full Size',
             'description' => 'Permite os componentes ocuparem a tela toda (1-toda tela ou 2-encaixar na tela)'
        )
    );
    
        $wp_customize->add_setting(
            'set_text_full_size',
            array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_text_full_size',
            array(
                'label' => 'Componentes Full Size',
                'section' => 'sec_text_full_size',
                'type' => 'text'
            )
        );


    /**
     * Texto de rodapé
     */
    //1
    $wp_customize->add_section(
        'sec_text_rodape_normal',
        array(
             'title' => 'Texto de rodapé normal',
             'description' => 'Preencher com o texto de rodapé (normal)'
        )
    );
    
        $wp_customize->add_setting(
            'set_text_rodape_normal',
            array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_text_rodape_normal',
            array(
                'label' => 'Preencher com o texto de rodapé (normal)',
                'section' => 'sec_text_rodape_normal',
                'type' => 'text'
            )
        );
    //2
    $wp_customize->add_section(
        'sec_text_rodape_negrito',
        array(
             'title' => 'Texto de rodapé negrito',
             'description' => 'Preencher com o texto de rodapé (negrito)'
        )
    );
    
        $wp_customize->add_setting(
            'set_text_rodape_negrito',
            array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_text_rodape_negrito',
            array(
                'label' => 'Preencher com o texto de rodapé (negrito)',
                'section' => 'sec_text_rodape_negrito',
                'type' => 'text'
            )
        );         

    /**
     * Logo para rodapé fundo
     */
    // 1
    $wp_customize->add_section(
        'sec_media_logo_rodape_fundo',
        array(
             'title' => 'Logo do rodapé fundo',
             'description' => 'Configura logo da imagem do rodapé fundo'
        )
    );

        $wp_customize->add_setting(
            'set_media_logo_rodape_fundo',
            array(
                'type' => 'theme_mod',
                'default' => 'Logo do rodapé fundo',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
            )
        );    

    $wp_customize->add_control( 
        new WP_Customize_Media_Control( $wp_customize, 'set_media_logo_rodape_fundo', 
                                                                        array(
                                                                        'label' => __( 'Featured Home Page Image', 'theme_textdomain' ),
                                                                        'section' => 'sec_media_logo_rodape_fundo',
                                                                        'mime_type' => 'image',
                                                                        ) 
                                    ) 
    );

    // 2
    $wp_customize->add_section(
        'sec_link_rodape_fundo',
        array(
             'title' => 'Link rodapé para fundo',
             'description' => 'Configura e habilita o link no rodapé do fundo'
        )
    );
    
        $wp_customize->add_setting(
            'set_link_rodape_fundo',
            array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_link_rodape_fundo',
            array(
                'label' => 'Configura e habilita o link no rodapé do fundo',
                'section' => 'sec_link_rodape_fundo',
                'type' => 'text'
            )
        );     


    
    /**
     * Icones das redes sociais quen ficam no rodapé
     */
    // 1
    $wp_customize->add_section(
        'sec_link_rodape_facebook',
        array(
             'title' => 'Link rodapé para facebook',
             'description' => 'Configura e habilita o link no rodapé do facebook'
        )
    );
    
        $wp_customize->add_setting(
            'set_link_rodape_facebook',
            array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_link_rodape_facebook',
            array(
                'label' => 'Configura e habilita o link no rodapé do facebook',
                'section' => 'sec_link_rodape_facebook',
                'type' => 'text'
            )
        ); 
    // 2
    $wp_customize->add_section(
        'sec_link_rodape_youtube',
        array(
             'title' => 'Link rodapé para youtube',
             'description' => 'Configura e habilita o link no rodapé do youtube'
        )
    );
    
        $wp_customize->add_setting(
            'set_link_rodape_youtube',
            array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_link_rodape_youtube',
            array(
                'label' => 'Configura e habilita o link no rodapé do youtube',
                'section' => 'sec_link_rodape_youtube',
                'type' => 'text'
            )
        ); 
    // 3
    $wp_customize->add_section(
        'sec_link_rodape_twitter',
        array(
             'title' => 'Link rodapé para twitter',
             'description' => 'Configura e habilita o link no rodapé do twitter'
        )
    );
    
        $wp_customize->add_setting(
            'set_link_rodape_twitter',
            array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_link_rodape_twitter',
            array(
                'label' => 'Configura e habilita o link no rodapé do twitter',
                'section' => 'sec_link_rodape_twitter',
                'type' => 'text'
            )
        );    
    // 4
    $wp_customize->add_section(
        'sec_link_rodape_instagram',
        array(
             'title' => 'Link rodapé para instagram',
             'description' => 'Configura e habilita o link no rodapé do instagram'
        )
    );
    
        $wp_customize->add_setting(
            'set_link_rodape_instagram',
            array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_link_rodape_instagram',
            array(
                'label' => 'Configura e habilita o link no rodapé do instagram',
                'section' => 'sec_link_rodape_instagram',
                'type' => 'text'
            )
        );                      
    /**
     * (fim) Icones das redes sociais quen ficam no rodapé
     */


    /**
     * Logo para rodapé
     */
    $wp_customize->add_section(
        'sec_media_logo_rodape',
        array(
             'title' => 'Logo do rodapé',
             'description' => 'Configura logo da imagem do rodapé'
        )
    );

        $wp_customize->add_setting(
            'set_media_logo_rodape',
            array(
                'type' => 'theme_mod',
                'default' => 'Logo do rodapé',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
            )
        );    

    $wp_customize->add_control( 
        new WP_Customize_Media_Control( $wp_customize, 'set_media_logo_rodape', 
                                                                        array(
                                                                        'label' => __( 'Featured Home Page Image', 'theme_textdomain' ),
                                                                        'section' => 'sec_media_logo_rodape',
                                                                        'mime_type' => 'image',
                                                                        ) 
                                    ) 
    );

    /**
     * Seleciona o tipo de página de redes sociais que aparecerá
     */
    $wp_customize->add_section(
        'sec_text_page_redessociais',
        array(
             'title' => 'Página de Redes Sociais',
             'description' => 'Escolha tipo da página de redes sociais: 1-Padrão ou 2-Modificado'
        )
    );
    
        $wp_customize->add_setting(
            'set_text_page_redessociais',
            array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_text_page_redessociais',
            array(
                'label' => 'Página de Redes Sociais',
                'section' => 'sec_text_page_redessociais',
                'type' => 'text'
            )
        );     

    /**
     * Configura e habilita o link das widgets da área Ações e Programas
     * 1
     */
    $wp_customize->add_section(
        'sec_text_link_acprog1',
        array(
             'title' => 'Link Acções e Programas 1',
             'description' => 'Configura o link e habilita a widget do Ações e Programas 1'
        )
    );
    
        $wp_customize->add_setting(
            'set_text_link_acprog1',
            array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_text_link_acprog1',
            array(
                'label' => 'Link Acções e Programas 1',
                'section' => 'sec_text_link_acprog1',
                'type' => 'text'
            )
        ); 
    //2
    $wp_customize->add_section(
        'sec_text_link_acprog2',
        array(
             'title' => 'Link Acções e Programas 2',
             'description' => 'Configura o link e habilita a widget do Ações e Programas 2'
        )
    );
    
        $wp_customize->add_setting(
            'set_text_link_acprog2',
            array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_text_link_acprog2',
            array(
                'label' => 'Link e habl. ações e programas 2',
                'section' => 'sec_text_link_acprog2',
                'type' => 'text'
            )
        );     
    //3
    $wp_customize->add_section(
        'sec_text_link_acprog3',
        array(
             'title' => 'Link Acções e Programas 3',
             'description' => 'Configura o link e habilita a widget do Ações e Programas 3'
        )
    );
    
        $wp_customize->add_setting(
            'set_text_link_acprog3',
            array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_text_link_acprog3',
            array(
                'label' => 'Link e habl. ações e programas 3',
                'section' => 'sec_text_link_acprog3',
                'type' => 'text'
            )
        );     
    //4
    $wp_customize->add_section(
        'sec_text_link_acprog4',
        array(
             'title' => 'Link Acções e Programas 4',
             'description' => 'Configura o link e habilita a widget do Ações e Programas 4'
        )
    );
    
        $wp_customize->add_setting(
            'set_text_link_acprog4',
            array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_text_link_acprog4',
            array(
                'label' => 'Link e habl. ações e programas 4',
                'section' => 'sec_text_link_acprog4',
                'type' => 'text'
            )
        );

    /**
     * Seleciona o tipo de página de lista de notícias que aparecerá
     */
    $wp_customize->add_section(
        'sec_text_tipo_page_noticias',
        array(
             'title' => 'Personaliza: página lista de notícias',
             'description' => 'Escolha tipo da página de notícias: 1-Padrão do sistema ou 2-Personalizado pelo usuário'
        )
    );
    
        $wp_customize->add_setting(
            'set_text_page_noticias',
            array(
                'type' => 'theme_mod',
                'default' => '1',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_text_page_noticias',
            array(
                'label' => 'Personaliza: página lista de notícias',
                'section' => 'sec_text_tipo_page_noticias',
                'type' => 'text'
            )
        );     

    /**
     * Seleciona o tipo de Carousel
     */
    $wp_customize->add_section(
        'sec_text_tipo_carousel',
        array(
             'title' => 'Tipo de carousel',
             'description' => 'Escolha tipo da página de notícias: 1-Padrão do sistema ou 2-Personalizado pelo usuário'
        )
    );
    
        $wp_customize->add_setting(
            'set_text_tipo_carousel',
            array(
                'type' => 'theme_mod',
                'default' => '1',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_text_tipo_carousel',
            array(
                'label' => 'Tipo de carousel',
                'section' => 'sec_text_tipo_carousel',
                'type' => 'text'
            )
        ); 

    /**
     * Logo erro 404
     */
    $wp_customize->add_section(
        'sec_media_logo_404',
        array(
             'title' => 'Logo de Erro 404',
             'description' => 'Use uma imagem para erro 404'
        )
    );

        $wp_customize->add_setting(
            'set_media_logo_404',
            array(
                'type' => 'theme_mod',
                'default' => 'Logo de Erro 404',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
            )
        );    

    $wp_customize->add_control( 
        new WP_Customize_Media_Control( $wp_customize, 'set_media_logo_404', 
                                                                        array(
                                                                        'label' => __( 'Featured Home Page Image', 'theme_textdomain' ),
                                                                        'section' => 'sec_media_logo_404',
                                                                        'mime_type' => 'image',
                                                                        ) 
                                    ) 
    );
    /**
     * Logo erro 404
     */

    /**
     * Logo do Governo Federal
     */
    $wp_customize->add_section(
        'sec_media_logo_gov_federal',
        array(
             'title' => 'Logo do Governo Federal',
             'description' => 'Use uma imagem oficial do governo federal'
        )
    );

        $wp_customize->add_setting(
            'set_media_logo_gov_federal',
            array(
                'type' => 'theme_mod',
                'default' => 'Logo do Governo Federal',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
            )
        );    

    $wp_customize->add_control( 
        new WP_Customize_Media_Control( $wp_customize, 'set_media_logo_gov_federal', 
                                                                        array(
                                                                        'label' => __( 'Featured Home Page Image', 'theme_textdomain' ),
                                                                        'section' => 'sec_media_logo_gov_federal',
                                                                        'mime_type' => 'image',
                                                                        ) 
                                    ) 
    );


    /**
     * Texto da Instituição
     */
    $wp_customize->add_section(
        'sec_text_slug_insituicao',
        array(
             'title' => 'Instituição',
             'description' => 'Campo para preencher com o nome da Instituição. Exemplo: Instituto Federal de Mato Grosso'
        )
    );
    
        $wp_customize->add_setting(
            'set_text_slug_insituicao',
            array(
                'type' => 'theme_mod',
                'default' => 'Instituição',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_text_slug_insituicao',
            array(
                'label' => 'Instituição',
                'section' => 'sec_text_slug_insituicao',
                'type' => 'text'
            )
        ); 

    /**
     * Texto da Campus
     */
    $wp_customize->add_section(
        'sec_text_slug_campus',
        array(
             'title' => 'Campus',
             'description' => 'Campo para preencher com o nome do Campus'
        )
    );
    
        $wp_customize->add_setting(
            'set_text_slug_campus',
            array(
                'type' => 'theme_mod',
                'default' => 'Campus',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_text_slug_campus',
            array(
                'label' => 'Campus',
                'section' => 'sec_text_slug_campus',
                'type' => 'text'
            )
        ); 

    
    /**
     * Link de Acesso 1 - Inicio
     */
    $wp_customize->add_section( 
        'sec_theme_slug_customizer01', 
        array(
            'title' => esc_html__( 'Link de Acesso 1', 'theme_slug' )
        )
    );                      
        $wp_customize->add_setting( 
            'set_slug_customizer_url01', 
            array(
                'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
            )
        );
        
        $wp_customize->add_control( 
            'set_slug_customizer_url01', 
            array(
                'label' => esc_html__( 'Insira a URL aqui', 'theme_slug' ),
                'section' => 'sec_theme_slug_customizer01',
                'type' => 'url'
            )
        );

    $wp_customize->add_section(
        'sec_text_slug_customizer01',
        array(
             'title' => 'Texto do Link de Acesso 1',
             'description' => 'Texto do Link de Acesso 1'
        )
    );
    
        $wp_customize->add_setting(
            'set_text_slug_customizer01',
            array(
                'type' => 'theme_mod',
                'default' => 'Texto do Link de Acesso 1',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_text_slug_customizer01',
            array(
                'label' => 'Texto do Link de Acesso 1',
                'description' => 'Adicione o texto aqui',
                'section' => 'sec_text_slug_customizer01',
                'type' => 'text'
            )
        );        
    /**
     * Link de Acesso 1 - Fim
     */


    /**
     * Link de Acesso 2 - Inicio
     */
    $wp_customize->add_section( 
        'sec_theme_slug_customizer02', 
        array(
            'title' => esc_html__( 'Link de Acesso 2', 'theme_slug' )
        )
    );                      
        $wp_customize->add_setting( 
            'set_slug_customizer_url02', 
            array(
                'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
            )
        );
        
        $wp_customize->add_control( 
            'set_slug_customizer_url02', 
            array(
                'label' => esc_html__( 'Insira a URL aqui', 'theme_slug' ),
                'section' => 'sec_theme_slug_customizer02',
                'type' => 'url'
            )
        );

        $wp_customize->add_section(
            'sec_text_slug_customizer02',
            array(
                 'title' => 'Texto do Link de Acesso 2',
                 'description' => 'Texto do Link de Acesso 2'
            )
        );
        
            $wp_customize->add_setting(
                'set_text_slug_customizer02',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Texto do Link de Acesso 2',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );
        
            $wp_customize->add_control(
                'set_text_slug_customizer02',
                array(
                    'label' => 'Texto do Link de Acesso 2',
                    'description' => 'Adicione o texto aqui',
                    'section' => 'sec_text_slug_customizer02',
                    'type' => 'text'
                )
            );         
    /**
     * Link de Acesso 2 - Fim
     */     

}
add_action( 'customize_register', 'ifmtwp_customizer' );