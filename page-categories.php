<?php
/**
 * Template Name: Categories Page
 * Template Post Type: page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Invitaciones_Digitales
 */

get_header();
?>

	<div id="primary" class="content-area default-page-bg">
		<main id="main" class="site-main">

			<section class="section-title d-flex align-items-center" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/invitaciones-digitales-aplicacion.jpg');">
				<div class="container-fluid mx-0 px-0 py-5">
					<div class="row justify-content-center">
						<div class="col-12 col-md-10 col-lg-8 text-center">
							<header>
								<h1 class="text-white">Invitaciones para toda ocasión</h1>
							</header>
							<img src='<?php echo esc_url(get_template_directory_uri()); ?>/ui/editor-de-invitaciones-digitales.svg' class='w-75 img-fluid py-4' alt='editor-de-invitaciones-digitales'>
						</div>
					</div>
				</div>
			</section>


			<section class="categories-list py-5">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-8">
							<div class="row">
								<?php if( have_rows('categorias') ):
									while ( have_rows('categorias') ) : the_row(); ?>
										<div class="col-12 col-md-6">
											<a href="/category/<?php the_sub_field('link_categoria'); ?>" title="invitaciones-digitales-para-<?php the_sub_field('nombre_categoria'); ?>" rel="tag">
												<h2><?php the_sub_field('nombre_categoria'); ?></h2>
												<?php $image = get_sub_field('imagen_categoria');
												if( !empty( $image ) ): ?>
													<img src='<?php echo esc_url($image['url']); ?>' alt='<?php echo esc_attr($image['alt']); ?>' class="img-fluid w-100 mb-5 shadow-hover"/>
												<?php endif; ?>
											</a>
										</div>
									<?php endwhile;
								else :
									echo '<p>No hay categorías en éste momento.</p>';
								endif; ?>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<?php get_sidebar(); ?>
						</div>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
