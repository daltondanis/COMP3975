
@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/css/listings.css">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>

                            @foreach($listings as $key => $listing)
                                @if($key % 3 == 0)
                                    <tr>
                                        <td>
                                            <section class="image">{{$listing->image}}</section>
                                            <p>{{$listing->courseId}} - {{$listing->price}}</p>
                                            <p>{{$listing->courseName}}</p>
                                        </td>
                                @elseif($key % 3 == 2)
                                        <td>
                                            <section class="image">{{$listing->image}}</section>
                                            <p>{{$listing->courseId}} - {{$listing->price}}</p>
                                            <p>{{$listing->courseName}}</p>
                                        </td>
                                    </tr>
                                @else
                                    <td>
                                        <section class="image">{{$listing->image}}</section>
                                        <p>{{$listing->courseId}} - {{$listing->price}}</p>
                                        <p>{{$listing->courseName}}</p>
                                    </td>
                                @endif
                            @endforeach

                            {{--
                            <tr>
                                <td>
                                    <section class="image">IMAGE1</section>
                                    <p>COMP1234 - $40</p>
                                    <p>Java 1</p>
                                </td>
                                <td>
                                    <section class="image">IMAGE2</section>
                                    <p>COMP1111 - $60</p>
                                    <p>Web Dev</p>
                                </td>
                                <td>
                                    <section class="image">IMAGE3</section>
                                    <p>COMP3131 - $30</p>
                                    <p>Algorithms</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <section class="image">IMAGE4</section>
                                    <p>Blah</p>
                                </td>
                                <td>
                                    <section class="image">IMAGE5</section>
                                    <p>Blah blah</p>
                                </td>
                                <td>
                                    <section class="image">IMAGE6</section>
                                    <p>blah blah blah</p>
                                </td>
                            </tr>
                            --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
