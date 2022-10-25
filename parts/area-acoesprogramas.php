<section class="mb-5 my-4x" style="background: #f8f8f8 no-repeat left bottom; padding: 30px 0">

<div class="content text-center mb-5x">
    <h2 class="text-blue-warm-vivid-80 text-bold">Ações e Programas</h2>
</div>            



<div class="container">
    <div class="row justify-content-center"> 

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <a href="<?php if ( get_theme_mod( 'set_url_acoesprog1' ) != '' ): echo get_theme_mod( 'set_url_acoesprog1' ); else: echo '#'; endif; ?>">
                    <div class="card-content text-center">
                        <?php if ( get_theme_mod( 'set_media_acoesprog1' ) > 0 ): ?> <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'set_media_acoesprog1' ), 'full') ?>" alt="Imagem" style="width: 40%; height: 40%;" /> <?php else: ?> <img src="<?php echo get_template_directory_uri().'/assets/images/logo_ifmt_verde.png' ?>" alt="Imagem" style="width: 40%; height: 40%;" />  <?php endif; ?>
                    </div>  
                    <div class="card-footer my-1 text-center text-blue-warm-vivid-80 text-bold"><?php if ( get_theme_mod( 'set_text_acoesprog1') != '' ): echo get_theme_mod( 'set_text_acoesprog1'); else: echo 'INSERIR TEXTO 1'; endif; ?></div>
                </a>
            </div>
        </div>      

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <a href="<?php if ( get_theme_mod( 'set_url_acoesprog2' ) != '' ): echo get_theme_mod( 'set_url_acoesprog2' ); else: echo '#'; endif; ?>">
                    <div class="card-content text-center">
                        <?php if ( get_theme_mod( 'set_media_acoesprog2' ) > 0 ): ?> <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'set_media_acoesprog2' ), 'full') ?>" alt="Imagem" style="width: 40%; height: 40%;" /> <?php else: ?> <img src="<?php echo get_template_directory_uri().'/assets/images/logo_ifmt_verde.png' ?>" alt="Imagem" style="width: 40%; height: 40%;" />  <?php endif; ?>
                    </div>  
                    <div class="card-footer my-1 text-center text-blue-warm-vivid-80 text-bold"><?php if ( get_theme_mod( 'set_text_acoesprog2') != '' ): echo get_theme_mod( 'set_text_acoesprog2'); else: echo 'INSERIR TEXTO 1'; endif; ?></div>
                </a>
            </div>
        </div>  
        
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <a href="<?php if ( get_theme_mod( 'set_url_acoesprog3' ) != '' ): echo get_theme_mod( 'set_url_acoesprog3' ); else: echo '#'; endif; ?>">
                    <div class="card-content text-center">
                        <?php if ( get_theme_mod( 'set_media_acoesprog3' ) > 0 ): ?> <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'set_media_acoesprog3' ), 'full') ?>" alt="Imagem" style="width: 40%; height: 40%;" /> <?php else: ?> <img src="<?php echo get_template_directory_uri().'/assets/images/logo_ifmt_verde.png' ?>" alt="Imagem" style="width: 40%; height: 40%;" />  <?php endif; ?>
                    </div>  
                    <div class="card-footer my-1 text-center text-blue-warm-vivid-80 text-bold"><?php if ( get_theme_mod( 'set_text_acoesprog3') != '' ): echo get_theme_mod( 'set_text_acoesprog3'); else: echo 'INSERIR TEXTO 1'; endif; ?></div>
                </a>
            </div>
        </div>  
        
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <a href="<?php if ( get_theme_mod( 'set_url_acoesprog4' ) != '' ): echo get_theme_mod( 'set_url_acoesprog4' ); else: echo '#'; endif; ?>">
                    <div class="card-content text-center">
                        <?php if ( get_theme_mod( 'set_media_acoesprog4' ) > 0 ): ?> <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'set_media_acoesprog4' ), 'full') ?>" alt="Imagem" style="width: 40%; height: 40%;" /> <?php else: ?> <img src="<?php echo get_template_directory_uri().'/assets/images/logo_ifmt_verde.png' ?>" alt="Imagem" style="width: 40%; height: 40%;" />  <?php endif; ?>
                    </div>  
                    <div class="card-footer my-1 text-center text-blue-warm-vivid-80 text-bold"><?php if ( get_theme_mod( 'set_text_acoesprog4') != '' ): echo get_theme_mod( 'set_text_acoesprog4'); else: echo 'INSERIR TEXTO 1'; endif; ?></div>
                </a>
            </div>
        </div>          

    </div>
