<?php
//echo "<pre>";
//var_dump($_POST);
//
//echo "</pre>";
session_start();
$_orderqty = $_POST['order_quantity'];
//echo $_title;

//Create database

$conn = new PDO("mysql:host=localhost;dbname=ecommerce", "root", "");
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//insert
$query = "INSERT INTO orders (qty) VALUES (:order_quantity)";


//prepare a statement
$stmt= $conn ->prepare($query);
$stmt->bindParam(':order_quantity',$_orderqty);

$result = $stmt->execute();
var_dump($result);

if($result){
    $_SESSION['message']="Order is added successfully";

}
else{
    $_SESSION['message']="Order is not added";
}

header("location:index.php");
