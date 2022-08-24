$(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() == 0){
            $(".my-navbar").css({"background-color":"#ffffff11"});
            $(".my-navbar-collapse").css({"background-color":"#ffffff11"});
            
            if($(window).width() >= 992 ) {
                $(".my-navbar-collapse").css({"background-color":"#ffffff00"});
            }
            
            $(".my-text").css({"color":"white"});
            $('#my-logo').attr('src', function(i,e){
                return $(this).attr('src').replace("icon-black.png","icon-white.png");
            });  
        }
        else{
            $(".my-navbar").css({"background-color":"white"});
            $(".my-navbar-collapse").css({"background-color":"white"});
            $(".my-text").css({"color":"black"});
            $('#my-logo').attr('src', function(i,e){
                return $(this).attr('src').replace("icon-white.png","icon-black.png");
            });
        }

    })
})