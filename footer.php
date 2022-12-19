


        <footer class="br-footer mdgafleitura">
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

        <script>
            function mudarContraste(){
                if ( (String(document.body.style.backgroundColor) == '#FFFFFF') || (String(document.body.style.backgroundColor) == '') ){                    
                    document.body.style.backgroundColor = '#000000';
                    document.getElementsByClassName('br-button')[0].style.color = '#000000';

                    //texto do bloco de notícias
                    for ( var i = 0; i <=6; i++){
                        document.getElementsByClassName('mdpleitura')[i].style.color = '#FFFFFF';
                    }

                    for ( var i = 0; i <=8; i++){
                        //div da área de serviços
                        document.getElementsByClassName('mdgleitura')[i].style.backgroundColor = '#000000';

                        //div de ações e pogramas
                        document.getElementsByClassName('mdgaleitura')[i].style.backgroundColor = '#000000';
                    }
                    
                    for ( var i = 0; i <=3; i++){
                        //icones da área de serviços
                        document.getElementsByClassName('mdsleitura')[i].style.color = '#FFFFFF';

                        //texto da área de serviços
                        document.getElementsByClassName('mdstleitura')[i].style.color = '#FFFFFF';

                        //texto de ações e pogramas
                        document.getElementsByClassName('mdsatleitura')[i].style.color = '#FFFFFF';
                    }                                                                                
                    
                    for ( var i = 0; i <=1; i++){
                        //texto de ações e pogramas
                        document.getElementsByClassName('mdpaleitura')[i].style.color = '#FFFFFF';

                        //##########div de redes sociais
                        document.getElementsByClassName('mdgarleitura')[i].style.backgroundColor = '#000000';

                        //texto de rede sociais
                        document.getElementsByClassName('mdparleitura')[i].style.color = '#FFFFFF';
                        
                        //div do footer
                        document.getElementsByClassName('mdgafleitura')[i].style.backgroundColor = '#000000';                        
                    }                                              

                }else{
                    document.body.style.backgroundColor = '';

                    //texto do bloco de notícias
                    for ( var i = 0; i <=6; i++){
                        document.getElementsByClassName('mdpleitura')[i].style.color = '';
                    }

                    for ( var i = 0; i <=8; i++){
                        //div da área de serviços
                        document.getElementsByClassName('mdgleitura')[i].style.backgroundColor = '#f8f8f8';

                        //div de ações e pogramas
                        document.getElementsByClassName('mdgaleitura')[i].style.backgroundColor = '#f8f8f8';
                    }
                    
                    for ( var i = 0; i <=3; i++){
                        //icones da área de serviços
                        document.getElementsByClassName('mdsleitura')[i].style.color = '#1b2b85';

                        //texto da área de serviços
                        document.getElementsByClassName('mdstleitura')[i].style.color = '#0c326f';

                        //texto de ações e pogramas
                        document.getElementsByClassName('mdsatleitura')[i].style.color = '#0c326f';
                    }                                      
                    
                    for ( var i = 0; i <=1; i++){
                        //texto de ações e pogramas
                        document.getElementsByClassName('mdpaleitura')[i].style.color = '';
                        
                        //##########div de redes sociais
                        document.getElementsByClassName('mdgarleitura')[i].style.backgroundColor = '#f8f8f8';

                        //div do footer
                        document.getElementsByClassName('mdgafleitura')[i].style.backgroundColor = '#071d41';                           
                    }                                            

                }
            }
        </script>

        <?php wp_footer(); ?>
    </body>
</html>