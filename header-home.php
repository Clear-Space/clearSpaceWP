<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package styl_s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'styl_s' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="logoAndNav headroom .animated.slideDown">
				<div class="site-branding">
<?php 
	$logo_style = get_field( 'logo_style' );
	$black_logo = '<h1 class="site-title" id="black_logo"><a';
	$white_logo = '<h1 class="site-title" id="white_logo"><a';
if ( $logo_style ) {
    echo $black_logo;
} else {
    echo $white_logo;
} ?>
					 href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->
<!-- ^^ this will allow us to change the logo colour based on the checkbox. -->
				<a href="javascript:void(0)" class="icon">
				    <div class="hamburger">
				    <div class="menui top-menu"></div>
				    <div class="menui mid-menu"></div>
				    <div class="menui bottom-menu"></div>
				    </div>
				  </a>
				
<?php 
	$menu_style = get_field( 'menu_style' );
	$black_menu = '<nav id="black_menu" class="mobilenav" role="navigation">';
	$white_menu = '<nav id="white_menu" class="mobilenav" role="navigation">';
if ( $menu_style ) {
    echo $black_menu;
} else {
    echo $white_menu;
} ?>
				

				
				    <?php wp_nav_menu( array( "theme_location" => "primary", 'container' => '' ) ); ?>


				   
				</nav><!-- #access --> 

			</div> <!-- end .logoAndNav	 -->
		</nav><!-- #access --> 
	</header><!-- #masthead -->

	<div id="content" class="site-content">
