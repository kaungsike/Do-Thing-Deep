<?php


// $weight =(int) 28.94;


// var_dump($weight);

// $car = (object) [
//   "id" => 113,
//   "model" => "Ducati V4",
//   "brand" => 'Ducati',
//   "type" => 'race bike'  
// ];

// var_dump($car);
// print($car->model);


function area(int $w,float $h): int  {
    return $w*$h;
};

// print(area(3.7,5.6));


function sum($arr) : int {
    return array_sum($arr);
};

print(sum([2,3,5,6,56]));
