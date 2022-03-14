<?php

//ex.1:reading form a file
$file_content=file_get_contents('sample.txt');

echo $file_content;
echo "<hr>";

//ex.2:create a file
file_put_contents('sample_file.txt','Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium aliquid, assumenda atque commodi consequuntur cum deserunt ea enim expedita minus necessitatibus optio perspiciatis placeat quasi sint, tempora veniam vero.');

//ex-3:
$file_size=filesize('product13-700x850.jpg');
echo  $file_size/1024/1024 . 'mb';

echo "<hr>";
//ex:4
$has_file=file_exists('product13-700x850.jpg');
if ($has_file){
    echo 'there is an image file';
}
else{
    echo 'there is no image';
}
echo '<hr>';
if ($has_file){
    unlink('product13-700x850.jpg');
    echo 'thec image file deleted Successfully';
}
else{
    echo 'there is no such image';
}


?>

