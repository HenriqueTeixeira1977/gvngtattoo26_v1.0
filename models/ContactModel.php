<?php
class ContactModel {
    private $pdo;
    private $config;

    public function __construct() {
        $this->pdo = DB::getInstance();
        $this->config = require __DIR__ . '/../config.php';
    }

    /**
     * Salva o lead no banco de dados e envia e-mail de notificação
     */
    public function saveAndNotify($data) {
        try {
            // 1. Salva no banco
            $stmt = $this->pdo->prepare("
                INSERT INTO leads (nome, whatsapp, email, mensagem) 
                VALUES (?, ?, ?, ?)
            ");
            $stmt->execute([
                $data['nome'],
                $data['whatsapp'],
                $data['email'] ?? null,
                $data['mensagem']
            ]);

            // 2. Envia e-mail (opcional, mas recomendado)
            $this->sendNotificationEmail($data);

            return ['status' => 'success', 'message' => 'Mensagem enviada com sucesso! Entraremos em contato em breve.'];
        } catch (Exception $e) {
            // Em produção, logue o erro em arquivo
            return ['status' => 'error', 'message' => 'Erro ao salvar. Tente novamente.'];
        }
    }

    private function sendNotificationEmail($data) {
        $to = $this->config['contact']['email_to'];
        $subject = "Novo Lead GVNG Tattoo - {$data['nome']}";

        $body = "Novo contato recebido:\n\n";
        $body .= "Nome: {$data['nome']}\n";
        $body .= "WhatsApp: {$data['whatsapp']}\n";
        $body .= "E-mail: " . ($data['email'] ?? 'Não informado') . "\n";
        $body .= "Mensagem:\n{$data['mensagem']}\n\n";
        $body .= "Data: " . date('d/m/Y H:i') . "\n";

        $headers = "From: no-reply@gvng.com.br\r\n";
        $headers .= "Reply-To: {$data['email']}\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        mail($to, $subject, $body, $headers);
    }
}