<?php
include_once ($_SERVER['DOCUMENT_ROOT']."/e-commerce/config.php");

$query = "SELECT * FROM `categories`";

$stmt = $conn->prepare($query);

$result = $stmt->execute();
//var_dump($result);
$categories = $stmt->fetchAll();

//var_dump($banners);




?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>List</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <nav>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="create.php">Add an item</a>
                        </li>
                    </ul>
                </nav>
              <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(count($categories)> 0):

                    foreach($categories as $categorie):
                    ?>
                    <tr>
                        <td> <?php echo $categorie['id']?> </td>
                        <td><?= $categorie['name']?></td>
                        <td><a href="show.php?id=<?= $categorie['id']?>">show</a>|<a href="edit.php?id=<?= $categorie['id']?>">Edit</a> | <a href="delete.php?id=<?= $categorie['id']?>" onclick="return confirm('Are you sure you want to delete')">Delete</a></td>
                    </tr>
                    <?php
                    endforeach;
                    else:
                    ?>
                    <tr>
                        <td colspan="2">No category is available. ?<a href="create.php">Click here to add one.</a></td>
                    </tr>

                    <?php
                    endif;
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
