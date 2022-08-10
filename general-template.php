<?php
/*
Template Name: General Template
 */
?>

<?php get_header(); ?>
    <!-- content body -->

    <div class="container-fluid">
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


    <!-- content body -->
<?php get_footer(); ?>