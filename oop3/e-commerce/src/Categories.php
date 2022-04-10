<?php

namespace Bitm;

use PDO;
class Categories
{
    public $conn = null;

    public function __construct()
    {
        //Connect to database
        $servername = "localhost";
        $username = "root";
        $password = "";

        $this->conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }


  public function index()
  {
      $query = "SELECT * FROM `categories`";
      $stmt = $this->conn->prepare($query);
      $result = $stmt->execute();
      $categories = $stmt->fetchAll();
      return $categories;
  }

    public function store()
    {
        $_name = $_POST['name'];
        $_link = $_POST['link'];
        $_created_at = date("Y-m-d h-i-s", time());

        if (array_key_exists('is_draft', $_POST)) {
            $_is_draft = $_POST['is_draft'];
        } else {
            $_is_draft = 0;
        }
        if (array_key_exists('soft_delete', $_POST)) {
            $_soft_delete = $_POST['soft_delete'];
        } else {
            $_soft_delete = 0;
        }

        $query = "INSERT INTO `categories`( `name`, `link`, `is_draft`, `soft_delete`, `created_at`) VALUES (:name,:link,:is_draft,:soft_delete,:created_at);";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $_name);
        $stmt->bindParam(':link', $_link);
        $stmt->bindParam(':is_draft', $_is_draft);
        $stmt->bindParam(':soft_delete', $_soft_delete);
        $stmt->bindParam(':created_at', $_created_at);

        $result = $stmt->execute();

        if ($result) {
            $_SESSION['message'] = "Category is added successfully";
        } else {
            $_SESSION['message'] = "Category is not added";
        }
        header("location:index.php");


    }

    public function show()
    {
        $webroot = "http://localhost/e-commerce/";
        $_id = $_GET['id'];


        $query = "SELECT * FROM `categories` WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);

        $result = $stmt->execute();

        $category = $stmt->fetch();

        return $category;

    }

    public function edit()
    {
        $webroot = "http://localhost/crud/";
        $_id = $_GET['id'];


        $query = "SELECT * FROM `categories` WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);

        $result = $stmt->execute();

        $category = $stmt->fetch();

        return $category;

    }

    public function update()
    {
        $approot = $_SERVER['DOCUMENT_ROOT']."/crud/";

        $_id = $_POST['id'];
        $_name = $_POST['name'];
        $_link = $_POST['link'];
        $_modified_at = date("Y-m-d h-i-s", time());

        if(array_key_exists('is_draft', $_POST)){
            $_is_draft = $_POST['is_draft'];
        }else{
            $_is_draft = 0;
        }
        if(array_key_exists('soft_delete', $_POST)){
            $_soft_delete = $_POST['soft_delete'];
        }else{
            $_soft_delete = 0;
        }



        $query = "UPDATE `categories` SET `name`= :name,`link`=:link,`soft_delete`=:soft_delete,`is_draft`=:is_draft,`modified_at`=:modified_at WHERE `categories`.`id`=:id";


        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':name',$_name);
        $stmt->bindParam(':link',$_link);
        $stmt->bindParam(':is_draft',$_is_draft);
        $stmt->bindParam(':soft_delete',$_soft_delete);
        $stmt->bindParam(':modified_at',$_modified_at);
        $result = $stmt->execute();


        header("location:index.php");

    }

    public function delete()
    {
        $_id = $_GET['id'];

        $query = "DELETE FROM categories WHERE `categories`.`id` = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $_id);
        $result = $stmt->execute();



        header('location:index.php');

    }


}