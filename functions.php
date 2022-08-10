<?php

function ifmtwp_load_scripts(){
    //Fonte Rawline
    wp_enqueue_style('ifmtwp-Rawline', 'https://cdngovbr-ds.estaleiro.serpro.gov.br/design-system/fonts/rawline/css/rawline.css');
    
    //Fonte Raleway
    wp_enqueue_style('ifmtwp-Raleway', 'https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap', array(), null);
    
    //Design System de Governo
    wp_enqueue_style('ifmtwp-css-govbr', get_template_directory_uri().'/assets/node_modules/@govbr-ds/core/dist/core.css', 'all');

    //Fontawesome
    wp_enqueue_style('ifmtwp-Fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        
    //Design System de Governo
    wp_enqueue_script('ifmtwp-js-govbr', get_template_directory_uri().'/assets/node_modules/@govbr-ds/core/dist/core-init.js', array(), '1.0', true);         
}
add_action( 'wp_enqueue_scripts', 'ifmtwp_load_scripts' );

register_nav_menus(
    array(
        'ifmt_wp_main_menu' => 'Menu Principal',
        'ifmt_wp_footer_menu' => 'Menu Secundario'
    )
);
