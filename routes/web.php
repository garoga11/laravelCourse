<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

//calling home controller from the route (/)
Route::get('/', HomeController::class);
//LARAVEL7 Route::get('/', 'HomeController');

Route::get('crud', [CursoController::class, 'index']);
//LARAVEL7 Route::get('crud', 'CursoController@index');

Route::get('crud/create', [CursoController::class, 'create']);

//creating a route using variables through the route
Route::get('crud/{var}', [CursoController::class, 'show']);



