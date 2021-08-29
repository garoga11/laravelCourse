<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        //getting the courses from the db use all or paginate to get pages
        $courses =Course::orderBy('id', 'desc')->paginate();
        //calling to the view and sending the data we got from de db through the variable courses
        return view('Courses.Index', compact('courses'));
    }

    public function create(){
        return view('Courses.Create');
    }

    public function store(Request $request){
        //to see what is inside of the form  return $request->all();
        $course = new Course();
        $course->name = $request->name;
        $course->description = $request->description;
        $course->category = $request->category;

        $course->save();

        //we send the id through $course  and laravel understands it as $course->id
        return redirect()->route('courses.show', $course);
    }

    public function show( $id){
        $course = Course::find($id);
        return view('Courses.Show', compact('course'));
        //compact returns: ['var' => $var]
    }

    //id is a variable that contains all the course data 
    public function edit(Course $id){
        //compact sends the course data:
       return view('Courses.edit', compact('id'));
    }

    public function update(Course $course, Request $request){
        $course->name = $request->name;
        $course->description = $request->description;
        $course->category = $request->category;

        $course->save();

        return redirect()->route('courses.show', $course);
    }
}
