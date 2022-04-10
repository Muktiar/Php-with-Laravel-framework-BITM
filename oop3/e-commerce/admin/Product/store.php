<?php
$approot = $_SERVER['DOCUMENT_ROOT'].'/crud/';
//Connect to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$filename = 'IMG_'.time().'_'.$_FILES['picture']['name'];

$target = $_FILES['picture']['tmp_name'];

$destination =$approot."uploads/".$filename;

$is_file_moved = move_uploaded_file($target, $destination);

if($is_file_moved){
    $_picture = $filename;
}else{
    $_picture = null;
}


$_title = $_POST['title'];
$_short_description = $_POST['short_description'];
$_description = $_POST['description'];
$_mrp = $_POST['mrp'];
$_is_active = $_POST['is_active'];

if(array_key_exists('is_active', $_POST)){
    $_is_active = $_POST['is_active'];
}else{
    $_is_active = 0;
}
if(array_key_exists('is_deleted', $_POST)){
    $_is_deleted = $_POST['is_deleted'];
}else{
    $_is_deleted = 0;
}


//Y-m-d h:i:s
$_created_at = date('Y-m-d h:i:s', time());

$query = "INSERT INTO `products` (title`, `picture`,`short_description`,`description`, `mrp`, `is_active`, `is_deleted`,`created_at`, `modified_at`) VALUES (:title,:picture,:short_description,:description,:mrp,:is_active,:is_deleted,:NULL,:NULL)";

$stmt = $conn->prepare($query);
$stmt->bindParam(':title',$_title);
$stmt->bindParam(':short_description',$_short_description);
$stmt->bindParam(':description',$description);
$stmt->bindParam(':mrp',$_mrp);
$stmt->bindParam(':is_active',$_is_active);
$stmt->bindParam(':created_at',$_created_at);
$stmt->bindParam(':is_deleted',$_is_deleted);
$stmt->bindParam(':picture',$_picture);

$result = $stmt->execute();

//if($result){
//    $_SESSION['message'] = "The product is added successfully";
//}else{
//    $_SESSION['message'] = "The product is not added.";
//}
//header("location:index.php");






