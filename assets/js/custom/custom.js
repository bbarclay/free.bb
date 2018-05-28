/**
 * Custom JS.
 *
 * Custom JS scripts.
 *
 * @since 1.0.0
 */
// $(window).load(function() {
//     $('#loading').hide();
// });
(function($){
	
		$(document).ready(function(){ 
    
			$(".owl-carousel").owlCarousel({
				navText:['<span class="arrow-left"></span>','<span class="arrow-right"></span>'],
				nav: true,
				items:1,
				autoHeight:true
			});


			$("#burger-menu").on('click', function(){
					$('.top-menu').slideToggle();
			});


			$('.top-menu > li').on('click', function(){
				$(this).find('.sub-menu').slideToggle();
			})

		});

})(jQuery)