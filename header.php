<!doctype html>
<html  <?php language_attributes(); ?>>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php bloginfo('title');?> <?php wp_title(); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>?v=10">

  <link href='https://fonts.googleapis.com/css?family=Tenor+Sans|Amatic+SC' rel='stylesheet' type='text/css'>

  <?php wp_enqueue_script('jquery'); ?>
  <?php wp_enqueue_script('bxslider', 'http://cdn.jsdelivr.net/bxslider/4.1.1/jquery.bxslider.min.js', array('jquery')); ?>

  <?php wp_head(); ?>
</head>

<body>

<div class="content">
  <div class="header">
    <div id="logo">
	<a href="<?php bloginfo('url');?>">
	      <img src="<?php bloginfo('template_url');?>/pics/logo-01.png"/>
	</a>
    </div>

    <nav role="custom-dropdown">
        <input type="checkbox" id="custom_dropdown_button"/>
        <label for="custom_dropdown_button"></label>

        <?php wp_nav_menu(array('menu' => 'header-menu')); ?>
    </nav>

    <div id="flower">
      <img src="<?php bloginfo('template_url');?>/pics/Flowers header right.svg">
    </div>
  </div>

  <?php get_template_part('floaters'); ?>
