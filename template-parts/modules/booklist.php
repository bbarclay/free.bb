	<?php if( have_rows('bookshelves') ) : 

			while( have_rows('bookshelves') ) : the_row(); 
	?>

				    <section class="bookshelf">
				   	   <div class="container">

				   	   	    <div class="header">
				   	   	     	  <div class="row">
				   	   	     	  	<div class="col-sm-6 col-xs-8">
				   	   	     	  		<h2><?php echo get_sub_field('heading') ?></h2>
				   	   	     	  	</div>
				   	   	     	  	<div class="col-sm-6 col-xs-4">
				   	   	     	  		<div class="no-of-books"><span class="total"><?php echo get_sub_field('total_items') ?></span> <span>Books</span></div>
				   	   	     	  	</div>
				   	   	     	  </div>
				   	   	     	  <div class="description">
				   	   	     	  	<?php echo get_sub_field('description') ?>
				   	   	     	  </div>
				   	   	    </div> 
				   	   	    <div class="books">

					   	   	     <?php  while( have_rows('bookshelf') ) : the_row(); ?>

							   	   	     	 <div class="item">
							   	   	     	    <?php 
							   	   	     	    	$image = get_sub_field('image');

							   	   	     	    	    if( $image )  : ?>

								   	   	     	    		<div class="thumbnail">
								   	   	     	    			<?php echo wp_get_attachment_image($image['id'], 'full') ?>
								   	   	     	    		</div>

							   	   	     	    <?php   endif; 

							   	   	     	            if(get_sub_field('title')) : ?>

							   	   	     				  	<h3><?php echo get_sub_field('title') ?></h3>

							   	   	     		<?php   endif; 
							   	   	     				if(get_sub_field('author'))	: ?>

							   	   	     					<span><?php echo esc_html(get_sub_field('author')) ?></span>

							   	   	     		<?php   endif; 
							   	   	     				if(get_sub_field('link')) :?>

							   	   	     					<a href="<?php echo esc_url(get_sub_field('link')) ?>" class="btn btn-success" target="_blank">Download</a>

							   	   	     		<?php endif; ?>

							   	   	     	</div>

					   	   	     <?php  endwhile; 
					   	   	     		wp_reset_postdata();
					   	   	     ?>
				   	   	    </div>
				   	   	    
				   	   </div>
				    </section>
	<?php 
			endwhile;
	endif;	?>  