<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <!-- CSS RESET KIT -->
    <link href="<?php bloginfo('template_directory');?>/assets/css/reset/normalize.css" rel="stylesheet"> 

    <!-- Core CSS -->
    <link href="<?php bloginfo('template_directory');?>/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <title><?php bloginfo('name'); ?> <?php wp_title('‐'); ?></title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <?php wp_head();?>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
	<section class="header">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
			  	<img src="<?php bloginfo('template_directory');?>/assets/images/TUSH-logo.png" alt="Tushworks Blog">
			  </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <!-- <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="posts.html">Fashion</a></li>
                <li><a href="single-post.html">Beauty</a></li>
                <li class="dropdown">
                  <a href="posts.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Trends <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul> -->
              <?php wp_nav_menu( array( 'menu_class' => 'nav navbar-nav', 'theme_location' => 'primary', 'container' => '') ); ?>
            </div>
        </nav>
	</section>