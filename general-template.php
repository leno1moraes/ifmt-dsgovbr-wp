<?php
/*
Template Name: General Template
 */
?>

<?php get_header(); ?>

<!-- content body -->
<main class="d-flex flex-fill mb-5" id="main">
    <div class="container-lg d-flex">
        <div class="row">
            <div class="col mb-5">
                <div class="main-content pl-sm-3 mt-4" id="main-content">

                    
                    <?php
                    if ( have_posts() ):
                        while (have_posts()) :
                            the_post();
                    ?>
                        <article>
                            <h2><?php the_title(); ?></h2>
                            <div>
                                <!--
                                <p>Postado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
                                <p>Categorias: <?php the_category(); ?> </p>
                                <p>Tags: <?php the_tags('', ', '); ?> </p>
                                -->
                            </div>
                            <?php the_content(); 
                            ?>
                        </article>
                    <?php
                        endwhile;
                    else:
                    ?>
                        <p>Não há posts</p>
                    <?php
                    endif;
                    ?>
                    

                </div>
            </div>
        </div>
    </div>
</main>
<!-- content body -->

<?php get_footer(); ?>