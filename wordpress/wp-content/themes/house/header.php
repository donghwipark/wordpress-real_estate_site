<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eastlead_Global_House
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="<?php echo get_template_directory_uri().'/js/html5shiv.min.js'; ?>" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri().'/js/respond.min.js'; ?>" type="text/javascript"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site container">

	<div id="content" class="site-content row">
