<?php

namespace Bitm\Calculator\AreaCalculator;

class Circle{
public $radius =5;
const PI=3.1416;


    public function setRadius($radius)
    {
        $this->radius = $radius;
    }


    public function getArea()
    {
        return self::PI* $this->radius*$this->radius;
    }

}

?>