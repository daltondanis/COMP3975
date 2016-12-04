@extends('layouts.app')

@section('content')
    <form method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <label class="small">Title: </label>
                    <input class="form-control" type="text" name="title">
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <label class="small">Program: </label>
                    <input class="small form-control" type ="text" name="program">
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <label class="small">School: </label>
                    <select class="form-control" name="schools">
                        @foreach($schools as $key => $school)
                            <option class="options" value="{{$key}}">{{$school}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <label class="small">Course: </label>
                    <input class="small form-control" type ="text" name="course">
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <label class="small">Year: </label>
                    <input class="small form-control" type ="number" value="2016" name="yearTaken">
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <label class="small">Instructor: </label>
                    <input class="small form-control" type="text" name="instructor">
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <label class="small">Price: </label>
                    <input class="small form-control" type="number" name="price">
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <label class="small">Image: </label>
                    <input class="form-control" type="file" name="myImage" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label class="title">Description: </label><br>
                    <textarea class="input_description form-control" name="description"></textarea>
                </div>
            </div>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="user" value=" {{ \Auth::user()->id }}">

        <div class = "button">
            <input class="reset" type="reset" value=" ">
            <input class="submit" type="submit" name="submit" value=" ">
        </div>
    </form>
@endsection