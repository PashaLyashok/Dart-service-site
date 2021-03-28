<?php 

namespace App\Models;


abstract class Main {

    
    static function get($path) {
       
        $query = \APP\DB::$db->query("SELECT `title`,`content` FROM `pages` WHERE `path` = '". $path ."' AND `priority` = 'secondary'");
        $result = $query->fetchAll();
        
        return $result;

    }


}