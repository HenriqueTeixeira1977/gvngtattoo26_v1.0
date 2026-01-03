<?php
// enviar.php - Processa o formulário de contato e salva no banco

require_once 'db.php';              // Conexão PDO
require_once 'models/ContactModel.php';  // Model que salva lead e envia e-mail

// Cabeçalho para resposta JSON (usado via AJAX no frontend)
header('Content-Type: application/json');

// Só aceita método POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status'  => 'error',
        'message' => 'Método não permitido.'
    ]);
    exit;
}

// Captura e limpa os dados do formulário
$data = [
    'nome'     => trim($_POST['nome'] ?? ''),
    'whatsapp' => trim($_POST['whatsapp'] ?? ''),
    'email'    => trim($_POST['email'] ?? ''),
    'mensagem' => trim($_POST['mensagem'] ?? ''),
];

// Validação básica
if (empty($data['nome']) || empty($data['whatsapp']) || empty($data['mensagem'])) {
    echo json_encode([
        'status'  => 'error',
        'message' => 'Por favor, preencha todos os campos obrigatórios.'
    ]);
    exit;
}

// Opcional: validação simples de e-mail
if (!empty($data['email']) && !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        'status'  => 'error',
        'message' => 'E-mail inválido.'
    ]);
    exit;
}

// Instancia o model e salva o lead
$contactModel = new ContactModel();
$result = $contactModel->saveAndNotify($data);

echo json_encode($result);