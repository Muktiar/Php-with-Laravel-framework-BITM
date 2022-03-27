<?php
include_once ('.../vendor/autoload.php');
use Bitm\person;

$person1= new Person();
$person2= new Person();
$person3= new Person();

echo "I am ".$person1->name." and ".$person1->walk().'<hr>';