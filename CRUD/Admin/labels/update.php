<?php
// $var_dump($_POST);
$get = $_REQUEST['id'];
$_title = $_POST['title'];
$_image = $_POST['image'];
// echo $_title;


// Connect to database

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce302713", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = "UPDATE `labels` SET `title`=:title,`picture`=:picture WHERE `id`=$get";


$stmt = $conn->prepare($query);
$stmt->bindParam(':title',$_title);
$stmt->bindParam(':picture',$_image);
$result = $stmt->execute();
var_dump($result);
header('location:index.php');
?>