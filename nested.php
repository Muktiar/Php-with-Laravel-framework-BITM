<?php
$human=[
  'name'=>'Jhon Doe',
  'age'=>21,
  'email'=>'jhon@email.com'
];
if(is_array($human)){
    if(isset($human['name'])){
        echo 'Name: '.$human['name'].'<br>';
    }
    if(isset($human['age'])){
        echo 'Age: '.$human['age'].'<br>';
    }
    if(isset($human['email'])){
        echo 'Email: '.$human['email'].'<br>';
    }

}