<?php
$_id=$_GET['id'];
$_is_deleted =0;


$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=ecommerce302713", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query='UPDATE `banners` SET `is_deleted` = :is_deleted WHERE `banners`.`id` = :id';
$stmt=$conn->prepare($query);
$stmt->bindParam(':id',$_id);

$stmt->bindParam(':is_deleted',$_is_deleted);
$result=$stmt->execute();
//echo '<br>';
////echo '<pre>';
////print_r($banners);
////echo '</pre>';
////var_dump($result);
//
////foreach ($banners as $banner):
////
////endforeach;
header('location:trash_index.php');
?>