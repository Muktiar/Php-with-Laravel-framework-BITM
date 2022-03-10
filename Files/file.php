<?php

if (isset($_FILES['my_file'])){
    echo "File name is:".$_FILES["my_file"]['name'].'<br>';
    echo "File type is:".$_FILES["my_file"]['type'].'<br>';
    echo "File path is:".$_FILES["my_file"]['tmp_name'].'<br>';
    echo "File size is:".$_FILES["my_file"]['size'].'<br>';
}

if ($_FILES["my_file"]['type']=='text/plain'){
    echo 'thank YOu,for uploading right file';
}
else{
    echo 'you uploading wrong file ';
}

$target=$_FILES["my_file"]['tmp_name'];
$destination='uploads/'.$_FILES["my_file"]['name'];
$is_file_moved=move_uploaded_file($target,$destination);
if ($is_file_moved){
    echo '<p> file has been moved successfully</p>';
}
else{
    echo '<p> file has been moved successfully</p>';
}





    //echo "<pre>";
//print_r($_FILES);
//echo "</pre>";
?>
<form action="file.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="formFile" class="form-label"></label>
        <input class="form-control" type="file" name="my_file" id="formFile">
    </div>


    <button type="submit" class="btn btn-primary">Upload</button>
</form>

