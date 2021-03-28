<?php

namespace App;

use App\Form as OrderForm;
use App\DB as DataBase;

class FeedBack {

    private $new_feedback;

    public function get_data() {

        $this->new_feedback = new OrderForm($_POST['firstname'], $_POST['lastname'], $_POST['login'], $_POST['email'], $_POST['password'], $_POST['phone']);
        $this->new_feedback->add_message_data($_POST['message']);

        return $this->new_feedback; 
    
    }

    public function insert_data() {

        $this->get_data();

        $insert_db = DataBase::$db->prepare("INSERT INTO `feed_backs` (`firstname`, `lastname`, `email`, `phone`, `message`) VALUES (:firstname, :lastname, :email, :phone, :feedback)"); 

        $insert_db->bindParam(':firstname', $this->new_feedback->firstname);
        $insert_db->bindParam(':lastname', $this->new_feedback->lastname);
        $insert_db->bindParam(':email', $this->new_feedback->email);
        $insert_db->bindParam(':phone', $this->new_feedback->phone);
        $insert_db->bindParam(':feedback', $this->new_feedback->message);
        
        $insert_db->execute();
    } 
}

