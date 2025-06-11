<?php 

function view(string $file) : bool {
    require_once __DIR__.'/view/'.$file.'.php';
    return true;
}