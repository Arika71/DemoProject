<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function show(){
        return view ("index");
    }

    function post($name){
        return "laravel new project".$name;

    }
    function add(){
        return "laravel app";
    }
    function edit(){
        return "laravel app";
    }
}
