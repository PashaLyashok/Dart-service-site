<?php

namespace App\Controllers;

use App\Models\Main as ModelMain;
use App\Views\Main as View;
use App\Views\Page404 as View404;
use App\Views\PageHome as ViewHome;
use App\Views\Page as ViewPage;

abstract class Main {
    
    static function on ($path) {

        $data = ModelMain::get($path);

        if(!empty($path) && check_path($path) != false) {

            if($path != '/' && empty($data)) {
                View::render($path);
            } elseif ($path != '/' && !empty($data)) {
                ViewPage::render($data);
            } else {
                ViewHome::render();
            }
            
        } else {
           View404::render();
        }
       
    }
}