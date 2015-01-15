jQuery(document).ready(function($) {

    //alert('Test');
    
    //automatic height top features
    var parentHeight = $('.slideshow').height();   
    $('.top-features > div').css('height',parentHeight/2);



    //caption hover
    $('.news-item').each(function() {
	$(this).hover(function() {
	    $(this).children('.caption').toggleClass('show');
	});
    });

    //edit Block
    $(".info").each(function() {
	$(this).click(function() {
	    $(this).parent('p').siblings('p.meta').toggleClass('show');
	});
    });
    
    //edit events link
    $('li.all-events-link a')
	    .addClass('btn')
	    .addClass('btn-large')
	    .addClass('btn-primary')
	    .addClass('pull-right');
    
    //add external icons
	hostname = new RegExp(location.host);
	// Act on each link
	$('a:not(.em-calnav)').each(function() {
		var url = $(this).attr("href");
		// Test if current host (domain) is in it
		if (hostname.test(url)) {
			// If it's local...
			$(this).addClass('local');
		}
		else if (url.slice(0, 1) == "#") {
		    // It's an anchor link
		    $(this).addClass('anchor');
		}
		else {
		    // a link that does not contain the current host
		    $(this)
			.addClass('external')
			.append(' <i class="fa fa-external-link"></i>')
			.attr('target','_blank');
		}
		
	});
	//end external icons
});