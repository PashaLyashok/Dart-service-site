<?php 

use App\Form as Sign_in;
use App\Cookie as Cookies;

if(isset($_POST['sign-up'])) {
    $new_account = new Sign_in($_POST['login'], $_POST['email'], $_POST['password']);
    Cookies::set_param($new_account->login, $new_account->email, $new_account->password);
    header('Location:success');
    exit;
} 

if(isset($_POST['sign-out'])) {
    Cookies::unset($new_account->login, $new_account->email, $new_account->password);
    header('Location:/');
    exit;
}

