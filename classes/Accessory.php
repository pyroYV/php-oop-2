<?php
require_once __DIR__ . '/Product.php';

class Accessory extends Product
{
    protected $toyFor;
   

    public function getToyFor(){
        return $this->toyFor;
    }
  
    protected function setToyFor($_toyFor){
        $this->name = $_toyFor;
    }


    public function __construct($_name,$_price,$_discount,$_toyFor){
        parent::__construct($_name,$_price,$_discount);
        $this->setToyFor($_toyFor);
    }
}

?>