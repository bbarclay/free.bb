<?php $image = get_sub_field('image') ?>

<div class="banner" style="background: url(<?php echo $image ?>) center center / cover no-repeat;">
	<div class="container">
	    <div class="row">
		    <div class="col-sm-8">

		    	<h1><?php echo get_sub_field('heading') ?></h1>

		    	<div class="description">
		    	
		    		<?php echo get_sub_field('subheading') ?>

		    	</div>

		    </div>
		</div>
	</div>	
</div>