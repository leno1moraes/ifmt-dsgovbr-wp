

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
            
            <section class="mb-5 my-4x" style="background: #d3ffd1 no-repeat left bottom; padding: 30px 0">
                
                    <div class="container">
                        <div class="row justify-content-center">
                        
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="br-card hover">
                                    <!--<div class="card-header">Cabeçário </div>-->
                                    <div class="card-content">                                                                        
                                        <div class="card-content"><img src="https://picsum.photos/id/0/500" alt="Imagem de exemplo"/></div>
                                    </div>
                                    <div class="card-footer text-center text-bold">Rodapé</div>                                    
                                </div>
                            </div> 
                            
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="br-card hover">
                                    <div class="card-content">
                                        <div class="card-content"><img src="<?php echo get_template_directory_uri() . '/assets/images/online-test.png'?>" alt="Imagem de exemplo"/></div>
                                    </div>  
                                    <div class="card-footer text-center text-bold">Rodapé</div>                                    
                                </div>
                            </div> 

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="br-card hover">
                                    <div class="card-content">
                                        <div class="card-content"><img src="https://picsum.photos/seed/picsum/200/300" alt="Imagem de exemplo"/></div>
                                    </div>    
                                    <div class="card-footer text-center text-bold">Rodapé</div>                                  
                                </div>
                            </div> 
                            
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="br-card hover">
                                    <div class="card-content">
                                        <div class="card-content"><img src="https://picsum.photos/200/300?grayscale" alt="Imagem de exemplo"/></div>
                                    </div> 
                                    <div class="card-footer text-center text-bold">Rodapé</div>                                     
                                </div>
                            </div>                             

                        </div>
                    </div>                                
            </section> 

            <section class="mb-5 my-4x" style="background: #d1e3ff no-repeat left bottom; padding: 30px 0">
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
                            <div class="card-content">
                                <div class="card-content"><img src="<?php echo get_template_directory_uri() . '/assets/images/online-test.png'?>" alt="Imagem de exemplo"/></div>
                            </div>  
                            <div class="card-footer text-center text-bold">Rodapé</div>                                    
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
