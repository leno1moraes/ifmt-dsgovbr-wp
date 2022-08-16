

<?php get_header(); ?>

<!-- content body -->



<?php if ( get_theme_mod( 'set_text_tipo_carousel', '') == '1'): ?>
    <section>
        <?php get_template_part('parts/govbr-carousel'); ?>
    </section>    
<?php else: ?>
    <section class="carousel-wrapper">
        <?php get_template_part('parts/jumbotron-carousel'); ?>
    </section>      
<?php endif; ?>

<main class="d-flex flex-fill mb-5 my-0" id="main">
    <div class="container align-content-center my-0">
        <div>                                
            <div class="mt-6 text-center">        
                <a class="br-button secondary large mt-3 mt-sm-0 ml-sm-3 state-published" href="<?php echo home_url( '/noticias' ); ?>">
                    Mais notícias
                </a> 
            </div>                    
        </div>
    </div>
</main>
<!-- content body -->

<?php get_footer(); ?>
