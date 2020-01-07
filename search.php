<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Invitaciones_Digitales
 */

get_header();
?>

<section id="primary" class="content-area default-page-bg">
	<main id="main" class="site-main">

		<section class="section-title d-flex align-items-center" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/invitaciones-digitales-aplicacion.jpg');">
			<div class="container-fluid mx-0 px-0 py-5">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-8 text-center">
						<header>
							<h1 class="text-white"><?php printf( esc_html__( 'Búsqueda: %s', 'invitaciones' ), '<span style="text-decoration: underline";>' . get_search_query() . '</span>' ); ?></h1>
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

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

							endwhile;

							the_posts_navigation();

							else :

							get_template_part( 'template-parts/content', 'none' );

							endif; ?>
						</div>

						<!-- RELATED CATEGORIES -->
						<div class="py-4">
							<?php get_template_part( 'template-parts/related', 'categories' ); ?>
						</div>
					</div>


					<div class="col-12 col-md-4">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
