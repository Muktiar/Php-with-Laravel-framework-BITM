<?php

// $var_dump($_POST);

$_name = $_POST['name'];
$_link = $_POST['email'];
$_link = $_POST['password'];
// echo $_title;


// Connect to database

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = "INSERT INTO `admins` (`name`,`email`,`password`) VALUES (:name ,:email ,:password)";

$stmt = $conn->prepare($query);
$stmt->bindParam(':name', $_name);
$stmt->bindParam(':email', $_email);
$stmt->bindParam(':password', $_password);
$result = $stmt->execute();
var_dump($result);



?>