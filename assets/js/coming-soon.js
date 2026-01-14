// PARALLAX BACKGROUND
const bg = document.querySelector('.coming-soon .bg');

if (bg) {
  window.addEventListener('scroll', () => {
    bg.style.transform = `scale(1.15) translateY(${window.scrollY * 0.2}px)`;
  });
}

// =========================
// COUNTDOWN — DATA FIXA
// =========================
const launchDate = new Date('2026-02-01T00:00:00').getTime();

const countdownContainer = document.querySelector('.countdown');

function updateCountdown() {
  const now = Date.now();
  const distance = launchDate - now;

  if (distance <= 0) {
    clearInterval(countdownInterval);

    // MENSAGEM AO ZERAR
    countdownContainer.innerHTML = `
      <span class="launch-message">
        LANÇAMENTO OFICIAL 🚀
      </span>
    `;
    return;
  }

  const DAY = 1000 * 60 * 60 * 24;
  const HOUR = 1000 * 60 * 60;
  const MINUTE = 1000 * 60;
  const SECOND = 1000;

  const days = Math.floor(distance / DAY);
  const hours = Math.floor((distance % DAY) / HOUR);
  const minutes = Math.floor((distance % HOUR) / MINUTE);
  const seconds = Math.floor((distance % MINUTE) / SECOND);

  document.getElementById('days').textContent = days;
  document.getElementById('hours').textContent = String(hours).padStart(2, '0');
  document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
  document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
}

// INIT
updateCountdown();
const countdownInterval = setInterval(updateCountdown, 1000);

