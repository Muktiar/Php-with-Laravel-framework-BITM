<?php
echo"<h3> Varieable Handeling</h3>";
echo"<h2> example 1.</h2>";
$var=0;
if(empty($var)){
    echo"varieable empty";
}
echo"<br>";
?>

<?php
echo"<h2> example 2.</h2>";
$var2='';
if(empty($var2)){
    echo"varieable empty";
}
echo"<br>";

echo"<h2> example 3.</h2>";
$var3;
if(empty($var3)){
    echo"varieable empty";
}
echo"<br>";

echo"<h2> example 4.</h2>";
$var4='123';
if(empty($var4)){
    echo"varieable empty";
}
echo"<br>";

echo"<h2> example 5.</h2>";
$var5 = [1,2];
if(empty($var5)){
    echo"varieable empty";
}
echo"<br>";

echo"<h2> example 6.</h2>";
$var6 = false;
if(empty($var6)){
    echo"varieable empty";
}
echo"<br>";
echo"<h2> example 7.</h2>";
$var7 = true;
if(empty($var7)){
    echo"varieable empty";
}
echo"<br>";

echo"<h2> example 8.</h2>";
$var8 = '123';
if(empty($var8)){
    echo"varieable empty";
}
else{
    echo"varieable";
}
echo"<br>";

//array
echo "<h2> ex 1.</h2>";
$students = array ('Wafi','Fatema', 'Ayesha');
echo is_array($students);
echo'<br>';
if(is_array($students)){
    echo "Array";
}
else{
    echo "Not Array";
}
echo'<br>';
echo is_array($students) ? "Array":"Not an array";
echo "<br>";
echo "<h2> ex 2.</h2>";
$my_students = 'This is String';
echo is_array($my_students) ? "Array":"Not an array";
echo "<br>";

//null
//echo "<h2> ex 1.</h2>";
//$val1 = null;
//echo is_null($val1) ? "Null":"Not a Null";
//echo "<h2> ex 2.</h2>";
//$val2 = 0;
//echo is_null($val2) ? "Null":"Not a Null";

//isset
echo "<h2> Is_set</h2>";
echo "<h2> ex 1.</h2>";
$val3 = '';
echo isset($val3) ? "Set":"Not Set";
echo "<br>";
echo "<h2> ex 2.</h2>";
$x ;
$a="test";
$b="123";
var_dump(isset($x));
echo "<br>";
var_dump(isset($a));
echo "<br>";
var_dump(isset($b));
echo "<br>";
echo "<h2> ex 5.</h2>";
unset ($a);
var_dump(!isset($a));
echo "<br>";
var_dump(isset($a , $b));
echo "<h2> ex 4.</h2>";
$foo= NULL;
var_dump(!isset($foo));
echo "<br>";

// pre tag for print array
echo "<pre>";
$h = array ('a'=>'apple', 'b'=> 'banana',
                'c'=>array('x','y','z'));
print_r($h);
echo "<br>";
$g = serialize(array ('a'=>'apple', 'b'=> 'banana',
    'c'=>array('x','y','z')));
echo $g;
echo "<br>";
print_r(unserialize($g));

echo "</pre>";


?>


