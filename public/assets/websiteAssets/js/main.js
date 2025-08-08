

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



$(document).ready(function () {
    $('.inds_cat_set').owlCarousel({
        loop: true,
        autoplay: true,
        dots: true,
        margin: 10,
        // nav: false,
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 6
            },
            1000: {
                items: 10
            }
        }
    });
});


$('#core-team').owlCarousel({
    items: 4, // Number of visible items
    margin: 20, // Space between items
    loop: true, // Infinite looping
    autoplay: true, // Automatic scrolling

    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
});
$('#servicestabs').owlCarousel({
    items: 5,
    margin: 20,
    loop: true,
    autoWidth: true,
    autoplay: true,
    autoplayTimeout: 2000, // Increased autoplay speed
    smartSpeed: 2000, // Adjust the speed of the slide transition
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
});

$('#serviceSlider').owlCarousel({
    items: 3, // Number of visible items
    margin: 20, // Space between items
    loop: true, // Infinite looping
    autoplay: true, // Automatic scrolling
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});
$('#core-teams').owlCarousel({
    items: 4, // Number of visible items
    margin: 20, // Space between items
    loop: false, // Infinite looping
    autoplay: true, // Automatic scrolling
    autoplayTimeout: 3000, // Delay between scrolls
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
});


$('.hero-slider').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
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
{
    element: document.querySelector('.video-editing-logo'),
    className: 'video-editing-logo'
},
];

const techstack = document.querySelector('.technical-stack-main');

elements.forEach(({
    element,
    className
}) => {
    if (element) {
        element.addEventListener('mouseenter', () => {
            techstack.classList.add('index-top');
            element.classList.add('active');
        });
        element.addEventListener('mouseleave', () => {
            techstack.classList.remove('index-top');
            element.classList.remove('active');
        });
    }
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
            autoplay: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: Math.min(2, slideCount), // Adjust for smaller screens
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
                        dots: true,
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



document.addEventListener("DOMContentLoaded", () => {
    const dropdownItems = document.querySelectorAll(".nav-item.dropdown");

    dropdownItems.forEach((dropdown) => {
        dropdown.addEventListener("mouseleave", () => {
            const menu = dropdown.querySelector(".dropdown-menu");
            menu.classList.remove("show");
        });

        dropdown.addEventListener("mouseenter", () => {
            const menu = dropdown.querySelector(".dropdown-menu");
            menu.classList.add("show");
        });
    });
});


$(document).ready(function () {
    $('.slick-slider').slick({
        dots: false,
        arrows: false,
        infinite: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ],
        // Add space between slides
        // variableWidth: true,
        // centerMode: true
    });
});
$(document).ready(function () {
    $('.performancemedia-slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 5,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ],
        // Add space between slides
        // variableWidth: true,
        // centerMode: true
    });
});
$(document).ready(function () {
    $('.marketplace-slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ],
        // Add space between slides
        // variableWidth: true,
        // centerMode: true
    });
});
$(document).ready(function () {
    $('.fbads-slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ],
        // Add space between slides
        // variableWidth: true,
        // centerMode: true
    });
});
$(document).ready(function () {
    $('.gbp-slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ],
        // Add space between slides
        // variableWidth: true,
        // centerMode: true
    });
});
