<?php

//Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$_id = $_GET['id'];
$conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "DELETE FROM users WHERE `users`.`id` = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$result = $stmt->execute();
$user = $stmt->fetch();
//var_dump($banners);

header("location:index.php");

?>