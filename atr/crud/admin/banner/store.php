<?php

// $var_dump($_POST);

$_title = $_POST['title'];
// echo $_title;


// Connect to database

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = "INSERT INTO `banners` (`Title`) VALUES (:title);";

$stmt = $conn->prepare($query);
$stmt->bindParam(':title', $_title);
$result = $stmt->execute();
var_dump($result);



?>