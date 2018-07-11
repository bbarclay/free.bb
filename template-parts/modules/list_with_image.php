<section class="module module__list">

	<div class="container">

		 <div class="row">

		 	  <div class="col-sm-9 col-md-8">

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
		 	  <div class="col-sm-3 col-md-4">
		 	  	<div class="book-image">
		 	  	    <?php 

		 	  	    	$image = get_sub_field('image');
		 	  	    	$is_tag = get_sub_field('price_tag');

		 	  	  	echo wp_get_attachment_image($image['id'], 'full','', array("class" => "module__list-image") ) ;

		 	  	  	if( $is_tag ) : ?>
		 	  	  	<div class="tag">
		 	  	  		<span class="top-text">Normally</span>
		 	  	  		<span class="money"><i class="sign">&#36;</i> 32.95</span>
		 	  	  		<span class="bottom-text">Yours <br> Free</span>
		 	  	  	</div>
		 	  	  	<?php 
		 	  	  	endif;

		 	  	  	?>
		 	  	</div>
		 	  </div>

		 </div>

	</div>

</section>