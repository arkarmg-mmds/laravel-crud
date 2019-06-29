@extends('layouts.app')

@section('title','Welcome to Travel & Tour')

@section('content')

    <h1>
        {{$data}} Travel & Tour Home Page
    </h1>

    <ul>
        @foreach ($tasks as $task)
        <li>
            {{ $task }}
        </li>
        @endforeach
    </ul>

@endsection

