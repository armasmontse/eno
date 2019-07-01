<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	
	<title><?php wp_title(); ?></title>

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="<?php echo THEMEURL;?>humans.txt">

	<?php include_once('inc/favicon.php'); ?>

	<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.css">

	<?php wp_head(); ?>
</head>
<body>

	<?php
	$home_page = new Cltvo_Page_Home() ;
	$GLOBALS['home_page'] = $home_page;

	// cltvo_print_r($home_page->social_net);
	/**
	 *CLTVO: poner esto en true sólo en la versiones locales.
	 */

	if( !defined('CLTVO_ISLOCAL') || ( CLTVO_ISLOCAL != true) ){ include_once('inc/analytics.php'); }

	?>

	<!--[if gt IE 8]><div style="z-index: 1000; padding: 5px 0; text-align: center; position: absolute; top: 0; left: 0; width: 100%; background-color: #312822;"><p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: white;">Consider <a style="color: #EA7640;
	text-decoration: underline;" href="http://www.google.com/intl/es/chrome/browser/" target="_blank">updating your browser</a> in order to render this site correctly.</p></div><!-->
<!--<![endif]-->

	<!-- Aquí abre el main-wrap -->
	<div class="main-wrap seasson-<?= CURRENT_STATION_COLOR["slug"] ?> " >
		<!-- N a v -->
		<?php include 'inc/templates/_nav.php';?>
