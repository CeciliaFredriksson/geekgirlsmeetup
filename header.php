<!doctype html>
<html>
    <head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php echo get_bloginfo('name') . ' - ' . get_bloginfo('description') ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="shortcut icon" />
		<meta name="keywords" content=""/>
		<meta name="description" content="" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/app.css" />
		<script src="https://use.typekit.net/anx6rae.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<?php wp_head(); ?>
		<!--[if lt IE 9]>
		<script src="dist/html5shiv.js"></script>
		<![endif]-->
    </head>
    <body <?php body_class(); ?>>
		<div class="wrapper">
			<header class="header"></header>
			<nav class="mobile-menu show-for-small-only mobile-unfolded ">
					<span class="mobile-hamburger-menu"><i class="fa fa-bars">&nbsp</i></span>
<?php
					wp_nav_menu( array(
						'menu' => 'Main menu'
					) );
?>
				</nav>
				<nav class="main-menu unfolded show-for-medium-up">
					<span class="hamburger-menu"><i class="fa fa-bars">&nbsp</i></span>
<?php 
					wp_nav_menu( array(
						'menu' => 'Main menu'
					) );
?>
				</nav>
				<nav class="secondary-menu show-for-medium-up">
<?php 
					wp_nav_menu( array(
						'menu' => 'Secondary menu'
					) );
?>
				</nav>
			