<?php get_header(); ?>



	<section class="wrapcont" id="blog">

		<section class="top-blank"></section>

		<section class="blog-body">
			<div class="wrapcont">
				<section class="post">
					<h1>Blog ORTOS</h1>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<article>
							<h2><?php the_title(); ?></h2>
							<div class="author"><span>Autor: </span><?php the_author(); ?></div>
							<div class="date"><span>Fecha: </span><?php the_date(); ?></div>
							<p class="content"><?php the_content(); ?></p>
						</article>
						<hr>
					<?php endwhile; else : ?>
						<p><?php _e('Lo sentimos, no se encontraron publicaciones.'); ?></p>
					<?php endif; ?>
				</section>
			</div>
		</section>
		<?php get_sidebar(); ?>

	</section>



<?php get_footer(); ?>

