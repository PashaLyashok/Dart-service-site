<?php

namespace App\Controllers;

use App\Views\Main as View;
use App\Views\Page404 as View404;
use App\Views\PageHome as ViewHome;

abstract class Main {
    
    static function on ($path) {

        if(!empty($path) && check_path($path) != false) {

            if($path != '/') {
                View::render($path);
            } else {
                ViewHome::render();
            }
            
        } else {
           View404::render();
        }
       
    }
}