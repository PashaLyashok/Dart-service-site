<?php 
namespace App\Views;

abstract class PageHome {

    static function render($path = '') {
        
        ob_start();
        require_once './app/layouts/headers.php';
        require_once './app/layouts/head.php';
        require_once './app/layouts/header.php';
        require_once './app/layouts/home.php';
        require_once './app/layouts/footer.php';

        $html = ob_get_clean();
        echo $html;
    }
}