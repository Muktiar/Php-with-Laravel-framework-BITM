<?php
$_id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query ="DELETE FROM orders WHERE orders.id = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id',$_id);
$result = $stmt->execute();

/*$banner = $stmt-> fetch();*/

var_dump($result);

if($result){
    $_SESSION['message']="Order is deleted successfully";

}
else{
    $_SESSION['message']="Order is not deleted";
}
header("location:index.php");
?>