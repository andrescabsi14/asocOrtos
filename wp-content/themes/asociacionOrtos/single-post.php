<?php get_header(); ?>
<?php if( have_posts() ) the_post(); ?>
	<section class="wrapcont" id="blog-detail">
		<section class="top-blank">
			<a href="/">INICIO</a> | <a href="/blog">Blog</a> | <a><?php echo substr(the_title('', '', false), 0, 70); ?>...</a>
		</section>
		<section class="blog-body">
			<div class="wrapcont">
				<section class="post">
					<article>
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<div class="author"><span>Autor: </span> <?php echo the_author(); ?></div>
						<div class="date"><span>Fecha: </span><?php the_date(); ?></div>
						<div class="thumbnail"><?php the_post_thumbnail('large'); ?></div>
						<div class="content"><?php the_content(); ?></div>
					</article>
				</section>
			</div>
		</section>
		<?php get_sidebar(); ?>
	</section>



<?php get_footer(); ?>

