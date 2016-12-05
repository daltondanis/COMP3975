@extends('layouts.app')

@section('content')
    <style>
        .content {
            width: 60%;
            font-family:Bebas Neue;
            src:url('../font/BebasNeue.otf');
            float: left;
            margin: auto;
            font-size: 18px;
        }

        ul.details{
            margin-top: 5%;
            font-size: 120%;
            list-style-type: none;
        }
        li#course{
            display: inline-block;
            margin: 0 0px;
        }
        li#price{
            display: inline-block;
            margin: 0 30px;
        }
        img {
            max-width: 60%;
            height: auto;
            margin-left: 8%;
        }
        #title{
            margin-left: 8%;
        }
        p{
            margin-left: 8%;
            margin-bottom: 0%;
        }
        #detailsemail{
            margin-left: 8%;
            margin-top: 5%;
        }

        @media only screen and (max-width: 480px) {
            .content {
                width: 90%;
            }

            ul.details {
                width: auto;
            }
            img {
                max-width: 90%;
                height: auto;
            }
            .details2{
                margin-left: 7%;
            }

        }

    </style>
    <div class="content">
        <h2>
            Note Details
        </h2>
        <ul class="details">
            <li id="program">Program: {{$program}}</li>
            <li id="course">Course: {{$course}}</li>
            <li id="price">Price: ${{$price}}</li>
        </ul>

        <div class="details2">
            <h3 id="title">{{$title}}</h3>

            <img src="{{ $imagePath }}" />

            <p id="schoolName">School: {{$schoolName}}</p>
            <p id="year">Year: {{$year}}</p>
            <p id="instructor">Instructor: {{$instructor}}</p>
            <p id="description">Description: {{$description}}</p>


            <p id="detailsemail">Contact seller at: {{$email}}</p>
        </div>


    </div>
@endsection

