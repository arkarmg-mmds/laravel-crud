@extends('layouts.app')

@section('content')

<h1>
Create Projects
</h1>

<form action="/projects" method="post">
@csrf

<input type="text" name="project_title" placeholder="Project Title" id="">
<br>
<textarea name="project_description" id="" cols="30" rows="10"></textarea>
<br>
<input type="submit" value="Save">
</form>

@endsection