@extends('Layouts.plantilla')

@section('title', 'Edit')

@section('content')

<h1>Edit</h1>
<br>
<form action="{{route('courses.update', $id)}}" method="POST">

    @csrf

    @method('put')

    <label>
        Name:<br>
        <input type="text" name="name" value="{{old('name', $id->name)}}"><br>
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
        <textarea name="description"  rows="5" >{{old('description', $id->description)}}</textarea><br>
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
        <input type="text" name="category" value="{{old('category', $id->category)}}"><br>
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