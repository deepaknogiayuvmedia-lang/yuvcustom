
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
    items: 3, // Number of visible items
    margin: 20, // Space between items
    loop: true, // Infinite looping
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


$('.flip').hover(function () {
    $(this).find('.corecard').toggleClass('flipped');

});


const tabs = document.querySelectorAll('.nav-link');
        const tabPanes = document.querySelectorAll('.tab-pane');

        tabs.forEach((tab, index) => {
            tab.addEventListener('click', (e) => {
                const activeTab = document.querySelector('.tab-pane.active');
                const targetPane = document.querySelector(tab.getAttribute('data-bs-target'));

                // Remove active class and apply slide effect
                tabPanes.forEach((pane) => {
                    if (pane !== targetPane) pane.classList.remove('previous', 'next', 'active');
                });

                if (index > [...tabs].indexOf(activeTab)) {
                    targetPane.classList.add('next');
                } else {
                    targetPane.classList.add('previous');
                }

                setTimeout(() => {
                    tabPanes.forEach((pane) => pane.classList.remove('next', 'previous'));
                    targetPane.classList.add('active');
                }, 50);
            });
        });