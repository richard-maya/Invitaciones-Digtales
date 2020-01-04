<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Invitaciones_Digitales
 */

?>
<!doctype html>
<html lang="es-MX">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="robots" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="copyright" content="Copyright © 2019 Invitaciones Digitales">
	<meta name="resource-type" content="document" />

	<!-- FAVICONS
    ================================================== -->
    
    <!-- TAG MANAGER
    ================================================== -->
    <!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KCZ889H');</script> -->
   
    <!-- SITE TITLE
    ================================================== -->
    <title><?php wp_title(''); ?> | <?php bloginfo('name'); ?></title>

    <!-- SEO INFO
    ================================================== -->
    <meta name="description" content="<?php if ( is_single() ) {
        the_excerpt(); 
    } else {
        bloginfo('description');
    }?>">
    <meta name="keywords" content="invitaciones digitales">
    <meta name="author" content="Invitaciones digitales">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'invitaciones' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$invitaciones_description = get_bloginfo( 'description', 'display' );
			if ( $invitaciones_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $invitaciones_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'invitaciones' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
	</header> -->

	<nav class="navbar navbar-expand-md navbar-light bg-pastel sticky-top">
		<div class="d-flex w-100">
			<a class="navbar-brand title-font" href="<?php echo esc_url( home_url( ) ); ?>" title="invitaciones-digitales-gratis">Invitaciones-Digitales.net &nbsp;<i class="fas fa-gift"></i></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar" aria-controls="collapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<?php wp_nav_menu([
			'menu'            => 'primary-menu',
			'theme_location'  => 'menu-1',
			'container'       => 'div',
			'container_id'    => 'collapsingNavbar',
			'container_class' => 'collapse navbar-collapse justify-content-center w-100',
			'menu_id'         => false,
			'menu_class'      => 'navbar-nav',
			'depth'           => 2,
			'fallback_cb'     => 'bs4navwalker::fallback',
			'walker'          => new bs4navwalker()
		]); ?>

		<span class="navbar-text w-100 text-font text-right order-md-last">Invitaciones para toda ocasión</span>
	</nav>

	<div id="content" class="site-content">
