<?php

 header("Content-Type:application/json");

 if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('POST method only');
 }

 if( empty($_POST['ammount']) || empty($_POST['from_currency']) || empty($_POST['to_currency'])){
    die("Need all inputs");
 }



 $ammount = $_POST['ammount'];
 $from = $_POST['from_currency'];
 $to = $_POST['to_currency'];

 $rateJson = file_get_contents('http://forex.cbm.gov.mm/api/latest');
 $rateObj = json_decode($rateJson,true);

 $rate = $rateObj['rates'];

 $from_rate = str_replace(",",'',$rate[$from]);
 $to_rate = str_replace(",",'',$rate[$to]);

 $result = round(($ammount*$from_rate) / $to_rate,2).' '.$to;


 print_r(json_encode($result));