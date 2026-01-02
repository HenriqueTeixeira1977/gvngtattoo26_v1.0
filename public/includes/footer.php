<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- FOOTER -->
<footer class="bg-black text-center py-4 border-top border-secondary">
  <div class="container">
    <p class="mb-1">&copy; <?php echo date("Y"); ?> GVNG Tattoo - Todos os direitos reservados.</p>
    <div class="d-flex justify-content-center gap-3">
      <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
      <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
      <a href="#" class="text-white"><i class="bi bi-tiktok"></i></a>
    </div>
  </div>
</footer>

<!-- BOTÃO FIXO WHATSAPP -->
<a href="https://wa.me/5513999999999?text=Olá%20GVNG,%20quero%20agendar%20uma%20tatuagem!" 
  target="_blank" 
  class="btn-whatsapp" aria-label="WhatsApp GVNG">
  <i class="bi bi-whatsapp"></i>
</a>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
  AOS.init();

  var swiper = new Swiper(".swiper-container", {
    loop: true,
    autoplay: { delay: 5000, disableOnInteraction: false },
    effect: "fade",
    fadeEffect: { crossFade: true },
    navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
  });

  // Navbar transparente -> sólida ao rolar
  window.addEventListener("scroll", function() {
    const nav = document.getElementById("mainNav");
    if (window.scrollY > 50) {
      nav.classList.add("navbar-scrolled");
    } else {
      nav.classList.remove("navbar-scrolled");
    }
  });
</script>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 900,
    easing: 'ease-out-cubic',
    once: true,
    offset: 80
  });
</script>


<script src="../assets/js/main.js"></script>

</body>
</html>
