// Navbar Scroll Effect *****************************************
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














// AOS Animation Initialization ***********************************
AOS.init({
duration: 900,
once: true
});

//Inicialização correta do AOS
document.addEventListener("DOMContentLoaded", function () {

    // AOS
    AOS.init({
        duration: 900,
        easing: "ease-in-out",
        once: true,          // anima só uma vez
        offset: 120,
        delay: 50
    });

});















// Counter Animation on Scroll *************************************
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














//  GVNG STORE  **********************************************
document.querySelectorAll('#loja .card').forEach(card => {
  card.addEventListener('mousemove', e => {
    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    card.style.setProperty('--x', `${x}px`);
    card.style.setProperty('--y', `${y}px`);
  });
});






// DEPOIMENTOS ************************************************
const depoimentosSwiper = new Swiper('#depoimentos .mySwiper', {
  loop: true,
  grabCursor: true,
  spaceBetween: 10,

  slidesPerView: 1,
  centeredSlides: true,

  autoplay: {
    delay: 1000,
    disableOnInteraction: false,
  },

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    768: {
      slidesPerView: 2,
    },
    1200: {
      slidesPerView: 3,
    }
  }
});









//  FAQ *****************************************************
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








































// Back to Top Button **********************************************************
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






// Animações de fade-in e fade-up usando Intersection Observer
document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll(".animate-fade, .animate-fade-up");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    }, { threshold: 0.2 });

    elements.forEach(el => observer.observe(el));
});

















/* =========================
   SWIPER ESTILOS
========================= */
const estilosSwiper = new Swiper('.estilosSwiper', {
  loop: true,
  speed: 900,
  slidesPerView: 1,
  autoplay: {
    delay: 4500,
    disableOnInteraction: false
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
});




















/* =========================
   PARALLAX JS (DESKTOP)
========================= */
if (window.innerWidth > 768) {
  window.addEventListener('scroll', () => {
    document.querySelectorAll('.estilo-slide').forEach(slide => {
      const speed = 0.3;
      const yPos = -(window.scrollY * speed);
      slide.style.backgroundPosition = `center ${yPos}px`;
    });
  });
}

















