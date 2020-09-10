$(function() {
    /* style carousel for product */
    $(".owl-carousel").owlCarousel({
        rtl: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 2
            },
            600: {
                items: 3
            },
            780: {
                items: 2
            },
            1000: {
                items: 3
            },
            1180: {
                items: 4
            }
        }
    });
    /* End style carousel */
    $('.form-control').each(function(){
        if($(this).hasClass("invalid")){
            $(".invalid-feedback").css("display","block");
        }
    })
    
});
