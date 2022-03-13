
<pre>
<?php
$numbers=array(1,2,3,4,5);
echo '<pre>';
print_r($numbers);
echo '</pre>';
echo '<br>';
foreach ($numbers as $key=>$values){
    echo 'value is '.$key.'='.$values .'<br>';

}
echo '<br>';
$numbers[0]='one';
$numbers[1]='Two';
$numbers[2]='Three';
$numbers[3]='Four';
$numbers[4]='Five';
foreach ($numbers as $value){
    echo 'value is '.$value .'<br>';
}

echo '<br>';
//first method to create an associativ create array
$saleries=array(
    'mohammad'=>2000,
    'jon'=>1000,
    'jane'=>300,
);
echo 'salary of mohammad is:-'.$saleries['mohammad'].'<br>';
echo 'salary of jon is:-'.$saleries['jon'].'<br>';
echo 'salary of jane is:-'.$saleries['jane'].'<br>';
echo '<br>';
$saleries=array(
    'mohammad'=>'High',
    'jon'=>'midlow',
    'jane'=>'low',
);
echo 'salary of mohammad is:-'.$saleries['mohammad'].'<br />';
echo 'salary of jon is:-'.$saleries['jon'].'<br />';
echo 'salary of jane is:-'.$saleries['jane'].'<br />';

$marks=array(
    'mohammad'=>array(
        'physics'=>35,
        'maths'=>38,
        'chemistry'=>39
    ),
    'jon'=>array(
        'physics'=>38,
        'maths'=>32,
        'chemistry'=>29
    ),
    'jane'=>array(
        'physics'=>31,
        'maths'=>2,
        'chemistry'=>39
    ),
);
echo '<pre>';
print_r($marks);
echo '</pre>';
echo '<br>';
echo 'Marks for mohammad in physics :';
echo $marks['mohammad']['physics'].'<br />';
echo 'Marks for mohammad in physics :';
echo $marks['jon']['maths'].'<br />';
echo 'Marks for mohammad in physics :';
echo $marks['jane']['chemistry'].'<br />';
echo '<br>';
$fruits=array('orange', 'mango','banana');
echo 'size of the array is:-' .sizeof($fruits).'<br/>';
echo '<br >';
$fruits=array('orange', 'mango','banana');
echo is_array($fruits)? 'array':'not an array';
echo '<br >';
$my_car='mersedes';
echo is_array($my_car)? 'array':'not an array';

echo '<br >';
$os=array('Mac','NT','Irix','Linux');
if (in_array('Irix',$os)){
    echo 'Got Irix';
}
echo '<br >';
if (in_array('mac',$os)){
    echo 'Got Irix';
}
else{
    echo 'Not Found';
}
echo '<br >';

$hatchbacks=array(
    'Suzuki'=>'Baleno',
    'skoda'=>'Fabia',
    'Symbol'=>'120',
    'Tata'=>'tiger',
);

$friends=array('vinod','javed','navjot','samuel');
$merged=array_merge($hatchbacks,$friends);
echo '<pre>';
print_r($merged);
echo '</pre>';
echo '<br>';
$hatchbacks=array(
    'Suzuki'=>'Baleno',
    'skoda'=>'Fabia',
    'Symbol'=>'120',
    'Tata'=>'tiger',
);
$hatchbacks_keys_array=[];
$hatchbacks_values_array=[];
foreach ($hatchbacks as $key=>$value){
//    echo $key.'<br>';
    $hatchbacks_keys_array[]=$key;
    $hatchbacks_values_array[]=$values;
}
print_r($hatchbacks_keys_array);
echo '<hr>';
print_r($hatchbacks_values_array);
echo '<hr>';
print_r(array_keys($hatchbacks));
echo '<hr>';
print_r(array_values($hatchbacks));
echo '<hr>';
$hatchbacks=array(
    'Suzuki'=>'Baleno',
    'skoda'=>'Fabia',
    'Symbol'=>'120',
    'Tata'=>'tiger',
);

$friends=array('vinod','javed','navjot','samuel');
$merged=array_merge($hatchbacks,$friends);
echo '<pre>';
print_r($merged);
echo '</pre>';
echo '<hr>';
$merged=array_values($merged);
echo '<pre>';
print_r($merged);
echo '</pre>';
echo '<hr>';
$fruits=array('orange', 'mango','banana');
print_r($fruits);
$a=array_pop($fruits);
echo $a;
echo '<br>';
var_dump($a);
echo '<hr>';
print_r($fruits);
echo '<hr>';
$fruits=array('orange', 'mango','banana');
print_r($fruits);
$a=array_push($fruits,'kola');
echo $a;
echo '<br>';
var_dump($a);
echo '<hr>';
print_r($fruits);
echo '<hr>';
$a=array_shift($fruits);
echo $a;
echo '<br>';
var_dump($a);
echo '<br>';
print_r($fruits);
echo '<hr>';
$a=array_unshift($fruits,'lici');
echo $a;
echo '<br>';
var_dump($a);
echo '<br>';
print_r($fruits);
echo '<hr>';
$fruits=array('orange', 'mango','banana');
sort($fruits);
print_r($fruits);

echo '<hr>';
$hatchbacks=array(
    'Suzuki'=>'Baleno',
    'skoda'=>'Fabia',
    'Symbol'=>'120',
    'Tata'=>'tiger',
);
print_r(array_flip($hatchbacks));

echo '<hr>';
$num=array(1,2,3,4,5,6,7,8,9,0);
print_r(array_reverse($num));
echo '<hr>';
//important
$search_array=array(
    'first'=>1,
    'second'=>4
);
if (array_key_exists('first',$search_array)){
    echo "the 'first' element is in the array";
}
else{
    echo "the 'first' element is not in the array";

}
echo '<hr>';
?>
</pre>
