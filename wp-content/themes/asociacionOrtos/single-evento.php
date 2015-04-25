<?php get_header(); ?>


<?php if( have_posts() ) the_post(); ?>
	<section class="wrapcont" id="eventos">

		<section class="event-body">
			<div class="img">
				<h1><?php the_title(); ?></h1>
				<div class="thumbnail"><?php the_post_thumbnail('large'); ?></div>
			</div>
			<div class="wrapcont">
				<section class="event">
					<ul class="content">
						<li><strong>Fecha: </strong><?php the_field( "fecha" ); ?></li>
						<li><strong>Hora: </strong>De <?php the_field( "hora-inicio" ); ?> a <?php the_field( "hora-finalizacion" ); ?></li>
						<li><strong>Lugar: </strong><?php the_field( "lugar" ); ?></li>
					</ul>

					<article>
						

						<div class="resume">
							<div class="content"><?php the_content(); ?></div>
						</div>
					</article>

				</section>
			</div>
		</section>
	</section>



<?php get_footer(); ?>