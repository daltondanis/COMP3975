{{--@extends('layouts.app')--}}


<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="/css/listings.css" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

<div class="container">
    <div class="row">
        @section('content')

            <div class="text-center">
                <h2>
                    <strong>
                        My Listings
                    </strong>
                </h2>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                @foreach ($listings as $key => $listing)
                <a href="/editNote/{{ $listing->noteId }}">
                      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumb">
                        <img src="{{ URL::to('/') . $listing->image }}" alt="No image" class="img-responsive">
                        <p>{{ $listing->courseId }} - ${{ $listing->price }}</p>
                        <p>{{ $listing->courseName }}</p>
                    </div>
                    </a>
                @endforeach
            </div>
        @endsection
    </div>
</div>
