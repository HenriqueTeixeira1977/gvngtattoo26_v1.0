<?php
// Habilitar relatórios de erro em ambiente de desenvolvimento
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Definições de timezone e codificação
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR.UTF-8');

// Caminhos base
define('BASE_PATH', dirname(__DIR__));
define('BASE_URL', 'http://localhost/gvngsite'); // ajuste para seu domínio

// Credenciais do banco de dados
define('DB_HOST', 'localhost');
define('DB_NAME', 'gvng_db');
define('DB_USER', 'root');
define('DB_PASS', ''); // insira sua senha

// Configuração PDO
try {
    $pdo = new PDO(
        'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4',
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
