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
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <h1 class="text-center">Add New Product</h1>
                <form method="post" action="store.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="p_input_title">Title</label>
                        <input type="text"
                               class="form-control"
                               id="p_input_title"
                               name="title"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter Product Title">
                    </div>

                    <div class="form-group">
                        <label for="p_input_shortdes">Short Description</label>
                        <input type="text"
                               class="form-control"
                               id="p_input_shortdes"
                               name="short_description"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter Product short description">
                    </div>
                    <div class="form-group">
                        <label for="p_input_des">Description</label>
                        <input type="text"
                               class="form-control"
                               id="p_input_des"
                               name="description"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter Product description">
                    </div>
                    <div class="form-group">
                        <label for="product_pic">Picture</label>
                        <input type="file"
                               class="form-control-file"
                               id="product_pic"
                               name="picture"
                               value=""
                        >
                    </div>

                    <div class="form-group">
                        <label for="product_type">Product Type</label><br>
                        <select name="product_p_type" id="product_type">
                            <option value="18">Men</option>
                            <option value="19">Women</option>
                            <option value="20">Accessories</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="p_mrp">MRP</label>
                        <input type="number"
                               class="form-control"
                               id="p_mrp"
                               name="mrp"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter Product description">
                    </div>
<!--                    <div class="form-group">-->
<!--                        <label for="totalSales">Total Sales</label>-->
<!--                        <input type="number"-->
<!--                               class="form-control"-->
<!--                               id="totalSales"-->
<!--                               name="total_sales"-->
<!--                               value=""-->
<!--                               aria-describedby="titleHelp"-->
<!--                               placeholder="Enter Product Total Sales">-->
<!--                    </div>-->
                    <div class="form-group form-check">
                        <label for="product_actv" class="form-check-label">
                            <input type="checkbox"
                                   class="form-check-input"
                                   id="product_actv"
                                   name="is_active"
                                   value="1"
                                   aria-describedby="isActiveHelp"
                                   placeholder="Enter Is Active">
                            Is active
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <label for="product_isdel" class="form-check-label">
                            <input type="checkbox"
                                   class="form-check-input"
                                   id="product_isdel"
                                   name="is_deleted"
                                   value="1"
                                   aria-describedby="isDeleteHelp">
                            Is delete
                        </label>
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
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
