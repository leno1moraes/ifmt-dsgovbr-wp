

<?php get_header(); ?>

<!-- content body -->

<main class="d-flex flex-fill mb-5" id="main">

    <div class="container-lg d-flex">

        <div class="row">

            <div class="col mb-5">
                
                <section class="carousel-wrapper">
                    <?php get_template_part('parts/jumbotron-carousel'); ?>
                </section>                 
                
                <div class="main-content pl-sm-3 mt-4" id="main-content">                

                <a class="br-button secondary large mt-3 mt-sm-0 ml-sm-3 state-published" 
                    href="">
                        Mais notícias
                </a>                                                



                </div>
            </div>
        </div>
    </div>
</main>
<!-- content body -->

<?php get_footer(); ?>
