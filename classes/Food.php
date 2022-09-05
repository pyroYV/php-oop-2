<?php
require_once __DIR__ . '/classes/Products.php';

class Food extends Product
{
    protected $foodFor;
    protected $expireDate;
    protected $ingredientsList = [];

    public function getFoodFor(){
        return $this->foodFor;
    }
    public function getExpireDate(){
        return $this->expireDate;
    }
    public function getIngredientsList(){
        return $this->ingredientsList;
    }
    protected function setFoodFor($_foodFor){
        $this->name = $_foodFor;
    }
    protected function setExpireDate($_expireDate){
        $this->name = $_expireDate;
    }
    protected function setIngredientsList($_ingredientsList){
        $this->name = $_ingredientsList;
    }

    public function __construct($_name,$_price,$_discount,$_foodFor,$_expireDate,$_ingredientsList){
        Product::__construct($_name,$_price,$_discount);
        $this->setFoodFor($_foodFor);
        $this->setExpireDate($_expireDate);
        $this->setIngredientsList($_ingredientsList);
    }
}

?>
