<?php

// Connect to database
echo "<pre>";
$_id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query= "DELETE FROM `categories` where `categories`.`id`=$_id";
$stmt= $conn-> prepare($query);
$stmt->bindParam('_id',$_id);
$result = $stmt->execute();
//$categories= $stmt->fetch();

//var_dump($banner);

header("location: index.php");

