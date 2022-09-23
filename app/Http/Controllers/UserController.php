<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name)
    {
         return "my name is: " . $name. "usercontroller is done"; 
    }

    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    public function index(Request $request){
        $test = $request->data;

        dd($test);
    }

}
