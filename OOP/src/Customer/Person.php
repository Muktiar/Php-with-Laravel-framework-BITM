<?php
namespace App\Customer;
class person{
    public $name = null;
    public $gender = null;
    public $height = null;

    public function talk()
    {
        return "I am Talking";
    }

    public function walk()
    {
        return "I am Walking";
    }

}