$(document).ready(function() {
    //=================================================================================================
    //                           N A V I G A T I O N
    //=================================================================================================
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 24) {
            $("nav").addClass("fixed");
        } else {
            $("nav").removeClass("fixed");
        }
    });
    $('a[href^="#"], a[href^="/#"]').click(function() {
        let target = $(this).attr('href');
        if (target.length) {
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 500);
        }
        return false;
    });
    $('.mobile-nav-opener').click(function() {
        $('.mobile-nav').addClass('in');
        $('.mobile-nav-opener.close').addClass('out');
        $('.mobile-nav .nav-links').addClass('get-in');
        $('body').addClass('no-scroll');
    });
    $('.mobile-nav-opener.close').click(function() {
        $('.mobile-nav-opener.close').removeClass('out');
        $('.mobile-nav .nav-links').removeClass('get-in');
        $('body').removeClass('no-scroll');
        setTimeout(function() {
            $('.mobile-nav').removeClass('in');
        }, 300);
    });

    //=================================================================================================
    //                           M O D A L S
    //=================================================================================================
    $('.modal-open').click(function(){
        var modal = $(this).data('modal')

        $('body').addClass('no-scroll');
        $('#'+modal).addClass('pop')
    })

    $('.close-modal').click(function(){
        var modal = $(this).data('modal')

        $('body').removeClass('no-scroll');
        $('#'+modal).removeClass('pop')
    })

    $('.pricing-body a').click(function(event){
        event.preventDefault();

        var link = $(this).attr('href');

        setTimeout(() => {
            window.location = link
        }, 5000);

    })
})