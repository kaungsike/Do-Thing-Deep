<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function my () {
        return  'Hello from MyController! This is a simple response to demonstrate the controller functionality.';
    }
}
