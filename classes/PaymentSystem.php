<?php
class PaymentSystem
{
    protected $type;
    protected $cardNumber;
    protected $expireDate;
   
    public function getType(){
        return $this->type;
    }
    public function getCardNumber(){
        return $this->cardNumber;
    }
    public function getExpireDate(){
        return $this->expireDate;
    }
    protected function setType($_type){
        $this->type = $_type;
    }
    protected function setCardNumber($_cardNumber){
        $this->cardNumber = $_cardNumber;
    }
    protected function setExpireDate($_expireDate){
        $this->expireDate = $_expireDate;
    }

    public function __construct($_type,$_cardNumber,$_expireDate){
        $this->setType($_type);
        $this->setCardNumber($_cardNumber);
        $this->setExpireDate($_expireDate);
    }

    public function checkExpirationDate($expireDate){
        if($expireDate>date('y-m-d')){
            return true;
        }
    }
}
?>