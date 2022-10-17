<?php
/**
 * Template part para mostrar os post da notícia
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >


	<!-- Facebook share -->
	<meta property="og:title" content="<?php the_title(); ?>">
	<meta property="og:image" content="<?php the_post_thumbnail_url(); ?>">

	<!-- Twitter share -->
	<meta name="twitter:title" content="<?php the_title(); ?>">
	<meta name="twitter:image:src" content="<?php the_post_thumbnail_url(); ?>">

	<!-- Google share -->
	<meta itemprop="name" content="<?php the_title(); ?>">
	<meta itemprop="image" content="<?php the_post_thumbnail_url(); ?>">

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

						<a class="fab fa-facebook fa-1x text-blue-warm-vivid-80" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo str_replace('http:', 'https:', get_permalink()); ?>"></a> 

						<a class="fab fa-whatsapp fa-1x text-blue-warm-vivid-80" target="_blank" href="https://api.whatsapp.com/send?text=<?php echo str_replace('http:', 'https:', get_permalink()); ?>"></a>

						<a class="fab fa-twitter fa-1x text-blue-warm-vivid-80" target="_blank" href="https://twitter.com/home?status=<?php echo str_replace('http:', 'https:', get_permalink()); ?>"></a>
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
		<span class="text-bold text-gray-70">Por <?php the_author(); ?> </span>
		
		<span class="br-divider vertical my-4"></span>
		
		<span class="text-bold text-gray-70">Categoria</span>
		<span class="br-divider vertical my-2"></span>
		<span class="link-category"> <?php the_category(' - ')?> </span>

		<span class="br-divider vertical my-4"></span>
		
		<span class="text-bold text-gray-70">Tags</span>
		<span class="br-divider vertical my-2"></span>
		<span> <?php the_tags('', ', ') ?> </span>		
	</div>

</article>
