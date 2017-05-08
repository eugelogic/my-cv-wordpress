<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_CV
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mycv' ); ?></a>

<header class="site-header" role="banner">

	<!-- TOP BAR
	================================================== -->
	<div class="top-bar container-fluid"></div><!-- top bar -->

	<!-- INTRO
	================================================== -->
	<div class="intro">
		<div class="container text-center">
			<img class="profile-image" src="assets/Eugene Molari.jpeg" alt="Image of Eugene Molari">

			<h1 class="name">Eugene Molari</h1>

			<div class="title">WordPress Developer - London</div>

			<!-- SOCIAL ICONS -->
			<ul class="social list-inline">
				<li>
					<a href="#" target="_blank">
						<i class="fa fa-github-alt" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a href="#" target="_blank">
						<i class="fa fa-linkedin" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a href="#" target="_blank">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>
				</li>
			</ul>

		</div><!-- container -->
	</div><!-- intro -->

	<!-- CONTACT INFO
	================================================== -->
	<div class="contact-info">
		<div class="container text-center">
			<ul class="list-inline">
				<li class="email">
					<i class="fa fa-envelope"><a href="mailto:email@mail.com"> email@mail.com</a></i>
				</li>
				<li>
					<i class="fa fa-phone"><a href="tel:01234567890"> 0123 456 78 90</a></i>
				</li>
				<li class="website">
					<i class="fa fa-globe"><a href="http://webjigsaw.com/" target="_blank"> webjigsaw.com</a></i>
				</li>
			</ul>
		</div><!-- container -->
	</div><!-- contact-info -->

	<!-- PROFILE
	================================================== -->
	<div class="profile">
		<div class="container text-center">
			<p>A proven and experienced WordPress project manager, I am now seeking a challenging opportunity as a junior developer position where the technical skills acquired in the past few years and consolidated in the last few months would be utilised. As an experienced manager, my problem solving, well established organisation and time- keeping skills combined with a desired to learn and a high motivation could help your company achieve its goals.</p>
		</div><!-- container -->
	</div><!-- profile -->

	<!-- MENU
	================================================== -->
	<div class="page-nav-space-holder hidden-xs">
		<div id="page-nav-wrapper" class="page-nav-wrapper text-center">
			<div class="container">
				<ul id="page-nav" class="nav page-nav list-inline">
					<a class="scrollto" href="#skills-section">Skills</a>
					<a class="scrollto" href="#events-section">Events</a>
					<a class="scrollto" href="#extras-section">Extras</a>
					<a class="scrollto" href="#experience-section">Experience</a>
					<a class="scrollto" href="#testimonials-section">Testimonials</a>
				</ul>
			</div><!-- container -->
		</div><!-- page nav wrapper -->
	</div><!-- page nav space-->

</header>

	<div id="content" class="site-content">
