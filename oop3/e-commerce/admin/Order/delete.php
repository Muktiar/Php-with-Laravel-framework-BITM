<?php
session_start();
$_id = $_GET['id'];
/*echo $_id;*/
$conn = new PDO("mysql:host=localhost;dbname=ecommerce", "root", "");
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*echo "connect successfully";*/


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