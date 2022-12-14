<?php
class Product
{
    protected $name;
    protected $price;
    protected $discount = 0;
   
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getDiscount(){
        return $this->discount;
    }
    protected function setName($_name){
        $this->name = $_name;
    }
    protected function setPrice($_price){
        $this->price = $_price;
    }
    public function setDiscount($_discount){
        $this->discount = $_discount;
    }

    public function __construct($_name,$_price,$_discount){
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setDiscount($_discount);
    }
}


?>