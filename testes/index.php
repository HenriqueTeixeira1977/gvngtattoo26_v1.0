<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Tatuador</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- CSS personalizado -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar-custom">
  <div class="logo">GVNG TATTOO</div>
  <ul>
    <li><a href="#portfolio">PORTFÓLIO</a></li>
    <li><a href="#sobre">SOBRE</a></li>
    <li><a href="#contato">CONTATO</a></li>
  </ul>
</nav>

<!-- Banner -->
<header class="banner">
  <h1>ARTE QUE MARCA SUA HISTÓRIA</h1>
  <a href="#agendamento" class="cta-button">AGENDE SUA SESSÃO</a>
</header>

<!-- Ícones -->
<section class="features">
  <div class="item"><i class="bi bi-star-fill"></i><p>EXPERIÊNCIA</p></div>
  <div class="item"><i class="bi bi-shield-check"></i><p>HIGIENE</p></div>
  <div class="item"><i class="bi bi-lightning-fill"></i><p>ESTILOS VARIADOS</p></div>
</section>

<!-- Portfólio -->
<section id="portfolio">
  <h2>PORTFÓLIO</h2>
  <div class="portfolio-grid">
    <img src="tattoo1.jpg" alt="Tatuagem 1">
    <img src="tattoo2.jpg" alt="Tatuagem 2">
    <img src="tattoo1.jpg" alt="Tatuagem 3">
    <img src="tattoo2.jpg" alt="Tatuagem 4">
  </div>
</section>

<!-- Sobre o Artista -->
<section id="sobre">
  <img src="artista.jpg" alt="Tatuador">
  <div class="bio">
    <p>Sou tatuador há mais de 10 anos, especializado em realismo e traços finos. Cada tatuagem é uma história única que merece ser eternizada na pele com técnica e sensibilidade.</p>
  </div>
</section>

<!-- Contato -->
<section id="contato">
  <h2>CONTATO</h2>
  <form method="POST" action="enviar.php">
    <input type="text" name="nome" placeholder="Nome">
    <input type="email" name="email" placeholder="E-mail">
    <textarea name="mensagem" rows="4" placeholder="Mensagem"></textarea>
    <button type="submit">ENVIAR</button>
  </form>
</section>

<!-- Rodapé -->
<footer>
  <p>&copy; 2026 Direitos reservados</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
