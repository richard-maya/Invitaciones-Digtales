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

	<section class="section-title d-flex align-items-center">
		<div class="container-fluid mx-0 px-0 py-5">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-8 text-center">
					<header>
						<h1 class="text-white">Invitaciones para <?php single_cat_title(); ?></h1>
					</header>
					<img src='<?php echo esc_url(get_template_directory_uri()); ?>/ui/editor-de-invitaciones-digitales.svg' class='w-75 img-fluid py-4' alt='editor-de-invitaciones-digitales'>
				</div>
			</div>
		</div>
	</section>

	<section class="show-results py-5">
		<div class="container px-0">
			<div class="row justify-content-center">
				<div class="col-12 col-md-8">
					<div class="row">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	
							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							* get_template_part( 'template-parts/content', get_post_type() );
							*/ ?>
	
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
	
						<div class="col-12 text-center py-4">
							<nav class="navigation-posts-prevnext"><?php posts_nav_link(' ','Más Recientes','Más Atrás'); ?></nav>
						</div>
	
						<?php else :
	
							get_template_part( 'template-parts/content', 'none' );
	
						endif; ?>
					</div>



					<div class="row py-4">
						<div class="col-12">
							<h3 class="blue-pastel-color mb-3">Categorías Relacionadas</h3>
						</div>

						<?php if( have_rows('categorias', 1898) ):
							// $rows = get_field('categorias', 1898 );
							for ($x = 0; $x < 3; $x++) { 
								// $rand_row = $rows[ array_rand( $rows, 4 ) ]; 
								// echo $rows[$rand_row[$x]];

								$rows = get_field('categorias', 1898 );
								$rand_row = $rows[ array_rand( $rows ) ]; 
								$rand_row_name = $rand_row[ 'nombre_categoria' ]; 
								$rand_row_link = $rand_row[ 'link_categoria' ]; 
								$rand_row_image = $rand_row[ 'imagen_categoria' ];

								the_row(); ?>

								<div class="col-6 col-md-4">
									<a href="/category/<?php echo $rand_row_link; ?>" title="invitaciones-digitales-para-<?php echo $rand_row_name; ?>" rel="tag">
										<h6><?php echo $rand_row_name; ?></h6>
										<?php $image = get_sub_field('imagen_categoria');
										if( !empty( $rand_row_image ) ): ?>
											<img src='<?php echo esc_url($rand_row_image['url']); ?>' alt='<?php echo esc_attr($rand_row_image['alt']); ?>' class="img-fluid w-100 mb-4 shadow-hover"/>
										<?php endif; ?>
									</a>
								</div>

							<?php }
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
