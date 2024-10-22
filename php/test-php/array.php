<?php

// index array
// $array = array("a","b","c","d");
$x = ["x","y","z"];
$array = [2,3,4,6,7,];


// echo $array[array_rand($array,1)];


// $a = array_map(function($el){ return $el*3; },$array);
// $r = array_filter($array,fn($el) => $el<4);

// $r = array_reduce($array,function($carry,$item){return $carry+$item;},0);

// print_r($array);

// $json = file_get_contents("https://jsonplaceholder.typicode.com/todos/1");

// echo $json;

// print_r($r);

// print_r($array);

// $r = array_splice($array,1,3);

// print_r($r);
// print_r($array);

// associated array (key => vlaue)

$assoc = array(
    "myName" => "Kaung Sike",
    "myAge" => 21,
    "myJob" => ["student","webDeveloper"],
    "isGf" => true
);


//  json_encode($assoc);

//  print_r( json_encode($assoc));
$GLOBALS["MY_NAME"]  = "Kaung Sike";
$GLOBALS["MY_AGE"]  = 32;

function run() {
    return "MY name is ".$GLOBALS["MY_NAME"];
}
echo run();

// echo PHP_OS;

// print_r($GLOBALS);
// $assoc = [
//     "myName" => "Kaung Sike",
//     "myAge" => 21,
//     "myJob" => ["student","webDeveloper"],
//     "isGf" => true
// ];


// print_r($assoc);

// print($assoc["myName"]);



// echo $array;
// print("hello");

// print_r($array);
// print_r($x);

// echo $array[0];


// $arr = [];

// $arr[0] = "a";
// $arr[2] = "b";
// $arr[3] = "c";

// system("cls");
// popen('cls', 'w');

// print_r($arr);

// $assoc = [];
// ncurses_clear();
// $assoc["name"] = "Kaung Sike";
// $assoc["age"] = 21;

// pclose(popen('cls','w'));
// print_r($assoc);
// echo "\e[H\e[J";

