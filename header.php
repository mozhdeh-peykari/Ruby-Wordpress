<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>RubyX</title>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/print.css" type="text/css" media="print" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/aural.css" type="text/css" media="aural" />
</head>
<body id="www-url-cz">
<div id="main" class="box">
  <div id="header">
    <h1 id="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><strong><?php echo get_bloginfo( 'name' ); ?></strong><span></span></a></h1>



    <hr class="noscreen" />
    <div class="noscreen noprint">
      <p><em>Quick links: <a href="#content">content</a>, <a href="#tabs">navigation</a>, <a href="#search">search</a>.</em></p>

      <hr />
    </div>
    

    <div id="search" class="noprint">
      <form action="<?php echo esc_url( home_url( '/' ) ); ?>"" method="get">
        <fieldset>
        <legend>Search</legend>
        <label><span class="noscreen">Find:<?php _x( 'Search for:', 'label' ); ?></span> <span id="search-input-out">
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="search-input" size="30" />
        </span></label>
        <input type="image" src="<?php echo get_stylesheet_directory_uri(); ?>/design/search_submit.gif" id="search-submit" value="OK" />
        </fieldset>
      </form>

    </div>




  </div>
  <div id="tabs" class="noprint">
    <h3 class="noscreen">Navigation</h3>
    <ul class="box">
<li><?php wp_nav_menu( ); ?> </span><span class="tab-r"></span></li> 
    <hr class="noscreen" />
  </div>
  <div id="page" class="box">
    <div id="page-in" class="box">
      <div id="strip" class="box noprint">
        <p id="rss"><strong>RSS:</strong> <a href="<?php bloginfo('rss2_url'); ?>">articles</a> / <a href="<?php bloginfo('comments_rss2_url'); ?>">comments</a></p>

        <hr class="noscreen" />
        <p id="breadcrumbs"><?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?></p>
        <hr class="noscreen" />



      </div>
