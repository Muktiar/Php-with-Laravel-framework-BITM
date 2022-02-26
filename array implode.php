
<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 2/24/2022
 * Time: 10:00 AM
 */
$array=array('lastname' , 'email' , 'phone');
$c=implode(",",$array);
echo $c;
echo "<br>";
$str = " abc def";
echo strlen($str);
echo "<br>";
$m='Hello abcd';
$findMe='b';
$p=strpos($m,$findMe);
echo $p;
echo "<br>";
$str='HELLO WORLD';
$sl=strtolower($str);
echo $sl;
echo "<br>";
$str1='hello world';
$su=strtoupper($str1);
echo $su;
echo "<br>";

$rest=substr("abcdef",  -2,  2);
echo $rest;
echo "<br>";
$str='Apple';
echo md5($str);
echo "<br>";
echo nl2br("Lorem ipsum dolor sit amet,\n consectetur adipisicing elit.\n Culpa dolorem ea et illo,\n nihil nobis quae vel? \n A earum esse incidunt obcaecati odit repellendus sequi? \n Adipisci alias aut illo ipsa.");
echo "<br>";
echo str_repeat("seip ",5);
echo "<br>";

$phrase="You should eat fruits , vegetables , fibers everyday ";
$health= array('fruits','vegetables','fibers');
$yummy= array('pizza', 'beer', 'icecream');
$a=str_replace($health,$yummy,$phrase);
echo $a;
echo "<br>";
$str2 = 'Hello World';
echo trim($str2,"Hod");
echo "<br>";
$str3 = "hello world";
echo ucfirst($str3);
echo "<br>";




?>