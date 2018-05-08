jQuery(document).ready(function() {
	// Show or hide the sticky footer button
    jQuery('.backtop').fadeOut(50);
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > 200) {
			jQuery('.backtop').fadeIn(200);
		} else {
			jQuery('.backtop').fadeOut(200);
		}
	});
			
	// Animate the scroll to top
	jQuery('.backtop').click(function(event) {
		event.preventDefault();		
		jQuery('html, body').animate({scrollTop: 0}, 300);
    })
    
    // Resize the Buergerwerke Iframes properly
    var tacaframes = document.getElementsByName('tacaframe')
    window.addEventListener('message',function(event) {
        if(event.origin !== 'https://taca.buergerwerke.de') return;
        var newHeight = event.data[1] + 'px'
        tacaframes.forEach(function ($el){
            $el.height = newHeight;
        });
    },false);
});

