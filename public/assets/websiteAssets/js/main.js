

$('.flip').hover(function () {
    $(this).find('.corecard').toggleClass('flipped');

});


//  TESTIMONIALS CAROUSEL HOOK
$('#customers-testimonials').owlCarousel({
    loop: true,
    center: true,
    items: 6,
    margin: 0,
    autoplay: true,
    dots: false,
    autoplayTimeout: 8500,
    smartSpeed: 450,
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        1170: {
            items: 5
        }
    }
});


$('#core-team').owlCarousel({
    items: 5, // Number of visible items
    margin: 20, // Space between items
    loop: true, // Infinite looping
    autoplay: true, // Automatic scrolling
    autoplayTimeout: 3000, // Delay between scrolls
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 2
        },
        1000: {
            items: 5
        }
    }
});


$('.hero-slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})

