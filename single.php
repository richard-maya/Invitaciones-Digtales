<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Invitaciones_Digitales
 */

get_header();
?>

<div id="primary" class="content-area default-page-bg">
	<main id="main" class="site-main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<section class="section-title d-flex align-items-center" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/invitaciones-digitales-aplicacion.jpg');">
			<div class="container-fluid mx-0 px-0 py-5">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-8 text-center">
						<header>
							<h1 class="text-white">Invitación para <?php the_category(', '); ?></h1>
						</header>
						<img src='<?php echo esc_url(get_template_directory_uri()); ?>/ui/editor-de-invitaciones-digitales.svg' class='w-75 img-fluid py-4' alt='editor-de-invitaciones-digitales'>
					</div>
				</div>
			</div>
		</section>


		<section class="creador-invitaciones py-5">
			<div class="container px-0">
				<div class="row justify-content-center">
					<div class="col-12 col-md-8 col-lg-9">
						<h2 class="blue-pastel-color">Instrucciones</h2>
						<p>Crear una invitación digital con nuestra herramienta es bastante sencillo. Sólo coloca tu información en el formulario y descárgala o envíala por correo a todos tus invitados.</p>
						<h6 class="pink-dark-color text-right"><small class="title-font">Plantilla Número <?php the_id(); ?>, <?php the_title(); ?></small></h6>

						<section class="template-form py-4">
							<div class="row">
								<!-- FORM -->
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="nombre">Nombre del festejad@ <b class="pink-dark-color">*</b></label>
										<input type="text" class="form-control" id="nombre">
									</div>
									<div class="form-group">
										<label for="texto_1">Texto</label>
										<textarea class="form-control" id="texto_1" rows="3"></textarea>
									</div>
									<div class="form-group">
										<label for="fecha">Fecha <b class="pink-dark-color">*</b></label>
										<input type="date" class="form-control" id="fecha">
									</div>
									<div class="form-group">
										<label for="hora">Hora <b class="pink-dark-color">*</b></label>
										<input type="time" class="form-control" id="hora">
									</div>
									<div class="form-group">
										<label for="direccion_1">Dirección <b class="pink-dark-color">*</b></label>
										<textarea class="form-control" id="direccion_1" rows="3"></textarea>
									</div>
									<div class="form-group">
										<label for="texto_2">Texto final</label>
										<textarea class="form-control" id="texto_2" rows="3"></textarea>
									</div>
									<div class="form-group">
										<label for="icono">Ícono</label>
										<select class="form-control" id="icono">
										<option>Selecciona un ícono</option>
										<option>2</option>
										</select>
									</div>
									<div class="form-group">
										<label for="tipografia">Tipografía</label>
										<select class="form-control" id="tipografia">
										<option>Selecciona una tipografía</option>
										<option>2</option>
										</select>
									</div>
								</div>
								<div class="col-12 col-md-8">
									
									<!-- TEMPLATE -->
									<div class="invitation-template" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/plantillas/bg/xv-anos/invitacion-xv-anos-1.jpg'); background-size: 100% 100%;">
										<div class="invitation-frame" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/plantillas/frame/xv-anos/invitacion-xv-anos-1.png'); background-size: 100% 100%;">
											<div class="invitation-content d-flex align-items-center">
												<div class="container text-center">
													<div class="row justify-content-center">
														<div class="col-12">
															<img src='<?php echo esc_url(get_template_directory_uri()); ?>/plantillas/icon/xv-anos/invitacion-xv-anos-1.png' class='img-fluid w-25 mb-2' alt='invitacion-xv-anos-1'><br>
															<p>Te invito a mis</p>
															<p style="color: #E881A8;">XV AÑOS</p>
															<p style="color: #CFA027;">Nombre Festejada</p>
															<p>Sábado 1 de Enero a las 7:00pm</p>
															<p>Calle con número, Colonia y CP 00000. Municipio y Estado.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</section>

						<!-- RELATED TEMPLATES -->
						<section class="related-templates py-5">
							<div class="container">
								<div class="row text-center">
									<h3 class="blue-pastel-color">Plantillas Similares</h3>
								</div>

								<div class="row">
									<?php $relatedArgsQuery = array(
										'posts_per_page' => 6,
										'nopaging' => false,
										'orderby' => 'rand',
										'category_name' => 'baby-shower',
										'post__not_in' => array(1837)
									);

									$relatedPostsQuery = new WP_Query( $relatedArgsQuery );

									if ( $relatedPostsQuery->have_posts() ) : while ( $relatedPostsQuery->have_posts() ) : $relatedPostsQuery->the_post(); ?>
								
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
									<?php endif; $relatedPostsQuery->reset_postdata(); ?>
								</div>
							</div>
						</section>
					</div>
					<div class="col-12 col-md-4 col-lg-3">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</section>

	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Lo sentimos, no encontramos la invitación que buscaste.' ); ?></p>
	<?php endif; wp_reset_postdata(); ?>


	<?php /* while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', get_post_type() );

		the_post_navigation();

		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; */ ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
