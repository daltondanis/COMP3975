
@extends('layouts.app')

@php

/*
Displays a single listing

@param {Listing} $listing
*/
function putListing($listing)
{
    echo
    '
    <td>
        <img src="' . URL::to('/') . $listing->image . '" alt="No image" class="note">
        <p>' . $listing->courseId . ' - $' . $listing->price . '</p>
        <p>' . $listing->courseName . '</p>
    </td>
    ';
}

@endphp

@section('content')
    <link rel="stylesheet" href="/css/listings.css">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                            @foreach ($listings as $key => $listing)
                                @if ($key % 3 == 0)
                                    <tr>
                                        {{ putlisting($listing) }}
                                @elseif ($key % 3 == 2)
                                        {{ putListing($listing) }}
                                    </tr>
                                @else
                                    {{ putListing($listing) }}
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
