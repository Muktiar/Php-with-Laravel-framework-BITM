
<?php
//array seperate value detect
echo "Example 1";
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(' ', $pizza);
echo "<pre>";
print_r($pieces);
echo "</pre>";
echo"<br>";
echo "<h2>Example 2</h2>>";
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(' p', $pizza);
echo "<pre>";
echo "</pre>";
print_r($pieces);
echo"<br>";

echo "<h2>Example 3</h2>";
$date="2022-02-24";
$date_parts=explode(' -', $date);
echo "<pre>";
print_r($date_parts);
echo "</pre>";
echo"<br>";

echo "<h2>Example 4 </h2>";
$date1="2022/02/24";
$date_parts1=explode('/', $date1);
echo "Year: " .$date_parts1[1]. " ";
echo "Month: " .$date_parts1[2]. " ";
echo "Date: " .$date_parts1[3]. "";

echo "<br>";

echo "<h2>Example 5 </h2>";
$date="2022-02-24";
list($y , $m ,$d)=explode('-', $date);
echo "Year:" .$y." ";
echo "Month:" .$m." ";
echo "Date:" .$d." ";
echo "<br>";
//echo $pieces[0]; // piece1
//echo $pieces[1]; // piece2
?>