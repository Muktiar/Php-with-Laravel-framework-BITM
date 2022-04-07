<?php
$_id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";


<<<<<<< HEAD
$conn = new PDO("mysql:host=$servername;dbname=ecommerce302713", $username, $password);
=======
$conn = new PDO("mysql:host=$servername;dbname=ecommnerce302713", $username, $password);
>>>>>>> 5aa01343f82136f90e7534f447cdf249e01868e5
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query= "DELETE FROM `labels` where `labels`.`id`=$_id";
$stmt=$conn->prepare($query);
$result=$stmt->execute();
header('Location:index.php');
?>