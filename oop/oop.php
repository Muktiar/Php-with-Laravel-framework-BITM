<?php
class User{
    public $firstname="registered";
    public function user(){
        return "hello ".$this->firstname;
    }
}
class Car{
    public $comp;
    public $color="beige";
    public $hasSunRoof=true;
    private $model;
    public function setModel($model)
    { $this->$model=$model;}
        public
        function getModel()
        {
            return "The car model is : " .$this->model;
        }


    public function hello()
    {
        return "beep";
    }
    public function hello1()
    {
        return "Beep I am a <i>".$this->comp. "</i>,and I am <i>". $this->color."</i>";
    }

}
$bmw = new Car();
$mercedes = new Car();
$bmw -> color ='blue';
$bmw -> comp ='BMW';
$mercedes -> comp ='Mercedes benz';
echo $bmw ->color.'<br>';
echo $bmw ->comp.'<br>';
echo$mercedes ->comp.'<br>';
echo $mercedes ->color.'<hr>';
$car1=new Car ();
$car2=new Car ();
echo $car1->hello().'<br>';
echo $car2->hello().'<hr>';
echo $bmw->hello1().'<br>';
echo $mercedes->hello1().'<hr>';
//----------------------------------------------
//exercise 1:
$user = new User();
echo $user -> user().'<hr>';
//----------------------------------------------
//$mercedes ->model='Mercedes'.'<br>';
//echo $mercedes->getmodel().'<hr>';
//----------------------------------------------
$mercedes->setModel ("Mercedes");
echo $mercedes ->getModel();



?>