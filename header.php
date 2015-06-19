<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!-- Basic Page Needs
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title('&laquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>
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

<!-- WordPress
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- Header
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<header id="header" role="banner">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<a id="brand" href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="<?php bloginfo('name'); ?>" />
				</a>
			</div>
			
			<div class="col-10">
				<nav id="navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false ) ); ?>
				</nav>
			</div>
		</div>
	</div>
</header>

<!-- Content
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<section id="main" role="main">