<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
	<title><?php bloginfo('name'); ?> <?php wp_title('‐'); ?></title>
	<?php wp_head(); ?>
</head>
<body>

		<header class="head">
				<a href="" class="logo"><img src="<?php bloginfo('template_directory');?>/img/logo.png" alt="Logo Here"></a>
				
				<?php
			
				wp_nav_menu( array( 'menu_class' => ' ', 'menu_id' => ' ', 'theme_location' => '', 'container'=> 'nav', 'container_class' => 'top-nav') ); ?>

	<?php if(!empty($_GET)): ?>
<?php if (have_posts()): ?>
	<div class="collage">
		<h1 class="header-title">
		<?php if($search){ ?>
			<?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?>
		<?php }else{?>
			<?php the_title(); ?>
		<?php } ?>	
		</h1>
	</div>
<?php endif; ?>
<?php endif; ?>
</header>