<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/muktiar/Php-with-Laravel-framework-BITM/ecommerce/oop2/Admin/Banners/config.php');


use Bitm\Banner;
$banner=new banner();
//$banners=$banner->uploads();
$banners=$banner->show();
echo '<br>';
//echo '<pre>';
//print_r($banners);
//echo '</pre>';
//var_dump($banner);

//foreach ($banners as $banner):
//
//endforeach;

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Show</title>
</head>
<body>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <h1 class="text-center mb-4"> Show</h1>
                <dl class="row">
                    <dt class="col-sm-3">ID</dt>
                    <dd class="col-sm-9"><?= $banners['id'];?></dd>
                    <dt class="col-sm-3">Title</dt>
                    <dd class="col-sm-9"><?= $banners['title'];?></dd>
                    <dt class="col-sm-3">Description</dt>
                    <dd class="col-sm-9"><?= $banners['description'];?></dd>
                    <dt class="col-sm-3">Image's Name</dt>
                    <dd class="col-sm-9">
                        <?= $banners['picture'];?>
                    <img src="<?=$webroot;?>uploads/<?=$banners['picture'];?>">
                    </dd>
                    <dt class="col-sm-3">Is Active</dt>
                    <dd class="col-sm-9">
                            <?=$banners['is_active']==1?'active':'inactive';
                        //echo $banner['is_active'];

                        ?>
                    </dd>


                    <dt class="col-sm-3">Created At</dt>
                    <dd class="col-sm-9"><?= $banners['created_at'];?></dd>
                    <dt class="col-sm-3">Modified At</dt>
                    <dd class="col-sm-9"><?= $banners['modified_at'];?></dd>

                </dl>

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


