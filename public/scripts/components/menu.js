(function($){
    "use strict";

    $('.navigation__responsive__button').on("click", function(){
        
        // active button
        if( ! $('.navigation__responsive__button').hasClass('navigation__responsive__button--active') ) {
            $('.navigation__responsive__button').addClass('navigation__responsive__button--active');
        }
        else {
            $('.navigation__responsive__button').removeClass('navigation__responsive__button--active');
        }

        // active menu shown
        if( ! $('.navigation__nav__list').hasClass('navigation__nav__list--active')) {
            $('.navigation__nav__list').addClass('navigation__nav__list--active');
        }
        else {
            $('.navigation__nav__list').removeClass('navigation__nav__list--active');
        }

        return false;

    });

    $('.navigation__nav__list__item a').on('click', function(){

        if( window.innerWidth < 1024 ) {

            // active button
            if( ! $('.navigation__responsive__button').hasClass('navigation__responsive__button--active') ) {
                $('.navigation__responsive__button').addClass('navigation__responsive__button--active');
            }
            else {
                $('.navigation__responsive__button').removeClass('navigation__responsive__button--active');
            }

            // active menu shown
            if( ! $('.navigation__nav__list').hasClass('navigation__nav__list--active')) {
                $('.navigation__nav__list').addClass('navigation__nav__list--active');
            }
            else {
                $('.navigation__nav__list').removeClass('navigation__nav__list--active');
            }

        }

        setTimeout(function() {
            var target = $( $('.navigation__nav__list__item a').attr('href') );
            if( target.length ) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 500);
            }

        }, 200);

        return false;

    });
    
})(jQuery);
