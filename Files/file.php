<?php

if (isset($_FILES['my_file'])){
    echo "File name is:".$_FILES["my_file"]['name'].'<br>';
    echo "File type is:".$_FILES["my_file"]['type'].'<br>';
    echo "File path is:".$_FILES["my_file"]['tmp_name'].'<br>';
    echo "File size is:".$_FILES["my_file"]['size'].'<br>';
}

echo "<pre>";
print_r($_FILES);
echo "</pre>";
?>
