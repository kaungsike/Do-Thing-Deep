<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // public function test()
    // {
    //     $name = "Kyaw Kyaw";
    //     $age = 22;
    //     $career = 'Software Engineer';
    //     return view('test',compact('name','age','career'));
    // }


    // public function test()
    // {
    //     $name = "Kyaw Kyaw";
    //     $age = 22;
    //     $career = 'Software Engineer';

    //     return view('test')->with('name', $name)->with('age', $age)->with("career", $career);
    // }


    // public function test() {

    //     $data = [
    //         'name' => 'Kyaw Kyaw',
    //         'age' => 22,
    //         'career' => 'SOftware Engineer'
    //     ];

    //     return view('test',['data'=>$data]);
    // }

    // public function test() {

    //     $htmlString = '<h1>Hello Pr Byar</h1>';

    //     return view('test',compact('htmlString'));
    // }

    public function test()
    {

       $nameLists = ['Mg Mg','Aung Aung','Su Su'];

        return view('test', compact('nameLists'));
    }
}
