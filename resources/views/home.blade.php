@extends('layouts.app')

@section('title','Welcome to Travel & Tour')

@section('content')

    <h1>
        {{$businessname}} Travel & Tour Home Page

        {{-- {!! $data !!} Travel & Tour Home Page --}}
    </h1>

    <ul>
        @foreach ($tasks as $task)
        <li>
            {{ $task }}
        </li>
        @endforeach
    </ul>

@endsection

