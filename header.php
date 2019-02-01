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
 			<div class="col-xs-6 col-sm-4 col-md-3">
 				<div class="site-logo">
 					<a href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/wp-content/uploads/2019/02/logo_v2.svg"  width="240"/></a>
 				</div>
 			</div>
 			<div class="col-xs-6 col-sm-8 col-md-9">
 				<?php
 				$logo = get_field('logo');

 				if( $logo ) :?>	
 				<div class="logo-side float-right">
 					<img src="<?php echo $logo['url'] ?>" alt="company logo"  width="240"/>
 				</div>
 				<?php endif; ?>
 			</div>

	 	 </div>
	 </div>

</header>