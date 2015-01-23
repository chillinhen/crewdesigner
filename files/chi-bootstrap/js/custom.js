jQuery(document).ready(function($) {
    
	//alert('Test');
	$('*').removeClass('block');
	$('ul.level_1, #kontakt form .widget, .team-short').addClass('clearfix');
	$('aside .mod_article > .ce_teaser').addClass('clearfix');
	
	$('.mod_navigation > ul.level_1').addClass('nav nav-tabs nav-justified');
	$('#header .mod_navigation > ul.level_1').wrap('<div class="container"></div>');
	$('.mod_navigation').addClass('collapse').addClass('navbar-collapse');
	$('.mod_navigation ul.level_1 > li.startseite > *').wrapInner('<span></span>');
	
	$('aside .mod_navigation').removeClass('navbar-collapse').removeClass('collapse');
	//content box
	$('.startseite .mod_contentbox').addClass('row');
	//box Items
	var counter = $('.startseite .mod_contentbox .mod_box_items').children.length;
	var factor = 12/(counter+1);
	$('.startseite .mod_box_items').addClass('col-md-' + factor);
	
	//some content 
	$('.image_container img').addClass('img-responsive');
	$('#content .mod_article .ce_text p:first-child').addClass('lead');
	
	// responsive tables 
	$('.team table').wrap('<div class="responsive-table"></div>');
	//form styles 
	$('input[type="submit"]').addClass('btn btn-primary');

	//social
	$('.social-links br').remove();
	$('.social-links a[href^="http"], .social-links a[title="Suche"], a.more').wrapInner('<span></span>');
	
	//teaser
	$('.startseite .mod_box_items .image_container').wrap('<div class="image-border"></div>');
	$('.ce_hyperlink.teaser-link').children('a').addClass('btn btn-primary');
	$('.startseite .mod_box_items .image_container').removeClass('float_left');
	
	//lists
	$('.ce_text ul > li').each(function(){
		$(this).wrapInner('<span></span>');
	});
	
	
	//define same height in panels
	var max_height = 0;
	var teaser = $('.startseite .mod_box_items');
	$(teaser).each(function(e) {
		
		//alert('panel');
	  h = $(this).height();
	  
	  if(typeof(h) != "undefined") {
	        if(h > max_height) {
	                max_height = h;
	        }
	  }
	  if(max_height > 0) {
	   $(teaser).height(max_height);
	  }
	});

});
jQuery(document).ready(function(){
    
	//Check to see if the window is top if not then display button
	jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() > 100) {
			jQuery('.scroll-to-top').fadeIn();
		} else {
			jQuery('.scroll-to-top').fadeOut();
		}
	});
	
	//Click event to scroll to top
	jQuery('.scroll-to-top').click(function(){
		jQuery('html, body').animate({scrollTop : 0},800);
		return false;
	});

	
});



