$(document).ready(function($) {
    function adapt(){
        $("html").css({
            width:$(window).innerWidth(),
            backgroundSize: $(window).innerWidth(),
        });
    
        $(".slider").css({
            maxWidth: $(window).innerWidth()
        });
        $(".content_blog").css({
            maxWidth:  $(window).innerWidth()- 200
        });
        $(".wrapper").css({
            maxWidth: $(window).innerWidth(),
            minWidth:$(window).innerWidth()

        });
        
        $(".back_profile").css({
           Width: $(window).innerWidth(),
           Height:$(window).innerWidth(),
           maxWidth: $(window).innerWidth()
        });
        $(".background_profile img").css({
            maxWidth: $(window).innerWidth()
        });
        
        $(".index_header").css({
            maxWidth: $(window).innerWidth()
        });
        $(".landing_blog").css({
            maxWidth: $(window).innerWidth()
           
        });
        $(".landing_contaner").css({
            maxWidth: $(window).innerWidth()- 700
           
        });
        
    }
    
        adapt();
        $(window).resize(function() {
            adapt();
        });
    });