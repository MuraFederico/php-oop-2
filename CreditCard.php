<?php 

class CreditCard {
    private $owner_name;
    private $owner_surname;
    private $card_number;
    private $expire_date;
    private $cvv;
    private $expired = false;
    function __construct($name, $surname, $number, $expire, $cvv)
    {
        $this->owner_name = $name;
        $this->owner_surname = $surname;
        $this->card_number = $number;
        $this->expire_date = $expire;
        $this->cvv = $cvv;
        
    }

    function is_expired() {
        if (strtotime(date("Y-m-d")) > strtotime($this->expire_date)) {
            $this->expired = true;
        }
    }

    /**
     * Get the value of owner_name
     */ 
    public function getOwner_name()
    {
        return $this->owner_name;
    }

    /**
     * Get the value of owner_surname
     */ 
    public function getOwner_surname()
    {
        return $this->owner_surname;
    }

    /**
     * Get the value of card_number
     */ 
    public function getCard_number()
    {
        return $this->card_number;
    }

    /**
     * Get the value of expire_date
     */ 
    public function getExpire_date()
    {
        return $this->expire_date;
    }

    /**
     * Get the value of cvv
     */ 
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Get the value of expired
     */ 
    public function getExpired()
    {
        return $this->expired;
    }
}