<?php

namespace App;

use App\Form as OrderForm;
use App\DB as DataBase;

class Order {

    private $new_order;

    public function get_data() {

        $this->new_order = new OrderForm($_POST['firstname'], $_POST['lastname'], $_POST['login'], $_POST['email'], $_POST['password'], $_POST['phone']);
        $this->new_order->add_data_for_order($_POST['product1'], $_POST['product2']);

        return $this->new_order; 
    
    }

    public function insert_data() {

        $this->get_data();

        $insert_db = DataBase::$db->prepare("INSERT INTO `orders` (`firstname`, `lastname`, `email`, `phone`, `product1`, `product2`) VALUES (:firstname, :lastname, :email, :phone, :product1, :product2)"); 

        $insert_db->bindParam(':firstname', $this->new_order->firstname);
        $insert_db->bindParam(':lastname', $this->new_order->lastname);
        $insert_db->bindParam(':email', $this->new_order->email);
        $insert_db->bindParam(':phone', $this->new_order->phone);
        $insert_db->bindParam(':product1', $this->new_order->product1);
        $insert_db->bindParam(':product2', $this->new_order->product2);
        
        $insert_db->execute();
    } 
}

