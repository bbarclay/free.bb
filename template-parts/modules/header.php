<section class="module__top">

	<div class="container">

		<?php if( get_sub_field('heading') ) : ?>

			<div class="module__header module__hero-header">

	 	  	  	<h1 class="title"><?php echo get_sub_field('heading') ?></h1>

	 	  	  	<?php if( get_sub_field('subheading') )  { ?>
	 	  	  			<h2 class="subtitle"><?php echo get_sub_field('subheading') ?></h2> 
	 	  	  	<?php } ?>	

	 	  	</div><!-- ./hero__header -->

	 	  <?php endif; ?> 

	</div>
	
</section>