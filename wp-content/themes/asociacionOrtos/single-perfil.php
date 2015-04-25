<?php get_header(); ?>
<?php if( have_posts() ) the_post(); ?>
	<section class="wrapcont" id="perfil">

		<section class="blog-body">
			<div class="wrapcont">
				<section class="post">
					<h1><?php the_title(); ?></h1>
					<h2><?php the_field( "grado" ); ?> - <?php the_field( "universidad" ); ?></h2>

						<article>
							<div class="img">
								<div class="thumbnail"><img src="<?php the_field( "imagen" ); ?>"></div>
							</div>

							<div class="resume">
								<div class="content"><?php the_field( "hoja_vida" ); ?></div>
							</div>
						</article>

				</section>
			</div>
		</section>
	</section>



<?php get_footer(); ?>

