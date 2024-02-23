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
}

$car01 = new Car("Volvo", "Green");
$car02 = new Car("BMW");
