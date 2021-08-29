@extends('Layouts.plantilla')

@section('title', 'Create')

@section('content')

<h1>Create</h1>
<form action="{{route('courses.store')}}" method="POST">

    @csrf
    <label>
        Nombre:<br>
        <input type="text" name="name"><br>
    </label>

    <label >
        Description:<br>
        <textarea name="description"  rows="5"></textarea><br>
    </label>

    <label >
        Category:<br>
        <input type="text" name="category"><br>
    </label>

    <br>

    <button type="submit">Submit</button>
</form>

@endsection