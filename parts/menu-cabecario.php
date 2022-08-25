<?php

    $menu_cabecario_construtor = wp_nav_menu( array('theme_location' => 'ifmt_wp_main_menu',
                                                'container'      => false,
                                                'container_class' => '',
                                                'items_wrap'     => '%3$s',
                                                'echo'           => false
                                                                                                
                        ) );
    
    $menu_cabecario_construtor = str_replace('<ul class="sub-menu">', '<ul>', $menu_cabecario_construtor);

    $menu_cabecario_construtor = str_replace('<li><a href="#">', '<li class="menu-folder"><a class="menu-item" href="#">', $menu_cabecario_construtor);

    $menu_cabecario_construtor = str_replace('<li><a href=', '<li><a class="menu-item" href=', $menu_cabecario_construtor);

    $menu_cabecario_construtor = str_replace('<li', '<div', $menu_cabecario_construtor);
    $menu_cabecario_construtor = str_replace('</li>', '</div>', $menu_cabecario_construtor);

    echo $menu_cabecario_construtor;
        

?>