<?php 
    
    $menu_rodape_construtor=wp_nav_menu(array(  'theme_location'  => 'ifmt_wp_footer_menu',
                                                'container'       => false,
                                                'container_class' => '',
                                                'items_wrap' => '%3$s',
                                                'echo' => false
                                            ));
    
    
    $menu_rodape_construtor = str_replace('<ul>', '<div>', $menu_rodape_construtor);
    $menu_rodape_construtor = str_replace('</ul>', '</div>', $menu_rodape_construtor);       
    $menu_rodape_construtor = str_replace('<ul', '<div', $menu_rodape_construtor);      
    $menu_rodape_construtor = str_replace('<div class="sub-menu">', '<div class="br-list">', $menu_rodape_construtor);     
    $menu_rodape_construtor = str_replace('<li><a href="#"', '<div class="col-2"><a href="#"', $menu_rodape_construtor);
    $menu_rodape_construtor = str_replace('<li>', '<div>', $menu_rodape_construtor);    
    $menu_rodape_construtor = str_replace('</li>', '</div>', $menu_rodape_construtor);        
    $menu_rodape_construtor = str_replace('<div class="col-2"><a href="#">', '<div class="col-2"><a class="br-item header" href="#">', $menu_rodape_construtor);    
    $menu_rodape_construtor = str_replace('<div><a href=', '<div class="content"><a class="br-item" href=', $menu_rodape_construtor);

    echo $menu_rodape_construtor;

?>
