<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Invoke se usa cuando el controllor solo tiene una ruta
    public function __invoke(){
        return view('Home');
    }
}
