jQuery(document).ready(function(){

	var navoffset = jQuery(".nav").offset().top;

	jQuery(window).scroll(function(){
		var scrollPos = jQuery(window).scrollTop();


		if (scrollPos >= navoffset) {
			jQuery('.nav').addClass('fixed');
			jQuery('.wrapper').addClass('anti-jump');
			// jQuery('.nav').wrap('<div class="nav-placeholder"></div>');
			// jQuery('.nav-placeholder').height(jQuery('.nav').outerHeight);
			
		}
		else{
			jQuery('.nav').removeClass('fixed');
			jQuery('.wrapper').removeClass('anti-jump');

			// jQuery('.nav').unwrap();	

		}
		
		if (scrollPos >= navoffset) {
			jQuery('.menu').addClass('fixed');
			jQuery('.wrapper').addClass('anti-jump');
			// jQuery('.nav').wrap('<div class="nav-placeholder"></div>');
			// jQuery('.nav-placeholder').height(jQuery('.nav').outerHeight);
			
		}
		else{
			jQuery('.menu').removeClass('fixed');
			jQuery('.wrapper').removeClass('anti-jump');

			// jQuery('.nav').unwrap();	

		}
		
	});

	
});