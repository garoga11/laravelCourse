@extends('Layouts.plantilla')

@section('title', 'Contactanos')

@section('content')

<ul>
    <h1>Welcome</h1><br>
    <a href=" {{route('courses.create')}}">Create course</a><br>
    
    @foreach ($courses as $course)
    <li>
        <a href="{{route('courses.show',$course)}}">{{$course->name}}</a>
    </li>
        
    @endforeach
</ul>

{{$courses->links()}}




@endsection