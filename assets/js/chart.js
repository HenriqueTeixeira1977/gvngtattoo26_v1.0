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