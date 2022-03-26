<?php
$str1 = "Hello";
$str2 = "Hello World";
echo strcmp($str1, $str2); // Outputs: -6
echo "<br>";
echo similar_text( $str1, $str2, $percent);
echo "<br>";
echo $percent.'%';
?>