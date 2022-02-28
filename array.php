<?php
echo "<pre>";
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack).'<br>';
echo "</pre>";
?>
<?php
echo "<pre>";
$stack1 = array("orange", "banana");
array_push($stack1, "apple", "raspberry");
print_r($stack1);
echo "</pre>";
?>
<?php
echo "<pre>";
$softdrinks = ["coffee", "tea","milk"];
$softdrinks=[0=>'coffee',
    1=>'tea',
    2=>'milk'
];
echo $softdrinks[100]='water';
echo $softdrinks[49]='apple juice';
//echo $softdrinks[0].'<br>';
//echo $softdrinks[1].'<br>';
//echo $softdrinks[2].'<br>';
echo "<pre>";
print_r($softdrinks);
echo "</pre>";
?>