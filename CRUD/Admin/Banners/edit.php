<?php
$webroot='http://localhost/muktiar/Php-with-Laravel-framework-BITM/CRUD';

$_id=$_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=ecommerce302713", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query="SELECT * FROM `banners` WHERE id=:id";
$stmt=$conn->prepare($query);
$stmt->bindParam(':id',$_id);
$result=$stmt->execute();
$banner= $stmt->fetch();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD</title>
</head>
<body>
<section>
    <div class="container">
        <div  class="row justify-content-center">
            <div class="container">
                <h1 class="text-center"> ░E░d░i░t░</h1>
                <form method="post" action="update.php?id=<?= $banner['id']?>"enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="title" name="title" value="<?= $banner['title'];?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-8">
                            <textarea type="text" class="form-control" id="description" name="description" ><?= $banner['description'];?></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="formFile" class="all-form-label">Picture</label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control" id="formFile" name="picture" value=" <?= $banner['picture'];?>">
                            <img src="<?=$webroot;?>/uploads/<?=$banner['picture'];?>">
                            <input type="hidden" name="old_picture" value="<?=$banner['picture'];?>">

                        </div>

                    </div>

                    <div class="mb-3 row form-check">
                        <div class="col-sm-6">
                            <?php
                            if ($banner['is_active']==0){


                            ?>

                            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1">
                            <?php
                           }else{
                            ?>
                            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" checked value="1">
                            <?php
                            }
                            ?>
                        </div>
                        <label for="is_active" class="col-sm-6 form-check-label">Is Active</label>
                    </div>




                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>












