<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js?ver=3.7.0" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="hfeed site">

<header>
	<div class="main-navbarbox">
		<div class="container">
			<div class="row">
				<div class="col-6 col-sm-4 col-md-5 col-lg-2 center-logo">
					<div class="logo-boxin">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header_logo"><img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
					</div>
				</div>
				<div class="col-sm-8 desktop-menubox">
					<div class="desktop-menuboxin">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'menu_class'     => 'nav-menu',
								)
							);
							?>
					</div>
				</div>
				<div class="col-sm-5 col-md-4 col-lg-2 desktop-btn">
					<a class="cta-button draw" href="<?php the_field('cta_button_url','option');?>"><?php the_field('cta_button_text','option');?></a>
				</div>
				<div class="col-6 col-sm-3 mobile-menubtn">
					<div class="btnmmenu" id="toggle-sidebar">
						<img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/toggle.png" /> 
					</div>
				</div>
			</div>
		</div>
	</div>	
</header>



	<div id="main" class="wrapper">
