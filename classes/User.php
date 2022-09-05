<?php class User 
{
    protected $userName;
    protected $userMail;
    protected $registered = false;
    protected $cart = [];

    
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
        $this->userName = $_userName;
    }
    protected function setUserMail($_userMail){
        $this->userMail = $_userMail;
    }
    protected function setRegistered($_registered){
        $this->registered = $_registered;
    }
    protected function setCart($_item){
        $this->cart[] = $_item;
    }

    public function __construct($_userName,$_userMail,$_registered,$_cart){
        $this->setUserName($_userName);
        $this->setUserMail($_userMail);
        $this->setRegistered($_registered);
        $this->setCart($_cart);
    }
}