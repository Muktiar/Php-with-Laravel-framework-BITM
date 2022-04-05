<?php
$approot=$_SERVER['DOCUMENT_ROOT'].'/muktiar/Php-with-Laravel-framework-BITM/ecommerce/oop2/';

$webroot="http://localhost/muktiar/Php-with-Laravel-framework-BITM/ecommerce/oop2/";

include_once ($approot.'vendor/autoload.php');

use Bitm\Banner;
$banner=new banner();
$banners=$banner->index();


//echo '<pre>';
//print_r($banners);
//echo '</pre>';
////var_dump($banners);



?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Banners List</title>
</head>
<body>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <h1 class="text-center  mb-4"> 𝕭𝖆𝖓𝖓𝖊𝖗 𝕷𝖎𝖘𝖙</h1>
                <ul class="nav justify-content-center fs-5 fs-bold mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="create.php">Add an item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="trash_index.php">Trash List</a>
                    </li>

                </ul>

                <table class="table  table-success table-striped table-bordered table-hover">
                    <thead>
                    <tr>

                        <th scope="col">Title</th>
                        <th scope="col">Status</th>

                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($banners as $banner):


                    ?>
                    <tr>

                        <td><?= $banner['title'];?></td>
                        <td><?=$banner['is_active']==1?'Activated':'Deactivated';?></td>


                        <td>
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <a href="show.php?id=<?= $banner['id'];?>">  <button type="button" class="btn  btn-outline-primary">Show</button></a>
                                <a href="edit.php?id=<?= $banner['id'];?>"> <button type="button" class="btn  btn-outline-secondary">Edit</button>
                                        <a href="trash.php?id=<?= $banner['id'];?>">  <button type="button" class="btn  btn-outline-danger">Trash</button>

                            </div>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    ?>

                    </tbody>
                </table>


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