<?php

namespace App;

abstract class Cookie {
    
    public static function set_param($firstname, $lastname, $login, $email, $password, $phone) {

        if(!empty($firstname) && $firstname != '') {
            setcookie('firstname', $firstname, 'EXPIRES_COOKIE', 'PATH_COOKIE');
        }

        if(!empty($lastname) && $lastname != '') {
            setcookie('lastname', $lastname, 'EXPIRES_COOKIE', 'PATH_COOKIE');
        }

        if(!empty($login) && $login != '') {
            setcookie('login', $login, 'EXPIRES_COOKIE', 'PATH_COOKIE');
        }

        if(!empty($email) && $email != '') {
            setcookie('email',$email,'EXPIRES_COOKIE', 'PATH_COOKIE');
        }

        if(!empty($password) && $password != '') {
            setcookie('password',$password,'EXPIRES_COOKIE','PATH_COOKIE');
        }

        if(!empty($phone) && $phone != '') {
            setcookie('phone', $phone, 'EXPIRES_COOKIE', 'PATH_COOKIE');
        }
    }

    public static function unset($firstname, $lastname, $login, $email, $password, $phone) {
        setcookie('firstname', $firstname, 'EXPIRES_COOKIE', 'PATH_COOKIE');
        setcookie('lastname', $lastname, 'EXPIRES_COOKIE', 'PATH_COOKIE');
        setcookie('login', $login, 'UNSET_COOKIE', 'PATH_COOKIE');
        setcookie('email', $email, 'UNSET_COOKIE', 'PATH_COOKIE');
        setcookie('password', $password, 'UNSET_COOKIE', 'PATH_COOKIE');
        setcookie('phone', $phone, 'EXPIRES_COOKIE', 'PATH_COOKIE');
    }
}