@extends('layouts.app')

@section('content')
    <style>
        .table {
            max-width: 90%;
            table-layout: fixed;
            border: hidden;
        }
    </style>

    <div class="content">
        <form method="POST" enctype="multipart/form-data">
            Title
            <input name ="title" id="title" value="{{$title}}" />

            Course
            <input name = "course" id="course" value="{{$course}}" />

            Image
            <div class="uploadbutton">
                <input type="file" name="myImage" id="file" class="inputfile" />
                <label for="file" class="small2">upload</label>
            </div>
            <input type ="hidden" name="originalImage" value="{{$imagePath}}" />
            <input type="text" name="fileName" value="Input a file" class="myinput form-control filename" readonly>

            School
            <select class="form-control t" name="schools" value="{{$schoolName}}">
                @foreach($schools as $key => $school)
                    @if ($school == $schoolName)
                        <option class="options"  value="{{$key}}" selected>{{$school}}</option>
                    @else
                        <option class="options" value="{{$key}}">{{$school}}</option>
                    @endif
                @endforeach
            </select><br>

            Year
            <input name="yearTaken" id="year" value="{{$year}}" />

            Instructor
            <input name="instructor" id="instructor" value="{{$instructor}}" />

            Price
            <input name="price" id="price" value="{{$price}}" />

            Description
            <textarea name ="description" id="description">{{$description}}</textarea>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="user" value=" {{ \Auth::user()->id }}">

            <div class = "button">
                <input class="submit" type="submit" name="submit" value=" ">
            </div>
        </form>

        <form method="post" action ="{{$noteId}}/delete">
            <div class = "button">
                <input type="submit" name="delete" value="delete">
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>
@endsection