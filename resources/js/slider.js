$(document).ready(function(){
    $('.product-slide').slick({
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
        autoplay: false,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    $('.testimonial-slide').slick({
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
        autoplay: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
});
