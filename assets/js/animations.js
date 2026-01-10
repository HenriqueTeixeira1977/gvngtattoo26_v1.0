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