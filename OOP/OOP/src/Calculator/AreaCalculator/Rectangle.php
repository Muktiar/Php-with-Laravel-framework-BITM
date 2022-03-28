<?php

namespace Bitm\Calculator\AreaCalculator;

class Rectangle{
public $length=0;
    public $width=0;

    /**
     * @return int
     */
    public function __construct($length,$width)
    {
        $this->length=$length;
        $this->width=$width;

    }

    /**
     * @return int
     */
    public function getArea()
    {
        $area=$this->length*$this->width;
        return $area;
    }

}

?>