<?php
/**
 * Template Name: Bautizo
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
					<div class="col-12 col-md-11 col-lg-10">
						<h2 class="blue-pastel-color">Instrucciones</h2>
						<p><?php the_field('instrucciones', 'option'); ?></p>
						<h6 class="pink-dark-color text-right"><small class="title-font">Plantilla Número: <?php the_field('numero_de_plantilla'); ?>, <?php the_title(); ?></small></h6>

						<section class="template-form py-4">
							<div class="row d-flex align-items-center">
								<!-- FORM -->
								<div class="col-12 col-md-5 col-lg-6">
									
									<div class="accordion mt-4" id="accordionExample">
										<div class="card card-accordion py-0">
											<div class="card-header py-0" id="headingOne">
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Datos generales</button>
											</div>

											<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
												<div class="card-body">
													<div class="form-row">
														<div class="form-group col-12 col-lg-6">
															<label for="nombre-input">Nombre del festejad@ <b class="pink-dark-color">*</b></label>
															<input type="text" class="form-control form-control-sm" id="nombre-input" value="Nombre Apellido">
														</div>
														<div class="form-group col-12 col-lg-6">
															<label for="fecha-input">Fecha <b class="pink-dark-color">*</b></label>
															<input type="date" class="form-control form-control-sm" id="fecha-input" value="2020-01-04">
														</div>
													</div>

													<div class="form-row">
														<div class="form-group col-12 col-lg-6">
															<label for="padrinos-input">Mis Padrinos <b class="pink-dark-color">*</b></label>
															<textarea class="form-control form-control-sm" id="padrinos-input" rows="3">Mi madrina y Mi padrino</textarea>
														</div>
														<div class="form-group col-12 col-lg-6">
															<label for="papas-input">Mis Papás <b class="pink-dark-color">*</b></label>
															<textarea class="form-control form-control-sm" id="papas-input" rows="3">Mi mamá y Mi papá</textarea>
														</div>
													</div>

													<div class="form-row">
														<div class="form-group col-12 col-lg-6">
															<label for="hora-misa-input">Hora (Misa) <b class="pink-dark-color">*</b></label>
															<div class="row">
																<div class="col-12 col-md-7">
																	<input type="time" class="form-control form-control-sm" id="hora-misa-input" value="07:00">
																</div>
																<div class="col-12 col-md-5">
																	<!-- <label for="am-pm-fiesta-input">&nbsp;</label> -->
																	<select class="form-control form-control-sm" id="am-pm-misa-input">
																		<option value="am">am</option>
																		<option value="pm" selected>pm</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="form-group col-12 col-lg-6">
															<label for="hora-fiesta-input">Hora (Fiesta) <b class="pink-dark-color">*</b></label>
															<div class="row">
																<div class="col-12 col-md-7">
																	<input type="time" class="form-control form-control-sm" id="hora-fiesta-input" value="07:00">
																</div>
																<div class="col-12 col-md-5">
																	<!-- <label for="am-pm-fiesta-input">&nbsp;</label> -->
																	<select class="form-control form-control-sm" id="am-pm-fiesta-input">
																		<option value="am">am</option>
																		<option value="pm" selected>pm</option>
																	</select>
																</div>
															</div>
														</div>
													</div>

													<div class="form-row">
														<div class="form-group col-12 col-lg-6">
															<label for="nombre-iglesia-input">Nombre Iglesia</label>
															<input type="text" class="form-control form-control-sm" id="nombre-iglesia-input" value="Nombre Iglesia">
														</div>
														<div class="form-group col-12 col-lg-6">
															<label for="direccion-iglesia-input">Dirección Iglesia <b class="pink-dark-color">*</b></label>
															<textarea class="form-control form-control-sm" id="direccion-iglesia-input" rows="3">Calle con número, Colonia y CP 00000. Municipio y Estado.</textarea>
														</div>
													</div>
													
													<div class="form-row">
														<div class="form-group col-12 col-lg-6">
															<label for="nombre-fiesta-input">Salón de Fiestas</label>
															<input type="text" class="form-control form-control-sm" id="nombre-fiesta-input" value="Nombre Salón">
														</div>
														<div class="form-group col-12 col-lg-6">
															<label for="direccion-fiesta-input">Dirección Salón <b class="pink-dark-color">*</b></label>
															<textarea class="form-control form-control-sm" id="direccion-fiesta-input" rows="3">Calle con número, Colonia y CP 00000. Municipio y Estado.</textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="card card-accordion py-0">
											<div class="card-header py-0" id="headingTwo">
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Opciones Avanzadas</button>
											</div>

											<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
												<div class="card-body">

													<div class="form-row">
														<div class="form-group col-12 col-lg-6">
															<label for="title-font-input">Tipografía principal</label>
															<select class="form-control form-control-sm" id="title-font-input">
																<option value="Courgette" selected>Courgette</option>
																<option value="AguaFina Script">AguaFina Script</option>
																<option value="Alex Brush">Alex Brush</option>
																<option value="Blackjack">Blackjack</option>
																<option value="Dancing Script">Dancing Script</option>
																<option value="Grand Hotel">Grand Hotel</option>
																<option value="Great Vibes">Great Vibes</option>
																<option value="Kaushan Script">Kaushan Script</option>
																<option value="Lobster">Lobster</option>
																<option value="Milkshake">Milkshake</option>
																<option value="Pacifico">Pacifico</option>
															</select>
														</div>
														<div class="form-group col-12 col-lg-6">
															<label for="secondary-font-input">Tipografía secundaria</label>
															<select class="form-control form-control-sm" id="secondary-font-input">
																<option value="Raleway" selected>Raleway</option>
																<option value="Josefin Sans">Josefin Sans</option>
																<option value="Montserrat">Montserrat</option>
																<option value="Open Sans">Open Sans</option>
																<option value="Quicksand">Quicksand</option>
															</select>
														</div>
													</div>

													<div class="form-row">
														<div class="form-group col-12 col-lg-6">
															<label for="title-size-input">Tamaño del título</label>
															<input type="range" class="form-control form-control-sm" id="title-size-input" value="50">
														</div>
														<div class="form-group col-12 col-lg-6">
															<label for="name-size-input">Tamaño del nombre</label>
															<input type="range" class="form-control form-control-sm" id="name-size-input" value="50">
														</div>
													</div>

													<div class="form-row">
														<div class="form-group col-12 col-lg-6">
															<label for="font-size-input">Tamaño del texto</label>
															<input type="range" class="form-control form-control-sm" id="font-size-input" value="50">
														</div>
														<div class="form-group col-12 col-lg-6">
															<label for="icono-size-input">Tamaño del Ícono</label>
															<input type="range" class="form-control form-control-sm" id="icono-size-input" value="50">
														</div>
													</div>
													
													<div class="form-row">
														<div class="form-group col-12 col-lg-6">
															<label for="margin-input">Margen adicional</label>
															<input type="range" class="form-control form-control-sm" id="margin-input" value="0">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- <hr class="my-3"> -->

									<button id="save-image" class="btn btn-invitaciones btn-block my-4" role="button">Descargar imagen</button>
								</div>
								<div class="col-12 col-md-7 col-lg-6">
									
									<?php 
										$iconoTamanoInicial = get_field('icono_tamano_inicial');
										$iconoTamanoInicialObjetct = get_field_object('icono_tamano_inicial');
										$iconoTamanoInicial .= $iconoTamanoInicialObjetct['append']; 
									?>
									
									<div class="invitation-template-aspect-ratio" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/plantillas/bg/bautizo/invitacion-bautizo-<?php the_field('numero_de_plantilla'); ?>.jpg'); background-size:100% 100%;" id="invitation-template-aspect-ratio">
										<?php if( get_field('ocultar_marco') ): ?>
											<div class="invitation-frame-aspect-ratio" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/plantillas/frame/no-frame.png'); background-size: 100% 100%;">
										<?php else: ?>
											<div class="invitation-frame-aspect-ratio" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/plantillas/frame/bautizo/invitacion-bautizo-<?php the_field('numero_de_plantilla'); ?>.png'); background-size: 100% 100%;">
										<?php endif; ?>
											<div class="invitation-content-aspect-ratio">
												<div class="container text-center">
													<div class="row">
														<div class="col-12">
															<p id="evento-field" class="title-font" style="color: <?php the_field('color_titulo'); ?>;">Mi Bautizo</p>
															<p id="nombre-field" class="title-font" style="color: <?php the_field('color_nombre'); ?>;">Nombre Apellido</p>
															<img src='<?php echo esc_url(get_template_directory_uri()); ?>/plantillas/icon/bautizo/invitacion-bautizo-<?php the_field('numero_de_plantilla'); ?>.png' class='img-fluid mb-2' alt='invitacion-bautizo' id="icono-field" width="<?php echo $iconoTamanoInicial; ?>" height="auto"><br>
															<div class="row">
																<div class="col-6">
																	<p class="lead plantillas-titulos"><b>Mis Papás</b></p>
																	<p class="plantillas-textos" id="papas-field">Mi mamá y mi papá</p>
																</div>
																<div class="col-6">
																	<p class="lead plantillas-titulos"><b>Mis Padrinos</b></p>
																	<p class="plantillas-textos" id="padrinos-field">Mi madrina y Mi Padrino</p>
																</div>
															</div>
															<div class="row py-3">
																<div class="col-12">
																	<p id="fecha-field" class="plantillas-titulos">Sábado 4 de Enero</p>
																</div>
															</div>
															<div class="row">
																<div class="col-6">
																	<p class="lead plantillas-titulos" id="nombre-iglesia-field"><b>Nombre Iglesia</b></p>
																	<p class="plantillas-textos" id="direccion-misa-field">Calle con número, Colonia y CP 00000. Municipio y Estado.</p>
																	<p class="plantillas-textos"><span id="hora-misa-field">7:00</span>&nbsp;<span id="am-pm-misa-field">pm</span></p>
																</div>
																<div class="col-6">
																	<p class="lead plantillas-titulos" id="nombre-fiesta-field"><b>Nombre Salón</b></p>
																	<p class="plantillas-textos" id="direccion-fiesta-field">Calle con número, Colonia y CP 00000. Municipio y Estado.</p>
																	<p class="plantillas-textos"><span id="hora-fiesta-field">7:00</span>&nbsp;<span id="am-pm-fiesta-field">pm</span></p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<p class="signature d-none">Diseña tu invitación gratis en <b>invitaciones-digitales.net</b></p>
									</div>
								</div>
							</div>

							<div class="row py-5">
								<div class="col-12">
									<div id="image-output"></div>
								</div>
							</div>
						</section>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-12 col-md-8 col-lg-9">
						<!-- RELATED TEMPLATES -->
						<?php get_template_part( 'template-parts/related', 'posts' ); ?>
					</div>
					<div class="col-12 col-md-4 col-lg-3">
						<!-- SIDEBAR -->
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
