<?php get_header(); ?>

<section class="aboutus">
	<section class="wrapcont about">
		<h1>NOSOTROS</h1>
		<div class="content left">
			<h3>Nuestra Asociación</h3>
			<h2>SOMOS ORTOS</h2>
			<p>La Asociación ORTOS es un ente jurídico sin ánimo de lucro, que reúne a los profesionales especialístas en Ortoptica y Terapia Visual en Colombia.</p>
			<p>Buscamos agrupar a profesionales especialístas en terapia visual, con el objetivo de generar colaboración profesional, aportar experiencia en diversos casos, buscando la excelencia académica y conceptual de sus miembros, así como reconocimiento dentro del grupo de los profesionales de la salud, a nivel nacional e internacional.</p>
		</div>
		<div class="img">
			<img src="<?php bloginfo('template_url'); ?>/img/aboutus.jpg" alt="">
		</div>
	</section>

	<section class="history">
		<article class="wrapcont">
			<div class="content right">
				<h3>Nuestra Historia</h3>
				<h2>10 años de Excelencia Académica y Profesional.</h2>
				<p>Hace 10 años un grupo de profesionales de la Optometría que ejercían la Ortóptica ,unidas por un mismo ideal se agruparon  para constituir la <strong>Asociación Optométrica Colombiana de Terapia Visual, Ortóptica y Pleóptica - ORTOS</strong> para buscar el reconocimiento de la importancia de la Ortóptica en Colombia y defender los derechos de los profesionales de esta área, regular su ejercicio, buscando excelencia académica y un reconocimiento dentro  del grupo de los profesionales de la salud.</p>
			</div>
		</article>
	</section>

	<section class="team darken">
		<div class="wrapcont">
			<h2>JUNTA DIRECTIVA</h2>
			<section class="presidente">
				<h3>Presidente</h3>
				<ul class="profiles">
					<?php
						$args = array(
							'post_type' => 'perfil',
							'meta_key'   => 'cargo', 
							'meta_value' => 'Presidente'
						);
						$query = new WP_Query( $args );
					 ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<li class="item <?php the_field( "cargo" ); ?>">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="img">
								<a href="<?php the_permalink(); ?>"> <img src="<?php the_field( "imagen" ); ?>" alt=""></a>
							</div>
							<div class="content">
								<p><?php the_field( "profesion" ); ?> <?php the_field( "universidad" ); ?></p>
								<p><?php the_field( "grado" ); ?></p>
								<a class="link" href="<?php the_permalink(); ?>">VER MÁS</a>
							</div>
						</li>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</ul>
			</section> <!-- End Presidente -->

			<section class="vicepresidente">
				<h3>Vicepresidente</h3>
				<ul class="profiles">
					<?php
						$args = array(
							'post_type' => 'perfil',
							'meta_key'   => 'cargo', 
							'meta_value' => 'Vicepresidente'
						);
						$query = new WP_Query( $args );
					 ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<li class="item <?php the_field( "cargo" ); ?>">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="img">
								<a href="<?php the_permalink(); ?>"> <img src="<?php the_field( "imagen" ); ?>" alt=""></a>
							</div>
							<div class="content">
								<p><?php the_field( "profesion" ); ?> <?php the_field( "universidad" ); ?></p>
								<p><?php the_field( "grado" ); ?></p>
								<a class="link" href="<?php the_permalink(); ?>">VER MÁS</a>
							</div>
						</li>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</ul>
			</section> <!-- End Vicepresidente -->

			<section class="secretaria">
				<h3>Secretaria</h3>
				<ul class="profiles">
					<?php
						$args = array(
							'post_type' => 'perfil',
							'meta_key'   => 'cargo', 
							'meta_value' => 'Secretaria'
						);
						$query = new WP_Query( $args );
					 ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<li class="item <?php the_field( "cargo" ); ?>">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="img">
								<a href="<?php the_permalink(); ?>"> <img src="<?php the_field( "imagen" ); ?>" alt=""></a>
							</div>
							<div class="content">
								<p><?php the_field( "profesion" ); ?> <?php the_field( "universidad" ); ?></p>
								<p><?php the_field( "grado" ); ?></p>
								<a class="link" href="<?php the_permalink(); ?>">VER MÁS</a>
							</div>
						</li>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</ul>
			</section> <!-- End Vicepresidente -->

			<section class="Tesorera">
				<h3>Tesorera</h3>
				<ul class="profiles">
					<?php
						$args = array(
							'post_type' => 'perfil',
							'meta_key'   => 'cargo', 
							'meta_value' => 'Tesorera'
						);
						$query = new WP_Query( $args );
					 ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<li class="item <?php the_field( "cargo" ); ?>">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="img">
								<a href="<?php the_permalink(); ?>"> <img src="<?php the_field( "imagen" ); ?>" alt=""></a>
							</div>
							<div class="content">
								<p><?php the_field( "profesion" ); ?> <?php the_field( "universidad" ); ?></p>
								<p><?php the_field( "grado" ); ?></p>
								<a class="link" href="<?php the_permalink(); ?>">VER MÁS</a>
							</div>
						</li>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</ul>
			</section> <!-- End Tesorera -->

			<section class="fiscal">
				<h3>Fiscal</h3>
				<ul class="profiles">
					<?php
						$args = array(
							'post_type' => 'perfil',
							'meta_key'   => 'cargo', 
							'meta_value' => 'Fiscal'
						);
						$query = new WP_Query( $args );
					 ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<li class="item <?php the_field( "cargo" ); ?>">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="img">
								<a href="<?php the_permalink(); ?>"> <img src="<?php the_field( "imagen" ); ?>" alt=""></a>
							</div>
							<div class="content">
								<p><?php the_field( "profesion" ); ?> <?php the_field( "universidad" ); ?></p>
								<p><?php the_field( "grado" ); ?></p>
								<a class="link" href="<?php the_permalink(); ?>">VER MÁS</a>
							</div>
						</li>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</ul>
			</section> <!-- End Fiscal -->

			<section class="vocales">
				<h3>Vocales</h3>
				<ul class="profiles">
					<?php
						$args = array(
							'post_type' => 'perfil',
							'meta_key'   => 'cargo', 
							'meta_value' => 'Vocales'
						);
						$query = new WP_Query( $args );
					 ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<li class="item <?php the_field( "cargo" ); ?>">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="img">
								<a href="<?php the_permalink(); ?>"> <img src="<?php the_field( "imagen" ); ?>" alt=""></a>
							</div>
							<div class="content">
								<p><?php the_field( "profesion" ); ?> <?php the_field( "universidad" ); ?></p>
								<p><?php the_field( "grado" ); ?></p>
								<a class="link" href="<?php the_permalink(); ?>">VER MÁS</a>
							</div>
						</li>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</ul>
			</section> <!-- End Vocales -->

			<section class="asociados">
				<h3>ASOCIADOS</h3>
				<ul class="profiles">
					<?php
						$args = array(
							'post_type' => 'perfil',
							'meta_key'   => 'cargo', 
							'meta_value' => 'Asociados'
						);
						$query = new WP_Query( $args );
					 ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<li class="item <?php the_field( "cargo" ); ?>">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="img">
								<a href="<?php the_permalink(); ?>"> <img src="<?php the_field( "imagen" ); ?>" alt=""></a>
							</div>
							<div class="content">
								<p><?php the_field( "profesion" ); ?> <?php the_field( "universidad" ); ?></p>
								<p><?php the_field( "grado" ); ?></p>
								<a class="link" href="<?php the_permalink(); ?>">VER MÁS</a>
							</div>
						</li>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</ul>
			</section> <!-- End Asociados -->

		</div>
	</section>
</section>
<?php get_footer(); ?>