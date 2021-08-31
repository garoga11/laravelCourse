@extends('Layouts.plantilla')

@section('title', 'Edit')

@section('content')

<h1>Edit</h1>
<br>
<form action="{{route('courses.update', $course)}}" method="POST">

    @csrf

    @method('put')

    <label>
        Name:<br>
        <input type="text" name="name" value="{{old('name', $course->name)}}"><br>
    </label>

    @error('name')
    <br>
    <small>
        *{{$message}}
    </small>
    <br>
        
    @enderror

    <label >
        Description:<br>
        <textarea name="description"  rows="5" >{{old('description', $course->description)}}</textarea><br>
    </label>

    @error('description')
    <br>
    <small>
        *{{$message}}
    </small>
    <br>
        
    @enderror

    <label >
        Category:<br>
        <input type="text" name="category" value="{{old('category', $course->category)}}"><br>
    </label>
    @error('category')
    <br>
    <small>
        *{{$message}}
    </small>
    <br>
        
    @enderror
    <br>


    <button type="submit">Submit</button>
</form>

@endsection