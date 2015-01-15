var $j = jQuery.noConflict();
jQuery.noConflict();

$j(document).ready(function() {
    
	//alert('Test');
	$j('.pagination, .ce_gallery').addClass('clearfix');
	//Navigation
	$j('#top-fold nav').removeClass('block');
	$j('#top-fold #navigation ul.level_1 > li > a').css('display','block');
	$j('#top-fold #navigation ul.level_1')
		.addClass('nav nav-tabs nav-justified')
		.wrap('<div class="collapse navbar-collapse navbar-responsive-collapse"></div>');
	$j('#top-fold ul.level_2').addClass('dropdown-menu');
	
	//Footer 
	$j('#footer .mod_sitemap .level_1').addClass('nav nav-tabs nav-justified');
	
	
	//aside navigation
	$j('aside li.dropdown > a').append('<i class="icon-caret-down"></i>');
	//Footer Bav
	$j('#footer-nav li > a').children('b').remove();
	//RSS
	$j('a.rss').html('').append('<i class="icon-rss icon-large"></i>');
	
	//add rows
	$j('#content > div, #content-teaser').addClass('row');
	
	$j('#newslink').removeClass('row');
	
	  //Teaser
	    var cntHeight = $j('#content-teaser').innerHeight();
	    $j('#content-teaser > *').css('height', cntHeight*0.75);
	
	    if ($j("#content-teaser > .block").length == 3) {
		$j("#content-teaser > .block").css('width', '31%');
	    }
	    else if ($j("#content-teaser > .block").length == 2) {
		$j("#content-teaser > .block").css('width', '47%');
	    }
	    else if ($j("#content-teaser > .block").length == 1) {
	    $j("#content-teaser > .block").css('width', '73%');
	    }
	
	// form
	$j('#content .ce_form form').addClass('clearfix');
	$j('#content .formbody fieldset, .formbody .explanation').addClass('row');
	$j('#content .formbody .explanation > p').addClass('col-md-12');
	$j('#content .formbody fieldset legend').addClass('col-md-8 formlabel');
	$j('#content .formbody fieldset.radio_container > span').addClass('col-md-4');
	
	$j('#content .mod_search p.header').addClass('pull-right');
	$j('#content .mod_search p.header').after('<hr class="separator"/>');
	
	
	//slider controls anpassen
	    var sliderHeight = $j('.content-slider').height();
	    var controlHeight = $j('.slider-control').height();
	    $j('.content-slider').css('height', sliderHeight + controlHeight);
	    $j('.content-slider').data('pause','hover');
	
	    //icons to nav-controls
	    $j('.slider-control a').wrapInner('<span/>');
	    $j('.slider-prev').prepend('<i class="icon-chevron-left"></i>');
	    $j('.slider-next').append('<i class="icon-chevron-right"></i>');
	 
	
	//newslist
	var imgWidth = $j('.image_container.float_left').children('a').children('img').width();
	$j('.image_container.float_left,.image_container.float_right').css('width', imgWidth);
	
	//Custom Fields
	$j('.custom').addClass('container').next('div').addClass('row');
	
	// Button Styling 
	$j('aside .hyperlink_txt').addClass('btn btn-primary text-center');
	$j('aside .hyperlink_txt').append('<i class="fa fa-angle-double-right"></i>');
	$j('aside .ce_downloads ul li,aside .ce_download').addClass('btn btn-default');
	
	
	//external icons
	$j('a').filter(function() {
	    return this.hostname && this.hostname !== location.hostname;
	  }).after(' <i class="icon-external-link"></i>').attr('target','_blank');
	

	
	//add icons
	$j('.filesize').after(' <i class="icon-file"></i>');
	$j('a.more, p.more > a').after(' <i class="icon-caret-right"></i>');
	
	//Tooltip
	$j('#navigation ul.level_1 > li').each(function() {
		$j(this).children('a').tooltip();
		$j(this).children('a').children('ul').children('li').children('a').tooltip('hide');
	});
	
		
	// responsive Tables 
	$j('table').addClass('table').wrap('<div class="table-responsive"></div>');
	

	// mobile
	var mobileNav = window.matchMedia( "(max-width: 600px)" );
	if(mobileNav.matches){
	$j('.navbar-collapse li.dropdown ul')
		.removeClass('dropdown-menu')
		.addClass('responsive-dropdown');
	
	}
	
	
	
});



