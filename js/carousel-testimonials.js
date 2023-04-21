$(document).ready(function () {
    $('#slider-testimonials').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1,
                margin: 20
            },
            600: {
                items: 1,
                margin: 20
            },
            900: {
                items: 2,
                margin: 30
            },
            1600: {
                items: 3,
                margin: 30
            }
        }
    });
})