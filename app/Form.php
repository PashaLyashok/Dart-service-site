<?php

namespace App;

class Form {
    
    function __construct($login, $email, $password) {
            
        if(!empty($login) && $login != '') $this->login = $login;
        if(!empty($email) && $email != '') $this->email = $email;
        if(!empty($password) && $password != '') $this->password = $password;
        
    }

}