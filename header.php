<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package BRB
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Include JQuery and JQuery-UI -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<!-- Enable LiveReload functionality - remove when finalised -->

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></'
+ 'script>')</script>

<!-- <script src="/wp-content/themes/brb/js/brb-ui.js" type="text/javascript"></script> --> <!-- Placeholder for custom JQuery-UI -->

<!-- Include Lato font -->

<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic,700italic' rel='stylesheet' type='text/css'>

<!-- Include FontAwesome icon font -->

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<img id="brb_logo" src="<?php echo get_template_directory_uri(); ?>/images/brblogo.png" alt="BigRedBarrel"/>
		<div id="menu_bar">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Menu', 'brb' ); ?></h1>
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'brb' ); ?></a>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>
			<div id="user_login">
					<p><i class="fa fa-user fa-fw"></i>Login Placeholder</p>
			</div><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
