<?php get_header(); ?>



	<section class="wrapcont" id="blog">

		<section class="top-blank">
			<a href="/">INICIO</a> | <a>Blog</a>
		</section>

		<section class="blog-body">
			<div class="wrapcont">
				<section class="post">
					<h1>Blog ORTOS</h1>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<article>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="author"><span>Autor: </span> <?php the_author(); ?></div>
							<div class="date"><span>Fecha: </span><?php the_date(); ?></div>
							<div class="thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a></div>
							<div class="content"><?php the_content('Ver más...'); ?></div>
						</article>
					<?php endwhile; else : ?>
						<p><?php _e('Lo sentimos, no se encontraron publicaciones.'); ?></p>
					<?php endif; ?>
				</section>
			</div>
		</section>
		<?php get_sidebar(); ?>

	</section>



<?php get_footer(); ?>

