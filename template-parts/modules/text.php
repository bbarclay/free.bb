<section class="module module__text">

	<div class="container">

		 <?php if( get_sub_field('text') ) : ?>

	     	 <div><?php echo get_sub_field('text'); ?></div>

	 	<?php endif; ?>
	</div>

</section>
<script>
	var email = "<?php echo get_query_var( 'email', '' ) ?>";

	(function($){

		$(window).load(function(){

			$('.module__text').find('input[type="email"]').val(email);

		});

	})(jQuery);

</script>