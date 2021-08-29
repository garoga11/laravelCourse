@extends('Layouts.plantilla')

@section('title', 'Show ' . $course->name)

@section('content')

<h1>Show {{$course->name}} </h1>

<a href=" {{route('courses.index')}}">Go back</a>
<br>
<a href=" {{route('courses.edit', $course)}}">Edit course</a>
<p><strong>Category: </strong> {{$course->category}} </p>

<p>{{$course->description}}</p>

@endsection
