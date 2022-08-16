<?php
/*
Template Name: Page Noticias
 */
?>

<?php get_header(); ?>

<!-- content body -->
<main class="d-flex flex-fill mb-5" id="main">

    <div class="container-lg d-flex">

        <div class="row">

            <div class="col mb-5">
                
                <?php

                    //the_content();                                                           
                                    
                ?>

                <?php

                $args = array(
                    'posts_per_page' => -1,
                    'max_num_pages' => 2
                );

                $news_query = new WP_Query( $args );

                if ( $news_query->have_posts() ):
                    while ($news_query->have_posts()) :
                        $news_query->the_post();
                ?>
                    <article>
                        <a href="<?php the_permalink(); ?>" style="text-decoration: none;" ><h3><?php the_title(); ?></h3></a>
                        <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( 'medium', array( 'loading' => '' ) ); ?> </a>
                        <div>
                            <p>Postado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
                        </div>
                        <?php the_excerpt(); 
                        ?>
                    </article>
                <?php

            
                    endwhile;

                    echo 'paginação';

                    the_posts_pagination();    


                else:
                ?>
                    <p>Não há posts</p>
                <?php
                endif;
                ?>      

            </div>
        </div>
    </div>
</main>

</main>
<!-- content body -->

<?php get_footer(); ?>