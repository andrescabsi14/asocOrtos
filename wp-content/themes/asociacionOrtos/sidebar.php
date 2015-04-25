<section id="sidebar">
	<h5>Categorías</h5>
	<ul class="categories">
		<?php wp_list_categories('exclude=1&title_li='); ?>
	</ul>
	<h5>Patrocinadores</h5>
	<ul class="sponsors">
		<?php
			$args = array(
				'post_type' => 'patrocinador'
			);
			$query = new WP_Query( $args );
		 ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<li><a target="_blank" href="<?php the_field( "link" ); ?>"><img src="<?php the_field( "banner" ); ?>" alt="Patrocinador ORTOS"></a></li>
		<?php endwhile; ?>
		<?php else: ?>
			<p>Conviertase en un anunciante de ORTOS.</p>
			<a class="btn" href="/contactenos/">Más info</a>
		<?php endif; ?>
		<?php rewind_posts(); ?><?php wp_reset_query(); ?>
	</ul>
</section>