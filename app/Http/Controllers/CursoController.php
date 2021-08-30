<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCourse;

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

    public function store(StoreCourse $request){
        //to see what is inside of the form  return $request->all();
        //vqlidation for the form so the user cannot send null fields.
        

        $course = Course::create($request->all());

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

        $request->validate([
            'name'=> 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        $course->update($request->all());

        return redirect()->route('courses.show', $course);
    }
}
