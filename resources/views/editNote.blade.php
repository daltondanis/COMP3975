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
        <form method="POST" enctype="multipart/form-data">
        Title
        <input id="title" value="{{$title}}" />

        Course
        <input id="course" value="{{$course}}" />

        Image
            <div class="uploadbutton">
                <input type="file" name="myImage" id="file" class="inputfile" />
                <label for="file" class="small2">upload</label>
            </div>
            <input type="text" name="fileName" value="{{$imagePath}}" class="myinput form-control filename" readonly>

        School
        <input id="schoolName" value="{{$schoolName}}" />

        Year
        <input id="year" value="{{$year}}" />

        Instructor
        <input id="instructor" value="{{$instructor}}" />

        Price
        <input id="price" value="{{$price}}" />

        Description
        <textarea id="description">{{$description}}</textarea>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="user" value=" {{ \Auth::user()->id }}">

            <div class = "button">
                <a href="#"><img class="back"></a>
                <input class="submit" type="submit" name="submit" value=" ">
            </div>
        </form>
    </div>
@endsection
