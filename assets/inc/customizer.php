<?php


function ifmtwp_customizer( $wp_customize ){


    /**
     * ÁREA DE SERVIÇOS - INÍCIO
     */    
    //1
    $wp_customize->add_section(
        'sec_text_servicoes1',
        array(
             'title' => 'Personaliza: texto da área de serviços 1',
             'description' => 'Personaliza: texto da área de serviços 1'
        )
    );
    
        $wp_customize->add_setting(
            'set_text_servicoes1',
            array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_text_servicoes1',
            array(
                'label' => 'Preencha com texto curto',
                'section' => 'sec_text_servicoes1',
                'type' => 'text'
            )
        );      
        $wp_customize->add_section(
            'sec_text_serv_fa_1',
            array(
                 'title' => 'Personaliza: código ícone área de serviços 1',
                 'description' => 'Personaliza: código ícone área de serviços 1'
            )
        );
        
            $wp_customize->add_setting(
                'set_text_serv_fa_1',
                array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );
        
            $wp_customize->add_control(
                'set_text_serv_fa_1',
                array(
                    'label' => 'Preencha de acordo com modelo: fas fa-bullhorn (https://fontawesome.com/v4/)',
                    'section' => 'sec_text_serv_fa_1',
                    'type' => 'text'
                )
            ); 
            $wp_customize->add_section( 
                'sec_url_servico_1', 
                array(
                    'title' => esc_html__( 'Personaliza: link para area de serviços 1', 'theme_slug' )
                )
            );                      
                $wp_customize->add_setting( 
                    'set_url_servico_1', 
                    array(
                        'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
                    )
                );
                
                $wp_customize->add_control( 
                    'set_url_servico_1', 
                    array(
                        'label' => esc_html__( 'Insira URL aqui', 'theme_slug' ),
                        'section' => 'sec_url_servico_1',
                        'type' => 'url'
                    )
                );            

        //2
        $wp_customize->add_section(
            'sec_text_servicoes2',
            array(
                 'title' => 'Personaliza: texto da área de serviços 2',
                 'description' => 'Personaliza: texto da área de serviços 2'
            )
        );
        
            $wp_customize->add_setting(
                'set_text_servicoes2',
                array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );
        
            $wp_customize->add_control(
                'set_text_servicoes2',
                array(
                    'label' => 'Preencha com texto curto',
                    'section' => 'sec_text_servicoes2',
                    'type' => 'text'
                )
            );
            $wp_customize->add_section(
                'sec_text_serv_fa_2',
                array(
                     'title' => 'Personaliza: código ícone área de serviços 2',
                     'description' => 'Personaliza: código ícone área de serviços 2'
                )
            );
            
                $wp_customize->add_setting(
                    'set_text_serv_fa_2',
                    array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'sanitize_text_field'
                    )
                );
            
                $wp_customize->add_control(
                    'set_text_serv_fa_2',
                    array(
                        'label' => 'Preencha de acordo com modelo: fas fa-bullhorn (https://fontawesome.com/v4/)',
                        'section' => 'sec_text_serv_fa_2',
                        'type' => 'text'
                    )
                );  
                $wp_customize->add_section( 
                    'sec_url_servico_2', 
                    array(
                        'title' => esc_html__( 'Personaliza: link para area de serviços 2', 'theme_slug' )
                    )
                );                      
                    $wp_customize->add_setting( 
                        'set_url_servico_2', 
                        array(
                            'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
                        )
                    );
                    
                    $wp_customize->add_control( 
                        'set_url_servico_2', 
                        array(
                            'label' => esc_html__( 'Insira URL aqui', 'theme_slug' ),
                            'section' => 'sec_url_servico_2',
                            'type' => 'url'
                        )
                    );                     

            //3
            $wp_customize->add_section(
                'sec_text_servicoes3',
                array(
                     'title' => 'Personaliza: texto da área de serviços 3',
                     'description' => 'Personaliza: texto da área de serviços 3'
                )
            );
            
                $wp_customize->add_setting(
                    'set_text_servicoes3',
                    array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'sanitize_text_field'
                    )
                );
            
                $wp_customize->add_control(
                    'set_text_servicoes3',
                    array(
                        'label' => 'Preencha com texto curto',
                        'section' => 'sec_text_servicoes3',
                        'type' => 'text'
                    )
                );    
                $wp_customize->add_section(
                    'sec_text_serv_fa_3',
                    array(
                         'title' => 'Personaliza: código ícone área de serviços 3',
                         'description' => 'Personaliza: código ícone área de serviços 3'
                    )
                );
                
                    $wp_customize->add_setting(
                        'set_text_serv_fa_3',
                        array(
                            'type' => 'theme_mod',
                            'default' => '',
                            'sanitize_callback' => 'sanitize_text_field'
                        )
                    );
                
                    $wp_customize->add_control(
                        'set_text_serv_fa_3',
                        array(
                            'label' => 'Preencha de acordo com modelo: fas fa-bullhorn (https://fontawesome.com/v4/)',
                            'section' => 'sec_text_serv_fa_3',
                            'type' => 'text'
                        )
                    ); 
                    $wp_customize->add_section( 
                        'sec_url_servico_3', 
                        array(
                            'title' => esc_html__( 'Personaliza: link para area de serviços 3', 'theme_slug' )
                        )
                    );                      
                        $wp_customize->add_setting( 
                            'set_url_servico_3', 
                            array(
                                'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
                            )
                        );
                        
                        $wp_customize->add_control( 
                            'set_url_servico_3', 
                            array(
                                'label' => esc_html__( 'Insira URL aqui', 'theme_slug' ),
                                'section' => 'sec_url_servico_3',
                                'type' => 'url'
                            )
                        );                                               
                
                //4
                $wp_customize->add_section(
                    'sec_text_servicoes4',
                    array(
                         'title' => 'Personaliza: texto da área de serviços 4',
                         'description' => 'Personaliza: texto da área de serviços 4'
                    )
                );
                
                    $wp_customize->add_setting(
                        'set_text_servicoes4',
                        array(
                            'type' => 'theme_mod',
                            'default' => '',
                            'sanitize_callback' => 'sanitize_text_field'
                        )
                    );
                
                    $wp_customize->add_control(
                        'set_text_servicoes4',
                        array(
                            'label' => 'Preencha com texto curto',
                            'section' => 'sec_text_servicoes4',
                            'type' => 'text'
                        )
                    );  

                    $wp_customize->add_section(
                        'sec_text_serv_fa_4',
                        array(
                             'title' => 'Personaliza: código ícone área de serviços 4',
                             'description' => 'Personaliza: código ícone área de serviços 4'
                        )
                    );
                    
                        $wp_customize->add_setting(
                            'set_text_serv_fa_4',
                            array(
                                'type' => 'theme_mod',
                                'default' => '',
                                'sanitize_callback' => 'sanitize_text_field'
                            )
                        );
                    
                        $wp_customize->add_control(
                            'set_text_serv_fa_4',
                            array(
                                'label' => 'Preencha de acordo com modelo: fas fa-bullhorn (https://fontawesome.com/v4/)',
                                'section' => 'sec_text_serv_fa_4',
                                'type' => 'text'
                            )
                        );     
                        $wp_customize->add_section( 
                            'sec_url_servico_4', 
                            array(
                                'title' => esc_html__( 'Personaliza: link para area de serviços 4', 'theme_slug' )
                            )
                        );                      
                            $wp_customize->add_setting( 
                                'set_url_servico_4', 
                                array(
                                    'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
                                )
                            );
                            
                            $wp_customize->add_control( 
                                'set_url_servico_4', 
                                array(
                                    'label' => esc_html__( 'Insira URL aqui', 'theme_slug' ),
                                    'section' => 'sec_url_servico_4',
                                    'type' => 'url'
                                )
                            );                                         
    /**
     * ÁREA DE SERVIÇOS - FIM
     */  

    /**
     * Seleciona o tipo de página de redes sociais que aparecerá
     */
    $wp_customize->add_section(
        'sec_text_page_redessociais',
        array(
             'title' => 'Habilita: Página de Redes Sociais',
             'description' => 'Escolha tipo da página de redes sociais'
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
                'label' => '1-Padrão do sistema ou 2-Personalizado pelo usuário',
                'section' => 'sec_text_page_redessociais',
                'type' => 'text'
            )
        );  


    /**
     * Personaliza filtro de posts para multisites
     */
    $wp_customize->add_section(
        'sec_text_page_filtroposts',
        array(
             'title' => 'Personaliza: categoria multisite',
             'description' => 'Personaliza: categoria multisite'
        )
    );
    
        $wp_customize->add_setting(
            'set_text_page_filtroposts',
            array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_text_page_filtroposts',
            array(
                'label' => 'Complete com: alf-bag-blv-cas-cba-cfs-cnp-dmt-gta-ifmt-jna-jna-lrv-pdl-plc',
                'section' => 'sec_text_page_filtroposts',
                'type' => 'text'
            )
        );


    /**
     * Habilita o bloco de notícias com conteúdo do wordpress ou implementando
     */
    $wp_customize->add_section(
        'sec_text_page_blocodenoticias',
        array(
             'title' => 'Personaliza: bloco de notícias',
             'description' => 'Habilita o bloco de notícias'
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
                'label' => '1-Padrão do Sistema ou 2-Personalizado pelo usuário',
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
             'title' => 'Personaliza: tamanho dos componentes',
             'description' => 'Permite os componentes ocuparem a tela toda'
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
                'label' => '1-toda tela ou 2-estreito',
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
             'title' => 'Personaliza: texto de rodapé normal',
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
                'section' => 'sec_text_rodape_normal',
                'type' => 'text'
            )
        );
    //2
    $wp_customize->add_section(
        'sec_text_rodape_negrito',
        array(
             'title' => 'Personaliza: texto de rodapé negrito',
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
             'title' => 'Personaliza: logo do rodapé fundo',
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
                                                                        'section' => 'sec_media_logo_rodape_fundo',
                                                                        'mime_type' => 'image',
                                                                        ) 
                                    ) 
    );

    // 2
    $wp_customize->add_section(
        'sec_link_rodape_fundo',
        array(
             'title' => 'Personaliza: link do rodapé fundo',
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
             'title' => 'Personaliza: link rodapé para facebook',
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
                'section' => 'sec_link_rodape_facebook',
                'type' => 'text'
            )
        ); 
    // 2
    $wp_customize->add_section(
        'sec_link_rodape_youtube',
        array(
             'title' => 'Personaliza: link rodapé para youtube',
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
                'section' => 'sec_link_rodape_youtube',
                'type' => 'text'
            )
        ); 
    // 3
    $wp_customize->add_section(
        'sec_link_rodape_twitter',
        array(
             'title' => 'Personaliza: link rodapé para twitter',
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
                'section' => 'sec_link_rodape_twitter',
                'type' => 'text'
            )
        );    
    // 4
    $wp_customize->add_section(
        'sec_link_rodape_instagram',
        array(
             'title' => 'Personaliza: link rodapé para instagram',
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
             'title' => 'Personaliza: Logo do rodapé',
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
                                                                        'section' => 'sec_media_logo_rodape',
                                                                        'mime_type' => 'image',
                                                                        ) 
                                    ) 
    );   

    /**
     * Configura e habilita o link das widgets da área Ações e Programas
     * 1
     */
    $wp_customize->add_section(
        'sec_text_link_acprog1',
        array(
             'title' => 'Personaliza: widget ações e programas 1',
             'description' => 'Configura o link e habilita a widget do Ações e Programas'
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
                'section' => 'sec_text_link_acprog1',
                'type' => 'text'
            )
        ); 
    //2
    $wp_customize->add_section(
        'sec_text_link_acprog2',
        array(
             'title' => 'Personaliza: widget ações e programas 2',
             'description' => 'Configura o link e habilita a widget do Ações e Programas'
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
                'section' => 'sec_text_link_acprog2',
                'type' => 'text'
            )
        );     
    //3
    $wp_customize->add_section(
        'sec_text_link_acprog3',
        array(
             'title' => 'Personaliza: widget ações e programas 3',
             'description' => 'Configura o link e habilita a widget do Ações e Programas'
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
                'section' => 'sec_text_link_acprog3',
                'type' => 'text'
            )
        );     
    //4
    $wp_customize->add_section(
        'sec_text_link_acprog4',
        array(
             'title' => 'Personaliza: widget ações e programas 4',
             'description' => 'Configura o link e habilita a widget do Ações e Programas'
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
             'description' => 'Escolha tipo da página de notícias'
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
                'label' => '1-Padrão do sistema ou 2-Personalizado pelo usuário',
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
             'title' => 'Personaliza: tipo de carousel-notícia',
             'description' => 'Escolha o tipo'
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
                'label' => '1-Padrão Gov.br ou 2-Padrão do Sistema',
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
             'title' => 'Personaliza: logo Erro 404',
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
             'title' => 'Personaliza: logo do Governo Federal',
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
             'title' => 'Personaliza: nome da instituição',
             'description' => 'Preencher com o nome da Instituição'
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
             'title' => 'Personaliza: nome do campus',
             'description' => 'Preencher com o nome do Campus'
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
            'title' => esc_html__( 'Personaliza: link de acesso 1', 'theme_slug' )
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
                'label' => esc_html__( 'Insira URL aqui', 'theme_slug' ),
                'section' => 'sec_theme_slug_customizer01',
                'type' => 'url'
            )
        );

    $wp_customize->add_section(
        'sec_text_slug_customizer01',
        array(
             'title' => 'Personaliza: texto link de acesso 1',
             'description' => 'Texto do link de acesso 1'
        )
    );
    
        $wp_customize->add_setting(
            'set_text_slug_customizer01',
            array(
                'type' => 'theme_mod',
                'default' => 'Texto do link de acesso 1',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            'set_text_slug_customizer01',
            array(
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
            'title' => esc_html__( 'Personaliza: link de Acesso 2', 'theme_slug' )
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
                 'title' => 'Personaliza: texto link de acesso 2',
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
                    'section' => 'sec_text_slug_customizer02',
                    'type' => 'text'
                )
            );         
    /**
     * Link de Acesso 2 - Fim
     */     

}
add_action( 'customize_register', 'ifmtwp_customizer' );