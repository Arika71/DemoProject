<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//basic route

Route::get('demo', function(){
    return 'My demo project';
});




Route::get('/test', [DemoController:: class, 'show']);


Route::get('/name/{name}', function($name){

    return view('index', ['names' => $name]);
});


// route parameter pass
Route::get('/post/{name}', [DemoController:: class, 'post']);

// route Regular Expression Constraints

Route::get('/profile/{id}/{name}', function($id, $name){
    return "id is:". $id . "," . "name is:". $name; 
})->where(['id' => '[0-5]+' , 'name' => '[a-zA-Z]+']);


// Route group 

Route::controller(DemoController::class) ->group(function(){
    Route::get('/add',  'add');
    Route::get('/edit',  'edit');
});
