<?php
$_id = $_GET['id'];
$_is_deleted = 0;

//Connect to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "UPDATE `banners` SET `is_deleted` = :is_deleted WHERE `banners`.`id` = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$stmt->bindParam(':is_deleted', $_is_deleted);
$result = $stmt->execute();

header('location:index.php');
