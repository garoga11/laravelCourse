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

/* Route::get('courses', [CursoController::class, 'index'])->name('courses.index');
//LARAVEL7 Route::get('crud', 'CursoController@index');

Route::get('courses/create', [CursoController::class, 'create'])->name('courses.create');
//route to send the form with data
Route::post('courses', [CursoController::class, 'store'])->name('courses.store');

//creating a route using variables through the route
Route::get('courses/{course}', [CursoController::class, 'show'])->name('courses.show');

//edit route
Route::get('courses/{course}/edit', [CursoController::class, 'edit'])->name('courses.edit');

//edit form
Route::put('courses/{course}', [CursoController::class, 'update'])->name('courses.update');

//it will delete a register
Route::delete('courses/{course}', [CursoController::class, 'destroy'])->name('courses.destroy');  */

Route::resource('courses', CursoController::class);


