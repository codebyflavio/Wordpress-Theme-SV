<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Savoie_Volailles_Home
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/main-assets/favicon.ico">

	<!-- Web Fonts -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=cyrillic,latin">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:100,300,500,700&amp;subset=latin,cyrillic">

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/main-assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/main-assets/css/app.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/main-assets/css/blocks.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/main-assets/css/one.style.css">

	<!-- CSS Footer -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/footers/footer-v7.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/main-assets/plugins/animate.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/main-assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/main-assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/plugins/pace-flash.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/main-assets/plugins/owl-carousel2/assets/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/main-assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/main-assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/architecture.style.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/custom.css">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbot-gallery">
<div id="page" class="site">

	<!--=== Header ===-->
	<nav class="one-page-header one-page-header-style-2 navbar navbar-default navbar-fixed-top architecture-nav one-page-nav-scrolling one-page-nav__fixed" role="navigation">
		<div class="container">
			<div class="page-scroll">
				<a class="logo-link navbar-brand logo-left" href="#intro">
					<img class="default-logo" src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo-light.png" alt="Logo">
					<img class="shrink-logo" src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo-dark.png" alt="Logo">
				</a>
			</div>

			<div class="menu-container page-scroll">
				<button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="container no-padding-left ">
				<div class="row collapse navbar-collapse navbar-ex1-collapse">
					<div class="col-md-5 no-side-padding">
						<div class="left">
							<div class="menu-container">
								<ul class="nav navbar-nav">
									<li class="page-scroll home">
										<a href="#body">Accueil</a>
									</li>
									<li class="page-scroll">
										<a href="#<?php the_field( 'products_navigation' , 142); ?>"><?php the_field( 'products_navigation' , 142); ?></a>
									</li>
									<li class="page-scroll">
										<a href="#<?php the_field( 'features_navigation' , 142); ?>"><?php the_field( 'features_navigation' , 142); ?></a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-2 no-side-padding">
						<div class="center-block logo page-scroll">
							<a class="logo-link navbar-brand logo-centered" href="#intro">
								<img class="default-logo" src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo-light.png" alt="Logo">
								<img class="shrink-logo" src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo-dark.png" alt="Logo">
							</a>
						</div>
					</div>

					<div class="col-md-5 no-side-padding">
						<div class="right">
							<div class="menu-container">
								<ul class="nav navbar-nav">
									<li class="page-scroll">
										<a href="#<?php the_field( 'brands_navigation' , 142); ?>"><?php the_field( 'brands_navigation' , 142); ?></a>
									</li>
									<li class="page-scroll">
										<a href="#<?php the_field( 'stores_navigation', 142 ); ?>"><?php the_field( 'stores_navigation', 142 ); ?></a>
									</li>
									<li class="page-scroll">
										<a href="#<?php the_field( 'jobs_navigation' , 142); ?>"><?php the_field( 'jobs_navigation' , 142); ?></a>
									</li>
									<li class="page-scroll">
										<a href="#contact">Contact</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</nav>
	<!--=== End Header ===-->