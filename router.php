<?php
require_once 'config.php';
require_once 'db.php';
// Require models e controllers necessários

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/');

switch ($uri) {
    case '':
    case '/':
        (new HomeController())->index();
        break;
    case '/admin/login':
        // Lógica de login (novo LoginController)
        break;
    case '/admin/dashboard':
        (new DashboardController())->index();
        break;
    case '/admin/leads':
        (new LeadsController())->index();
        break;
    case '/admin/leads/view':
        (new LeadsController())->view($_GET['id']); // Assuma GET id
        break;
    // Adicione mais rotas...
    default:
        http_response_code(404);
        echo "Página não encontrada.";
}