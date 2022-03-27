<?php
include_once ('vendor/autoload.php');
use Bitm\customer\oop2;
$person1= new person();
$person2= new person();
$person3= new person();

echo "I am ".$person1->name." and ".$person1->walk().'<hr>';