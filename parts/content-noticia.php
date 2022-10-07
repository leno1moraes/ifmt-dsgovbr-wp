<?php
/**
 * Template part para mostrar os post da notícia
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php //post_class(); ?> >

	<header class="entry-header">
		<?php the_title( '<h1 class="documentFirstHeading">', '</h1>' ); ?>

		<?php if ( has_excerpt( $id ) ) : ?>
			<span class="documentDescription"><?php the_excerpt(); ?></span>
		<?php endif; ?>

        <div class="my-6">
			<span class="br-divider my-3"></span>
				<div class="d-flex">

					<div>Publicado: <?php the_date('d/m/Y'); ?> <?php the_time('H'); ?>h<?php the_time('i'); ?></div>
					<span class="br-divider vertical mx-3"></span>
					<div>Atualizado em: <?php the_modified_date('d/m/Y'); ?> <?php the_modified_time('H'); ?>h<?php the_modified_time('i'); ?></div>	
					
					<span class="br-divider ml-auto"></span>
                	<div class="text–font-weight-medium tex-font-size-scale-up-02">Compartilhe: 
						<span class="fab fa-facebook fa-x text-blue-warm-vivid-80"></span> 
						<span class="fab fa-twitter fa-1x text-blue-warm-vivid-80"></span>
						<span class="fab fa-instagram fa-1x text-blue-warm-vivid-80"></span>
						<span class="fas fa-link text-blue-warm-vivid-80"></span>
					</div> 	

				</div>
			<span class="br-divider my-3"></span>
		</div>		
	</header>
	
	<div class="text-center my-6">
		<?php the_post_thumbnail( 'medium_large' ); ?>
		<span class="br-divider vertical"></span>
		<?php the_post_thumbnail_caption(); ?>
	</div>

	<div class="text-justify entry-content my-4">
		<?php the_content() ?>
	</div>

	<div class="text-left my-6">
		<span class="text-bold">Por <?php the_author(); ?> </span>
		
		<span class="br-divider vertical my-4"></span>
		
		<span class="text-bold">Categoria</span>
		<span class="br-divider vertical my-2"></span>
		<span> <?php the_category(' - ')?> </span>
	</div>

	<footer class="entry-footer">
		<?php //idg_wp_entry_footer(); ?>
	</footer>

</article>
