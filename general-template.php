<?php
/*
Template Name: General Template
 */
?>

<?php get_header(); ?>

<!-- 
    Template das páginas
-->

<!-- content body -->
<main id="main-single" class="site-main <?php echo is_singular('multimedia') ? 'multimedia-content' : ''; ?>">

    <div class="container">

        <div class="row" id="content">

            <div class="col-12 pt-4 pb-4">

                <?php 
                    while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

                        <header class="entry-header">
                            <?php the_title( '<h1 class="documentFirstHeading">', '</h1>' ); ?>

                            <div class="my-1">
                                <span class="br-divider my-3"></span>
                                    <div class="d-flex">
                                        <div>Publicado: <?php the_date('d/m/Y'); ?> <?php the_time('H'); ?>h<?php the_time('i'); ?></div>
                                        <span class="br-divider vertical mx-3"></span>
                                        <div>Atualizado em: <?php the_modified_date('d/m/Y'); ?> <?php the_modified_time('H'); ?>h<?php the_modified_time('i'); ?></div>	
                                        
                                        <span class="br-divider ml-auto"></span>
                                        <div class="text–font-weight-medium tex-font-size-scale-up-02">Compartilhe: 

                                            <a class="fab fa-facebook fa-1x text-blue-warm-vivid-80" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo str_replace('http:', 'https:', get_permalink()); ?>"></a> 
                                            <a class="fab fa-whatsapp fa-1x text-blue-warm-vivid-80" target="_blank" href="https://api.whatsapp.com/send?text=<?php echo str_replace('http:', 'https:', get_permalink()); ?>"></a>
                                            <a class="fab fa-twitter fa-1x text-blue-warm-vivid-80" target="_blank" href="https://twitter.com/home?status=<?php echo str_replace('http:', 'https:', get_permalink()); ?>"></a>
                                        </div> 	
                                    </div>
                                <span class="br-divider my-3"></span>
                            </div>                      
                        </header>

                        <div class="my-6">        
                            <?php the_content(); ?>
                        </div>
                    </article>

                <?php
                    endwhile;
                    //the_posts_pagination(array());                            
                ?>    
            
            </div>

        </div>           
    
    </div>
<!-- content body -->
</main>

<?php get_footer(); ?>