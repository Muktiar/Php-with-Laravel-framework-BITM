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
            <div  class="row justify-content-center">
                <div class="container">
                <h1 class="text-center"> ADD New</h1>
                <form method="post" action="store.php" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="title" name="title" value=" ">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="description" class="col-sm-2 col-form-label">Short Description</label>
                        <div class="col-sm-8">
                            <textarea type="text" class="form-control" id="s_description" name="s_description" value=" "></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-8">
                            <textarea type="text" class="form-control" id="description" name="description" value=" "></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="formFile" class="all-form-label">Picture</label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control" id="formFile" name="picture" value=" ">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-6">
                        <label for="formFile" class="all-form-label" >Product Type</label>
                    <select class="form-select" aria-label="Default select example" name="product_type">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="title" class="col-sm-2 col-form-label">MRP</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="mrp" name="mrp" value=" ">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="title" class="col-sm-2 col-form-label">Total Sales</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="total_sales" name="total_sales" value=" ">
                    </div>
                </div>
                    <div class="mb-3 row">
                    <fieldset>
                        <input type="radio" name="status" id="Active" value="Active" />  <label for="is_active"> Active</label><br />
                        <input type="radio" name="status" id="Delete" value="Delete"  />  <label for="is_delete"> Delete</label><br />
                    </fieldset>
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












