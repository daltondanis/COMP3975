@extends('layouts.app')

@section('content')
    <style>
        .table {
            max-width: 90%;
            table-layout: fixed;
            border: hidden;
        }
    </style>
    <div class="content">
        <form method="POST" enctype="multipart/form-data">
                <div class="description">
                    <table class = "table note_info table-responsive">
                        <tr class ="normal_tr_height">
                        <td colspan="2">
                            <label class="small">Title: </label>
                            <input class="form-control" type = "text" name = "title">
                        </td>
                        <td>
							<div class="uploadbutton">
								<input type="file" name="myImage" id="file" class="inputfile" />
								<label for="file" class="small2">upload</label>
							</div>
                            <input type="text" name="fileName" value="" class="myinput form-control filename" readonly>
                        </td>
                        </tr>
                        <tr class ="normal_tr_height">
                            <td class="first">
                                <label class="small">school: </label>
                                <select class="form-control t" name="schools">
                                    @foreach($schools as $key => $school)
                                        <option class="options" value="{{$key}}">{{$school}}</option>
                                    @endforeach
                                </select><br>
                            </td>
                            <td>
                                <label class="small">course: </label>
                                <input class="small form-control" type = "text" name = "course">
                            </td>
                        </tr>
                        <tr class ="normal_tr_height">
                            <td class="first">
                                <label class="small">year: </label>
                                <input class="small form-control" type = "number" value="2016" name = "yearTaken">
                            </td>
                            <td>
                                <label class="small">instructor: </label>
                                <input class="small form-control" type = "text" name = "instructor">
                            </td>
                            <td>
                                <label class="small">price: </label>
                                <input class="small form-control" type = "number" name = "price">
                            </td>
                        </tr>
                        <tr class="large_tr_height">
                            <td colspan="2">
                                <label class="title">Description: </label><br>
                                <textarea class="input_description form-control" name = "description"></textarea>
                            </td>
                            <td colspan="1">
                            <label class="small">program: </label>
                            <input class="small form-control" type = "text" name = "program">
                            </td>
                        </tr>
                    </table>
                </div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="user" value=" {{ \Auth::user()->id }}">

                <div class = "button">
                    <a href="#"><img class="back"></a>
                    <input class="submit" type="submit" name="submit" value=" ">
                </div>
            </form>
    </div>
@endsection
