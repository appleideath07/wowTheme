
$(document).ready(function(){
//upon document ready
//    sample for span in title and words
    $('.navbar-brand , .before-footer .footer-widgets .widgettitle').each( function (){
            var obj_h2 = $(this);
            var h2_title = obj_h2.html();
            var words = h2_title.split(' ');
            words[0] = '<span>' + words[0] + '</span>'

            obj_h2.html( words.join( ' ' ) );
        } );
    
    
    	$(window).scroll(function(){
		if ($(this).scrollTop() > 50) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
    
    
});


