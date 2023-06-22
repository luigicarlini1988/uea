$(document).ready(function () {
    $('#slider-partners').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2,
                margin: 20
            },
            600: {
                items: 3,
                margin: 20
            },
            900: {
                items: 4,
                margin: 30
            },
            1600: {
                items: 6,
                margin: 30
            }
        }
    });
})