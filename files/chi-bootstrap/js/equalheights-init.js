jQuery(document).ready(function($) {
 
	$(window).load(function() {
		if (window.innerWidth > 1024) {
			$('.mod_contentbox .ce_article.mod_box_items').equalHeights();
		}
	});
 
	$(window).resize(function(){
		if (window.innerWidth > 1024) {
			$('.mod_contentbox .ce_article.mod_box_items').height('auto');
			$('.mod_contentbox .ce_article.mod_box_items').equalHeights();
		}
	});
 
});