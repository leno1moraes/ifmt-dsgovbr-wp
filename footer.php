


        <footer class="br-footer">
            <div class="container-lg">

                <div class="logo">
                    <?php 
                        if ( get_theme_mod( 'set_media_logo_rodape' ) > 0 ): 
                            echo '<img src="'.wp_get_attachment_image_url( get_theme_mod( 'set_media_logo_rodape' ), 'full').'" alt="logo"/>'; 
                        else:               
                    ?>
                        <img src="<?php echo get_template_directory_uri().'/assets/images/logo-negative.png' ?>" alt="Imagem"/>
                    <?php
                        endif;                            
                    ?>                    
                </div>

                <div class="br-list horizontal" data-toggle="data-toggle" data-sub="data-sub">
                    
                    <?php get_template_part('parts/menu-rodape'); ?>

                    <!--
                    <div class="col-2">
                        <a class="br-item header" href="javascript:void(0)">

                            <div class="content text-down-01 text-bold text-uppercase">Categoria 1</div>

                            <div class="support">
                                <i class="fas fa-angle-down" aria-hidden="true"></i>
                            </div>
                        </a>

                        <div class="br-list">
                            <span class="br-divider d-md-none"></span>
                            <a class="br-item" href="javascript:void(0)">
                            <div class="content">Ad deserunt nostrud</div></a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Nulla occaecat eiusmod</div></a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Nulla occaecat eiusmod</div></a><span class="br-divider d-md-none"></span>
                        </div>

                    </div>

                    <div class="col-2"><a class="br-item header" href="javascript:void(0)">
                        <div class="content text-down-01 text-bold text-uppercase">Categoria 2</div>
                        <div class="support"><i class="fas fa-angle-down" aria-hidden="true"></i>
                        </div></a>
                        <div class="br-list"><span class="br-divider d-md-none"></span><a class="br-item" href="javascript:void(0)">
                            <div class="content">Ex qui laborum consectetur aute commodo</div></a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Duis incididunt consectetur</div></a><span class="br-divider d-md-none"></span>
                        </div>
                    </div>

                    <div class="col-2"><a class="br-item header" href="javascript:void(0)">
                        <div class="content text-down-01 text-bold text-uppercase">Categoria 3</div>
                        <div class="support"><i class="fas fa-angle-down" aria-hidden="true"></i>
                        </div></a>
                        <div class="br-list"><span class="br-divider d-md-none"></span><a class="br-item" href="javascript:void(0)">
                            <div class="content">Duis incididunt consectetur</div></a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Adipisicing culpa et ad consequat</div></a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Nulla occaecat eiusmod</div></a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Duis incididunt consectetur</div></a><span class="br-divider d-md-none"></span>
                        </div>
                    </div>

                    <div class="col-2"><a class="br-item header" href="javascript:void(0)">
                        <div class="content text-down-01 text-bold text-uppercase">Categoria 4</div>
                        <div class="support"><i class="fas fa-angle-down" aria-hidden="true"></i>
                        </div></a>
                        <div class="br-list"><span class="br-divider d-md-none"></span><a class="br-item" href="javascript:void(0)">
                            <div class="content">Duis incididunt consectetur</div></a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Qui esse</div></a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Duis incididunt consectetur</div></a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Duis incididunt consectetur</div></a><span class="br-divider d-md-none"></span>
                        </div>
                    </div>

                    <div class="col-2"><a class="br-item header" href="javascript:void(0)">
                        <div class="content text-down-01 text-bold text-uppercase">Categoria 5</div>
                        <div class="support"><i class="fas fa-angle-down" aria-hidden="true"></i>
                        </div></a>
                        <div class="br-list"><span class="br-divider d-md-none"></span><a class="br-item" href="javascript:void(0)">
                            <div class="content">Ad deserunt nostrud</div></a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Adipisicing culpa et ad consequat</div></a><span class="br-divider d-md-none"></span>
                        </div>
                    </div>

                    <div class="col-2"><a class="br-item header" href="javascript:void(0)">
                        <div class="content text-down-01 text-bold text-uppercase">Categoria 6</div>
                        <div class="support"><i class="fas fa-angle-down" aria-hidden="true"></i>
                        </div></a>
                        <div class="br-list"><span class="br-divider d-md-none"></span><a class="br-item" href="javascript:void(0)">
                            <div class="content">Adipisicing culpa et ad consequat</div></a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Qui esse</div></a><span class="br-divider d-md-none"></span>
                        </div>
                    </div>
                    -->

                </div>
                <div class="d-none d-sm-block">
                <div class="row align-items-end justify-content-between py-5">
                    <div class="col social-network">

                    <p class="text-up-01 text-extra-bold text-uppercase">Redes Sociais</p>
                    
                        <?php 
                            if ( get_theme_mod( 'set_link_rodape_facebook', '' ) <> ''):
                        ?>                                           
                            <a class="mr-3" href="<?php echo get_theme_mod( 'set_link_rodape_facebook' )?>">
                                <span class="fab fa-facebook fa-2x"></span>
                            </a>                                                                
                        <?php                    
                            endif;
                        ?>

                        <?php 
                            if ( get_theme_mod( 'set_link_rodape_youtube', '' ) <> ''):
                        ?>                                           
                            <a class="mr-3" href="<?php echo get_theme_mod( 'set_link_rodape_youtube' )?>">
                                <span class="fab fa-youtube fa-2x"></span>
                            </a>                                                                
                        <?php                    
                            endif;
                        ?>
                        
                        <?php 
                            if ( get_theme_mod( 'set_link_rodape_twitter', '' ) <> ''):
                        ?>                                           
                            <a class="mr-3" href="<?php echo get_theme_mod( 'set_link_rodape_twitter' )?>">
                                <span class="fab fa-twitter fa-2x"></span>
                            </a>                                                                
                        <?php                    
                            endif;
                        ?>
                                            
                        <?php 
                            if ( get_theme_mod( 'set_link_rodape_instagram', '' ) <> ''):
                        ?>                                           
                            <a class="mr-3" href="<?php echo get_theme_mod( 'set_link_rodape_instagram' )?>">
                                <span class="fab fa-instagram fa-2x"></span>
                            </a>                                                                
                        <?php                    
                            endif;
                        ?>       
                        
                        <?php 
                            if ( get_theme_mod( 'set_link_rodape_facebook') == '' and 
                                get_theme_mod( 'set_link_rodape_youtube') == '' and
                                get_theme_mod( 'set_link_rodape_twitter') == '' and
                                get_theme_mod( 'set_link_rodape_instagram') == ''):
                        ?>                                           
                            <a class="mr-3" href="#">
                            <img src="<?php echo get_template_directory_uri().'/assets/images/default-img-rodape.png' ?>" alt="Imagem"/>
                            </a>                                                                
                        <?php                    
                            endif;
                        ?>                      

                    </div>

                    <div class="col assigns text-right">

                    <?php
                        if ( get_theme_mod( 'set_media_logo_rodape_fundo' ) > 0 and get_theme_mod( 'set_link_rodape_fundo', '' ) <> '' ):
                    ?>
                        <a class="" href="<?php echo get_theme_mod( 'set_link_rodape_fundo' )?>" target="_blank">
                            <img class="ml-4" src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'set_media_logo_rodape_fundo' ), 'full') ?>" alt="Imagem"/>
                        </a>                      
                    <?php
                        else:
                    ?>
                            <img class="ml-4" src="<?php echo get_template_directory_uri().'/assets/images/logo-assign-negative.png' ?>" alt="Imagem"/>
                    <?php 
                        endif;
                    ?>                    
                    </div>

                </div>
                </div>
            </div>
            <span class="br-divider my-3"></span>

            <div class="container-lg">
                <div class="info">                    
                    <?php 
                        if ( get_theme_mod( 'set_text_rodape_normal', '' ) <> '' OR get_theme_mod( 'set_text_rodape_negrito', '' ) <> '' ):
                    ?>
                        <div class="text-down-01 text-medium pb-3"><?php if ( get_theme_mod( 'set_text_rodape_normal', '' ) <> '' ): echo get_theme_mod( 'set_text_rodape_normal'); else: echo ''; endif; ?><strong><?php if ( get_theme_mod( 'set_text_rodape_negrito', '' ) <> '' ): echo get_theme_mod( 'set_text_rodape_negrito'); else: echo ''; endif; ?></strong> </div>
                    <?php 
                        else:
                    ?>
                        <div class="text-down-01 text-medium pb-3">Texto destinado a exibição de informações relacionadas à&nbsp; <strong>licença de uso.</strong> </div>
                    <?php 
                        endif;
                    ?>                                
                </div>
            </div>

        </footer>

        <!-- ACEITA OS COOKIES-->
        <!--<div class="br-cookiebar default d-none" tabindex="-1"></div>-->
        </div><!-- template-base -->
        <?php wp_footer(); ?>
    </body>
</html>