// Initialize Slider

// Slider
var yourSite = {};

(function($){

    if($('.slider').length>0){

        yourSite.slider = $('#theSlider').flexslider({
            animation: "slide"
        });
    }  
    
})( jQuery.noConflict(), window);