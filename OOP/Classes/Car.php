<?php

class Car
{
    // Properties / Fields
    private $brand;
    private $color;
    public $vehicleType = "car";

    // Contsructor
    public function __construct($brand, $color = "none")
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Method
    
}

$car01 = new Car("Volvo", "Green");


