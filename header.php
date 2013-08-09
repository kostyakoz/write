<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>
    
    <meta name="description" content="<?php echo site_description(); ?>">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <link rel="stylesheet" href="<?php echo theme_url('/css/i.css'); ?>">
    
    <link rel="shortcut icon" href="<?php echo theme_url('/css/favicon.ico'); ?>">
    
    <meta name="generator" content="Anchor CMS">

	<meta property="og:title" content="<?php echo site_name(); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo current_url(); ?>">
	<meta property="og:image" content="<?php echo theme_url('css/og_image.gif'); ?>">
	<meta property="og:site_name" content="<?php echo site_name(); ?>">
	<meta property="og:description" content="<?php echo site_description(); ?>">

    <?php if(customised()): ?>
        <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    	<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
	<?php endif; ?>
    
  </head>
  
  <body>
  
    <header class="top">
    
      <h1 class="h1 site-title no-margin site-logo mega center lh-1 padding-top"><?php echo site_name(); ?></h1>
      
      <h2 class="sans-serif caps title-spacing tagline center"><?php echo site_description(); ?></h2>
      
    </header>