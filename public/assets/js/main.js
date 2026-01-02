// public/assets/js/main.js
import Swiper from 'swiper';
import 'swiper/swiper-bundle.min.css';

// public/assets/js/main.js
document.addEventListener("DOMContentLoaded", function() {
    const swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30
        }
      }
    });
  });
  