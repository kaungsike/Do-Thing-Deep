<?php

// $fileName = 'my.txt';

// if(file_exists($fileName)){
//     touch($fileName);
// }

$a = file_get_contents('http://forex.cbm.gov.mm/api/latest');
$obj = json_decode($a);

print_r(str_replace(',','',$obj->rates->USD));

// var_dump(!file_exists("my.txt"));


// $fileStream = fopen($fileName,'a');

// fwrite($fileStream,"kaung");
// fwrite($fileStream," sike");
// fwrite($fileStream," pr");
// fwrite($fileStream," kwar");

// fclose($fileStream);