<?php

namespace Bitm\Product;

class Product{
    public $title='sqcm';
    public $price=0.00;

    public function __construct($title)
    {
        $this->title = $title;
    }


    public function setTitle($title)
    {
        $this->title = $title;
    }


    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getPrice()
    {
        return $this->price;
    }

    public function getDetail()
    {
        return "The product name is: ".$this->title." and the price is: ".$this->price;
    }
}