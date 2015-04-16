<?php  

	function register_my_menu() {
	  register_nav_menu('menu-principal',__( 'menu-principal' ));
	}
	add_action( 'init', 'register_my_menu' );

?>