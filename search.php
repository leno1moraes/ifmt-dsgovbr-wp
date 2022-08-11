

<?php get_header(); ?>

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
                            <a href="<?php the_permalink(); ?>" ><h3><?php the_title(); ?></h3></a>                                                     
                            <div>
                                <p>Postado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
                            </div>
                            <?php the_excerpt(); 
                            ?>
                        </article>
                    <?php
                        endwhile;
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</main>
<!-- content body -->

<?php get_footer(); ?>
