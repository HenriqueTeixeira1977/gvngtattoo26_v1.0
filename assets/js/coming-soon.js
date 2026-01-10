const bg = document.querySelector('.coming-soon .bg');

window.addEventListener('scroll', () => {
  bg.style.transform = `scale(1.15) translateY(${window.scrollY * 0.2}px)`;
});
