<?php

use Illuminate\Support\Facades\Route;

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

//ROUTES ARE READED FROM THE TOP TO THE BOTTOM

Route::get('/', function () {
    /*Return the welcome view when the route has
    an slash */
    return view('welcome');
});

//Creating a route
Route::get('crud', function(){
    return "welcome to my first crud";
});

//creating a route using variables through the route
Route::get('crud/{var}', function($var){
    return "route with variable: $var";
});

Route::get('crud/{var}/{category?}', function ($var, $category = null) {
    if($category){
        return "welcome to a $var, in the category: $category";
    }else{
        return "welcome to a $var";
    }
});

