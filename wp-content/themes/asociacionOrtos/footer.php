	<footer>
		<section class="top">
			<section class="wrapcont">
				<div class="contact">
					<?php if ( is_active_sidebar( 'pie-pagina' ) ) : ?>
						<?php dynamic_sidebar( 'pie-pagina' ); ?>
					<?php endif; ?>
					<div class="info">
						<div class="phone">
							<?php if ( is_active_sidebar( 'contactenos' ) ) : ?>
								<?php dynamic_sidebar( 'contactenos' ); ?>
							<?php endif; ?>
						</div>
						<div class="address">
							<div class="phone">
							<?php if ( is_active_sidebar( 'direccion' ) ) : ?>
								<?php dynamic_sidebar( 'direccion' ); ?>
							<?php endif; ?>
						</div>
						</div>
					</div>
				</div>
				<div class="map">
					<div class="sitemap">
						<ul>
							<?php wp_nav_menu( array('menu' => 'Pie de página 1' )); ?>
						</ul>
						<ul>
							<?php wp_nav_menu( array('menu' => 'Pie de página 2' )); ?>
						</ul>
						<ul>
							<?php wp_nav_menu( array('menu' => 'Pie de página 3' )); ?>
						</ul>
					</div>
					<div class="googlemaps">
						<iframe width="436" height="184" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63626.89280985122!2d-74.061598!3d4.6509!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a4685756e29%3A0xd483d8712655029!2sCalle+65+%23+10-43%2C+Bogot%C3%A1%2C+Cundinamarca%2C+Colombia!5e0!3m2!1ses!2sus!4v1429069308503" width="400" height="300" frameborder="0" style="border:0"></iframe>
					</div>
				</div>
			</section>
		</section>
		<section class="bottom darken">
			<section class="wrapcont">
				<div class="social">
					<a class="linkedin" href=""><img src="<?php bloginfo('template_url'); ?>/img/linkedinFooter.png" alt=""></a>
					<a class="skype" href=""><img src="<?php bloginfo('template_url'); ?>/img/skypeFooter.png" alt=""></a>
				</div>
				<div class="copyright">
					<strong><?php bloginfo( 'name' ); ?> <br>
					<?php echo date('Y'); ?> © Todos los derechos reservados</strong>
				</div>
			</section>
		</section>
	</footer>
	<?php wp_footer(); ?>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>
</body>
</html>