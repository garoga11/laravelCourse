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
        <input type="text" name="name" value="{{$id->name}}"><br>
    </label>

    <label >
        Description:<br>
        <textarea name="description"  rows="5" >{{$id->description}}</textarea><br>
    </label>

    <label >
        Category:<br>
        <input type="text" name="category" value="{{$id->category}}"><br>
    </label>

    <br>

    <button type="submit">Submit</button>
</form>

@endsection