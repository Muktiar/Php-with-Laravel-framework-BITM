<?php
//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
//die();
//var_dump($_POST);
//echo '<pre>';
//print_r($_FILES) ;
//echo '</pre>';
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
//Y-M-D h-m-s
$_title=$_POST['title'];
$_description=$_POST['description'];
//$_picture=$_file_name;
date_default_timezone_set('ASIA/DHAKA');
$_created_at=date("Y-m-d h-i-s",time());

if (array_key_exists('is_active',$_POST)){
    $_is_active=$_POST['is_active'];
}else{
    $_is_active=0;
}

//echo $_title;


//Connect to Database.
$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=ecommerce302713", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query='INSERT INTO `banners` (`title`,`description`,`picture`,`is_active`,`created_at`) VALUES (:title,:description,:picture,:is_active,:created_at)';
$stmt=$conn->prepare($query);
$stmt->bindParam(':title',$_title);
$stmt->bindParam(':description',$_description);
$stmt->bindParam(':picture',$_picture);
$stmt->bindParam(':is_active',$_is_active);
$stmt->bindParam(':created_at',$_created_at);
$result=$stmt->execute();
//var_dump($result);
header('location:index.php');
