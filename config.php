<?php
defined('BASE_PATH') or define('BASE_PATH', true);

// Caminhos
define('VIEW_PATH', __DIR__ . '/views/');
define('PUBLIC_LAYOUT', VIEW_PATH . 'layouts/public_');
define('ADMIN_LAYOUT', VIEW_PATH . 'layouts/admin_');
define('PUBLIC_SECTION', VIEW_PATH . 'public/sections/');
define('ADMIN_VIEW', VIEW_PATH . 'admin/');

// Configurações do sistema
return [
    'site' => [
        'title'       => 'GVNG | Tatuagens de Elite',
        'description' => 'GVNG - Tatuagens exclusivas e de luxo. Arte autoral, atendimento premium e experiência única.',
        'author'      => 'HT WebSites Builder by Henrique Teixeira',
    ],
    'contact' => [
        'whatsapp'  => '5513999999999',     // Número completo sem + ou espaços
        'email_to'  => 'contato@gvng.com.br', // E-mail que recebe notificações
    ],
    'gallery' => [
        'images' => [
            'galeria/galeria_1.jpg','galeria/galeria_2.jpg','galeria/galeria_3.jpg',
            'galeria/galeria_1.jpg','galeria/galeria_2.jpg','galeria/galeria_3.jpg'
        ]
    ],
    'db' => [
        'host'     => 'localhost',
        'dbname'   => 'gvng_tattoo',
        'user'     => 'root',        // Mude para o usuário real do seu servidor
        'pass'     => '',            // Senha do banco (vazio no XAMPP local)
        'charset'  => 'utf8mb4'
    ]
];