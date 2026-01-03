<?php
class LeadsController extends AdminController {
    private $leadModel;

    public function __construct() {
        parent::checkAuth();
        $this->leadModel = new LeadModel();
    }

    public function index() {
        $data['leads'] = $this->leadModel->getAllLeads();
        require ADMIN_LAYOUT . 'header.php';
        require ADMIN_VIEW . 'leads/index.php';
        require ADMIN_LAYOUT . 'footer.php';
    }

    public function view($id) {
        $data['lead'] = $this->leadModel->getLeadById($id);
        require ADMIN_LAYOUT . 'header.php';
        require ADMIN_VIEW . 'leads/view.php';
        require ADMIN_LAYOUT . 'footer.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $status = $_POST['status'];
            $this->leadModel->updateStatus($id, $status);
            header("Location: /admin/leads");
        }
        // View para editar
    }
}