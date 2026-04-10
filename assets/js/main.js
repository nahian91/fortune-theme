jQuery(document).ready(function($) {
    var header = $('.header-area');

    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
            header.addClass('sticky');
        } else {
            header.removeClass('sticky');
        }
    });

    $('#menu-main-menu').slicknav();
});

const counters = document.querySelectorAll('.counter-number');
const speed = 200;

const startCounters = () => {
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 15);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    });
}

// Intersection Observer to trigger when visible
const observer = new IntersectionObserver((entries) => {
    if(entries[0].isIntersecting){
        startCounters();
    }
}, { threshold: 0.5 });

observer.observe(document.querySelector('.fortune-counter-section'));