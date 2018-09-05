
<section class="module module__hero">

	<div class="container">

		<?php if( get_sub_field('heading') ) : ?>
			<div class="module__header module__hero-header">

	 	  	  	<?php if( get_sub_field('subheading') )  { ?>
	 	  	  			<h2 class="subtitle"><?php echo get_sub_field('subheading') ?></h2> 
	 	  	  	<?php } ?>	
	 	  	  	<h1 class="title"><?php echo get_sub_field('heading') ?></h1>


	 	  	</div><!-- ./hero__header -->
	 	  <?php endif; ?> 

		 <div class="row">
		 	<div class=" <?php echo ( get_sub_field('form') ) ? 'col-sm-8': 'col-sm-12';?>">

		 	    <div class="module__hero-video">
		 	    	<?php if( get_sub_field('video') )  { ?>
		 	 			<?php echo get_sub_field('video') ?>
		 	 		<?php } ?>
		 	 	</div><!-- ./video -->

		 	</div>

			<?php if( get_sub_field('form') ) : ?>
			 	<div class="col-sm-4">
			 	      
			 	 	 <div class="form">

			 	 	 	<?php if( get_sub_field('form_title') )  { ?>

			 	 	    	<h3 class="form__title"><?php echo get_sub_field('form_title') ?></h3>

			 	 	    <?php }
			 	 	     if( get_sub_field('form') )  { ?>

			 	 	 		<div class="form__fields">  
								<?php echo get_sub_field('form') ?>
							</div>	

			 	 	    <?php }
			 	 	     if( get_sub_field('form_note') )  { ?>

							<p class="form__note"><?php echo get_sub_field('form_note') ?></p>

						<?php 
						
							} ?>

			 	 	 </div><!-- ./form -->

			 	</div>
		 	<?php endif; ?>

		 </div>

	</div>

</section><!-- ./module__hero -->
