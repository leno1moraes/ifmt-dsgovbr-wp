<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

	<!-- Facebook share -->
	<meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php echo get_permalink(); ?>" />
    <meta property="og:image" content="<?php 
                                        $urlimg = get_the_post_thumbnail_url();
                                        $urlimg = str_replace('https:', 'http:', $urlimg);
                                        echo $urlimg;
                                        ?>" />
    <meta property="og:description" content="<?php 
                                            $descricao = get_the_excerpt(); 
                                            $descricao = str_replace('<p>', '', $descricao);
                                            $descricao = str_replace('</p>', '', $descricao);
                                            echo $descricao;
                                            ?>" />
    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>" />
    <!--<meta property="fb:admins" content="Facebook numberic ID" />  -->

	<!-- Twitter share -->
	<meta name="twitter:title" content="<?php the_title(); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="<?php echo get_bloginfo(); ?>">
    <meta name="twitter:title" content="<?php the_title(); ?>">
    <meta name="twitter:description" content="<?php echo $descricao; ?>">
    <meta name="twitter:creator" content="<?php the_author(); ?>">
    <meta name="twitter:image:src" content="<?php echo $urlimg; ?>">    

	<!-- Google share -->
	<meta itemprop="name" content="<?php the_title(); ?>">
    <meta itemprop="description" content="<?php echo $descricao; ?>">
	<meta itemprop="image" content="<?php echo $urlimg; ?>">

