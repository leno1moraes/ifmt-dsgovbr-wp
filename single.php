

<?php get_header(); ?>

<!-- 
    Template das noticias
-->

<!-- content body -->
<main class="d-flex flex-fill mb-5" id="main">
    <div class="container-lg d-flex">
        <div class="row">
            <div class="col mb-5">
                <div class="main-content pl-sm-3 mt-4" id="main-content">
                    
                    <?php
                        while (have_posts()) :
                            the_post();
                    ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                            <h2><?php the_title(); ?></h2>                                                      
                            <div>
                                <p>Postado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
                                <p>Categorias: <?php the_category(); ?> </p>
                                <p>Tags: <?php the_tags('', ', '); ?> </p>
                            </div>
                            <?php the_post_thumbnail( 'full' ); ?>  
                            <?php the_content(); 
                            ?>
                        </article>
                    <?php
                        endwhile;

                        if ( comments_open() || get_comments_number() ){
                            comments_template();
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</main>
<!-- content body -->

<?php get_footer(); ?>
