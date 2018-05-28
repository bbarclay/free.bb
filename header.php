<?php
/**
 * The header for our theme.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="masthead" class="site-header">

	 <div class="container">
 		
 		<div class="row">
 			<div class="col-xs-8 col-sm-3 col-md-3">
 				<div class="site-logo">
 					<a href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/bb-logo.svg"  width="240"/></a>
 				</div>
 			</div>

 			<?php if( is_front_page() || is_page('test-frontpage') ) : ?>
	 			<div class="col-xs-4 col-sm-9 col-sm-9">

	 				<nav class="site-navigation desktop-menu">
	 					<?php 
	 						if( has_nav_menu('primary') ) {

	 							wp_nav_menu(array(
			 									'theme_location' => 'primary'
			 					));
	 						}  
	 					?>
	 				</nav>

	 				<div class="navbar-header"> 
	 				   <button type="button" id="burger-menu" class="navbar-toggle"> 
	 				    		<span class="sr-only">Toggle navigation</span> 
	 				    		<span class="icon-bar"></span> 
	 				    		<span class="icon-bar"></span> 
	 				    		<span class="icon-bar"></span> 
	 				    </button> 
	 				</div>
	 			</div>
 			<?php endif; ?>
	 	 </div>
		 <div class="menu-wrap">
 				<nav class="site-navigation mobile-menu">
 					<?php 
 						if( has_nav_menu('primary') ) {

 							wp_nav_menu(array(
		 									'theme_location' => 'primary',
		 									'container' => false,
		 									'menu_class' => 'top-menu'
		 							
		 					));
 						}  
 					?>
 				</nav>
 		 </div>

	 </div>

</header>