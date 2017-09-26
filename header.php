<!DOCTYPE html>

<html lang="pt-br">
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
  	<header id="top" class="header-home">
  		<div class="top-header">
  			<div class="container">
  				<?php $header_address = get_field('address', 'option');
  				if($header_address): ?>
  				<p class="address pull-left"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $header_address; ?></p>
  				<?php endif; ?>

  				<ul class="social-links pull-right">
  					<?php $facebook = get_field('facebook', 'option');
  					if($facebook): ?>
  					<li><a href="<?php echo $facebook; ?>" target="_blank" class="my-tooltip" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
  					<?php endif; ?>
					
					<?php $twitter = get_field('twitter', 'option');
  					if($twitter): ?>
					<li><a href="<?php echo $twitter; ?>" target="_blank" class="my-tooltip" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<?php endif; ?>

					<?php $youtube = get_field('youtube', 'option');
  					if($youtube): ?>
					<li><a href="<?php echo $youtube; ?>" target="_blank" class="my-tooltip" data-toggle="tooltip" data-placement="bottom" title="YouTube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
					<?php endif; ?>
					
					<?php $google_plus = get_field('google-plus', 'option');
  					if($google_plus): ?>
					<li><a href="<?php echo $google_plus; ?>" target="_blank" class="my-tooltip" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<?php endif; ?>
					
					<?php $instagram = get_field('instagram', 'option');
  					if($instagram): ?>
					<li><a href="<?php echo $instagram; ?>" target="_blank" class="my-tooltip" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<?php endif; ?>
					
					<?php $linkedin = get_field('linkedin', 'option');
  					if($linkedin): ?>
					<li><a href="<?php echo $linkedin; ?>" target="_blank" class="my-tooltip" data-toggle="tooltip" data-placement="bottom" title="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<?php endif; ?>
  				</ul>
  				<!-- /.social-links -->
  			</div>
  			<!-- /.container -->
  		</div>
  		<!-- /.top-header -->

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
			    	<?php $logo = get_field('logo-home', 'option'); ?>
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