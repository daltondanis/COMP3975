{{--@extends('layouts.app')--}}

@php
/*
Displays the search bar
*/
function putSearchBar(){
    echo
    '
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 searchBar">
        
            <div class="sidebar">
                <form method="POST" action="#">
                    <div class="form-group">
                        <label class="searchLabel">SEARCH KEYWORDS</label><br/>
                        <input type="text" name="keywords" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="searchLabel">SCHOOL</label><br/>
                        <input type="text" name="school" class="form-control">
                    </div>       
                    <div class="form-group">
                        <label class="searchLabel">SUBJECT</label><br/>
                        <input type="text" name="subject" class="form-control">
                    </div>
                    <div class="form-group">                           
                        <label class="searchLabel">COURSE</label><br/>
                        <input type="text" name="course" class="form-control">
                    </div>
                    <div class="form-group">                           
                        <label class="searchLabel">PRICE RANGE</label><br/>
                        <input type="text" name="pricerange" class="form-control">
                    </div>
                    <div class="form-group center-block">
                        <button id="searchButton "name="searchbutton" class="btn btn-warning center-block">
                            SEARCH
                        </button>

                    </div>
                </form>
            </div>
        </div>
    ';
}

/*
Displays a single listing

@param {Listing} $listing
*/
function putListing($listing)
{
    echo
    '
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumb">
            <img src="' . URL::to('/') . $listing->image . '" alt="No image" class="img-responsive">
            <p>' . $listing->courseId . ' - $' . $listing->price . '</p>
            <p>' . $listing->courseName . '</p>
        </div>
    ';
}
@endphp

<link href="/css/listings.css" rel="stylesheet">
<div class="container">
    <div class="row">
        @section('content')
            {{ putSearchBar() }}
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                @foreach ($listings as $key => $listing)
                    {{ putlisting($listing) }}
                @endforeach
            </div>
        @endsection
    </div>
</div>
