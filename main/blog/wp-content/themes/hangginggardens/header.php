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
<script>
  /*var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
    if(!oldieCheck) {
    document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.0.min.js"><\/script>');
    } else {
    document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.0.min.js"><\/script>');
    }*/
</script>
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-48099593-1', 'auto');
  ga('send', 'pageview');
</script>
<?php wp_head(); ?>
</head>
<BODY>
<div id="top-page" class="frontpage">
  <?php get_template_part( 'template-parts/top-button'); ?>
<header>
    <?php get_template_part( 'template-parts/nav'); ?>
</header>