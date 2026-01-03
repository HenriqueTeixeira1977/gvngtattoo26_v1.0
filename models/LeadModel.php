<?php
class LeadModel {
    private $pdo;

    public function __construct() {
        $this->pdo = DB::getInstance();
    }

    public function saveLead($data) {
        $stmt = $this->pdo->prepare("INSERT INTO leads (nome, whatsapp, email, mensagem) VALUES (?, ?, ?, ?)");
        $stmt->execute([$data['nome'], $data['whatsapp'], $data['email'], $data['mensagem']]);
        return $this->pdo->lastInsertId();
    }

    public function getAllLeads() {
        return $this->pdo->query("SELECT * FROM leads ORDER BY data_envio DESC")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLeadById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM leads WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateStatus($id, $status) {
        $stmt = $this->pdo->prepare("UPDATE leads SET status = ? WHERE id = ?");
        $stmt->execute([$status, $id]);
    }

    // Métricas para dashboard
    public function getLeadsCountByStatus() {
        return $this->pdo->query("SELECT status, COUNT(*) as count FROM leads GROUP BY status")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLeadsByDate($days = 30) {
        $stmt = $this->pdo->prepare("SELECT DATE(data_envio) as date, COUNT(*) as count FROM leads WHERE data_envio >= DATE_SUB(NOW(), INTERVAL ? DAY) GROUP BY date");
        $stmt->execute([$days]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}