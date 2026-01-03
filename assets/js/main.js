// Navbar Scroll Effect
document.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar-overlay");
    if (window.scrollY > 80) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});

window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');

    if (window.scrollY > 80) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// AOS Animation Initialization
AOS.init({
duration: 900,
once: true
});

// Counter Animation on Scroll
const counters = document.querySelectorAll('[data-counter]');

const animateCounter = (el) => {
const target = +el.getAttribute('data-counter');
const duration = 10000;
let start = 0;
const increment = target / (duration / 20);

const update = () => {
    start += increment;
    if (start < target) {
        el.innerText = Math.floor(start);
        requestAnimationFrame(update);
    } else {
        el.innerText = target;
    }
};
update();
};

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
        animateCounter(entry.target);
        observer.unobserve(entry.target);
    }
});
}, { threshold: 0.4 });

document.addEventListener("DOMContentLoaded", () => {

    // AOS
    if (typeof AOS !== "undefined") {
        AOS.init({
            once: true,
            duration: 900,
            easing: "ease-in-out"
        });
    }

    // COUNTER
    const counters = document.querySelectorAll("[data-counter]");
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute("data-counter");
            const count = +counter.innerText;
            const increment = target / 80;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 30);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    });

    // SWIPER
    if (document.querySelector(".mySwiper")) {
        new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 30,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            breakpoints: {
                320: { slidesPerView: 1 },
                768: { slidesPerView: 2 },
                992: { slidesPerView: 3 }
            }
        });
    }

});


// Back to Top Button
document.addEventListener("DOMContentLoaded", () => {

    const backToTop = document.getElementById("backToTop");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            backToTop.classList.add("show");
        } else {
            backToTop.classList.remove("show");
        }
    });

    backToTop.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });

});

