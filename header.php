<!doctype html>
<html  <?php language_attributes(); ?>>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php bloginfo('title');?> <?php wp_title(); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

  <link href='https://fonts.googleapis.com/css?family=Tenor+Sans|Amatic+SC' rel='stylesheet' type='text/css'>
  <link href='http://cdn.jsdelivr.net/bxslider/4.1.1/jquery.bxslider.css' rel='stylesheet' type='text/css'>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script src="http://cdn.jsdelivr.net/bxslider/4.1.1/jquery.bxslider.min.js"></script>

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
        <input type="checkbox" id="button">
        <label for="button" onclick></label>

        <?php wp_nav_menu(array('menu' => 'header-menu')); ?>
      <!--  <ul>
          <li id="contacthide"><a href="#">Contact Me</a></li>
          <li id="socialhide">
            <img src="pics/fb.svg">
            <img src="pics/be.svg">
            <img src="pics/pin.svg">
          </li>
        </ul>
        
        <ul>
            <li><a href="#">My Design</a></li>
            <li><a href="#">My Store</a></li>
            <li><a href="#">My Blog</a></li>
            <li><a href="#">My Story</a></li>
            <li id="hireme"><a href="#">Hire me</a></li>
            <li id="contacthide"><a href="#">Contact Me</a></li>
        		<li id="socialhide">
          		<img src="pics/fb.svg">
          		<img src="pics/be.svg">
          		<img src="pics/pin.svg">

        		</li>
        </ul>-->
    </nav>

    <div id="flower">
      <img src="<?php bloginfo('template_url');?>/pics/Flowers header right.svg">
    </div>
  </div>

  <?php get_template_part('floaters'); ?>