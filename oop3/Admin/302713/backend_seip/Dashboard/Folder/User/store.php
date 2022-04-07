<?php
//var_dump($_POST);


$f_name=$_POST['f_name'];
$u_name=$_POST['u_name'];
$_email=$_POST['email'];
$_number=$_POST['number'];
$_password=$_POST['password'];
//echo $_title;


//Connect to Database.
$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=seip", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query='INSERT INTO `user` (`f_name`, `u_name`, `email`, `number`, `password`) VALUES (:f_name, :u_name, :email, :number, :password);';
$stmt=$conn->prepare($query);
$stmt->bindParam(':f_name',$f_name);
$stmt->bindParam(':u_name',$u_name);
$stmt->bindParam(':email',$_email);
$stmt->bindParam(':number',$_number);
$stmt->bindParam(':password',$_password);
$result=$stmt->execute();
// var_dump($result);
header('Location:index.php');