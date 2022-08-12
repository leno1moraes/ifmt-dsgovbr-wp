<?php
 $args = array(
  'posts_per_page' => 5,
  'orderby' => 'date',
  'order' => 'DESC',
  'post_type' => 'post',
 );
 $sliders_home = new WP_Query( $args );
?>

<div class="slider">
 
 <ul class="slider-default">

  <?php while ( $sliders_home->have_posts() ) : $sliders_home->the_post(); ?>

   <li class="item item-slider">
    <a href="<?php echo 'http://' . slider_get_field( 'slider_link' ); ?>">

     <?php
      if ( has_post_thumbnail() ) {
        the_post_thumbnail('large', array( 'loading' => '' ) );
      } else {
        //echo '<img src="' . get_template_directory() . '/assets/images/thumb-default.jpg" alt="'.the_permalink().'">';
        //echo "carrossel não está ativado";
        echo '<img src="' . get_template_directory_uri() . '/assets/images/thumb-default.jpg">';
      }
     ?>

    </a>
   </li>

  <?php endwhile; ?> 

 </ul><!-- slider-default -->
 
 <div class="prev" id="prev-default"></div>
 <div class="next" id="next-default"></div>

</div><!-- slider -->