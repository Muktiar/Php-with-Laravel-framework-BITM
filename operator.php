<?php
$x=10;
$y=4;
echo($x+$y)."<br>";
echo($x-$y)."<br>";
echo($x*$y)."<br>";
echo($x/$y)."<br>";
echo($x%$y)."<br>";
echo($x**$y)."<br>";
echo"----------------- <br>";
$x=10;
echo $x ."<br>";

$x=20;
$x+=30;
echo $x ."<br>";
$x=30;
$x-=10;
echo $x ."<br>";
$x=5;
$x*=25;
echo $x ."<br>";
$x=50;
$x/=50;
echo $x ."<br>";
$x=100;
$x%=15;
echo $x ."<br>";
echo"-----------------  <br>";
$y=75;
echo $y ."<br>";
$y=100;
$y+=200;
echo $y ."<br>";
$y=500;
$y-=100;
echo $y ."<br>";
$y=400;
$y*=3;
echo $y ."<br>";
$y=200;
$y/=5;
echo $y ."<br>";
$x =25;
$y=35;
$z="25";
var_dump($x==$y);
echo "<br>";
var_dump($x===$z);
echo"<br>";
var_dump($x!==$y);
echo "<br>";
var_dump($x<$y);
echo "<br>";
var_dump($x>$y);
echo "<br>";
var_dump($x<=$y);
echo "<br>";
var_dump($x>=$y);
echo "<br>";
$a=42;
$b=28;
if ($a==$b){
    echo"test1 <br>";
}
else{
    echo "test2 <br>";
}
if ($a<$b){
    echo"test1 <br>";
}
else{
    echo "test2 <br>";
}
if ($a>$b){
    echo"test1 <br>";
}
else{
    echo "test2 <br>";
}
if ($a!=$b){
    echo"test1 <br>";
}
else{
    echo "test2 <br>";
}
if ($a>=$b){
    echo"test1 <br>";
}
else{
    echo "test2 <br>";
}
if ($a<=$b){
    echo"test1 <br>";
}
else{
    echo "test2 <br>";
}
$x=10;
echo ++$x ."<br>";
echo $x;
$x1=25;
echo $x++."<br>";
echo $x1;
$x2=35;
echo "<br>";
echo --$x2."<br>";
echo $x2;
echo "<br>";
$a=45;
$b=0;
if ($a && $b){
    echo"test1 <br>";                                             
}
else{
    echo "test2 <br>";
}
if ($a and $b){
    echo"test1<br>";
}
else{
    echo "test2<br>";
}
if ($a || $b){
    echo"test1<br>";
}
else{
    echo "test2<br>";
}
if ($a or $b){
    echo"test1<br>";
}
else{
    echo "test2<br>";
}
if ($a xor $b){
    echo"test1<br>";
}
else{
    echo "test2<br>";
}
if ($a){
    echo"test1<br>";
}
else{
    echo "test2<br>";
}
if (!$a){
    echo"test1<br>";
}
else{
    echo "test2<br>";
}
if ($b){
    echo"test1<br>";
}
else{
    echo "test2<br>";
}
if (!$b){
    echo"test1<br>";
}
else{
    echo "test2<br>";
}
$x=50;
$y=30;
if ($x==50 and $y==30){
    echo"testy1<br>";
}
else{
    echo "testy2<br>";
}
if ($x==50 or $y==30){
    echo"ttesty1<br>";
}
else{
    echo "ttesty2<br>";
}
if ($x==50 xor $y==30){
    echo"teesty1<br>";
}
else{
    echo "teesty2<br>";
}
if ($x==50 && $y==30){
    echo"testttty1<br>";
}
else{
    echo "testttty2<br>";
}
if ($x==50 || $y==30){
    echo"tesssty1<br>";
}
else{
    echo "tesssty2<br>";
}


?>