<?php get_header(); ?>



	<section id="home">
		<section class="slider">
			<div class="wrapcont">
				<ul id="slider" class="owl-carousel">
					<?php
						$args = array(
							'post_type' => 'slider'
						);
						$query = new WP_Query( $args );
					 ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<li class="item">
							<div class="container">
								<div class="img">
									<a href="<?php the_field( "link" ); ?>"> <?php the_post_thumbnail('large'); ?> </a>
								</div>
								<div class="content">
									<h3><a href=""><?php the_field( "subtitulo" ); ?></a></h3>
									<h2><a href=""><?php the_title(); ?></a></h2>
									<div class="description">
										<?php the_field( "descripcion" ); ?>
									</div>
								</div>
							</div>
						</li>
					<?php endwhile; ?>
					<?php else: ?>
						<p>No hay Slides.</p>
					<?php endif; ?>
					<?php rewind_posts(); ?><?php wp_reset_query(); ?>
				</ul>
			</div>
		</section>
		<section class="social">
			<div class="wrapcont">
				<a target="_blank" href="#"><img src="<?php bloginfo('template_url'); ?>/img/linkedin.png" alt=""></a>
			</div>
		</section>
		<section class="blog-type">
			<section class="wrapcont">
				<section class="main-container">
					<div class="container">
						<div class="box red">
							<a href="/blog/category/pacientes/">
								<span>Blog de</span>
								CASOS CLÍNICOS / <br>
								ARTÍCULOS PARA PACIENTES
							</a>
						</div>
						<a class="darken" href="/blog/category/pacientes/">Ver más |</a>
					</div>
					<div class="container">
						<div class="box darken green">
							<a href="/blog/category/profesionales/">
								<span>Blog para</span>
								PROFESIONALES<br>
								DE LA SALUD VISUAL
							</a>
						</div>
						<a class="darken" href="/blog/category/profesionales/">Ver más |</a>
					</div>
				</section>
			</section>
		</section>
		<section class="feed">
			<section class="wrapcont">
				<div class="news">
					<h2><span>Últimas</span> NOTICIAS</h2>
					<?php
						$num_post = 1;
						$args = array(
							'category_name' => 'noticias',
     						'posts_per_page' => 1
						);
						$query = new WP_Query( $args );
					 ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<article>
							<div class="img">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('large'); ?>
								</a>
							</div>
							<h3 class="title"><a href="<?php the_permalink(); ?>"><?php echo substr(the_title('', '', false), 0, 40); ?>...</a></h3>
							<h4 class="date"> <?php the_date(); ?></h4>
							<p><?php the_excerpt(); ?></p>
							<a class="btn" href="<?php the_permalink(); ?>">IR</a>
						</article>
					<?php endwhile; ?>
					<?php else: ?>
						<p>No hay noticias.</p>
					<?php endif; ?>
					<?php rewind_posts(); ?><?php wp_reset_query(); ?>
				</div>
				<div class="blog">
					<h2><span>Últimos</span> ARTÍCULOS</h2>
					<?php
						$num_post = 1;
						$args = array(
							'category_name' => 'profesionales',
     						'posts_per_page' => 1
						);
						$query = new WP_Query( $args );
					 ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<article>
							<div class="img">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('large'); ?>
								</a>
							</div>
							<h3 class="title"><a href="<?php the_permalink(); ?>"><?php echo substr(the_title('', '', false), 0, 40); ?>...</a></h3>
							<p><?php the_excerpt(); ?></p>
							<a class="btn" href="<?php the_permalink(); ?>">IR</a>
						</article>
					<?php endwhile; ?>
					<?php else: ?>
						<p>No hay publicaciones.</p>
					<?php endif; ?>
					<?php rewind_posts(); ?><?php wp_reset_query(); ?>
				</div>
				<article class="newsletter">
					<h2><span>Suscripción</span> BOLETÍN</h2>
					<p><span>SUSCRÍBASE</span> Y ENTÉRESE DE LOS PRÓXIMOS EVENTOS E INFORMACIÓN INTERESANTE DIRECTAMENTE EN SU CORREO.</p>
					<?php if ( is_active_sidebar( 'newsletter' ) ) : ?>
						<?php dynamic_sidebar( 'newsletter' ); ?>
					<?php endif; ?>
				</article>
			</section>
		</section>
		<section class="cta darken">
			<section class="wrapcont">
				<div class="icon">
					<a href="http://youtube.com" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>/img/play.png" alt="Canal YouTube">
					</a>
				</div>
				<div class="text">
					<h3>Entérese de novedades y noticias de la</h3>
					<h2>Optometría en Colombia</h2>
					<p>Ingrese a nuestro canal en YouTube donde podrá estar actualizado en las últimas novedades, noticias y temas de actualidad en el campo de la optometría en nuestro país.</p>
					<a href="http://youtube.com" target="_blank" class="btn">IR</a>
				</div>
			</section>
		</section>
		<section class="about">
			<section class="wrapcont">
				<article>
					<div class="info">
						<h3>Nuestra Asociación</h3>
						<h2>SOMOS ORTOS</h2>
						<p>La asociación es una entidad que busca agrupar a profesionales especialistas en terapia visual, con el objetivo de generar colaboración profesional, aportar experiencia en diversos casos, buscando la excelencia académica y conceptual de sus miembros, así como reconocimiento dentro  del grupo de los profesionales de la salud, a nivel nacional e internacional.</p>
						<a href="/ortos/" class="btn">VER MÁS</a>
					</div>
					<div class="img">
						<img src="<?php bloginfo('template_url'); ?>/img/about1.jpg" alt="">
					</div>
				</article>
				<article>
					<div class="info">
						<h3>Nuestros Asociados</h3>
						<h2>Profesionales e Instituciones destacadas.</h2>
						<p>Los miembros de la Asociación la hacen una asociación relevante y reconocida a nivel nacional e internacional. Agrupamos a profesionales especializados en funcionalidad motora y sensorial del sistema visual, con más de 30 años de experiencia e investigación, con la misión de transmitir este conocimiento a los diversos campos de las ciencias de la salud.</p>
						<a href="/ortos/" class="btn">CONÓZCANOS</a>
					</div>
					<div class="img">
						<img src="<?php bloginfo('template_url'); ?>/img/about2.jpg" alt="">
					</div>
				</article>
			</section>
		</section>
	</section>



<?php get_footer(); ?>

