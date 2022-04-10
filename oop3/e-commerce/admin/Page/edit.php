<?php
$_id = $_GET ['id']
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
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="post" action="update.php">
                    <div class="form-group">
                        <input type="hidden"
                               class="form-control"
                               id="banner_id"
                               name="id"
                               value="<?php echo $page['id'];?>" aria-describedby="titleHelp"
                               placeholder="Enter Banner id">
                    </div>
                    <div class="form-group">
                        <label for="banner_title">Title</label>
                        <input type="text"
                               class="form-control"
                               id="banner_title"
                               name="page_title"
                               value="<?php echo $page['title'];?>"
                               aria-describedby="titleHelp"
                               placeholder="Enter Page Title">
                    </div>
                    <div class="form-group">
                        <label for="pagedes">Description</label>
                        <input type="text"
                               class="form-control"
                               id="pagedes"
                               name="page_description"
                               value="<?php echo $page['description'];?>"
                               aria-describedby="titleHelp"
                               placeholder="Enter Page Description">
                    </div>
                    <div class="form-group">
                        <label for="pageli">Link</label>
                        <input type="text"
                               class="form-control"
                               id="pageli"
                               name="page_link"
                               value="<?php echo $page['link'];?>"
                               aria-describedby="titleHelp"
                               placeholder="Enter Page Link">
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
