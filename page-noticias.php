<?php
/*
Template Name: Page Notícias
 */
?>

<?php get_header(); ?>

<!-- content body -->
<main class="d-flex flex-fill mb-5" id="main">
    <div class="container-lg d-flex">
        <div class="row">
            <div class="col mb-5">

            <?php
            if ( get_theme_mod( 'set_text_page_noticias') == '1' ):
                
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'paged'=>$paged
                );

                $news_query = new WP_Query( $args );

                if ( $news_query->have_posts() ):
            ?>
                <h1 class="documentFirstHeading">Últimas Notícias</h1>
            <?php

                    while ( $news_query->have_posts() ) : $news_query->the_post();
            ?>

            <span class="br-divider my-3"></span>

            <article>            
                <div class="row">
                    <div class="col">

                        <a href="<?php the_permalink(); ?>"> <h4 class="tileHeadline"> <?php the_title(); ?> </h4> </a>

                        <?php if ( has_excerpt( $id ) ) : ?>
                            <span class="documentDescription"><?php the_excerpt(); ?></span>
                        <?php endif; ?>	                
                        
                        <div>
                            <span class="text-bold text-gray-70">Categoria: </span>
                            <span class="link-category"> <?php the_category(' - ')?> </span>
                        </div>

                        <div>
                            <span class="text-bold text-gray-70">Tags: </span>
                            <span> <?php the_tags('', ', ') ?> </span>	
                        </div>

                        <div>
                            <span class="text-bold text-gray-70">Publicação: </span>
                            <span> <?php echo get_the_date('d/m/Y').' '.get_the_time('H').'h'.get_the_time('i'); ?> </span>	
                        </div>                        
                    </div>

                    <div class="col-auto">
                        <?php the_post_thumbnail( 'thumbnail' ); ?>
                    </div>
                </div>                
            </article>                            

            <?php
                    endwhile;
                    
            ?>

            <div class="my-6x text-center">

            <?php                
                //echo $paged.'<br>';
                previous_posts_link( "<< Recentes" ); 
                next_posts_link( "Antigos >>", $news_query->max_num_pages );
                                
            ?>

            </div>

            <?php 
                wp_reset_postdata();

                else:
            ?>
                    <p>Não há posts</p>
            <?php
                endif;
                            
            elseif ( get_theme_mod( 'set_text_page_noticias') == '2' ):
                the_content();  
            
            else:
                echo "A variável tipo de página de notícias não foi configurada";
                
            endif;
            ?>  

            </div>
        </div>
    </div>
</main>

</main>
<!-- content body -->

<?php get_footer(); ?>