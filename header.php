<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<!-- Basic Page Needs
  	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
 	<meta name="description" content="">
  	<meta name="author" content="">

	<!-- Mobile Specific Metas
  	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Stylesheets
  	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

  	<!-- Favicon
  	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/img/apple-touch-icon.png">

	<!-- WordPress
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- Header
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<header id="header" role="banner">

</header>

<!-- Content
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<section id="main" role="main">