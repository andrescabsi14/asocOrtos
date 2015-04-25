<?php get_header(); ?>
<?php if( have_posts() ) the_post(); ?>
	<section class="wrapcont" id="events">
		<div class="wrapcont">
			<h1>Eventos</h1>
			<h2>Seminarios, eventos virtuales y presenciales.</h2>
			<section class="content">
				<?php the_content(); ?>
				<div class="lastEvents">
					<?php
						$args = array(
							'post_type' => 'evento',
						);
						$query = new WP_Query( $args );
					 ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<article class="item">
							<a href="<?php the_permalink(); ?>">
								<figure>
									<?php the_post_thumbnail('medium'); ?>
								</figure>
								<ul class="content">
									<h3><?php the_title(); ?></h3>
									<li><strong>Fecha: </strong><?php the_field( "fecha" ); ?></li>
									<li><strong>Hora: </strong>De <?php the_field( "hora-inicio" ); ?> a <?php the_field( "hora-finalizacion" ); ?></li>
									<li><strong>Lugar: </strong><?php the_field( "lugar" ); ?></li>
								</ul>
							</a>
						</article>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
			</section>
		</div>
	</section>



<?php get_footer(); ?>

