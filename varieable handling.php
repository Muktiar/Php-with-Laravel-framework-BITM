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
?>


