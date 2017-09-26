<!DOCTYPE html>

<html>
  <head>
	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->
	
	<!--[if lt IE 9]>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:400,400i,700,700i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
	<![endif]-->

	<!-- Le styles -->
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all">

	<!--[if lt IE 8]>
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-ie7fix.min.css" rel="stylesheet" type="text/css" media="screen">
	<![endif]-->

	<!--[if lt IE 9]>
	  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
	  <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/ico/favicon.ico';?>">
  	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri() . '/ico/apple-touch-icon-144-precomposed.png';?>">
  	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri() . '/ico/apple-touch-icon-114-precomposed.png';?>">
  	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri() . '/ico/apple-touch-icon-72-precomposed.png';?>">
  	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() . '/ico/apple-touch-icon-57-precomposed.png';?>">
	
	<?php wp_head(); ?>
  </head>

  <body>
	
	<!--= HEADER =-->
  	<header id="top" class="header-internal">
  		<nav class="navbar navbar-default">
			<div class="container">
			  <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
			    <a class="navbar-brand" href="<?php echo home_url(); ?>">
				    <?php $logo = get_field('logo', 'option'); ?>
				    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" width="<?php echo $logo['width']; ?>" height="<?php echo $logo['height']; ?>">
			    </a>
			  </div>

			  <!-- Collect the nav links, forms, and other content for toggling -->
			  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <?php
                  wp_nav_menu(
                      array(
                        'theme_location' => 'menu-principal',
                        'container' => 'ul',
                        'menu_class' => 'nav navbar-nav'
                      )
                  );
                ?>
			    <!-- /.navbar-nav -->
			  </div>
			  <!-- /.navbar-collapse -->
		  </div>
			<!-- /.container -->
		</nav>
  	</header>