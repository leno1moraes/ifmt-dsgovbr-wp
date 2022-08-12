<?php


function ifmtwp_customizer( $wp_customize ){
    //link de acesso 1
    $wp_customize->add_section( 
        'sec_theme_slug_customizer01', 
        array(
            'title' => esc_html__( 'Link de Acesso 1', 'theme_slug' ),
            'priority' => 150
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

}
add_action( 'customize_register', 'ifmtwp_customizer' );