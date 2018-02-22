<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Beauty
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Tanika Green Artistry | Celebrity Make-Up Artist" />
	<meta property="og:description" content="Manifesting beauty at its best, Tanika Green provides professional makeup services in New Jersey, New York, Pennsylvania, and Connecticut." />
	<meta property="og:url" content="http://tanikagreen.com/" />
	<meta property="og:site_name" content="Tanika Green Artistry" />
	<meta property="og:image" content="http://tanikagreen.com/wp-content/uploads/2018/01/Tanika-Green-Make-Up-Artist-LOGO-MEDIUM.png" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'beauty' ); ?></a>

	<header id="masthead" class="site-header" style="background-color: #fff;">
		<div class="site-branding">
			<!--
			<?php
			the_custom_logo();
			?>-->
			<div class="tga-logo" style="text-align: center; margin: 20px;">
			   <img src="http://tanikagreen.com/wp-content/uploads/2017/09/adjusted-logo2.png">
				 <!--<h3 class="motto">Manifesting Beauty At Its Best</h3>-->
		  </div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'beauty' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
