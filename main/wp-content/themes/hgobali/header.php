<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hgobali
 */
global $data;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/yamm.css" type="text/css" media="screen" /> -->

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/supersized.css" type="text/css" media="screen" />

<!-- <link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" media="screen" rel="stylesheet" type="text/css" > -->
<link href="<?php echo get_template_directory_uri(); ?>/css/menu.css" media="screen" rel="stylesheet" type="text/css" >
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.transform-media-queries.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
