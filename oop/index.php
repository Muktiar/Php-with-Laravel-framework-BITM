<?php
//include_once ('App/Products/Physical/Pen.php');
//include_once ('App/Customer/Person.php');
//include_once ('App/Products/Physical/Book.php');
//include_once ('App/Products/Physical/Calculator.php');
//include_once ('App/Products/Virtual/Course.php');


include_once ('vendor/autoload.php');
use App\Customer\Person;
use App\Products\Physical\Pen;
use App\Products\Physical\book;
use App\Products\Physical\Calculator;

$julkarnain= new Person();
$julkarnain->name = 'julkarnain';
$julkarnain->gender = 'Male';
$julkarnain->height = '5ft';
echo $julkarnain->talk();
echo '<hr>';
echo  $julkarnain->name. " is ". $julkarnain->height.' tall. ';
echo '<hr>';
$fatema= new Person();
$fatema->name = 'fatema';
$fatema->gender = 'feMale';
$fatema->height = '6ft';

echo $fatema->talk();
echo '<hr>';

$himu=new Book();
$himu->title='Himu';
echo $julkarnain->name. ' is receiving '.$himu->title.'.';
echo '<hr>';































