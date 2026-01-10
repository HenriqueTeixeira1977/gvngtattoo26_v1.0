<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>GVNG | Tatuagens de Elite</title>

  <meta name="description" content="GVNG - Tatuagens exclusivas e de luxo. Arte autoral, atendimento premium e experiência única para quem busca tatuagens de alto nível.">
  <meta name="author" content="HT WebSites Builder by Henrique Teixeira">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!-- Bootstrap & Libs -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <!-- CSS Custom -->
  <link rel="stylesheet" href="public/assets/css/style.css">
</head>

<body class="bg-black text-white" style="scroll-behavior: smooth;">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold text-uppercase" href="#">GVNG</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav gap-2">
          <li class="nav-item"><a class="nav-link text-white" href="#hero">Início</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#estilos">Estilos</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#galeria">Galeria</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#diferenciais">Diferenciais</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#processo">Processo</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#depoimentos">Depoimentos</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#sobre">Sobre</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#faq">FAQ</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#contato">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <section id="hero" class="hero position-relative">
    <video autoplay muted loop playsinline class="hero-video" poster="assets/img/poster_hero.jpg">
      <source src="assets/videos/gvng_hero.mp4" type="video/mp4">
      Seu navegador não suporta vídeos em HTML5.
    </video>
    <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-50"></div>
    <div class="hero-content position-absolute top-50 start-50 translate-middle text-center px-3" data-aos="zoom-in">
      <h1 class="display-4 fw-bold">Arte de Elite. Estilo GVNG.</h1>
      <p class="lead mb-4">Tatuagens exclusivas para quem exige o máximo em design e expressão.</p>
      <a href="#contato" class="btn btn-light btn-lg fw-bold rounded-pill px-4">Agende Agora</a>
    </div>
  </section>

  <!-- ESTILOS -->
  <section id="estilos">
    <div class="container">
      <h2 class="text-center display-5 fw-bold mb-5">Estilos GVNG</h2>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slide-content" style="background-image: url('assets/img/estilos/style1.png');">
              <div class="overlay"></div>
              <div class="caption" data-aos="fade-right">
                <h2 class="fw-bold">Águia Tribal</h2>
                <p>Força e liberdade eternizadas na pele.</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-content" style="background-image: url('assets/img/estilos/style2.png'); min-height: 70vh;">
              <div class="overlay"></div>
              <div class="caption" data-aos="fade-right">
                <h2 class="fw-bold">Mandala Moderna</h2>
                <p>Equilíbrio entre o clássico e o contemporâneo.</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-content" style="background-image: url('assets/img/estilos/style3.png'); min-height: 70vh;">
              <div class="overlay"></div>
              <div class="caption" data-aos="fade-right">
                <h2 class="fw-bold">Geometria Minimalista</h2>
                <p>Simplicidade que revela profundidade.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>

  <!-- GALERIA -->
  <section id="galeria" class="bg-black">
    <div class="container">
      <h2 class="text-center display-5 fw-bold mb-5">Galeria GVNG</h2>
      <div class="row g-3">
        <?php 
          $galeriaImgs = ['galeria_1.jpg','galeria_2.jpg','galeria_3.jpg','galeria_1.jpg','galeria_2.jpg','galeria_3.jpg'];
          foreach($galeriaImgs as $img):
        ?>
        <div class="col-md-4 col-sm-6" data-aos="zoom-in">
          <div class="galeria-item position-relative overflow-hidden rounded-3 shadow-lg">
            <img src="assets/img/<?=$img?>" class="img-fluid" alt="Tatuagem GVNG">
            <div class="overlay-galeria position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
              <p class="text-white fw-bold">Tatuagem Exclusiva</p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- DIFERENCIAIS -->
  <section id="diferenciais" class="bg-dark">
    <div class="container" data-aos="fade-up">
      <h2 class="text-center display-5 fw-bold mb-5 text-uppercase">Diferenciais GVNG</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="bg-black p-4 rounded-3 shadow-lg h-100 text-center hover-shadow">
            <i class="bi bi-gem display-4 mb-3"></i>
            <h5 class="fw-bold">Atendimento Exclusivo</h5>
            <p class="text-muted">Sessões privativas e confortáveis, pensadas para uma experiência premium.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="bg-black p-4 rounded-3 shadow-lg h-100 text-center hover-shadow">
            <i class="bi bi-brush display-4 mb-3"></i>
            <h5 class="fw-bold">Arte Personalizada</h5>
            <p class="text-muted">Criações autorais e únicas, feitas sob medida para você.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="bg-black p-4 rounded-3 shadow-lg h-100 text-center hover-shadow">
            <i class="bi bi-shield-lock display-4 mb-3"></i>
            <h5 class="fw-bold">Higiene e Segurança</h5>
            <p class="text-muted">Ambiente esterilizado e controlado para máxima segurança.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESSO -->
  <section id="processo" class="bg-black">
    <div class="container" data-aos="fade-up">
      <h2 class="text-center display-5 fw-bold mb-5">Nosso Processo</h2>
      <div class="row g-4 text-center">
        <div class="col-md-3">
          <i class="bi bi-chat-left-text display-4 mb-2"></i>
          <h6>Consulta Inicial</h6>
          <p class="text-muted">Entendimento do seu estilo e ideias.</p>
        </div>
        <div class="col-md-3">
          <i class="bi bi-pencil display-4 mb-2"></i>
          <h6>Design Personalizado</h6>
          <p class="text-muted">Criação da arte exclusiva para você.</p>
        </div>
        <div class="col-md-3">
          <i class="bi bi-gear display-4 mb-2"></i>
          <h6>Preparação e Sessão</h6>
          <p class="text-muted">Atendimento premium, seguro e confortável.</p>
        </div>
        <div class="col-md-3">
          <i class="bi bi-star display-4 mb-2"></i>
          <h6>Entrega Final</h6>
          <p class="text-muted">Sua tatuagem única e perfeita na pele.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- DEPOIMENTOS -->
  <section id="depoimentos" class="bg-dark text-white">
    <div class="container" data-aos="fade-up">
      <h2 class="text-center display-5 fw-bold mb-5">Depoimentos</h2>
      <div class="swiper-depoimentos swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide text-center px-3">
            <p class="lead fst-italic">“Minha tatuagem ficou perfeita! Atendimento e cuidado impecáveis.”</p>
            <h5 class="fw-bold mt-3">— Helena S.</h5>
          </div>
          <div class="swiper-slide text-center px-3">
            <p class="lead fst-italic">“Arte exclusiva, qualidade de luxo. Superou minhas expectativas.”</p>
            <h5 class="fw-bold mt-3">— Ricardo M.</h5>
          </div>
          <div class="swiper-slide text-center px-3">
            <p class="lead fst-italic">“O estúdio é incrível, ambiente seguro e equipe profissional.”</p>
            <h5 class="fw-bold mt-3">— Camila R.</h5>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>

  <!-- SOBRE -->
  <section id="sobre" class="bg-black">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
          <div class="parallax-img shadow-lg rounded-3" style="background-image: url('assets/img/sobre/sobre.png'); min-height: 350px;"></div>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="display-6 fw-bold mb-3">A Essência GVNG</h2>
          <p class="lead">
            A GVNG nasceu para transformar a tatuagem em arte de luxo. Com técnicas refinadas e traços autorais, entregamos exclusividade e identidade em cada projeto.
          </p>
          <p class="text-muted fst-italic">“Tatuagem é uma joia eterna — e nós somos os ourives da sua pele.”</p>
          <a href="#contato" class="btn btn-outline-light mt-3 rounded-pill">Agende sua experiência</a>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="bg-dark text-white">
    <div class="container" data-aos="fade-up">
      <h2 class="text-center display-5 fw-bold mb-5">Perguntas Frequentes</h2>
      <div class="accordion" id="faqAccordion">
        <div class="accordion-item bg-black text-white">
          <h2 class="accordion-header" id="faq1">
            <button class="accordion-button bg-black text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
              Qual o tempo médio de uma sessão?
            </button>
          </h2>
          <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body text-muted">
              O tempo varia conforme o tamanho e complexidade, mas geralmente entre 1 a 4 horas.
            </div>
          </div>
        </div>
        <div class="accordion-item bg-black text-white">
          <h2 class="accordion-header" id="faq2">
            <button class="accordion-button bg-black text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
              Posso levar minha própria arte?
            </button>
          </h2>
          <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body text-muted">
              Sim! Aceitamos referências e trabalhamos para personalizar sua ideia com o estilo GVNG.
            </div>
          </div>
        </div>
        <div class="accordion-item bg-black text-white">
          <h2 class="accordion-header" id="faq3">
            <button class="accordion-button bg-black text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
              Qual a política de higiene do estúdio?
            </button>
          </h2>
          <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body text-muted">
              Seguimos rigorosos padrões de higiene: esterilização de materiais, ambiente limpo e uso de EPIs.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTATO -->
  <section id="contato" class="py-5 bg-black">
    <div class="container" data-aos="fade-up">
      <h2 class="text-center display-5 fw-bold mb-5 text-uppercase">Entre em Contato</h2>
      <div class="row g-4">
        <!-- Formulário -->
        <div class="col-lg-6">
          <form action="enviar.php" method="POST" class="bg-dark p-4 rounded-3 shadow-lg">
            <div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" id="nome" name="nome" class="form-control bg-black text-white border-secondary" required>
            </div>
            <div class="mb-3">
              <label for="whatsapp" class="form-label">WhatsApp</label>
              <input type="tel" id="whatsapp" name="whatsapp" class="form-control bg-black text-white border-secondary" placeholder="(XX) XXXXX-XXXX" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" id="email" name="email" class="form-control bg-black text-white border-secondary">
            </div>
            <div class="mb-3">
              <label for="mensagem" class="form-label">Mensagem</label>
              <textarea id="mensagem" name="mensagem" rows="4" class="form-control bg-black text-white border-secondary" required></textarea>
            </div>
            <button type="submit" class="btn btn-light w-100 fw-bold rounded-pill">Enviar Mensagem</button>
          </form>
        </div>

        <!-- Informações de contato -->
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <div class="p-4">
            <h4 class="fw-bold mb-3"><i class="bi bi-geo-alt-fill me-2"></i> Endereço</h4>
            <p class="text-muted">Rua Exemplo, 123 - Praia Grande, SP</p>

            <h4 class="fw-bold mb-3 mt-4"><i class="bi bi-telephone-fill me-2"></i> Telefone</h4>
            <p class="text-muted">(13) 99999-9999</p>

            <h4 class="fw-bold mb-3 mt-4"><i class="bi bi-envelope-fill me-2"></i> E-mail</h4>
            <p class="text-muted">contato@gvng.com.br</p>
          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- WHATSAPP FIXO -->
  <div class="btn-wa">
    <a href="https://wa.me/5513999999999?text=Olá%20GVNG,%20quero%20agendar%20uma%20tatuagem!" target="_blank" class="btn-whatsapp" aria-label="WhatsApp GVNG">
      <i class="bi bi-whatsapp"></i>
    </a>
  </div>

  <!-- FOOTER -->
  <footer class="py-4 bg-black text-white text-center">
    <p class="mb-0">&copy; <?=date("Y")?> GVNG Tattoo. Todos os direitos reservados.</p>
  </footer>

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

    var swiperDepo = new Swiper(".swiper-depoimentos", {
      loop: true,
      autoplay: { delay: 6000 },
      pagination: { el: ".swiper-pagination", clickable: true },
    });

    // Navbar efeito ao rolar
    window.addEventListener("scroll", function() {
      const navbar = document.querySelector(".navbar");
      if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    });
  </script>
</body>
</html>