<?php

echo "I'm index";

echo "<pre>";

// print_r($_SERVER);

// echo $_SERVER ['REQUEST_URI']; 

// print_r($_SERVER);
if($_SERVER['PATH_INFO']=='/'){
    require_once("/index.php");
}
elseif($_SERVER["PATH_INFO"]=='/about-us'){
    require_once("./view/about.php");
}elseif($_SERVER['PATH_INFO']=='/service'){
    require_once("./view/service.php");
}else{
    require_once("./view/not-found.php");
}

?>