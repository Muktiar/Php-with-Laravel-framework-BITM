<?php
$_id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=seip", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query= "DELETE FROM `user` where `user`.`id`=$_id";
$stmt=$conn->prepare($query);
$result=$stmt->execute();
header('Location:index.php');
?>