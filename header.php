<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/external_resources/flexslider/flexslider.css" type="text/css">
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

		<script src='<?php echo get_template_directory_uri();?>/js/external_resources/vue.js'></script>
		<script src='<?php echo get_template_directory_uri();?>/js/external_resources/jquery-3.2.1.min.js'></script>
		<script src='<?php echo get_template_directory_uri();?>/js/external_resources/jquery.flexslider.js'></script>
		<script src='<?php echo get_template_directory_uri();?>/js/external_resources/jquery.onepage-scroll.js'></script>
		<script src="<?php echo get_template_directory_uri();?>/js/external_resources/jquery.bgswitcher.js"></script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
		</header>