<?php
//var_dump($_POST);
//title short_description description picture mrp total_sales is_active is_delete
$approot=$_SERVER['DOCUMENT_ROOT'].'/muktiar/Php-with-Laravel-framework-BITM/CRUD/';
//image files upload
$_file_name='img_'.time().'-' .$_FILES['picture']['name'];
$target=$_FILES["picture"]['tmp_name'];
$destination=$approot.'uploads/'.$_file_name;
$is_file_moved=move_uploaded_file($target,$destination);
if ($is_file_moved){
    $_picture=$_file_name;
}
else{
    $_picture=null;
}

$_title=$_POST['title'];
$_title=$_POST['short_description'];
$_title=$_POST['description'];
$_title=$_file_name;
$_title=$_POST['mrp'];
$_title=$_POST['total_sales'];
$_title=$_POST['is_active'];
$_title=$_POST['is_delete'];

//echo $_title;


//Connect to Database.
$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=ecommnerce302713", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query='INSERT INTO `products` (`title`) VALUES (:title)';
$stmt=$conn->prepare($query);
$stmt->bindParam(':title',$_title);
$result=$stmt->execute();
header('location:index.php');