

<?php get_header(); ?>

<!-- content body -->

<main class="d-block">
    <section class="carousel-wrapper">
        <?php get_template_part('parts/jumbotron-carousel'); ?>
    </section> 
</main>

<main class="d-block">
    <div class="mt-6 text-center">        
        <a class="br-button secondary large mt-3 mt-sm-0 ml-sm-3 state-published" href="<?php echo home_url( '/noticias' ); ?>">
            Mais notícias
        </a> 
    </div>
</main>

<main class="d-flex flex-fill mb-5" id="main">
    <div class="container-lg d-flex">
        <div class="row">        
            <div class="col mb-5">
                

            </div>
        </div>
    </div>
</main>
<!-- content body -->

<?php get_footer(); ?>
