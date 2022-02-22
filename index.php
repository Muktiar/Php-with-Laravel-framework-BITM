
<?php
    echo "hello bitm";

?>
<div></div>
<?php
 $cmnt="hi";
    echo $cmnt;

?>
<div></div>
<?php
$cmnt2="hello world!";
echo $cmnt2;
?>

<?php
echo"<h2> Single Quotes</h2>";
echo"<h3> Example 1.</h3>";
$str='hello text within single quote';
echo $str;
?>
<?php
echo "<br>";
echo"<h3> Example 2.</h3>";
$str1='hello text
multiple line
text within single quoted string';
echo $str1;
echo "<br>";
?>
<?php
echo "<br>";
echo"<h3> Example 3.</h3>";
$str2='hello text
"multiple" line
text within single quoted string';
echo $str2;
echo "<br>";
?>
<?php
echo "<br>";
echo"<h3> Example 4.</h3>";
$str3='hello text
"multiple" line \n
text within single quoted string';
echo $str3;
echo "<br>";
?>
<?php
echo "<br>";
echo"<h3> Example 5.</h3>";
$num1=10;
echo "print value of num=$num1";
echo "<br>";
?>
<?php
echo "<br>";
echo"<h3> Example 6.</h3>";
$num1=10;
$str6='print value of num = '.$num1;
echo $str6;
echo "<br>";
?>
<?php
echo "<br>";
echo"<h3> Example 10.</h3>";
$str3='hello text
"multiple" line \n
text within \' single quoted string';
echo $str3;
echo "<br>";
?>
<?php
echo "<br>";
echo"<h3> Example 11.</h3>";
$str3='hello text
"multiple" line \n
text within \' single quoted \\\\string';
echo $str3;
echo "<br>";
?>
<?php
echo "<br>";
echo"<h3> Example 13.</h3>";
$str3='hello text
"multiple"<br> line \n
text within \' single quotedstring';
echo $str3;
echo "<br>";
?>
<?php
echo"<h3> Example 14.</h3>";
echo nl2br("You can also have\\\\n a new line");
echo "<br>";
?>
<?php
echo"<h2> Double Quoted</h2>";
echo"<h3>  Example 3.</h3>";
$str1="Using double \"quoted\" inside another quoted";
echo $str1;
echo "<br>";
?>
 <?php
echo"<h3>  Example 3.</h3>";
$x=(7+5)*7;

echo $x."\n";
?>


