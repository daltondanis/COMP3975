@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Post a Note</div>

                    <div class="panel-body">

                        <form method="POST">
                            Title
                            <input type="text" name="title"><br>

                            School
                            <select name="schools">
                                @foreach($schools as $school)
                                    <option value="{{$school}}">{{$school}}</option>
                                @endforeach
                            </select><br>


                            Program
                            <input type="text" name="program"><br>
                            Course
                            <input type="text" name="course"><br>
                            Year Taken
                            <input type="number" name="yearTaken"><br>
                            Instructor
                            <input type="text" name="instructor"><br>
                            Description
                            <textarea name="comments"></textarea><br>
                            Price
                            <input type="number" name="price"><br>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
