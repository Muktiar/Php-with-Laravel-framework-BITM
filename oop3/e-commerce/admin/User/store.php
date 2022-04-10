<?php

$_full_name = $_POST['full_name'];
$_user_name = $_POST['user_name'];
$_mail = $_POST['mail'];
$_mobile = $_POST['mobile'];
$_pass = $_POST['pass'];
//echo $_title;

//Connect to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "INSERT INTO `users` (`full_name`, `user_name`, `mail`, `mobile`, `pass`) VALUES (:full_name,:user_name,:mail,:mobile,:pass)";

$stmt = $conn->prepare($query);
$stmt->bindParam(':full_name', $_full_name);
$stmt->bindParam(':user_name', $_user_name);
$stmt->bindParam(':mail', $_mail);
$stmt->bindParam(':mobile', $_mobile);
$stmt->bindParam(':pass', $_pass);
$result = $stmt->execute();
header("location:index.php");







