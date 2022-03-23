<?php
$_id=$_GET['id'];
//var_dump($_POST);

$_title=$_POST['title'];
$_description=$_POST['description'];
//echo $_title;


//Connect to Database.
$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=ecommerce302713", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query='UPDATE `banners` SET `title` = :title, `description` = :description WHERE `banners`.`id` = :id';
$stmt=$conn->prepare($query);
$stmt->bindParam(':id',$_id);
$stmt->bindParam(':title',$_title);
$stmt->bindParam(':description',$_description);
$result=$stmt->execute();
//var_dump($result);
header('location:index.php');