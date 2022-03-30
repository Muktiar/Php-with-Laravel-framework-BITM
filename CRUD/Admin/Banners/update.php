<?php
$approot=$_SERVER['DOCUMENT_ROOT'].'/muktiar/Php-with-Laravel-framework-BITM/CRUD/';
//image files upload
if ($_FILES['picture']['name']!=''){
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
}
else{
    $_picture=$_POST['old_picture'];

}




$_id=$_GET['id'];
//var_dump($_POST);


$_title=$_POST['title'];
$_description=$_POST['description'];

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
$query='UPDATE `banners` SET `title` = :title, `description` = :description,`picture` = :picture,`is_active` = :is_active  WHERE `banners`.`id` = :id';
$stmt=$conn->prepare($query);
$stmt->bindParam(':id',$_id);
$stmt->bindParam(':title',$_title);
$stmt->bindParam(':description',$_description);
$stmt->bindParam(':picture',$_picture);
$stmt->bindParam(':is_active',$_is_active);

$result=$stmt->execute();
//var_dump($result);
header('location:index.php');
