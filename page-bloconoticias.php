<?php
/*
Template Name: Page Bloco Notícias
 */
?>

<section class="mb-5 my-4x">

    <div class="container">
        <div class="row justify-content-center">
                <?php
                    if ( get_theme_mod( 'set_text_page_blocodenoticias') == '1' ):                      
                        $page = get_page_by_title( 'Bloco de Notícias' );
                        $content = apply_filters('the_content', $page->post_content); 
                        echo $content;

                    elseif ( get_theme_mod( 'set_text_page_blocodenoticias') == '2' ):
                ?>
                    <p>Conteúdo próprio do bloco de notícias</p>
                <?php 
                else:
                    echo "A variável tipo de bloco de notícias não foi configurada";

                endif;
                ?>              
        </div>
    </div>

</section>