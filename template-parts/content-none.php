<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Invitaciones_Digitales
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h2 class="page-title blue-pastel-color"><?php esc_html_e( 'Ooops, no se encontraron resultados.', 'invitaciones' ); ?></h2>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'invitaciones' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p class="lead"><?php esc_html_e( 'Lo sentimos, no encontramos invitaciones con los términos que utilizaste. Por favor intenta con otras palabras.', 'invitaciones' ); ?></p>
			<p>Prueba buscando de nuevo o revisa nuestras categorías.</p>
			<?php get_search_form(); ?>

			<div class="row py-4">
				<?php if( have_rows('categorias', 1898) ):
					while ( have_rows('categorias', 1898) ) : the_row(); ?>
						<div class="col-12 col-md-6">
							<a href="/category/<?php the_sub_field('link_categoria'); ?>" title="invitaciones-digitales-para-<?php the_sub_field('nombre_categoria'); ?>" rel="tag">
								<h3><?php the_sub_field('nombre_categoria'); ?></h3>
								<?php $image = get_sub_field('imagen_categoria');
								if( !empty( $image ) ): ?>
									<img src='<?php echo esc_url($image['url']); ?>' alt='<?php echo esc_attr($image['alt']); ?>' class="img-fluid w-100 mb-4 shadow-hover"/>
								<?php endif; ?>
							</a>
						</div>
					<?php endwhile;
				else :
					echo '<p>No hay categorías en éste momento.</p>';
				endif; ?>
			</div>
			<?php

		else :
			?>

			<p class="lead"><?php esc_html_e( 'Parece que no pudimos encontrar lo que estabas buscando.', 'invitaciones' ); ?></p>
			<p>Prueba buscando de nuevo o revisa nuestras categorías.</p>
			<?php get_search_form(); ?>

			<div class="row py-4">
				<?php if( have_rows('categorias', 1898) ):
					while ( have_rows('categorias', 1898) ) : the_row(); ?>
						<div class="col-12 col-md-6">
							<a href="/category/<?php the_sub_field('link_categoria'); ?>" title="invitaciones-digitales-para-<?php the_sub_field('nombre_categoria'); ?>" rel="tag">
								<h3><?php the_sub_field('nombre_categoria'); ?></h3>
								<?php $image = get_sub_field('imagen_categoria');
								if( !empty( $image ) ): ?>
									<img src='<?php echo esc_url($image['url']); ?>' alt='<?php echo esc_attr($image['alt']); ?>' class="img-fluid w-100 mb-4 shadow-hover"/>
								<?php endif; ?>
							</a>
						</div>
					<?php endwhile;
				else :
					echo '<p>No hay categorías en éste momento.</p>';
				endif; ?>
			</div>
			<?php

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
