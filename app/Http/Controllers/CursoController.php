<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        //getting the courses from the db use all or paginate to get pages
        $courses =Course::paginate();
        //calling to the view and sending the data we got from de db through the variable courses
        return view('Courses.Index', compact('courses'));
    }
    public function create(){
        return view('Courses.Create');
    }
    public function show($id){
        $course = Course::find($id);
        return view('Courses.Show', compact('course'));
        //compact returns: ['var' => $var]
    }
}
