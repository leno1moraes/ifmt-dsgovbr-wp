<?php


function ifmtwp_customizer( $wp_customize ){


    $wp_customize->add_section(
        'sec_text_tipo_page_noticias',
        array(
             'title' => 'Página de notícias',
             'description' => 'Escolha tipo da página de notícias: 1-Padrão ou 2-Modificado'
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
                'label' => 'Página de notícias',
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
             'description' => 'Escolha tipo de carousel: 1-Padrão ou 2-Modificado'
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