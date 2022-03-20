<?php
//var_dump($_POST);

$_title=$_POST['title'];
$_description=$_POST['description'];
$_link=$_POST['link'];
//echo $_title;


//Connect to Database.
$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=ecommerce302713", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query='INSERT INTO `pages` (`title`,`description`,`link`) VALUES (:title ,:description ,:link)';
$stmt=$conn->prepare($query);
$stmt->bindParam(':title', $_title, PDO::PARAM_STR);
$stmt->bindParam(':description', $_description, PDO::PARAM_STR);
$stmt->bindParam(':link', $_link, PDO::PARAM_STR);
$result=$stmt->execute();
var_dump($result);