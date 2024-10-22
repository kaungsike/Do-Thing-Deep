<?php

echo "<pre>";


print_r($_FILES);



$folderName = 'photo';

if (!is_dir($folderName)) {
    mkdir($folderName, 0777);
}

$is_true = true;

foreach ($_FILES['upload']['name'] as $key => $name) {
    
    $fileExtension = pathinfo($name)['extension'];

    $fileName = uniqid().'.'.$fileExtension;

    $filePath = $_FILES['upload']['tmp_name'][$key];

    if(!move_uploaded_file($filePath,'./'.$folderName.'/'.$fileName)){
        $is_true = false;
    }

}

if($is_true){
    header("location:gallery.php");
}

// $fileExtension = pathinfo($_FILES['upload']['name'])['extension'];

// $fileName = uniqid().'.'.$fileExtension;

// $filePath = $_FILES['upload']['tmp_name'];


// if(move_uploaded_file($filePath,'./'.$folderName.'/'.$fileName)){
//     header('location:gallery.php');
// }