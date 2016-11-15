
@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/css/listings.css">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>

                            {{--

                            <section>'s will be replaced with <img>'s

                            <img href="{{ $listing->image }}">

                            --}}

                            @foreach ($listings as $key => $listing)
                                @if ($key % 3 == 0)
                                    <tr>
                                        <td>
                                            <section class="image">{{ $listing->image }}</section>
                                            <p>{{ $listing->courseId }} - {{ $listing->price }}</p>
                                            <p>{{ $listing->courseName }}</p>
                                        </td>
                                @elseif ($key % 3 == 2)
                                        <td>
                                            <section class="image">{{ $listing->image }}</section>
                                            <p>{{ $listing->courseId }} - {{ $listing->price }}</p>
                                            <p>{{ $listing->courseName }}</p>
                                        </td>
                                    </tr>
                                @else
                                    <td>
                                        <section class="image">{{ $listing->image }}</section>
                                        <p>{{ $listing->courseId }} - {{ $listing->price }}</p>
                                        <p>{{ $listing->courseName }}</p>
                                    </td>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
