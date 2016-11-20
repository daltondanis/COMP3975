@extends('layouts.app')

@section('content')
    <div class="content">
        <form method="POST" enctype="multipart/form-data">
                <div class="description">
                    <table class = "note_info">
                        <tr class ="normal_tr_height">
                            <td colspan="2">
                                <label class="small">Title: </label>
                                <input class="input_title" type = "text" name = "title">
                            </td>
                            <td>
                                <input type="file" name="myImage" id="file" class="inputfile" />
                                <label for="file" class="small2">upload</label>
                                <input type="text" name="fileName" value="" class="myinput filename" readonly>
                            </td>
                        </tr>
                        <tr class ="normal_tr_height">
                            <td class="first">
                                <label class="small">school: </label>
                                <select name="schools">
                                    @foreach($schools as $key => $school)
                                        <option value="{{$key}}">{{$school}}</option>
                                    @endforeach
                                </select><br>
                            </td>
                            <td>
                                <label class="teacher">subject: </label>
                                <input class="small" type = "text" name = "subject">
                            </td>
                            <td>
                                <label class="small">course: </label>
                                <input class="small" type = "text" name = "course">
                            </td>
                        </tr>
                        <tr class ="normal_tr_height">
                            <td class="first">
                                <label class="small">year: </label>
                                <input class="small" type = "text" name = "year">
                            </td>
                            <td>
                                <label class="teacher">instructor: </label>
                                <input class="small" type = "text" name = "instructor">
                            </td>
                            <td>
                                <label class="small">price: </label>
                                <input class="small" type = "text" name = "price">
                            </td>
                        </tr>
                        <tr class="large_tr_height">
                            <td colspan="3">
                                <label class="title">Description: </label><br>
                                <textarea class="input_description" name = "description"></textarea>
                            </td>
                        </tr>
                    </table>
                    <div class="gap"></div>
                </div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="user" value=" {{ \Auth::user()->id }}">

                <div class = "button">
                    <a href="#"><img class="back"></a>
                    <input class="submit" type="submit" name="submit" value="Post">
                </div>
            </form>


    </div>
@endsection
