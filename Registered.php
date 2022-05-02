<?php 

include __DIR__ . '/User.php';

class Registered extends User{
    private $password;
    private $discount = 20;
    function __construct($name, $surname, $address, $password)
    {
        parent::__construct($name, $surname, $address);
        $this->password = $password;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of discount
     */ 
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */ 
    public function setDiscount($discount)
    {
        if($discount > 20) {
            $this->discount = $discount;
        }

        return $this;
    }
}