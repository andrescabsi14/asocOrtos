<?php  

	add_theme_support( 'post-thumbnails' );
	function register_my_menu() {
	  register_nav_menu('menu-principal',__( 'menu-principal' ));
	}
	add_action( 'init', 'register_my_menu' );

	/*Register our sidebars and widgetized areas.
	*****************************************************/
	function innov_widgets_init() {
		register_sidebar(array(
			'id' => 'pie-pagina',
			'name' => 'Texto pie de pagina',
			'before_widget' => '<div class="text">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
		register_sidebar(array(
			'id' => 'contactenos',
			'name' => 'Contáctenos',
			'before_widget' => '<div class="contactenos">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));
		register_sidebar(array(
			'id' => 'direccion',
			'name' => 'Dirección',
			'before_widget' => '<p>',
			'after_widget' => '</p>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));
		register_sidebar(array(
			'id' => 'newsletter',
			'name' => 'Suscripción',
			'before_widget' => '<p>',
			'after_widget' => '</p>',
			'before_title' => '<h4 class="hidden">',
			'after_title' => '</h4>',
		));
	}
	add_action ( 'widgets_init', 'innov_widgets_init' );

?>