</head>
    <body <?php body_class(); ?> >
    <?php wp_body_open(); ?>
        <div class="template-base">

            <nav class="br-skiplink">
                <a class="br-item" href="#main-content" accesskey="1">Ir para o conteúdo (1/4) <span class="br-tag text ml-1">1</span></a>
                <a class="br-item" href="#header-navigation" accesskey="2">Ir para o menu (2/4) <span class="br-tag text ml-1">2</span></a>
                <a class="br-item" href="#main-searchbox" accesskey="3">Ir para a busca (3/4) <span class="br-tag text ml-1">3</span></a><a class="br-item" href="#footer" accesskey="4">Ir para o rodapé (4/4) <span class="br-tag text ml-1">4</span></a>
            </nav>
            
            <header class="br-header" id="header" data-sticky="data-sticky">

                <div class="container-lg">  

                    <div class="header-top">

                        <div class="header-logo">
                            <?php 
                                if ( get_theme_mod( 'set_media_logo_gov_federal' ) > 0 ) { 
                                    echo '<img src="'.wp_get_attachment_image_url( get_theme_mod( 'set_media_logo_gov_federal' ), 'full').'" alt="logo"/>'; 
                                } else {
                                ?>
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/logo-temp.png' ?>" alt="Imagem"/>
                                <?php
                                    }                              
                                ?>                            

                            <span class="br-divider vertical mx-half mx-sm-1"></span>
                                                        
                            <div class="header-sign">
                                <?php
                                    if ( has_custom_logo()){
                                        the_custom_logo();
                                    }else{
                                ?>
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/logo-temp.png' ?>" alt="Imagem"/>
                                <?php
                                    }                              
                                ?>  
                            </div>
                        </div>

                        <div class="header-actions">

                            <div class="header-links dropdown">
                                <button class="br-button circle small" type="button" data-toggle="dropdown" aria-label="Abrir Acesso Rápido"><i class="fas fa-ellipsis-v" aria-hidden="true"></i>
                                </button>
                                <div class="br-list">
                                    <div class="header">
                                        <div class="title">Acesso Rápido</div>
                                    </div>                                      
                                    
                                    
                                    <?php 
                                        if ( get_theme_mod( 'set_text_slug_customizer01', '' ) <> ''):
                                    ?>
                                        <a class="br-item" href="<?php echo get_theme_mod( 'set_slug_customizer_url01', '#' ); ?>"><?php echo get_theme_mod( 'set_text_slug_customizer01', 'Link de acesso 1' ); ?></a>
                                    <?php
                                        endif;
                                    ?>
                                    
                                    <?php 
                                        if ( get_theme_mod( 'set_text_slug_customizer02', '' ) <> ''):
                                    ?>
                                    <a class="br-item" href="<?php echo get_theme_mod( 'set_slug_customizer_url02', '#' ); ?>"><?php echo get_theme_mod( 'set_text_slug_customizer02', 'Link de acesso 2' ); ?></a>
                                    <?php
                                        endif;
                                    ?>                                    

                                    <?php 
                                        if ( get_theme_mod( 'set_text_slug_customizer03', '' ) <> ''):
                                    ?>
                                    <a class="br-item" href="<?php echo get_theme_mod( 'set_slug_customizer_url03', '#' ); ?>"><?php echo get_theme_mod( 'set_text_slug_customizer03', 'Link de acesso 3' ); ?></a>
                                    <?php
                                        endif;
                                    ?>                                    

                                    <?php 
                                        if ( get_theme_mod( 'set_text_slug_customizer04', '' ) <> ''):
                                    ?>
                                    <a class="br-item" href="<?php echo get_theme_mod( 'set_slug_customizer_url04', '#' ); ?>"><?php echo get_theme_mod( 'set_text_slug_customizer04', 'Link de acesso 4' ); ?></a>
                                    <?php
                                        endif;
                                    ?>

                                </div>
                            </div>
                            <span class="br-divider vertical mx-half mx-sm-1"></span>


                            <div class="header-functions dropdown">
                                <button class="br-button circle small" type="button" data-toggle="dropdown" aria-label="Abrir Funcionalidades do Sistema">
                                    <i class="fas fa-th" aria-hidden="true"></i>
                                </button>

                                <div class="br-list">
                                    <div class="header">
                                        <div class="title">Funcionalidades do Sistema</div>
                                    </div>

                                    <!--
                                    <div class="align-items-center br-item">
                                        <button class="br-button circle small" type="button" aria-label="Funcionalidade 1"><i class="fas fa-chart-bar" aria-hidden="true"></i><span class="text">Funcionalidade 1</span>
                                        </button>
                                    </div>

                                    <div class="align-items-center br-item">
                                        <button class="br-button circle small" type="button" aria-label="Funcionalidade 2"><i class="fas fa-headset" aria-hidden="true"></i><span class="text">Funcionalidade 2</span>
                                        </button>
                                    </div>

                                    <div class="align-items-center br-item">
                                        <button class="br-button circle small" type="button" aria-label="Funcionalidade 3"><i class="fas fa-comment" aria-hidden="true"></i><span class="text">Funcionalidade 3</span>
                                        </button>
                                    </div>
                                    -->
                                    
                                    <div class="align-items-center br-item">
                                        <button class="br-button circle small" type="button" aria-label="Funcionalidade 4" onclick="mudarContraste()"><i class="fas fa-adjust" aria-hidden="true"></i><span class="text">Funcionalidade 4</span>
                                        </button>
                                    </div>
                                </div>
                            </div><!-- header-functions dropdown -->   
                            
                            <div class="header-search-trigger">
                                pesquisar aqui
                                <button class="br-button circle" type="button" aria-label="Abrir Busca" data-toggle="search" data-target=".header-search"><i class="fas fa-search" aria-hidden="true"></i>
                                </button>
                            </div><!-- header-search-trigger -->                            

                            <!--
                            <div class="header-login">
                                <div class="header-sign-in">
                                    <button class="br-sign-in small" type="button" data-trigger="login"><i class="fas fa-user" aria-hidden="true"></i><span class="d-sm-inline">Entrar</span>
                                    </button>
                                </div>

                                <div class="header-avatar d-none">
                                    <div class="avatar dropdown">

                                        <span class="br-avatar" title="Fulano da Silva">
                                            <span class="image"><img src="/wp-content/themes/ifmt-dsgovbr-wp/assets/images/fulana_da_silva.jpg" alt="Avatar"/>
                                            </span>
                                        </span>

                                        <button class="br-button circle small" type="button" aria-label="Abrir Menu de usuário" data-toggle="dropdown">
                                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                                        </button>

                                        <div class="br-notification">
                                            <div class="notification-header">
                                                <div class="row">
                                                <div class="col-10"><span class="text-bold">Fulano da Silva</span><br/><small>nome.sobrenome@dominio.gov</small></div>
                                                <div class="col-2">
                                                    <div class="close text-right">
                                                    <button class="br-button circle small" type="button" aria-label="Fechar"><i class="fas fa-times" aria-hidden="true"></i>
                                                    </button>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>  
                                            
                                            <div class="notification-body">
                                                <div class="br-tab">

                                                    <nav class="tab-nav">
                                                        <ul>
                                                            <li class="tab-item notification-tooltip" data-tooltip-text="Alertas">
                                                                <button type="button" aria-label="Alertas" data-panel="notification-panel-1-18020">
                                                                    <span class="name"><i class="fas fa-bell" aria-hidden="true"></i>
                                                                    </span>
                                                                </button>
                                                            </li>
                                                            <li class="tab-item notification-tooltip active" data-tooltip-text="Mensagens">
                                                                <button type="button" aria-label="Mensagens" data-panel="notification-panel-2-18020">
                                                                    <span class="name"><i class="fas fa-envelope" aria-hidden="true"></i>
                                                                    </span>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </nav>
                            
                                                    <div class="tab-content">
                                                        <div class="tab-panel" id="notification-panel-1-18020">
                                                            <div class="br-list">
                                                                <button class="br-item" type="button"><i class="fas fa-heartbeat" aria-hidden="true"></i>Link de Acesso
                                                                </button>
                                                                <button class="br-item" type="button"><i class="fas fa-heartbeat" aria-hidden="true"></i>Link de Acesso
                                                                </button>
                                                                <button class="br-item" type="button"><i class="fas fa-heartbeat" aria-hidden="true"></i>Link de Acesso
                                                                </button>
                                                            </div>
                                                        </div> 
                                                        
                                                        <div class="tab-panel active" id="notification-panel-2-18020">
                                                            <div class="br-list">
                                                                <button class="br-item" type="button">
                                                                    <span class="br-tag status small warning"></span>
                                                                    <span class="text-bold">Título</span>
                                                                    <span class="text-medium mb-2">25 de out</span>
                                                                    <span>Nostrud consequat culpa ex mollit aute. Ex ex veniam ea labore laboris duis duis elit. Ex aute dolor enim aute Lorem dolor. Duis labore ad anim culpa. Non aliqua excepteur sunt eiusmod ex consectetur ex esse laborum velit ut aute.</span>
                                                                </button>
                                                                <button class="br-item" type="button">
                                                                    <span class="text-bold">Título</span>
                                                                    <span class="text-medium mb-2">24 de out</span>
                                                                    <span>Labore nulla elit laborum nulla duis. Deserunt ad nulla commodo occaecat nulla proident ea proident aliquip dolore sunt nulla. Do sit eu consectetur quis culpa. Eiusmod minim irure sint nulla incididunt occaecat ipsum mollit in ut. Minim adipisicing veniam adipisicing velit nostrud duis consectetur aute nulla deserunt culpa aliquip.</span>
                                                                </button>
                                                                <button class="br-item" type="button">
                                                                    <span class="br-tag status small warning"></span>
                                                                    <span class="text-bold">Título</span>
                                                                    <span class="text-medium mb-2">03 de out</span>
                                                                    <span>Duis qui dolor dolor qui sint consectetur. Ipsum eu dolore ex anim reprehenderit laborum commodo. Labore do ut nulla eiusmod consectetur.</span>
                                                                </button>
                                                                <button class="br-item" type="button">
                                                                    <span class="text-bold">Título</span>
                                                                    <span class="text-medium mb-2">16 de mai</span>
                                                                    <span>Sunt velit dolor enim mollit incididunt irure est. Ad ea Lorem culpa quis occaecat sunt in exercitation nisi. Sit laborum laborum dolor culpa ipsum velit. Non nulla nisi dolore et anim consequat officia deserunt amet qui. Incididunt exercitation irure labore ut Lorem culpa. Dolore ea irure pariatur ullamco culpa veniam amet dolor in fugiat pariatur ut. Sit non ut enim et incididunt tempor irure pariatur ex proident labore cillum dolore nisi.</span>
                                                                </button>
                                                            </div>
                                                        </div>  

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            -->


                        </div><!-- header-actions -->

                    </div><!-- header-top -->


                    <div class="header-bottom">
                        <div class="header-menu">
                            <div class="header-menu-trigger" id="header-navigation">
                                <button class="br-button small circle" type="button" aria-label="Menu" data-toggle="menu" data-target="#main-navigation" id="navigation"><i class="fas fa-bars" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="header-info">                                                        
                                <div class="header-title">
                                    <?php echo get_theme_mod( 'set_text_slug_insituicao', 'Instituição' ); ?>                                        
                                </div>          
                                
                                <div class="header-subtitle">
                                    <?php echo get_theme_mod( 'set_text_slug_campus', 'Campus' ); ?>                                                                        
                                </div>
                            </div>
                        </div>

                        <div class="header-search" id="main-searchbox">
                            <?php get_search_form(); ?>
                        </div>                        

                    </div><!-- header-bottom -->

                </div><!-- container-lg -->
            </header>


            <div class="br-menu" id="main-navigation">
                            <div class="menu-container">
                                <div class="menu-panel">

                                    <div class="menu-header">

                                        <div class="menu-title">
                                            <?php
                                                if ( has_custom_logo()){
                                                    the_custom_logo();
                                                }else{
                                            ?>
                                                Logotipo do Campus
                                            <?php
                                            
                                                }
                                            ?>                                             

                                            <span class="br-divider vertical mx-half mx-sm-3"></span>

                                            <span>
                                                <?php echo get_theme_mod( 'set_text_slug_campus', 'Campus' ); ?> 
                                            </span>                                            

                                        </div>

                                        <div class="menu-close">
                                            <button class="br-button circle" type="button" aria-label="Fechar o menu" data-dismiss="menu"><i class="fas fa-times" aria-hidden="true"></i>
                                            </button>
                                        </div>

                                    </div><!-- menu-header -->
                                    
                                    <nav class="menu-body">
                                        <?php get_template_part('parts/menu-cabecario'); ?>
                                    </nav>
                                    
                                </div><!-- menu-panel -->
                                <div class="menu-scrim" data-dismiss="menu" tabindex="0"></div>
                            </div><!-- menu-container -->
                        </div><!-- main-navigation -->  
