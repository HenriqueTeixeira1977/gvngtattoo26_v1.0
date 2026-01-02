<?php include 'public/includes/header.php'; ?>

<!-- Custom CSS (dark theme) -->
<link rel="stylesheet" href="../assets/css/style.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<!-- HEADER / NAV -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">GVNG</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#inicio">Início</a></li>
        <li class="nav-item"><a class="nav-link" href="#artista">Artista</a></li>
        <li class="nav-item"><a class="nav-link" href="#estilos">Estilos</a></li>
        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfólio</a></li>
        <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<section id="inicio" class="vh-100 d-flex align-items-center text-center" data-aos="fade-in">
  <div class="container">
    <h1 class="display-4 fw-bold">GVNG TATTOO</h1>
    <p class="lead">Arte exclusiva. Estilo. Identidade.</p>

    <div class="mt-4">
      <a href="#" class="btn btn-light me-2">Agendar WhatsApp</a>
      <a href="#contato" class="btn btn-outline-light">Solicitar Orçamento</a>
    </div>
  </div>
</section>

<!-- SOBRE O ARTISTA -->
<section id="artista" class="py-5" data-aos="fade-up">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-md-5">
        <img src="public/assets/img/artista.jpg" class="img-fluid rounded" alt="Carlos Henrique">
      </div>
      <div class="col-md-7">
        <h2 class="fw-bold">Carlos Henrique</h2>
        <p>Artista da GVNG Tattoo, especialista em artes autorais e tatuagens exclusivas.</p>
      </div>
    </div>
  </div>
</section>

<!-- ESTILOS -->
<section id="estilos" class="py-5 bg-black">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Estilos de Tatuagem</h2>

    <div class="row g-4">
      <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
        <div class="card bg-dark text-light text-center h-100">
          <img src="public/assets/img/estilos/style1.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Blackwork</h5>
          </div>
        </div>
      </div>

      <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
        <div class="card bg-dark text-light text-center h-100">
          <img src="public/assets/img/estilos/style2.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Realismo</h5>
          </div>
        </div>
      </div>

      <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
        <div class="card bg-dark text-light text-center h-100">
          <img src="public/assets/img/estilos/style3.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Fine Line</h5>
          </div>
        </div>
      </div>

      <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
        <div class="card bg-dark text-light text-center h-100">
          <img src="public/assets/img/estilos/style4.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Old School</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PORTFÓLIO -->
<section id="portfolio" class="py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Portfólio</h2>

    <div class="row g-3">
      <?php for($i=1;$i<=8;$i++): ?>
      <div class="col-6 col-md-3" data-aos="fade-up">
        <img src="public/assets/img/portifolio/tattoo01.png?=$i?>.jpg" class="img-fluid rounded" alt="">
      </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- CTA FINAL -->
<section class="py-5 bg-black text-center">
  <div class="container">
    <h2 class="fw-bold">Pronto para transformar sua ideia em arte?</h2>
    <a href="#" class="btn btn-light mt-3">Falar no WhatsApp</a>
  </div>
</section>

<!-- CONTATO -->
<section id="contato" class="py-5" data-aos="fade-up">
  <div class="container">
    <h2 class="text-center fw-bold mb-4">Entre em Contato</h2>

    <form class="row g-3">
      <div class="col-md-6">
        <input type="text" class="form-control" placeholder="Nome">
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" placeholder="WhatsApp">
      </div>
      <div class="col-12">
        <input type="email" class="form-control" placeholder="Email">
      </div>
      <div class="col-12">
        <textarea class="form-control" rows="4" placeholder="Mensagem"></textarea>
      </div>
      <div class="col-12 text-center">
        <button class="btn btn-light px-5">Enviar</button>
      </div>
    </form>
  </div>
</section>

<?php include 'public/includes/footer.php'; ?>
