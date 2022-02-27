<?php
$f=array("m","a", "p", "pe");
$f=array_flip($f);
echo ($f[0])."<br>";
$s=array("ba"=>array("po" =>"15" ,"ca"=>"da"),"cf"=>array("po"=>"17","ca"=>"ch"));
echo $s ["ba"]["po"]."<br>";
$s1=array("ch","gec","Bitm seip" ,"skill investment program");
echo (array_search("Bitm seip",$s1))."<br>";
$f1=array("apple","orange","banana");
echo(next($f1));
echo(next($f1))."<br>";
$t="o'malley wins the heavyweight championship";
echo ucwords($t)."<br>";
echo str_pad("Salad", 5 )." is good."."<br>";
//int $one=1;
//echo "$one";
//int $one=1;
//echo "$one";
$hello="Hello World";
$bye="Bye";
echo $hello;"$bye";
?>
