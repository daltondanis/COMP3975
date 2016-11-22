{{--@extends('layouts.app')--}}


<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="/css/listings.css" rel="stylesheet">

<div class="container">
    <div class="row">
        @section('content')
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 searchBar">

                <div class="sidebar">
                    <form method="POST">

                        <div class="form-group">
                            <label class="searchLabel">SCHOOL</label><br/>
                            <select class="form-control t" name="schools">
                                @foreach($schools as $key => $school)
                                    <option class="options" value="{{$key}}">{{$school}}</option>
                                @endforeach
                            </select><br>
                        </div>

                        <div class="form-group">
                            <label class="searchLabel">COURSE</label><br/>
                            <input type="text" name="course" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="searchLabel">PROGRAM</label><br/>
                            <input type="text" name="program" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="searchLabel">PRICE RANGE</label><br/>
                            <div class="col-xs-6">
                                <input type="text" name="minPrice" class="form-control">
                            </div>
                            <div class="col-xs-6">
                                <input type="text" name="maxPrice" class="form-control">
                            </div>
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group center-block">
                            <button type="submit" id="searchButton" name="searchbutton" class="btn btn-warning center-block">
                                SEARCH
                            </button>

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                @foreach ($listings as $key => $listing)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumb">
                        <img src="{{ URL::to('/') . $listing->image }}" alt="No image" class="img-responsive">
                        <p>{{ $listing->courseId }} - {{ $listing->price }}</p>
                        <p>{{ $listing->courseName }}</p>
                    </div>
                @endforeach
            </div>
        @endsection
    </div>
</div>
