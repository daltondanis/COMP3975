@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Post a Note</div>

                    <div class="panel-body">

                        <form method="POST" enctype="multipart/form-data">
                            Title
                            <input type="text" name="title" required><br>

                            School
                            <select name="schools">
                                @foreach($schools as $key => $school)
                                    <option value="{{$key}}">{{$school}}</option>
                                @endforeach
                            </select><br>

                            Program
                            <input type="text" name="program" required><br>
                            Course
                            <input type="text" name="course" required><br>
                            Year Taken
                            <input type="number" name="yearTaken" required><br>
                            Instructor
                            <input type="text" name="instructor" required><br>
                            Description
                            <textarea name="description"></textarea><br>
                            Price
                            <input type="number" name="price" required><br>

                            <input type="file" name="myImage" required>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="user" value=" {{ \Auth::user()->id }}">

                            <br>
                            <br>
                            <input type="reset" name="reset" value="Clear">
                            <input type="submit" name="submit" value="Post">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
