
	jQuery(document).ready(function(){
		jQuery('.menu').click(function(){
			jQuery('.top-nav ul').toggleClass('active');
		})
		
	jQuery(window).on('scroll',function (){
		if (jQuery(window).scrollTop()){
				jQuery('header').addClass('black');
		}
		else{
			jQuery('header').removeClass('black');
		}
	})


})
