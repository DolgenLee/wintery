<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wintery_pro
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.bootcss.com/flexslider/2.7.2/flexslider.min.css" rel="stylesheet">
	<link href="https://cdn.bootcss.com/lightgallery/1.6.12/css/lightgallery.min.css" rel="stylesheet">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

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
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			endif;
			$wintery_pro_description = get_bloginfo( 'description', 'display' );
			if ( $wintery_pro_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $wintery_pro_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
			<div class="clearfix"></div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<div id="menu-btn" ><span class="icon-looped-square-interest"></span></div>
			<button id="menu-close" type="button"><span class="icon-cancel-circled-outline"></span></button>
			<div class="cd-bouncy-nav-modal">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
