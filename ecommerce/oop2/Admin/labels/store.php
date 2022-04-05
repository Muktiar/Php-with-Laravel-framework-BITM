<?php
//var_dump($_POST);

$_title=$_POST['title'];
$_picture=$_POST['picture'];
//echo $_title;


//Connect to Database.
$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=ecommnerce302713", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query='INSERT INTO `labels` (`title`,`picture`) VALUES (:title,:picture)';
$stmt=$conn->prepare($query);
$stmt->bindParam(':title',$_title);
$stmt->bindParam(':picture',$_picture);
$result=$stmt->execute();
<<<<<<< HEAD
// var_dump($result);
=======
//var_dump($result);
>>>>>>> 5aa01343f82136f90e7534f447cdf249e01868e5
header('location:index.php');