<?php
/**
 * Template Name: XV Años
 * Template Post Type: post
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
						<p><?php the_field('instrucciones', 'option'); ?></p>
						<h6 class="pink-dark-color text-right"><small class="title-font">Plantilla <?php the_id(); ?>, <?php the_title(); ?></small></h6>

						<section class="template-form py-4">
							<div class="row d-flex align-items-center">
								<!-- FORM -->
								<div class="col-12 col-md-5 col-lg-6">
									<div class="form-row">
										<div class="form-group col-12 col-lg-6">
											<label for="nombre-input">Nombre de la Festejada <b class="pink-dark-color">*</b></label>
											<input type="text" class="form-control" id="nombre-input" value="Nombre Apellido">
										</div>
										<div class="form-group col-12 col-lg-6">
											<label for="texto-1-input">Texto Inicial</label>
											<textarea class="form-control" id="texto-1-input" rows="2">Te invito a mis</textarea>
										</div>
									</div>

									<div class="form-row">
										<div class="form-group col-12 col-lg-5">
											<label for="fecha-input">Fecha <b class="pink-dark-color">*</b></label>
											<input type="date" class="form-control" id="fecha-input" value="2020-01-04">
										</div>
										<div class="form-group col-12 col-lg-4">
											<label for="hora-input">Hora <b class="pink-dark-color">*</b></label>
											<input type="time" class="form-control" id="hora-input" value="07:00">
										</div>
										<div class="form-group col-12 col-lg-3">
											<label for="am-pm-input">AM/PM <b class="pink-dark-color">*</b></label>
											<select class="form-control" id="am-pm-input">
												<option value="am">am</option>
												<option value="pm" selected>pm</option>
											</select>
										</div>
									</div>

									<div class="form-row">
										<div class="form-group col-12 col-lg-6">
											<label for="direccion-1-input">Dirección <b class="pink-dark-color">*</b></label>
											<textarea class="form-control" id="direccion-1-input" rows="3">Calle con número, Colonia y CP 00000. Municipio y Estado.</textarea>
										</div>
										<div class="form-group col-12 col-lg-6">
											<label for="texto-2-input">Texto final</label>
											<textarea class="form-control" id="texto-2-input" rows="3">¡Te Esperamos!</textarea>
										</div>
									</div>

									<hr class="my-3">

									<div class="accordion mt-4" id="accordionExample">
										<div class="card card-accordion py-0">
											<div class="card-header py-0" id="headingOne">
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Opciones Avanzadas</button>
											</div>

											<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
												<div class="card-body">

													<div class="form-row">
														<div class="form-group col-12 col-lg-6">
															<label for="title-font-input">Tipografía principal</label>
															<select class="form-control" id="title-font-input">
																<option value="Courgette" selected>Courgette</option>
																<option value="Pacifico">Pacifico</option>
																<option value="Dancing Script">Dancing Script</option>
																<option value="Great Vibes">Great Vibes</option>
																<option value="Satisfy">Satisfy</option>
															</select>
														</div>
														<div class="form-group col-12 col-lg-6">
															<label for="secondary-font-input">Tipografía secundaria</label>
															<select class="form-control" id="secondary-font-input">
																<option value="Raleway" selected>Raleway</option>
																<option value="Open Sans">Open Sans</option>
																<option value="Lato">Lato</option>
																<option value="Montserrat">Montserrat</option>
																<option value="Quicksand">Quicksand</option>
															</select>
														</div>
													</div>

													<div class="form-row">
														<div class="form-group col-12 col-lg-6">
															<label for="title-size-input">Tamaño del título</label>
															<input type="range" class="form-control" id="title-size-input" value="64">
														</div>
														<div class="form-group col-12 col-lg-6">
															<label for="name-size-input">Tamaño del nombre</label>
															<input type="range" class="form-control" id="name-size-input" value="64">
														</div>
													</div>

													<div class="form-row">
														<div class="form-group col-12 col-lg-6">
															<label for="font-size-input">Tamaño del texto</label>
															<input type="range" class="form-control" id="font-size-input" value="32">
														</div>
														<div class="form-group col-12 col-lg-6">
															<label for="icono-size-input">Tamaño del Ícono</label>
															<input type="range" class="form-control" id="icono-size-input" value="30">
														</div>
													</div>
													
													<div class="form-row">
														<div class="form-group col-12 col-lg-6">
															<label for="margin-input">Margen adicional</label>
															<input type="range" class="form-control" id="margin-input" value="0">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<hr class="my-3">

									<button id="save-image" class="btn btn-invitaciones btn-block" role="button">Descargar imagen</button>
								</div>
								<div class="col-12 col-md-7 col-lg-6">
									
									<!-- TEMPLATE -->
									<!-- <div class="invitation-template" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/plantillas/bg/xv-anos/invitacion-xv-anos-1.jpg'); background-size: 100% 100%;">
										<div class="invitation-frame" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/plantillas/frame/xv-anos/invitacion-xv-anos-1.png'); background-size: 100% 100%;">
											<div class="invitation-content d-flex align-items-center">
												<div class="container text-center">
													<div class="row justify-content-center">
														<div class="col-12">
															<img src='<?php echo esc_url(get_template_directory_uri()); ?>/plantillas/icon/xv-anos/invitacion-xv-anos-1.png' class='img-fluid mb-2' alt='invitacion-xv-anos-1' id="icono-field" width="30%" height="auto"><br>
															<p id="texto-1-field" style="font-family: 'Raleway';">Te invito a mis</p>
															<p id="evento-field" style="font-family: 'Courgette'; color: #E881A8;">XV AÑOS</p>
															<p id="nombre-field" style="font-family: 'Courgette'; color: #CFA027;">Nombre Apellido</p>
															<p id="fecha-y-hora-field" style="font-family: 'Raleway';"><span id="fecha-field">Sábado 4 de Enero</span> a las <span id="hora-field">7:00</span>&nbsp;<span id="am-pm-field">pm</span></p>
															<p id="direccion-1-field" style="font-family: 'Raleway';">Calle con número, Colonia y CP 00000. Municipio y Estado.</p>
															<p id="texto-2-field" style="font-family: 'Raleway';">¡Te esperamos!</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> -->
									
									<div class="invitation-template-aspect-ratio" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/plantillas/bg/xv-anos/invitacion-xv-anos-1.jpg'); background-size: 100% 100%;" id="invitation-template-aspect-ratio">
										<div class="invitation-frame-aspect-ratio" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/plantillas/frame/xv-anos/invitacion-xv-anos-1.png'); background-size: 100% 100%;">
											<div class="invitation-content-aspect-ratio">
												<div class="container text-center">
													<div class="row">
														<div class="col-12">
															<img src='<?php echo esc_url(get_template_directory_uri()); ?>/plantillas/icon/xv-anos/invitacion-xv-anos-1.png' class='img-fluid mb-2' alt='invitacion-xv-anos-1' id="icono-field" width="30%" height="auto"><br>
															<p id="texto-1-field" style="font-family: 'Raleway';">Te invito a mis</p>
															<p id="evento-field" style="font-family: 'Courgette'; color: #E881A8;">XV AÑOS</p>
															<p id="nombre-field" style="font-family: 'Courgette'; color: #CFA027;">Nombre Apellido</p>
															<p id="fecha-y-hora-field" style="font-family: 'Raleway';"><span id="fecha-field">Sábado 4 de Enero</span> a las <span id="hora-field">7:00</span>&nbsp;<span id="am-pm-field">pm</span></p>
															<p id="direccion-1-field" style="font-family: 'Raleway';">Calle con número, Colonia y CP 00000. Municipio y Estado.</p>
															<p id="texto-2-field" style="font-family: 'Raleway';">¡Te esperamos!</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<p class="signature d-none">Diseña tu invitación gratis en <b>invitaciones-digitales.net</b></p>
									</div>
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

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
