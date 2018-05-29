<section class="module module__testimonial">

	<div class="container">

		<?php 

		 $args = array(

		 			'post_type' => 'bb_testimonial',
		 			'post_status' => 'publish',
		 			'posts_per_page' => 5

		 	);

		 $query = new WP_Query( $args );


		 if( $query->have_posts() ) : ?>

		 	<div class="owl-carousel owl-theme">

		 <?php	while( $query->have_posts() ) : $query->the_post(); ?>


			 		<div class="item">
				  	    <div class="image">
				  	       <?php if( has_post_thumbnail() ) : ?>
				  	    	<?php the_post_thumbnail() ?>
				  	       <?php endif; ?>
				  	    </div>
				  	    <div class="quote">
				  	  		 <?php the_content(); ?>
				  	  		<div class="meta"><?php echo get_the_title() ?> – <span><strong><?php echo get_field('company') ?></strong></span></div>
			  	  		</div>
			  	    </div>
		      
		<?php
				endwhile; ?>

			</div>

		<?php
				
		 endif; wp_reset_postdata() ?>

	</div>

</section>
