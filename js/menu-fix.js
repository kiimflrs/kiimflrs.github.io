jQuery(document).ready(function(){

	var navoffset = jQuery(".menu").offset().top;

	jQuery(window).scroll(function(){
		var scrollPos = jQuery(window).scrollTop();


		if (scrollPos >= navoffset) {
			jQuery('.menu').addClass('menu-fixed');
			jQuery('.menu').wrap('<div class="menu-placeholder"></div>');
			// jQuery('.nav-placeholder').height(jQuery('.nav').outerHeight);
			
		}
		else{
			jQuery('.menu').removeClass('menu-fixed');
			jQuery('.menu').unwrap();	

		}
	});
});