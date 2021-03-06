<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
							<h1 class="text-white">Invitaciones Digitales Plantillas</h1>
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
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
							/* $templatesArgs = array(
								'orderby' => 'rand'
							);
				
							$templatesQuery = new WP_Query( $templatesArgs );
							if ( $templatesQuery->have_posts() ) : while ( $templatesQuery->have_posts() ) : $templatesQuery->the_post(); */ ?>
								
								<div class="col-12 col-md-6 col-lg-4 px-2 mx-0">
									<figure class="text-center">
										<a href='<?php the_permalink(); ?>' title='<?php the_title_attribute(); ?>' rel='bookmark'>
											<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid w-100 shadow-hover mb-4']); ?>
										</a>
										<figcaption class="py-2">
											<a href='<?php the_permalink(); ?>' title='<?php the_title_attribute(); ?>' rel='bookmark'><?php the_title(); ?></a>
										</figcaption>
									</figure>
								</div>

							<?php endwhile; ?>

							<?php else : ?>
								<p><?php esc_html_e( 'Lo sentimos, no hay plantillas en éste momento.' ); ?></p>
							<?php endif; ?>	
						</div>

						<div class="row justify-content-center py-4">
							<div class="col-12 text-center">
								<nav class="navigation-posts-prevnext"><?php posts_nav_link(' ','Más Recientes','Más Atrás'); ?></nav>
							</div>
						</div>

						<div class="row py-4">
							<div class="col-12">
								<h3 class="blue-pastel-color mb-3">Categorías</h3>
							</div>

							<?php if( have_rows('categorias', 1898) ):
								$rows = get_field('categorias', 1898 );
								$rand_rows = array_rand($rows, 3);
								
								for ($x = 0; $x < 3; $x++) { 
									$name_category = $rows[$rand_rows[$x]]['nombre_categoria']; 
									$link_category = $rows[$rand_rows[$x]]['link_categoria']; 
									$image_category = $rows[$rand_rows[$x]]['imagen_categoria'];
									the_row(); ?>
	
									<div class="col-12 col-md-4 text-center">
										<a href="/category/<?php echo $link_category; ?>" title="invitaciones-digitales-para-<?php echo $name_category; ?>" rel="tag">
											<img src='<?php echo esc_url($image_category['url']); ?>' alt='<?php echo esc_attr($image_category['alt']); ?>' class="img-fluid w-100 mb-2 shadow-hover"/>
											<h6><?php echo $name_category; ?></h6>
										</a>
									</div>
	
								<?php }
							else :
								echo '<p>No hay categorías en éste momento.</p>';
							endif; ?>
						</div>

						<div class="row">
							<div class="col-12 text-center">
								<a href="/invitaciones-para-toda-ocasion" class="btn btn-invitaciones-pink-outline" title="invitaciones-para-toda-ocasión">Ver todas las categorías</a>
							</div>
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
