<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/masterslider.main.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ms-skin-sample.css">

	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/masterslider.js"></script>
</head>
<body <?php body_class( $class ); ?>>
	<header>
		<section class="wrapcont">
			<nav class="darken">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
			</nav>
			<div class="logo">
				<a href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""></a>
			</div>
		</section>
	</header>