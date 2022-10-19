
<!-- bloco aqui - inicio -->

<div>

<?php 
        $i = 0;

        $args = array(
            'order'   => 'DESC',
            'posts_per_page' => 6,
            'max_num_pages' => 1
        );

        $news_query = new WP_Query($args);

        if ( $news_query->have_posts() ):
            
            while( $news_query->have_posts() ):
                $news_query->the_post();

                $i++;

                if ( $i == 1 or $i == 4 ):
?>
                    <div class="row">
<?php
                endif;
            
                if ( ($i == 1) or ($i == 2) or ($i == 3) or 
                     ($i == 4) or ($i == 5) or ($i == 6) ):

					if ( has_post_thumbnail() ):
						$post_thumb = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                    else:
						$post_thumb = get_template_directory_uri() . '/assets/images/teste-personagem.jpg';
					endif;
?>
                    <div class="col">

                        <!-- imagem da notícia -->
                        <div class="row">
                            <div class="col">
                                <?php //the_post_thumbnail( 'medium' ); ?>
                                <a href="<?php the_permalink(); ?>">
                                <img class="rounder-sm" width="100%" height="250" src="<?php echo $post_thumb; ?>" alt="Second slide">
                                </a>
                            </div>
                        </div>

                        <!-- botão de compartilhamento -->
                        <div class="row">
                            <div class="col text-right">
                                <a class="fas fa-share-alt fa-2x text-blue-warm-vivid-80" target="_blank" href="https://api.whatsapp.com/send?text=<?php echo str_replace('http:', 'https:', get_permalink()); ?>"></a>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col text-left">
                                <span class="fonteBlocoNoticias">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title();?>
                                    </a>
                                </span>
                            </div>
                        </div>                                        
                    </div>
<?php
                endif;

                if ( $i == 3 or $i == 6 ):
?>
                    </div>
<?php
                endif;                            

            endwhile;
           
        else:
            echo '<h5 class="text-red-vivid-50"> sem notícias </h5>';
           
        endif;
           
        wp_reset_postdata();                
?>
</div>


<!-- bloco aqui - fim -->