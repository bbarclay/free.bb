
<section class="module module__hero">

	<div class="container">

		<?php if( get_sub_field('video_heading') ) : ?>
			<div class="module__header module__hero-header">

	 	  	  	<?php if( get_sub_field('video_subheading') )  { ?>
	 	  	  			<h2 class="subtitle"><?php echo get_sub_field('video_subheading') ?></h2> 
	 	  	  	<?php } ?>	
	 	  	  	<h1 class="title"><?php echo get_sub_field('video_heading') ?></h1>


	 	  	</div><!-- ./hero__header -->
	 	  <?php endif; ?> 

		 <div class="row">

		 	<div class="col-sm-12">

		 	    <div class="module__hero-video">
		 	    	<?php if( get_sub_field('top_video') )  { ?>
		 	 			<?php echo get_sub_field('top_video') ?>
		 	 		<?php } ?>
		 	 	</div><!-- ./video -->

		 	</div>

		 </div>

	</div>

</section><!-- ./module__hero -->
