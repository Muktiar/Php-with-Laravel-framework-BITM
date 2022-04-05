<?php
$_id=$_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=ecom2", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query="DELETE FROM products WHERE `products`.`id` = :id ";
$stmt=$conn->prepare($query);
$stmt->bindParam(':id',$_id);
$result=$stmt->execute();
echo '<br>';
//echo '<pre>';
//print_r($banners);
////echo '</pre>';
//var_dump($result);

//foreach ($banners as $banner):
//
//endforeach;
header('location:index.php');
?>