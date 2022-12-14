<section class="mb-5 my-4x mdgleitura" style="background: #f8f8f8 no-repeat left bottom; padding: 30px 0">

<div class="content text-center mb-5x mdgleitura">
    <h2 class="text-blue-warm-vivid-80 text-bold mdgleitura"> <span class="mdpleitura">Serviços</span> </h2>
</div>            

<div class="container mdgleitura">
    <div class="row justify-content-center mdgleitura"> 

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover mdgleitura">
                <a href="<?php if ( get_theme_mod( 'set_url_servico_1') != '' ): echo get_theme_mod( 'set_url_servico_1'); else: echo '#'; endif; ?>">
                    <div class="card-content text-center">
                        <span class="<?php if ( get_theme_mod( 'set_text_serv_fa_1') != '' ): echo get_theme_mod( 'set_text_serv_fa_1'); else: echo 'fas fa-bullhorn'; endif; ?> text-up-07 mdsleitura" style="color: #1b2b85;"></span>
                    </div>
                    <div class="card-footer my-1 text-center text-bold"> <span class="mdstleitura" style="color: #0c326f;"><?php if ( get_theme_mod( 'set_text_servicoes1') != '' ): echo get_theme_mod( 'set_text_servicoes1'); else: echo 'INSERIR TEXTO 1'; endif; ?></span> </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover mdgleitura">
                <a href="<?php if ( get_theme_mod( 'set_url_servico_2') != '' ): echo get_theme_mod( 'set_url_servico_2'); else: echo '#'; endif; ?>">
                    <div class="card-content text-center">
                        <span class="<?php if ( get_theme_mod( 'set_text_serv_fa_2') != '' ): echo get_theme_mod( 'set_text_serv_fa_2'); else: echo 'fas fa-bullhorn'; endif; ?> text-up-07 mdsleitura" style="color: #1b2b85;"></span>
                    </div>  
                    <div class="card-footer my-1 text-center text-bold"> <span class="mdstleitura" style="color: #0c326f;"><?php if ( get_theme_mod( 'set_text_servicoes2') != '' ): echo get_theme_mod( 'set_text_servicoes2'); else: echo 'INSERIR TEXTO 2'; endif; ?></span> </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover mdgleitura">
                <a href="<?php if ( get_theme_mod( 'set_url_servico_3') != '' ): echo get_theme_mod( 'set_url_servico_3'); else: echo '#'; endif; ?>">
                    <div class="card-content text-center">
                        <span class="<?php if ( get_theme_mod( 'set_text_serv_fa_3') != '' ): echo get_theme_mod( 'set_text_serv_fa_3'); else: echo 'fas fa-bullhorn'; endif; ?> text-up-07 mdsleitura" style="color: #1b2b85;"></span>
                    </div>  
                    <div class="card-footer my-1 text-center text-bold"> <span class="mdstleitura" style="color: #0c326f;"><?php if ( get_theme_mod( 'set_text_servicoes3') != '' ): echo get_theme_mod( 'set_text_servicoes3'); else: echo 'INSERIR TEXTO 3'; endif; ?></span> </div>
                </a>
            </div>
        </div>  

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover mdgleitura">
                <a href="<?php if ( get_theme_mod( 'set_url_servico_4') != '' ): echo get_theme_mod( 'set_url_servico_4'); else: echo '#'; endif; ?>">
                    <div class="card-content text-center">
                        <span class="<?php if ( get_theme_mod( 'set_text_serv_fa_4') != '' ): echo get_theme_mod( 'set_text_serv_fa_4'); else: echo 'fas fa-bullhorn'; endif; ?> text-up-07 mdsleitura" style="color: #1b2b85;"></span>
                    </div>  
                    <div class="card-footer my-1 text-center text-bold"> <span class="mdstleitura" style="color: #0c326f;"><?php if ( get_theme_mod( 'set_text_servicoes4') != '' ): echo get_theme_mod( 'set_text_servicoes4'); else: echo 'INSERIR TEXTO 4'; endif; ?></span> </div>
                </a>
            </div>
        </div>          
    </div>
</div>


<!--
<div class="container">
    <div class="row justify-content-center">
    
    <?php
    if ( is_active_sidebar('servico-1') ){
    ?>                    
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <div class="card-content">
    <?php 
                    dynamic_sidebar('servico-1');
    ?>
                </div>
            </div>
        </div>
    <?php 
    }else{
    ?>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="br-card hover">
            <a href="google.com">
                <div class="card-content">
                    <div class="card-content"><img src="<?php echo get_template_directory_uri() . '/assets/images/online-test.png'?>" alt="Imagem de exemplo"/></div>
                </div>  
                <div class="card-footer h5 my-1  text-center text-indigo-cool-vivid-80">Rodapé</div>
            </a>
        </div>
    </div>   
    <?php                     
    } 
    ?>   
    
    <?php
    if ( is_active_sidebar('servico-2') ){
    ?>                    
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <div class="card-content">
    <?php 
                    dynamic_sidebar('servico-2');
    ?>
                </div>
            </div>
        </div>
    <?php 
    }else{
    ?>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="br-card hover">
            <a href="google.com">
                <div class="card-content">
                    <div class="card-content"><img src="<?php echo get_template_directory_uri() . '/assets/images/online-test.png'?>" alt="Imagem de exemplo"/></div>
                </div>  
                <div class="card-footer h5 my-1  text-center text-indigo-cool-vivid-80">Rodapé</div>
            </a>
        </div>
    </div>   
    <?php                     
    } 
    ?>                     
    
    <?php
    if ( is_active_sidebar('servico-3') ){
    ?>                    
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <div class="card-content">
    <?php 
                    dynamic_sidebar('servico-3');
    ?>
                </div>
            </div>
        </div>
    <?php 
    }else{
    ?>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="br-card hover">
            <a href="google.com">
                <div class="card-content">
                    <div class="card-content"><img src="<?php echo get_template_directory_uri() . '/assets/images/online-test.png'?>" alt="Imagem de exemplo"/></div>
                </div>  
                <div class="card-footer h5 my-1  text-center text-indigo-cool-vivid-80">Rodapé</div>
            </a>
        </div>
    </div>   
    <?php                     
    } 
    ?> 

    <?php
    if ( is_active_sidebar('servico-4') ){
    ?>                    
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <div class="card-content">
    <?php 
                    dynamic_sidebar('servico-4');
    ?>
                </div>
            </div>
        </div>
    <?php 
    }else{
    ?>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="br-card hover">
            <a href="google.com">
                <div class="card-content">
                    <div class="card-content"><img src="<?php echo get_template_directory_uri() . '/assets/images/online-test.png'?>" alt="Imagem de exemplo"/></div>
                </div>  
                <div class="card-footer h5 my-1  text-center text-indigo-cool-vivid-80">Rodapé</div>
            </a>
        </div>
    </div>   
    <?php                     
    } 
    ?>                     
    </div>
</div>
<hr>
-->


</section>