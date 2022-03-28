<?php

namespace Bitm\Calculator\AreaCalculator;

class triangle{
    public  $base = 0;
    public $height = 0;

    public function __construct($base,$height)
    {
        $this->base=$base;
        $this->height=$height;

    }

    public function getArea()
    {
        $area=($this->base*$this->height)/2;
        return $area;
    }

}

?>