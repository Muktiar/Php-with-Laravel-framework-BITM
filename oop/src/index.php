<?php
class Pen{
    public $color='red';
    public $hasCap=false;
    public $shape='round';

    function write(){


    }
}
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











class Book{
    public $isbn = null;
    public $title = null;
    public $author = null;
    public $category = null;
    public $price = null;
}
$himu=new Book();
$himu->title='Himu';
echo $julkarnain->name. ' is receiving '.$himu->title.'.';
echo '<hr>';







class Calculator{
    public $brand=null;
    public $type=null;
    public $color=null;

    public function addition(){

    }
    public function subtract(){

    }

}

class Course{
    public $title=null;
    public $result=null;
//    public $title=null;
//    public $title=null;
}























