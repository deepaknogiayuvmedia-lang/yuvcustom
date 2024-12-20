

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
    loop: false, // Infinite looping
    autoplay: true, // Automatic scrolling
    autoplayTimeout: 3000, // Delay between scrolls
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 5
        }
    }
});
$('#core-teams').owlCarousel({
    items: 5, // Number of visible items
    margin: 20, // Space between items
    loop: false, // Infinite looping
    autoplay: true, // Automatic scrolling
    autoplayTimeout: 3000, // Delay between scrolls
    responsive: {
        0: {
            items: 1
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

const elements = [{
    element: document.querySelector('.frontend'),
    className: 'frontend'
},
{
    element: document.querySelector('.backend'),
    className: 'backend'
},
{
    element: document.querySelector('.mobile-app'),
    className: 'mobile-app'
},
{
    element: document.querySelector('.ui-ux-design'),
    className: 'ui-ux-design'
},
];

const techstack = document.querySelector('.technical-stack-main');

elements.forEach(({
    element,
    className
}) => {
    element.addEventListener('mouseenter', () => {
        techstack.classList.add('index-top');
        element.classList.add('active');
    });
    element.addEventListener('mouseleave', () => {
        techstack.classList.remove('index-top');
        element.classList.remove('active');
    });
});

$(document).ready(function () {
    // Function to initialize Slick with dynamic configurations
    function initializeSlick(target) {
        let slideCount = $(target).children().length; // Count the number of slides in the target slider

        $(target).slick({
            infinite: slideCount > 1, // Only enable infinite scroll if there are more than 1 slide
            slidesToShow: Math.min(4, slideCount), // Show up to 4 slides, or the number of slides available
            slidesToScroll: Math.min(1, slideCount), // Scroll by 1 slide or the available number
            dots: false,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: Math.min(3, slideCount), // Adjust for smaller screens
                        slidesToScroll: Math.min(1, slideCount),
                        infinite: slideCount > 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: Math.min(2, slideCount),
                        slidesToScroll: Math.min(1, slideCount),
                        infinite: slideCount > 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: Math.min(1, slideCount),
                        slidesToScroll: 1,
                        infinite: slideCount > 1
                    }
                }
            ]
        });
    }

    // Initialize all Slick sliders visible on page load
    $('.pmarketing:visible').each(function () {
        initializeSlick(this);
    });

    // Handle tab switching for sliders inside tabs
    $('.nav-underline button[data-bs-toggle="tab"]').on('shown.bs.tab', function () {
        // Get the active tab's sliders
        let activeSliders = $('.tab-pane.active .pmarketing');

        activeSliders.each(function () {
            // Destroy and reinitialize Slick only if necessary
            if ($(this).hasClass('slick-initialized')) {
                $(this).slick('unslick');
            }
            initializeSlick(this);
        });
    });
});

$(document).ready(function () {

    $('.goalss').slick({
        dots: false,
        arrows: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});
