<?php

namespace App;

abstract class Cookie {
    
    public static function set_param($login, $email, $password) {

        if(!empty($login) && $login != '') {
            setcookie('login', $login, 'EXPIRES_COOKIE', 'PATH_COOKIE');
        }

        if(!empty($email) && $email != '') {
            setcookie('email',$email,'EXPIRES_COOKIE', 'PATH_COOKIE');
        }

        if(!empty($password) && $password != '') {
            setcookie('password',$password,'EXPIRES_COOKIE','PATH_COOKIE');
        }
    }

    public static function unset($login, $email, $password) {
        setcookie('login', $login, 'UNSET_COOKIE', 'PATH_COOKIE');
        setcookie('email', $email, 'UNSET_COOKIE', 'PATH_COOKIE');
        setcookie('password', $password, 'UNSET_COOKIE', 'PATH_COOKIE');
    }
}