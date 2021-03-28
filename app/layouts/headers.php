<?php 

use App\Form as Sign_in;
use App\Cookie as Cookies;
use App\Order as MainOrder;
use App\FeedBack as Message;

if(isset($_POST['sign-up'])) {
    $new_account = new Sign_in($_POST['firstname'], $_POST['lastname'], $_POST['login'], $_POST['email'], $_POST['password'], $_POST['phone']);
    Cookies::set_param($new_account->firstname, $new_account->lastname, $new_account->login, $new_account->email, $new_account->password, $new_account->phone);
    header('Location:success-reg');
    exit;
} 

if(isset($_POST['sign-out'])) {
    Cookies::unset($new_account->firstname, $new_account->lastname,$new_account->login, $new_account->email, $new_account->password, $new_account->phone);
    header('Location:/');
    exit;
}

if(isset($_POST['order'])) {
    $newOrder = new MainOrder();
    $newOrder->insert_data();
    header('Location: thanks');
    exit;
}

if(isset($_POST['send'])) {
    $newMessage = new Message();
    $newMessage->insert_data();
    header('Location: success_feedback');
    exit;
}

