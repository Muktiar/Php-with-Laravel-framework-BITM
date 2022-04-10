<?php

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
        <div class="row">
            <div class="col-md-10">
                <h1 class="text-center">Add New  Category</h1>
                <form method="post" action="store.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="input-title">Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="input-title"
                            name="name"
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="input-link">Link</label>
                        <input
                            type="text"
                            class="form-control"
                            id="input-link"
                            name="link"
                            value="">
                    </div>

                    <div class="form-group form-check">
                        <input
                                type="checkbox"
                                class="form-check-input"
                                id="input-is-active"
                                name="is_draft"
                                value="1">
                        <label class="form-check-label" for="input-is-active">Is Draft</label>
                    </div>

                    <div class="form-group form-check">
                        <input
                                type="checkbox"
                                class="form-check-input"
                                id="input-is-active"
                                name="soft_delete"
                                value="1">
                        <label class="form-check-label" for="input-is-active">Soft Delete</label>
                    </div>


                    <div class="form-group">
                        <label for="input-title">Created At</label>
                        <input
                                type="date"
                                class="form-control"
                                id="input-title"
                                name="created_at"
                                value="">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
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