<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('Courses.Index');
    }
    public function create(){
        return view('Courses.Create');
    }
    public function show($var){
        return view('Courses.Show', compact('var'));
        //compact returns: ['var' => $var]
    }
}
