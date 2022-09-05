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
        $this->name = $_price;
    }
    protected function setDiscount($_discount){
        $this->name = $_discount;
    }

    public function __construct($_name,$_price,$_discount){
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setDiscount($_discount);
    }
}


?>