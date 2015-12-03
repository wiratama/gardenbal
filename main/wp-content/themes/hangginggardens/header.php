<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hangginggardens
 */
global $data;
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> 
<html <?php language_attributes(); ?>>
<head>
<meta name="google-site-verification" content="V5rtlQqT22dCtp8anJ_S6LJADHkxo8E2sNaY21FsNoc" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="publisher" href="https://plus.google.com/111782210136374808649/about">
<link rel="author" href="https://plus.google.com/106583426987733146558/about">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/blog.css">
<link rel="shortcut icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/supersized.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/menu.css" media="screen" rel="stylesheet" type="text/css" >
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/default.randheli.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.transform-media-queries.js"></script>
<script>
    var app = null;
      $(function(){
          app = new App({
              header_open : true
          });
      });
  </script>


<?php wp_head(); ?>
</head>
<BODY>
<!--
Start of DoubleClick Floodlight Tag: Please do not remove
Activity name of this tag: Hanging Gardens Ubud Website
URL of the webpage where the tag is expected to be placed: http://hanginggardensofbali.com/
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 11/25/2015
-->
<script type="text/javascript">
var axel = Math.random() + "";
var a = axel * 10000000000000;
document.write('<iframe src="https://4600023.fls.doubleclick.net/activityi;src=4600023;type=websi268;cat=hangi123;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
</script>
<noscript>
<iframe src="https://4600023.fls.doubleclick.net/activityi;src=4600023;type=websi268;cat=hangi123;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
</noscript>
<!-- End of DoubleClick Floodlight Tag: Please do not remove -->

<?php include_once("analyticstracking.php") ?>
<div id="top-page" class="frontpage">
  <?php get_template_part( 'template-parts/top-button'); ?>
<header>
    <?php get_template_part( 'template-parts/nav'); ?>
</header>