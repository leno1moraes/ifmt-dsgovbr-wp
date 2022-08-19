

<?php get_header(); ?>

<!-- content body -->





<main class="d-flex flex-fill mb-5 my-0" id="main">
    <div class="container align-content-center my-0">
        <div>                      
      
            <?php if ( get_theme_mod( 'set_text_tipo_carousel', '') == '1'): ?>
                <section>
                    <?php get_template_part('parts/govbr-carousel'); ?>
                </section>    
            <?php else: ?>
                <section class="carousel-wrapper">
                    <?php get_template_part('parts/jumbotron-carousel'); ?>
                </section>      
            <?php endif; ?>  

            <div class="mt-6 text-center">        
                <a class="br-button secondary large mt-3 mt-sm-0 ml-sm-3 state-published" href="<?php echo home_url( '/noticias' ); ?>">
                    Mais notícias
                </a> 
            </div>  

            <section class="mb-5 my-4x" style="background: #f8f8f8 no-repeat left bottom; padding: 30px 0">

                <div class="content text-center mb-5x">
                    <h2 class="text-blue-warm-70 text-bold">Serviços</h2>
                </div>            

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
            </section>


        </div>        
    </div>   
</main>

<!-- content body -->

<?php get_footer(); ?>