</div>

<!--
<div class="container">
    <div class="row justify-content-center">

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <?php 
                    if ( get_theme_mod( 'set_text_link_acprog1', '#') <> '#' and is_active_sidebar('acprog-1')):
                ?>
                    <a href="<?php echo get_theme_mod( 'set_text_link_acprog1'); ?>">                
                        <div class="card-content">
                            <div class="card-content text-center">                        
                            <?php 
                                dynamic_sidebar('acprog-1');
                            ?>
                            </div>
                        </div>
                    </a>
                <?php
                else:
                ?>
                    <a href="#">                
                        <div class="card-content">
                            <div class="card-content text-center">                        
                                <span class="fas fa-exclamation-triangle fa-5x"></span>
                            </div>
                        </div>  
                        <div class="card-footer h5 my-1  text-center text-indigo-cool-vivid-70">Rodapé</div>
                    </a>
                <?php
                endif;
                ?>            
            </div>
        </div> 

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <?php 
                    if ( get_theme_mod( 'set_text_link_acprog2', '#') <> '#' and is_active_sidebar('acprog-2')):
                ?>
                    <a href="<?php echo get_theme_mod( 'set_text_link_acprog2'); ?>">                
                        <div class="card-content">
                            <div class="card-content text-center">                        
                            <?php 
                                dynamic_sidebar('acprog-2');
                            ?>
                            </div>
                        </div>
                    </a>
                <?php
                else:
                ?>
                    <a href="#">                
                        <div class="card-content">
                            <div class="card-content text-center">                        
                                <span class="fas fa-exclamation-triangle fa-5x"></span>
                            </div>
                        </div>  
                        <div class="card-footer h5 my-1  text-center text-indigo-cool-vivid-70">Rodapé</div>
                    </a>
                <?php
                endif;
                ?>            
            </div>
        </div> 
        
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <?php 
                    if ( get_theme_mod( 'set_text_link_acprog3', '#') <> '#' and is_active_sidebar('acprog-3')):
                ?>
                    <a href="<?php echo get_theme_mod( 'set_text_link_acprog3'); ?>">                
                        <div class="card-content">
                            <div class="card-content text-center">                        
                            <?php 
                                dynamic_sidebar('acprog-3');
                            ?>
                            </div>
                        </div>
                    </a>
                <?php
                else:
                ?>
                    <a href="#">                
                        <div class="card-content">
                            <div class="card-content text-center">                        
                                <span class="fas fa-exclamation-triangle fa-5x"></span>
                            </div>
                        </div>  
                        <div class="card-footer h5 my-1  text-center text-indigo-cool-vivid-70">Rodapé</div>
                    </a>
                <?php
                endif;
                ?>            
            </div>
        </div> 

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <?php 
                    if ( get_theme_mod( 'set_text_link_acprog4', '#') <> '#' and is_active_sidebar('acprog-4')):
                ?>
                    <a href="<?php echo get_theme_mod( 'set_text_link_acprog4'); ?>">                
                        <div class="card-content">
                            <div class="card-content text-center">                        
                            <?php 
                                dynamic_sidebar('acprog-4');
                            ?>
                            </div>
                        </div>
                    </a>
                <?php
                else:
                ?>
                    <a href="#">                
                        <div class="card-content">
                            <div class="card-content text-center">                        
                                <span class="fas fa-exclamation-triangle fa-5x"></span>
                            </div>
                        </div>  
                        <div class="card-footer h5 my-1  text-center text-indigo-cool-vivid-70">Rodapé</div>
                    </a>
                <?php
                endif;
                ?>            
            </div>
        </div>                

    </div>
</div>
-->

</section>