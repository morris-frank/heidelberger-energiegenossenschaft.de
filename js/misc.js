jQuery(document).ready(function() {    
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

