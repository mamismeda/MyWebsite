<?php

class Car
{
    // Properties / Fields
    private $brand;
    private $color;
    private $vehicleType = "car";

    // Contsructor
    public function __construct($brand, $color = "none")
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Getter & setter methods
    

    // Method
    public function getCarInfo() {
        return "Brand" . $this->brand . ", Color: " . $this->color; 
    }
}



