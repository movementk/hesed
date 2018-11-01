(function($){
    // visual slider
    $(document).ready(function(){
        $('.visual-slide').slick({
            autoplay: true,
            autoplaySpeed: 8000,
            prevArrow: '<div class="control-box prev"><button type="button" class="slick-prev slick-arrow"><i class="icon-left-open-big"></i></button></div>',
            nextArrow: '<div class="control-box next"><button type="button" class="slick-next slick-arrow"><i class="icon-right-open-big"></i></button></div>',
            dots: false
        });
    });
    $('.visual-slide').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.slick-slide').removeClass('action');
        setTimeout(function (){ 
            $('.slick-active.visual-list').addClass('action'); 
        });
    });
    $('.visual-slide').on('init', function(event,slick){
        setTimeout(function(){ 
            $('.slick-active.visual-list').addClass('action'); 
        });
    });

    // direction slider
    $(document).ready(function(){
        $('.direction-slide').slick({
            arrows: false,
            dots: true
        });
    });
    $('.direction-slide').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.slick-slide').removeClass('on');
        setTimeout(function (){ 
            $('.slick-active.bg-list').addClass('on'); 
        });
    });
    $('.direction-slide').on('init', function(event,slick){
        setTimeout(function(){ 
            $('.slick-active.bg-list').addClass('on'); 
        });
    });
})(jQuery);