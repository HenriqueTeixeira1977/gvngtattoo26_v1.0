<?php
class DashboardController extends AdminController {
    private $leadModel;

    public function __construct() {
        parent::checkAuth();
        $this->leadModel = new LeadModel();
    }

    public function index() {
        $data = [
            'leads_total' => count($this->leadModel->getAllLeads()),
            'leads_by_status' => $this->leadModel->getLeadsCountByStatus(),
            'leads_chart_data' => $this->leadModel->getLeadsByDate(30), // Para gráfico
        ];

        require ADMIN_LAYOUT . 'header.php';
        require ADMIN_VIEW . 'dashboard.php'; // View com métricas e Chart.js
        require ADMIN_LAYOUT . 'footer.php';
    }
}