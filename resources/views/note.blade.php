@extends('layouts.app')

@section('content')
    <style>
        .table {
            max-width: 90%;
            table-layout: fixed;
            border: hidden;
        }
    </style>
    {{--'title', 'imagePath', 'course', 'school', 'year', 'instructor', 'description', 'email', 'price'--}}
    <div class="content">
        <h1 id="title">{{$title}}</h1>
        <p id="course">Course: {{$course}}</p>
        <img width="200px" src="{{ $imagePath }}" />
        <p id="schoolName">School: {{$schoolName}}</p>
        <p id="year">Year: {{$year}}</p>
        <p id="instructor">Instructor: {{$instructor}}</p>
        <p id="description">Description: {{$description}}</p>
        <p id="price">Price: ${{$price}}</p>

        <p>Contact seller at: {{$email}}</p>
    </div>
@endsection
