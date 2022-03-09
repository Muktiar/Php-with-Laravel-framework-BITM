<?php

if (isset($_FILES['my_file'])){
    echo $_FILES["my_file"]['name'];
}

echo "<pre>";
print_r($_FILES);
echo "</pre>";
?>
