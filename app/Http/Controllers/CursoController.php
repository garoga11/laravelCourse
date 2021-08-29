<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "welcome to index";
    }
    public function create(){
        return "welcome to create";
    }
    public function show($var){
        return "welcome to show $var";
    }
}
