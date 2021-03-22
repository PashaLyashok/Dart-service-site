<?php

namespace App;

abstract class DB {

    static $db;

    static function connect() {

        try {
            self::$db = new \PDO('mysql:dbname=db_site2;host=localhost', 'root', 'root');
        } catch (\PDOException $Exception) {
            echo 'Ошибка соединения с БД: ['. $Exception-> getCode() . '] '. $Exception->getMessage();
            exit;
        }

        return self::$db;
    }
        
}