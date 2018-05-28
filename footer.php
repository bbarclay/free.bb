<?php
/**
 * The template for displaying the footer.
 */
?>

<?php wp_footer(); ?>
<footer class="site-footer">
	<div class="container">
		<div class="fat-footer">
			
				<div class="row">
					<div class="col-md-5">
						<div class="pad-right">
							<div class="footer-logo">
								<a href="<?php echo get_bloginfo('url') ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/bb-white-logo.png" /></a>
							</div>	
							<?php if( get_theme_mod('themezero_footer_desc') ) : ?>
							<div class="description">
								<?php echo  get_theme_mod('themezero_footer_desc'); ?>
							</div>
							<?php endif; ?> 
						</div>
					</div>
					<div class="col-md-3">
						<nav class="site-navigation">
		 					<?php 
		 						if( has_nav_menu('footer-menu') ) {

		 							wp_nav_menu(
		 								array(
		 									'theme_location' => 'footer-menu'
		 								) );
			 					
		 						}  
		 					?>
		 				</nav>
					</div>
					<div class="col-md-4">
						<?php 
							if( has_nav_menu('menu') ) : 

								wp_nav_menu( array( 

									'theme_location' => 'menu',
									'link_before' => '<span class="fab"></span><span class="screen-reader-text">',
									'link_after' => '</span>',
									'menu_class' => 'menu--social'


								) );

							endif;	
						?>
						<div class="feed-header"> Latest Post on Facebook </div>
						<?php echo do_shortcode('[custom-facebook-feed textlength=70]') ?>
					</div>
				</div>
			
			
			<div class="tagline"></div>
			<div class="copyright"> 
			  <span>Copyright © 2018 Business Blueprint. All Rights Reserved.</span>
			  <?php 
					if( has_nav_menu('fine') ) : 

						wp_nav_menu( array( 

							'theme_location' => 'fine',
							'menu_class' => 'menu--fine',
							'container' => false,


						) );

					endif;	
				?>
			</div>

		</div>

	</div>	
</footer>
</body>
</html>
