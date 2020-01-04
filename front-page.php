<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Invitaciones_Digitales
 */

get_header();
?>

<?php $introGroup = get_field('intro'); ?>
<?php $categoriesGroup = get_field('categorias'); ?>
<?php $tutorialGroup = get_field('tutorial'); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<section class='hero d-flex align-items-center intro-home'>
			<div class='container'>
				<div class='row justify-content-center mb-4'>
					<div class='col-12 col-md-10 col-lg-8'>
						<header class="text-center">
							<h1 class="text-white"><?php echo $introGroup['title']; ?></h1>
							<img src='<?php echo esc_url(get_template_directory_uri()); ?>/ui/invitaciones-digitales-gratis.svg' class='w-75 img-fluid py-3' alt='invitaciones-digitales-gratis'>
							<p class="lead text-white"><?php echo $introGroup['description']; ?></p>
						</header>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-10 col-md-4 text-center">
						<div class="card">
							<div class="card-body text-center">
								<h3 class="card-title blue-pastel-color">1</h3>
								<p class="lead"><?php echo $introGroup['step_1']['text']; ?></p>
								<a href="<?php echo $introGroup['step_1']['link']; ?>" class="btn btn-invitaciones title-font" title="invitaciones-digitales-plantillas">Ver Plantillas</a>
							</div>
						</div>
					</div>
					<div class="col-10 col-md-4">
						<div class="card">
							<div class="card-body text-center">
								<h3 class="card-title blue-pastel-color">2</h3>
								<p class="lead"><?php echo $introGroup['step_2']['text']; ?></p>
								<a href="<?php echo $introGroup['step_2']['link']; ?>" class="btn btn-invitaciones title-font" title="creador-invitaciones-digitales">Ver Tutorial</a>
							</div>
						</div>
					</div>
					<div class="col-10 col-md-4">
						<div class="card">
							<div class="card-body text-center">
								<h3 class="card-title blue-pastel-color">3</h3>
								<p class="lead"><?php echo $introGroup['step_3']['text']; ?></p>
								<a href="<?php echo $introGroup['step_3']['link']; ?>" class="btn btn-invitaciones title-font" title="editor-invitaciones-digitales">Comenzar Ahora</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<div class="intro-pattern">
			<section class='mb-3 py-5 categorias-intro' id="categorias-intro">
				<div class='container'>
					<div class="row">
						<div class="col-12 text-center">
							<h2 class="blue-pastel-color">Categorías</h2>
							<img src='<?php echo esc_url(get_template_directory_uri()); ?>/ui/creador-de-invitaciones-digitales.svg' class='w-50 img-fluid py-4 mb-4' alt='creador-de-invitaciones-digitales'>
						</div>
					</div>
					<div class="row">
						<div class='col-6 col-md-3 text-center'>
							<a href="/category/<?php echo $categoriesGroup['category_1']['link']; ?>" title="invitaciones-digitales-para-<?php echo $categoriesGroup['category_1']['name']; ?>" rel="tag">
								<img src="<?php echo $categoriesGroup['category_1']['image']; ?>" alt="invitaciones-digitales-para-<?php echo $categoriesGroup['category_1']['name']; ?>" class="img-fluid w-100 shadow-hover mb-2"/>
								<p class="lead title-font"><?php echo $categoriesGroup['category_1']['name']; ?></p>
							</a>
						</div>
						<div class='col-6 col-md-3 text-center'>
							<a href="/category/<?php echo $categoriesGroup['category_2']['link']; ?>" title="invitaciones-digitales-para-<?php echo $categoriesGroup['category_2']['name']; ?>" rel="tag">
								<img src="<?php echo $categoriesGroup['category_2']['image']; ?>" alt="invitaciones-digitales-para-<?php echo $categoriesGroup['category_2']['name']; ?>" class="img-fluid w-100 shadow-hover mb-2"/>
								<p class="lead title-font"><?php echo $categoriesGroup['category_2']['name']; ?></p>
							</a>
						</div>
						<div class='col-6 col-md-3 text-center'>
							<a href="/category/<?php echo $categoriesGroup['category_3']['link']; ?>" title="invitaciones-digitales-para-<?php echo $categoriesGroup['category_3']['name']; ?>" rel="tag">
								<img src="<?php echo $categoriesGroup['category_3']['image']; ?>" alt="invitaciones-digitales-para-<?php echo $categoriesGroup['category_3']['name']; ?>" class="img-fluid w-100 shadow-hover mb-2"/>
								<p class="lead title-font"><?php echo $categoriesGroup['category_3']['name']; ?></p>
							</a>
						</div>
						<div class='col-6 col-md-3 text-center'>
							<a href="/category/<?php echo $categoriesGroup['category_4']['link']; ?>" title="invitaciones-digitales-para-<?php echo $categoriesGroup['category_4']['name']; ?>" rel="tag">
								<img src="<?php echo $categoriesGroup['category_4']['image']; ?>" alt="invitaciones-digitales-para-<?php echo $categoriesGroup['category_4']['name']; ?>" class="img-fluid w-100 shadow-hover mb-2"/>
								<p class="lead title-font"><?php echo $categoriesGroup['category_4']['name']; ?></p>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12 text-center">
							<a href="/invitaciones-para-toda-ocasion" class="btn btn-invitaciones-pink-outline" title="invitaciones-para-toda-ocasión">Ver todas las categorías</a>
						</div>
					</div>
				</div>
			</section>
			
			
			<section class='py-5 nuevas-plantillas-intro' id="nuevas-plantillas-intro">
				<div class='container py-3'>
					<div class="row">
						<div class="col-12 text-center">
							<h2 class="blue-pastel-color">Nuevas Plantillas</h2>
							<img src='<?php echo esc_url(get_template_directory_uri()); ?>/ui/creador-de-invitaciones-digitales.svg' class='w-50 img-fluid py-4 mb-4' alt='creador-de-invitaciones-digitales'>
						</div>
					</div>
					<div class="row">
						<?php $invitacionesLista = new WP_Query( array( 'posts_per_page' => 8 ) ); ?>
						<?php if ( $invitacionesLista->have_posts() ) : while ( $invitacionesLista->have_posts() ) : $invitacionesLista->the_post(); ?>
							
							<div class="col-6 col-md-3">
								<figure class="text-center">
									<a href='<?php the_permalink(); ?>' title='<?php the_title_attribute(); ?>' rel='bookmark'>
										<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid w-100 shadow-hover mb-4']); ?>
									</a>
									<figcaption class="py-2">
										<a href='<?php the_permalink(); ?>' title='<?php the_title_attribute(); ?>' rel='bookmark'><?php the_title(); ?></a>
									</figcaption>
								</figure>
							</div>

						<?php endwhile; else : ?>
							<p><?php esc_html_e( 'Lo sentimos, no hay noticias en éste momento.' ); ?></p>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
					</div>
					<div class="row">
						<div class="col-12 text-center">
							<a href="#" class="btn btn-invitaciones-pink-outline" title="invitaciones-categorias">Ver todas las categorías</a>
						</div>
					</div>
				</div>
			</section>
		</div>

		<section class='py-5 tutorial-intro' id="tutorial-intro">
			<div class='container-fluid px-0'>
				<div class='row d-flex align-items-center justify-content-center text-white'>
					<div class='col-12 col-md-10 col-lg-6 px-5'>
						<h2><?php echo $tutorialGroup['title']; ?></h2>
						<ol>
							<?php if( have_rows('steps') ):
								while ( have_rows('steps') ) : the_row(); ?>
									<li><p class="font-weight-bold"><?php the_sub_field('step_text'); ?></p></li>
							<?php endwhile; endif; ?>
						</ol>
						<div class="row justify-content-center mb-4">
							<a href="<?php echo $tutorialGroup['templates_link']; ?>" class="btn btn-white-outline" title="editor-invitaciones-digitales">Comienza ahora</a>
						</div>
					</div>
					<div class='col-12 col-md-12 col-lg-6 px-5'>
						<div class="embed-responsive embed-responsive-16by9">
							<?php echo $tutorialGroup['video_link']; ?>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
