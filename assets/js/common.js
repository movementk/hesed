(function($){
    // gnb menu
    $(document).on('mouseenter focus', '#gnb > ul > li', function(){
        $('body').addClass('opened');
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
    });
    $(document).on('mouseleave', '#header', function(){
        $('body').removeClass('opened');
        $('#gnb > ul > li').removeClass('active');
    });
})(jQuery);