<?php

namespace App;
use App\Controllers\Main as Controller;

abstract class Router {
    
    static function start() {

        $path = $_GET['path'];
        $path = array_filter(explode('/', $path));

        if(!empty($path[0])) {
            $path = $path[0];
        } else {
            $path = '/';
        }

        Controller::on($path);
    }
}