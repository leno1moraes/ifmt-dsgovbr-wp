<?php
/*
Template Name: Page Redes Sociais
 */
?>

<section class="mb-5 my-4x" style="background: #f8f8f8 no-repeat left bottom; padding: 30px 0">

<div class="content text-center mb-5x">
    <h2 class="text-blue-warm-70 text-bold">Redes Sociais</h2>
</div>            

<div class="container">
    <div class="row justify-content-center">
            <?php
                if ( get_theme_mod( 'set_text_page_redessociais') == '1' ):                      
                    $page = get_page_by_title( 'Redes Sociais' );
                    $content = apply_filters('the_content', $page->post_content); 
                    echo $content;

                elseif ( get_theme_mod( 'set_text_page_redessociais') == '2' ):
            ?>
                <p>Conteúdo próprio das redes sociais</p>
            <?php 
            else:
                echo "A variável tipo de página de redes sociais não foi configurada";

            endif;
            ?>              
    </div>
</div>
</section>
