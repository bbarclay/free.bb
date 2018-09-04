<section class="module module__list">
	<div class="container">
		<?php if( get_sub_field('description') ) : ?>
	     <div class="inner-text-top">
	     	<?php echo get_sub_field('description') ?>
	     </div>
	 	<?php endif; ?>

		 <div class="row">
		 	<div class="col-sm-8 col-md-8">
		 	  	<div class="listing">	
		 	  		<?php  if( get_sub_field('heading') ) : ?>
		 	  	  	  <h2 class="listing__title"><?php echo get_sub_field('heading') ?></h2>
					<?php endif; ?>
					<?php if( have_rows('list') ) : ?>
			 	  	  	<ul class="list">
			 	  	  	<?php while( have_rows('list') ) : the_row(); ?>
			 	  	  		<li class="list__item"><span><?php echo get_sub_field('item') ?></span></li>
			 	  	  	<?php endwhile; ?>
			 	  	  </ul>
			 	  	<?php endif; ?>  
		 	  	</div>
		 	</div>
		 	<div class="col-sm-4 col-md-4">
		 	  	<div class="book-image">
		 	  	    <?php 
		 	  	    	 $image = get_sub_field('image');
		 	  	    	 $is_tag = get_sub_field('price_tag');
		 	  	  	echo wp_get_attachment_image($image['id'], 'full','', array("class" => "module__list-image") ) ;
		 	  	     ?>
		 	  	</div>
		 	  </div>
		</div>
		<?php if( get_sub_field('bottom_text') ) : ?>
	     <div class="inner-text-bottom">
	     	<?php echo get_sub_field('bottom_text') ?>
	     </div>
	 	<?php endif; ?>
	</div>
</section>