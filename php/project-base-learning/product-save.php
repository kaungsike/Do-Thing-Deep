<?php


echo "<pre>";


print_r($_POST);


$saveFolder = 'product-photo';
$productFolder = 'product';


if(!is_dir($saveFolder)){
    mkdir($saveFolder,0777);
}

if(!is_dir($productFolder)){
    mkdir($productFolder,0777  );
}


$fileExtension = pathinfo($_FILES['productImage']['name'])['extension'];

$fileName = uniqid().'.'.$fileExtension;

if(move_uploaded_file($_FILES['productImage']['tmp_name'],'./'.$saveFolder.'/'.$fileName)){
    $_POST['product_photo'] = $fileName;
    echo "<p>Hello</p>";
}

$json = json_encode($_POST);

print_r($json);

$productFileName = uniqid().'_'.$_POST['name'].'.json';

touch('./'.$productFolder.'/'.$productFileName);

$fileStream = fopen('./'.$productFolder.'/'.$productFileName,'w');

fwrite($fileStream,$json);

fclose($fileStream);

header('location:product.php');