<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mm
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>
<script src="//use.typekit.net/dit4ghf.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
<body <?php body_class(); ?>>
<div id="page">
	<header id="masthead" class="site-header container" role="banner">
		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" alt="<?php bloginfo( 'name' ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slubny-wianek-logo.png"></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
			<!-- <p class="site-description"><?php bloginfo( 'description' ); ?></p> -->
			<input type="checkbox" id="op"></input>
			<span class="lower">
			  <label for="op"><i class="fa fa-bars fa-lg"></i></label>
			</span>
				<div class="overlay overlay-hugeinc">
					<label for="op"></label>
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<div class="container">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							</div> <!-- #container -->
						</nav><!-- #site-navigation -->
				</div>	<!-- #overlay #overlay-hugeinc -->
		</div><!-- #site-branding -->
		
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
