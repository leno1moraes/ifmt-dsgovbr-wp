<?php



require get_template_directory() . '/assets/inc/customizer.php';

/**
 * Carregamentos de scripts
 *
 * @return void
 */
function ifmtwp_load_scripts(){
    //Fonte Rawline
    wp_enqueue_style('ifmtwp-Rawline', 'https://cdngovbr-ds.estaleiro.serpro.gov.br/design-system/fonts/rawline/css/rawline.css');
    
    //Fonte Raleway
    wp_enqueue_style('ifmtwp-Raleway', 'https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap', array(), null);
    
    //Design System de Governo
    wp_enqueue_style('ifmtwp-css-govbr', get_template_directory_uri().'/assets/node_modules/@govbr-ds/core/dist/core.css', 'all');

    //Design System Proprio
    wp_enqueue_style( 'estilos-proprios-style', get_template_directory_uri() . '/assets/css/estilos-proprios.css');    

    //Fontawesome
    wp_enqueue_style('ifmtwp-Fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        
    //Design System de Governo
    wp_enqueue_script('ifmtwp-js-govbr', get_template_directory_uri().'/assets/node_modules/@govbr-ds/core/dist/core-init.js', array(), '1.0', true);

    //estilo carousel jumbotron
    wp_enqueue_style( 'jumbotron-style', get_template_directory_uri() . '/assets/css/jumbotron-carousel-mod.css');
    wp_enqueue_script( 'jumbotron-script', get_template_directory_uri() . '/assets/js/bundle.js', array('jquery'), '1.7', true );

    //Habilitar visualização da página de facebook
    wp_enqueue_script( 'ifmtwp-Facebook', 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v15.0', '15.0', true );

    //Habilitar visualização da página de twitter
    wp_enqueue_script( 'ifmtwp-Twitter', 'https://platform.twitter.com/widgets.js', '1.0', true );

    //Habilitar visualização da página de Instagramn
    //wp_enqueue_script( 'ifmtwp-Instagram', 'https://www.instagram.com/embed.js', '1.0', true );        


    
}
add_action( 'wp_enqueue_scripts', 'ifmtwp_load_scripts' );

/**
 * Habilita as Sidebars/Widgets
 *
 * @return void
 */
add_action('widgets_init', 'ifmtwp_sidebars');
function ifmtwp_sidebars(){

    register_sidebar(
        array(
            'name' => 'Servico 1',
            'id' => 'servico-1',
            'description' => 'Area de serviços 1',
            'before_widget' => '<div> ',
            'after_widget' => '</div>',            
            'before_title' => '<div class="card-content">',
            'after_title' => '</div>'
        )
    );   

    register_sidebar(
        array(
            'name' => 'Servico 2',
            'id' => 'servico-2',
            'description' => 'Area de serviços 2',
            'before_widget' => '<div> ',
            'after_widget' => '</div>',            
            'before_title' => '<div class="card-content">',
            'after_title' => '</div>'
        )
    ); 
    
    register_sidebar(
        array(
            'name' => 'Servico 3',
            'id' => 'servico-3',
            'description' => 'Area de serviços 3',
            'before_widget' => '<div> ',
            'after_widget' => '</div>',            
            'before_title' => '<div class="card-content">',
            'after_title' => '</div>'
        )
    );     

    register_sidebar(
        array(
            'name' => 'Servico 4',
            'id' => 'servico-4',
            'description' => 'Area de serviços 4',
            'before_widget' => '<div> ',
            'after_widget' => '</div>',            
            'before_title' => '<div class="card-content">',
            'after_title' => '</div>'
        )
    );     

    register_sidebar(
        array(
            'name' => 'Servico 5',
            'id' => 'servico-5',
            'description' => 'Area de serviços 5',
            'before_widget' => '<div> ',
            'after_widget' => '</div>',            
            'before_title' => '<div class="card-content">',
            'after_title' => '</div>'
        )
    ); 
    
    register_sidebar(
        array(
            'name' => 'Servico 6',
            'id' => 'servico-6',
            'description' => 'Area de serviços 6',
            'before_widget' => '<div> ',
            'after_widget' => '</div>',            
            'before_title' => '<div class="card-content">',
            'after_title' => '</div>'
        )
    ); 
    
    register_sidebar(
        array(
            'name' => 'Ações Programas 1',
            'id' => 'acprog-1',
            'description' => 'Area de Açõs e Programas (preencher com código html <span> https://www.gov.br/ds/fundamentos-visuais/iconografia)',
            'before_widget' => '<div> ',
            'after_widget' => '</div>',            
            'before_title' => '<div class="card-content">',
            'after_title' => '</div>'
        )
    );    

    register_sidebar(
        array(
            'name' => 'Ações Programas 2',
            'id' => 'acprog-2',
            'description' => 'Area de Açõs e Programas (preencher com código html <span> https://www.gov.br/ds/fundamentos-visuais/iconografia)',
            'before_widget' => '<div> ',
            'after_widget' => '</div>',            
            'before_title' => '<div class="card-content">',
            'after_title' => '</div>'
        )
    );  
    
    register_sidebar(
        array(
            'name' => 'Ações Programas 3',
            'id' => 'acprog-3',
            'description' => 'Area de Açõs e Programas (preencher com código html <span> https://www.gov.br/ds/fundamentos-visuais/iconografia)',
            'before_widget' => '<div> ',
            'after_widget' => '</div>',            
            'before_title' => '<div class="card-content">',
            'after_title' => '</div>'
        )
    );  
    
    register_sidebar(
        array(
            'name' => 'Ações Programas 4',
            'id' => 'acprog-4',
            'description' => 'Area de Açõs e Programas (preencher com código html <span> https://www.gov.br/ds/fundamentos-visuais/iconografia)',
            'before_widget' => '<div> ',
            'after_widget' => '</div>',            
            'before_title' => '<div class="card-content">',
            'after_title' => '</div>'
        )
    );  
    
    

}

/**
 * função externa para carrossel
 *
 * @param [type] $option
 * @return void
 */
function idg_wp_get_option ( $option ) {
	$theme_key = strtolower(get_stylesheet());
	$option_key = $theme_key . '_theme_options';
	return get_option($option_key . $option);
}

/**
 * Função para imprimir o slider (carousel)
 *
 * @return void
 */
function the_slider() {
    require get_template_directory() . '/template-slider.php';
}

 
/**
 * Carregamentos das configurações do wordpress:
 * 1 - adiciona os menus
 * 2 - retira o attr lazy das imagens (imagens não sobrepoêm a página)
 * 3 - adiciona theme customize do logo do site (campus)
 * 4 - adiciona customização de posts para imagens destacadas
 * 5 - adiciona feed rss
 * 
 * @return void
 */
function ifmtwp_load_config(){

    //1
    register_nav_menus(
        array(
            'ifmt_wp_main_menu' => 'Menu Principal',
            'ifmt_wp_footer_menu' => 'Menu Rodapé'
        )
    );

    //2
    add_filter( 'wp_lazy_loading_enabled', '__return_false' );
    
    //3
    add_theme_support('custom-logo', array(
        'width' => 120,
        'height' => 40
    ));

    //4
    add_theme_support('post-thumbnails');

    //5
    add_theme_support('automatic-feed-links');

    //6
    add_theme_support( 'title-tag' );

    add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}
add_action('after_setup_theme', 'ifmtwp_load_config', 0);


/**
 * RODAPE
 * remove a id das li
 *
 * @param [type] $id
 * @param [type] $item
 * @param [type] $args
 * @return void
 */

function clear_nav_menu_rodape_item_id($id, $item, $args) {
        return "";    
}
add_filter('nav_menu_item_id', 'clear_nav_menu_rodape_item_id', 10, 3);

/**
 * RODAPE
 * remove a class das li
 *
 * @param [type] $classes
 * @param [type] $item
 * @param [type] $args
 * @return void
 */
function clear_nav_menu_rodape_item_class($classes, $item, $args) {
    return array();
}
add_filter('nav_menu_css_class', 'clear_nav_menu_rodape_item_class', 10, 3);

/**
 * Retira definitivamente o atributo lazy das imagens
 */
function take_off_teste( $attr ){
    unset( $attr['loading'] );
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'take_off_teste');

/**
 * Caso não exista a tag wp_body_open, essa função o adiciona
 */
if ( ! function_exists( 'wp_body_open' ) ){
    function wp_body_open(){
        do_action( 'wp_body_open' );
    }
}

