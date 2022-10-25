
<?php get_header(); ?>

<!-- content body -->

<?php 
    if ( get_theme_mod( 'set_text_full_size' ) == '2'):
?>
    <main class="d-flex flex-fill mb-5 my-0" id="main"> 
        <div class="container align-content-center my-0">   
<?php
    else:
?>    
    <main class="mb-5 my-0" id="main">
    <div class="align-content-center my-0">
<?php
    endif;
?>                             
        <div class="container">
            <?php if ( get_theme_mod( 'set_text_tipo_carousel', '') == '1'): ?>                        
                <?php get_template_part('parts/govbr-carousel'); ?>                               
            <?php else: ?>
                <section class="carousel-wrapper">
                    <?php get_template_part('parts/jumbotron-carousel'); ?>
                </section>      
            <?php endif; ?>  
            
            <div class="mt-6 text-center">
                <!-- bloco de notícias -->
                <?php get_template_part('page-bloconoticias'); ?>
            </div>

            <div class="mt-6 text-center">        
                <a class="br-button secondary large mt-3 mt-sm-0 ml-sm-3 state-published" href="<?php echo home_url( '/noticias' ); ?>">
                    Mais notícias
                </a> 
            </div>  
                        
            <div>
                <!-- área de serviços -->
                <?php get_template_part('parts/area-servicos'); ?>
            </div>

            <div>
                <!-- área de ações e programas -->
                <?php get_template_part('parts/area-acoesprogramas'); ?>
            </div>

            <div>
                <!-- Redes Sociais -->
                <?php get_template_part('page-redessociais'); ?>
            </div>

        </div>  
    </div>   
</main>

<!-- content body -->

<?php get_footer(); ?>
