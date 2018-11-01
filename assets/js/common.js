(function($){
    // gnb menu
    $(document).on('mouseenter focus', '#gnb > ul > li > a', function(){
        $('body').addClass('opened');
        $(this).parent().siblings().removeClass('active');
        $(this).parent().addClass('active');
    });
    $(document).on('mouseleave', '#header > .container', function(){
        $('body').removeClass('opened');
    });
})(jQuery);