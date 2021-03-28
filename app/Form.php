<?php

namespace App;

class Form {
    
    function __construct($firstname = '', $lastname = '', $login = '', $email = '', $password = '', $phone = '') {
        
        if(!empty($firstname) && $firstname != '') $this->firstname = $firstname;
        if(!empty($lastname) && $lastname != '') $this->lastname = $lastname;
        if(!empty($login) && $login != '') $this->login = $login;
        if(!empty($email) && $email != '') $this->email = $email;
        if(!empty($password) && $password != '') $this->password = $password;
        if(!empty($phone) && $phone != '') $this->phone = $phone;
    }

    function add_data_for_order($product1, $product2) {
        if(!empty($product1) && $product1 != '') $this->product1 = $product1;
        if(!empty($product2) && $product2 != '') $this->product2 = $product2;
    }

    function add_message_data($message) {
        if(!empty($message) && $message != '') $this->message = $message;
    }
}