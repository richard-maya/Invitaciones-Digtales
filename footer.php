<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Invitaciones_Digitales
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer py-3">
		<nav class="site-info container">
			<div class="row justify-content-between white-text">
				<div class="col-12 col-md-4 order-2 order-md-0 text-center text-md-left">
					<a class="navbar-brand title-font blue-color" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="invitaciones-digitales-gratis">Invitaciones-Digitales.net &nbsp;<i class="fas fa-gift"></i></a>
				</div>
				<div class="col-12 col-md-4 text-center order-0 order-md-1">
					<ul class="list-inline">
						<li class="list-inline-item"><a href="#" target="_blank" title="invitaciones-digitales-facebook" rel="external"><i class="fab fa-facebook-square white-text"></i></a></li>
						<li class="list-inline-item"><a href="#" target="_blank" title="invitaciones-digitales-instagram" rel="external"><i class="fab fa-instagram white-text px-3"></i></a></li>
						<li class="list-inline-item"><a href="#" target="_blank" title="invitaciones-digitales-twitter" rel="external"><i class="fab fa-twitter-square white-text"></i></a></li>
					</ul>
				</div>
				<div class="col-12 col-md-4 text-center text-md-right order-1 order-md-2">
					<a href="#">Aviso de Privacidad</a>
				</div>
			</div>

			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'invitaciones' ) ); ?>">
				<?php
				printf( esc_html__( 'Proudly powered by %s', 'invitaciones' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'invitaciones' ), 'invitaciones', '<a href="https://iconica.mx">iconicamx</a>' );
				?> -->
		</nav>
	</footer><!-- #colophon -->
</div><!-- #page -->

<script src="https://kit.fontawesome.com/2ac572db93.js" crossorigin="anonymous"></script>
<?php wp_footer(); ?>

</body>
</html>
