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

                    the_content();         
                                    
                ?>

            </div>
        </div>
    </div>
</main>

</main>
<!-- content body -->

<?php get_footer(); ?>