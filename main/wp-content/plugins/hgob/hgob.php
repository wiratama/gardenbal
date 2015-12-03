<?php
/*
  Plugin Name: Hangging Garden of Bali PLugin
  Plugin URI: http://alamaya.com
  Version: 1.0
  Description: This plugin is required for Hangging Garden of Bali template
  Author: The Alamaya Team
  Author URI: http://alamaya.com
  Domain Path: /languages
  License: MIT
 */

require_once 'inc/CPT.php';
$villa = new CPT('villa', array(
    'supports' => array('title', 'editor', 'thumbnail', 'comments', 'excerpt'),
    'rewrite' => array( 'slug' => 'ubudvillas'),
));

$villa->columns(array(
    'cb' => '<input type="checkbox" />',
    'title' => __('Title'),
    'date' => __('Date')
));

$villa->menu_icon("dashicons-pressthis");

$news = new CPT('news', array(
    'supports' => array('title', 'editor', 'thumbnail', 'comments', 'excerpt')
));

$news->columns(array(
    'cb' => '<input type="checkbox" />',
    'title' => __('Title'),
    'date' => __('Date')
));

$news->menu_icon("dashicons-pressthis");

?>