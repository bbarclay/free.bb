<section class="module module__form footer-form">

	<div class="container">

		<?php if( get_sub_field('heading') ) : ?>

	     	 <h2 class="heading"><?php echo  get_sub_field('heading'); ?></h2>

	 	<?php endif; ?>

	 	<?php if( get_sub_field('form') ) : ?>

		     <div class="module__form--horizontal">

		     	<?php echo  get_sub_field('form'); ?>

		     </div>

	    <?php endif; ?> 

	</div>

</section>