<?php


$file = $_GET['file_name'];
$folderName = 'photo';


if(unlink($folderName."/".$file)){
    header("location:gallery.php");
}


echo $file;