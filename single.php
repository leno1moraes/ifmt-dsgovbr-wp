<?php 
/**
 * Template para mostrar os posts da notícia
 */
get_header(); 
?>

<!-- content body -->
    <main id="main-single" class="site-main <?php echo is_singular('multimedia') ? 'multimedia-content' : ''; ?>">
		<div class="container">
            
            <!-- ERROR
			<div class="row">
				<?php //the_breadcrumb(); ?>
			</div>
            -->

			<div class="row" id="content">
				<div class="col-12 pt-4 pb-4">
					<?php while (have_posts()) : the_post(); ?>

						<?php if( $post_subtitle = get_post_meta( $post->ID, '_post_subtitle', true ) ): ?>
							<span class="alternative-headline text-center d-block mb-3 text-uppercase"><?php echo $post_subtitle?></span>
						<?php endif; ?>

						<?php get_template_part('parts/content-noticia', get_post_type()); ?>

					<?php endwhile; ?>
                    
                    <!--
					<div class="entry-content">
						<?php /*get_template_part('template-parts/copyright');*/ ?>
					</div>
                    -->
				</div>
			</div>
		</div>

		<?php // if (comments_open() || get_comments_number()) : ?>
			<?php // comments_template( '', true ); ?>
		<?php // endif; ?>

	</main>
<!-- content body -->
 
<?php get_footer(); ?>
