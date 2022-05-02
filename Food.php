<?php
include __DIR__ . '/Product.php';

class Food extends Product {
    private $dosage;
    private $ingredients;

    /**
     * Get the value of dosage
     */ 
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Set the value of dosage
     *
     * @return  self
     */ 
    public function setDosage($dosage)
    {
        $this->dosage = $dosage;

        return $this;
    }

    /**
     * Get the value of ingredients
     */ 
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     *
     * @return  self
     */ 
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }
}