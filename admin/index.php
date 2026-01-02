<!-- public/index.php -->
<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/app/controllers/SiteController.php';

use App\Controllers\SiteController;

$controller = new SiteController();
$controller->home();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet">


</head>
<body>
    <h1>Hellow Word</h1>

      <!-- HERO -->
        <section class="hero">
            <video autoplay muted loop playsinline class="hero-video">
            <source src="../public/assets/videos/gvng_hero.mp4" type="video/mp4">
            Seu navegador não suporta vídeos em HTML5.
            </video>
            <div class="hero-content">
            <h1>Sua Chamada Aqui</h1>
            <p>Mensagem impactante</p>
            <a href="#contato" class="btn">Agende agora</a>
            </div>
        </section>



    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/public/assets/js/main.js"></script>

</body>
</html>
