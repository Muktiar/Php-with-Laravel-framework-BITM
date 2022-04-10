<?php
session_start();
//echo "<pre>";
//var_dump($_POST);
//
//echo "</pre>";
$_id =$_POST['id'];
$_qty = $_POST['order_qty'];

//echo $_title;

//Create database

$conn = new PDO("mysql:host=localhost;dbname=ecommerce", "root", "");
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//insert
$query = "UPDATE orders SET qty = :order_qty WHERE orders.id = :id;";


//prepare a statement
$stmt= $conn ->prepare($query);
$stmt->bindParam(':id',$_id);
$stmt->bindParam(':order_qty',$_qty);


$result = $stmt->execute();
var_dump($result);


if($result){
    $_SESSION['message']="Order is updated successfully";

}
else{
    $_SESSION['message']="Order is not updated";
}
header("location:index.php");