<?php
include_once ("vendor/autoload.php");


use Bitm\Calculator\AreaCalculator\Rectangle;
use Bitm\Calculator\AreaCalculator\Circle;
use Bitm\Calculator\AreaCalculator\Triangle;
use Bitm\Product\Product;

$rectangle=new Rectangle(20,20,`cm`);
echo $rectangle->getarea();
echo '<hr>';
$circle=new Circle();
echo $circle->getarea();
echo '<hr>';
$triangle=new Triangle(6,2,`sqcm`);
echo $triangle->getarea();
echo '<hr>';
$product=new Product(`sqcm`);
echo $product->getDetail();
echo '<hr>';
die();
//include_once('Greeting/Greeting.php');
//include_once('Customer/Person.php');


//instantiation of the class person
$person1 = new Person();

//another  instantiation of the class person
$person2 = new Person();

//one more  instantiation of the class person
$person3 = new Person();

echo $person1->getSalary();

//echo "I am " .$person1->name."and".$person1->walk()."now";
//echo '<br>';
//$greeting1 = new Greeting();
//$greeting1->sayHello();