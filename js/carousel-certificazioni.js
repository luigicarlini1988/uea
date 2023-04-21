$(document).ready(function () {
    $('#slider-certificazioni').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
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