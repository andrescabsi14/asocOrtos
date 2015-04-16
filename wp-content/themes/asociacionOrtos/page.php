<?php get_header(); ?>

	<section id="page">
		<section class="wrapcont">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<p class="content"><?php the_content(); ?></p>
			<?php endwhile; else : ?>
				<p><?php _e('Lo sentimos, no se encontraron páginas.'); ?></p>
			<?php endif; ?>
		</section>
	</section>


<?php get_footer(); ?>