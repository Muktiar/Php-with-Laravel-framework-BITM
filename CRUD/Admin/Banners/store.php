<?php
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
$_title=$_POST['title'];
$_description=$_POST['description'];
$_picture=$_file_name;

//echo $_title;


//Connect to Database.
$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=ecommerce302713", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query='INSERT INTO `banners` (`title`,`description`,`picture`) VALUES (:title,:description,:picture)';
$stmt=$conn->prepare($query);
$stmt->bindParam(':title',$_title);
$stmt->bindParam(':description',$_description);
$stmt->bindParam(':picture',$_picture);
$result=$stmt->execute();
//var_dump($result);
header('location:index.php');
