<?php class User 
{
    protected $userName;
    protected $userMail;
    protected $registered = false;
    protected $cart;

    
    public function getUserName(){
        return $this->userName;
    }
    public function getUserMail(){
        return $this->userMail;
    }
    public function getRegistered(){
        return $this->registered;
    }
    public function getCart(){
        return $this->cart;
    }
    protected function setUserName($_userName){
        $this->name = $_userName;
    }
    protected function setUserMail($_userMail){
        $this->name = $_userMail;
    }
    protected function setRegistered($_registered){
        $this->price = $_registered;
    }
    protected function setCart($_cart){
        $this->cart = $_cart;
    }

    public function __construct($_userName,$_userMail,$_registered,$_cart){
        $this->setUserName($_userName);
        $this->setUserMail($_userMail);
        $this->setRegistered($_registered);
        $this->setCart($_cart);
    }
}