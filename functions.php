<?php


require get_template_directory() . '/assets/inc/metabox.php';

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

    //Fontawesome
    wp_enqueue_style('ifmtwp-Fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        
    //Design System de Governo
    wp_enqueue_script('ifmtwp-js-govbr', get_template_directory_uri().'/assets/node_modules/@govbr-ds/core/dist/core-init.js', array(), '1.0', true);

    //adiciona os estilos e scripts do slider (carousel)
    wp_enqueue_style( 'slider-style', get_template_directory_uri() . '/assets/css/slider.css' );
    wp_enqueue_script( 'caroufredsel', get_template_directory_uri() . '/assets/js/jquery.carouFredSel-6.2.1.js', array('jquery') );
    wp_enqueue_script( 'custom-caroufredsel', get_template_directory_uri() . '/assets/js/main.carouFredSel.js', array('caroufredsel') );    

    
}
add_action( 'wp_enqueue_scripts', 'ifmtwp_load_scripts' );


/**
 * Função para imprimir o slider (carousel)
 *
 * @return void
 */
function the_slider() {
    require get_template_directory() . '/template-slider.php';
}


/**
 * Adicionar o módulo Slide no Wordpress Admin
 *
 * @return void
 */
add_action( 'init', 'create_post_type_sliders' );
function create_post_type_sliders() {
    //Labels customizados
    $labels = array(
                    'name' => _x('Sliders', 'post type general name'),
                    'singular_name' => _x('Slider', 'post type singular name'),
                    'add_new' => _x('Novo slider', 'itens'),
                    'add_new_item' => __('Novo slider'),
                    'edit_item' => __('Editar slider'),
                    'new_item' => __('Novo slider'),
                    'all_items' => __('Todos sliders'),
                    'view_item' => __('Ver slider'),
                    'search_items' => __('Procurar slider'),
                    'not_found' => __('Nenhuma slider encontrado'),
                    'not_found_in_trash' => __('Nenhuma slider encontrado no lixo'),
                    'parent_item_colon' => '',
                    'menu_name' => 'Sliders'
    );
    
    //Registra o cpt com os labels acima
    register_post_type( 'sliders', array(
                                        'labels' => $labels,
                                        'menu_icon' => 'dashicons-slides',
                                        'public' => true,
                                        'publicly_queryable' => true,
                                        'show_ui' => true,
                                        'show_in_menu' => true,
                                        'query_var' => true,
                                        'rewrite' => array(
                                        'slug' => 'sliders',
                                        'with_front' => false,
                                        ),
                            'capability_type' => 'post',
                            'has_archive' => true,
                            'menu_position' => 5,
                            'supports' => array( 'title', 'editor', 'thumbnail' )
                            )
    );
   
}


/**
 * Carregamentos das configurações do wordpress:
 * 1 - adiciona os menus
 * 2 - retira o attr lazy das imagens (imagens não sobrepoêm a página)
 * 3 - adiciona theme customize do logo do site (campus)
 * 4 - adiciona customização de posts para imagens destacadas
 * @return void
 */
function ifmtwp_load_config(){

    //1
    register_nav_menus(
        array(
            'ifmt_wp_main_menu' => 'Menu Principal',
            'ifmt_wp_footer_menu' => 'Menu Secundario'
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
}
add_action('after_setup_theme', 'ifmtwp_load_config', 0);




/**
 * remove a class das ul
 *
 * @param [type] $menu
 * @return void
 */
function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/',' class=""',$menu);        
    return $menu;      
}
add_filter('wp_nav_menu','new_submenu_class'); 


/**
 * adiciona class nos <a href=''/>
 *
 * @param [type] $atts
 * @param [type] $item
 * @param [type] $args
 * @return void
 */
function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );


/**
 * adiciona class nos <a href=''/>
 *
 * @param [type] $classes
 * @param [type] $item
 * @param [type] $args
 * @return void
 */
function add_menu_list_item_class($classes, $item, $args) {
    if (property_exists($args, 'list_item_class')) {
        $classes[] = $args->list_item_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

/**
 * remove a id das li
 *
 * @param [type] $id
 * @param [type] $item
 * @param [type] $args
 * @return void
 */
function clear_nav_menu_item_id($id, $item, $args) {
    return "";
}
add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);

/**
 * remove a class das li
 *
 * @param [type] $classes
 * @param [type] $item
 * @param [type] $args
 * @return void
 */
function clear_nav_menu_item_class($classes, $item, $args) {
    return array();
}
add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);


/**
 * Estilização dos menus 
 *
 * @param [type] $menu
 * @return void
 */
function replace_li_submenu_class($menu) {
    $menu = preg_replace('/<li>/ ','<li> <div class="menu-folder">',$menu);
    $menu = preg_replace('/<\/li>/','</div>',$menu);
    return $menu;      
}
add_filter('wp_nav_menu','replace_li_submenu_class'); 