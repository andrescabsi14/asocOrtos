<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.transitions.css">
</head>
<body <?php body_class( $class ); ?>>
	<header>
		<section class="wrapcont container">
			<nav class="darken">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
			</nav>
			<div class="logo">
				<a href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""></a>
			</div>
			<div class="search">
				<?php add_theme_support( 'html5', array( 'search-form' ) ); ?>
				<?php get_search_form(); ?>
			</div>
		</section>
	</header>