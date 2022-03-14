<pre>
<?php
$input=array('Neo','Morpias','Cyper','fank');
$rand_keys=array_rand($input,2);
echo $input[$rand_keys[0]]."\n";
echo $input[$rand_keys[1]]."\n";
echo "<hr>";
$base=array('orange','banana','apple','raspberry');
$replacement =array(0=>'Pineapple',4=>'cherry');
$replacement2=array(0=>'grape');
$basket=array_replace($base,$replacement,$replacement2);
print_r($basket);
echo '<hr>';
$input=array("php",4.0,array('green','red'));
$reversed=array_reverse($input);
$prereversed=array_reverse($input, true);
print_r($input);
print_r($reversed);
print_r($prereversed);
echo '<hr>';
$array=array(0=>'Blue',1=>'red',2=>'green',3=>'red');
$key=array_search('yellow',$array);
$key=array_search('red',$array);
var_dump($key);
print_r($key).'<br>';
echo 'Answer not given';
echo '<hr>';
$stack=array('orange','banana','apple','raspberry');
$fruit=array_shift($stack);
print_r($stack);
echo '<hr>';
$input=array('a','b','c','d','e');
$output=array_slice($input,2);
$output=array_slice($input,-2 , 1);
$output=array_slice($input,0,3);
print_r(array_slice($input, 2,-1));
print_r(array_slice($input, 2,-1,true));
echo "<hr>";
$input=array('red','green','blue','yellow');
array_splice($input,2);
$input=array('red','green','blue','yellow');
$a=array_splice($input,1,-1);
print_r($a).'<br>';
$input=array('red','green','blue','yellow');
$b=array_splice($input,1,count($input),"orange");
print_r($b).'<br>';
$input=array('red','green','blue','yellow');
$c=array_splice($input,-1,1,array('black','maroon'));
print_r($c).'<br>';
$input=array('red','green','blue','yellow');
$d=array_splice($input,-1,1,array('black','maroon'));
print_r($d).'<br>';
echo '<hr>';
$a=array(2,4,6,8);
echo 'sum(a)= '.array_sum($a) ;
echo '<br>';
$b=array('a'=>1.2,'b'=>2.3,'c'=>3.4);
echo 'sum(b)= '.array_sum($b) ;
echo '<hr>';
$city='san francisco';
$state='CA';
$event='SIGGARAPH';
$location_vars=array('city','state');
$result=compact('event','nothing_here'.$location_vars);
print_r($result);
echo '<hr>';
$a[0]=1;
$a[1]=3;
$a[2]=5;
$result=count($a);
print_r($result);
echo '<hr>';
$b[0]=7;
$b[1]=9;
$b[2]=11;
$result=count($b);
print_r($result);
$result=count(null);
$result=count(false);
echo $result;















?>

    </pre>
