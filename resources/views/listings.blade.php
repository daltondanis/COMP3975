{{--@extends('layouts.app')--}}

@php

/*
Displays a single listing

@param {Listing} $listing
*/
function putListing($listing)
{
    echo
    '
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 thumb">
        <img src="' . URL::to('/') . $listing->image . '" alt="No image" class="note img-responsive">
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
            @foreach ($listings as $key => $listing)
                {{ putlisting($listing) }}
            @endforeach
        @endsection
        </div>
</div>
