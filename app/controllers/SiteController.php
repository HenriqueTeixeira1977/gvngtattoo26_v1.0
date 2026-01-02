<?php
namespace App\Controllers;

class SiteController
{
    public function home()
    {
        require_once dirname(__DIR__) . '/views/layout/nav.php';
        require_once dirname(__DIR__) . '/views/layout/header.php';
        require_once dirname(__DIR__) . '/views/home.php';
        require_once dirname(__DIR__) . '/views/layout/footer.php';
    }
}
?>
