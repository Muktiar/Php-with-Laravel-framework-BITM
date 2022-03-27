<?php

namespace Bitm\Customer;

//define Class /plan /Blueprint
class Person{
    private $title;
    private $firstname;
    private $lastname;
    private $salary = '10000';


    public function getSalary(){
        return $this->salary;
    }



    public function walk(){
        return 'I am walking...';
    }



}