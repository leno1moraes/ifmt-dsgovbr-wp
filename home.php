
<?php get_header(); ?>

<!-- content body -->

<!-- parametrizar todo espaço da pagina-->
<!-- <main class="d-flex flex-fill mb-5 my-0" id="main"> -->

<main class=" mb-5 my-0" id="main">
    <div class="align-content-center my-0">
                             
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
</main>

<!-- content body -->

<?php get_footer(); ?>
