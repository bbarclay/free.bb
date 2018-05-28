<section class="module module__list">

	<div class="container">

		 <div class="row">

		 	  <div class="col-md-8">

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
		 	  <div class="col-md-4">

		 	  	  <?php $image = get_sub_field('image');

		 	  	  	echo wp_get_attachment_image($image['id'], 'book-image','', array("class" => "module__list-image") ) ?>

		 	  </div>

		 </div>

	</div>

</section>