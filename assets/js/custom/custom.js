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
				margin: 10,
				nav: true,
				items:3,
				autoHeight:true,
				    responsive:{
				        0:{
				            items:1
				        },
				        600:{
				            items:2
				        },
				        1000:{
				            items:3
				        }
				    }
			});


			$("#burger-menu").on('click', function(){
					$('.top-menu').slideToggle();
			});


			$('.top-menu > li').on('click', function(){
				$(this).find('.sub-menu').slideToggle();
			})

		});

})(jQuery)