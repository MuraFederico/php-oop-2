<?php

include __DIR__ . '/Product.php';

class Accessories {
    private $features;
    
    /**
     * Get the value of features
     */ 
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Set the value of features
     *
     * @return  self
     */ 
    public function setFeatures($features)
    {
        $this->features = $features;

        return $this;
    }
}