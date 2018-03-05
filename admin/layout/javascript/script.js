jQuery(document).ready(function($) {    
    $(window).scroll(function(){
        if($(this).scrollTop()>150){  
        $('#menu').addClass('fixed-menu');
        }else{
            $('#menu').removeClass('fixed-menu');
        }}
    );

})