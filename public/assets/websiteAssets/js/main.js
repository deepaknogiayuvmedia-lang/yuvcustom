

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