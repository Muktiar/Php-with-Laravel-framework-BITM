<?php
include_once ("vendor/autoload.php");


use Bitm\Customer\Person;

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