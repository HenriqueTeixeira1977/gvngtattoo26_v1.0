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
});



//  FAQ
document.addEventListener('DOMContentLoaded', () => {
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');

    question.addEventListener('click', () => {
      const isOpen = item.classList.contains('active');

      faqItems.forEach(i => i.classList.remove('active'));

      if (!isOpen) {
        item.classList.add('active');
      }
    });
  });
});

// DEPOIMENTOS
const depoimentosSwiper = new Swiper('#depoimentos .mySwiper', {
  loop: true,
  grabCursor: true,
  spaceBetween: 30,
  centeredSlides: true,

  slidesPerView: 1,

  autoplay: {
    delay: 4500,
    disableOnInteraction: false,
  },

  speed: 900,

  pagination: {
    el: '#depoimentos .swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '#depoimentos .swiper-button-next',
    prevEl: '#depoimentos .swiper-button-prev',
  },

  breakpoints: {
    768: {
      slidesPerView: 2,
    },
    1200: {
      slidesPerView: 3,
    }
  },

  on: {
    slideChangeTransitionStart() {
      document
        .querySelectorAll('#depoimentos .swiper-slide')
        .forEach(slide => slide.classList.remove('is-active'));
    },

    slideChangeTransitionEnd() {
      const activeSlide = document.querySelector(
        '#depoimentos .swiper-slide-active'
      );
      if (activeSlide) {
        activeSlide.classList.add('is-active');
      }
    }
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






