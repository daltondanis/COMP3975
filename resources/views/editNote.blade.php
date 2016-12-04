@extends('layouts.app')

@section('content')
    <form method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <label class="small">Title: </label>
                    <input class="form-control" type="text" name="title" value="{{$title}}">
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <label class="small">Program: </label>
                    <input class="small form-control" type ="text" name="program" value="{{$program}}">
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <label class="small">School: </label>
                    <select class="form-control" name="schools" value="{{$schoolName}}">
                        @foreach($schools as $key => $school)
                            <option class="options" value="{{$key}}">{{$school}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <label class="small">Course: </label>
                    <input class="small form-control" type ="text" name="course" value="{{$course}}">
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <label class="small">Year: </label>
                    <input class="small form-control" type ="number" value="2016" name="yearTaken" value="{{$year}}">
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <label class="small">Instructor: </label>
                    <input class="small form-control" type="text" name="instructor" value="{{$instructor}}">
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <label class="small">Price: </label>
                    <input class="small form-control" type="number" name="price" value="{{$price}}">
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <label class="small">Image: </label>
                    <input class="form-control" type="file" name="myImage">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label class="title">Description: </label><br>
                    <textarea class="input_description form-control" name="description">{{$description}}</textarea>
                </div>
            </div>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="user" value=" {{ \Auth::user()->id }}">

        <div class = "button">
            <input class="submit" type="submit" name="submit" value=" ">
            <form method="post" action ="{{$noteId}}/delete">
                <input class="deletebtn" type="submit" name="delete" value=" ">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </form>
    
@endsection