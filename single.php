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
		
		<!-- TITLE SECTION -->
		<?php get_template_part( 'template-parts/title-section' ); ?>

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
										<label for="nombre">Nombre del Festejada <b class="pink-dark-color">*</b></label>
										<input type="text" class="form-control" id="nombre_input" value="Nombre Apellido">
									</div>
									<div class="form-group">
										<label for="texto_1">Texto</label>
										<textarea class="form-control" id="texto_1_input" rows="3"></textarea>
									</div>
									<div class="form-group">
										<label for="fecha">Fecha <b class="pink-dark-color">*</b></label>
										<input type="date" class="form-control" id="fecha_input">
									</div>
									<div class="form-group">
										<label for="hora">Hora <b class="pink-dark-color">*</b></label>
										<input type="time" class="form-control" id="hora_input">
									</div>
									<div class="form-group">
										<label for="direccion_1">Dirección <b class="pink-dark-color">*</b></label>
										<textarea class="form-control" id="direccion_1_input" rows="3"></textarea>
									</div>
									<div class="form-group">
										<label for="texto_2">Texto final</label>
										<textarea class="form-control" id="texto_2_input" rows="3"></textarea>
									</div>
									<div class="form-group">
										<label for="icono">Ícono</label>
										<select class="form-control" id="icono_input">
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
															<p id="texto_1_field">Te invito a mis</p>
															<p id="evento_field" class="template-color-1">XV AÑOS</p>
															<p id="nombre_field" class="template-color-2">Nombre Festejada</p>
															<p id="fecha_y_hora_field"><span id="fecha_field">Sábado 1 de Enero</span> a las <span id="hora_field">7:00pm</span></p>
															<p id="direccion_1_field">Calle con número, Colonia y CP 00000. Municipio y Estado.</p>
															<p id="texto_2_field">¡Te esperamos!</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<style>
										.invitation-content p.template-color-1{
											color: #E881A8;
										}
										.invitation-content p.template-color-2{
											color: #CFA027;
										}
									</style>

								</div>
							</div>
						</section>

						<!-- RELATED TEMPLATES -->
						<?php get_template_part( 'template-parts/related', 'posts' ); ?>
						
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
