@extends('layouts.app')

@section('content')
    <div class="content">
        <form method="POST" enctype="multipart/form-data">
                <div class="description">
                    <table class = "note_info">
                        <tr class ="normal_tr_height">
                            <td colspan="3">
                                <label class="title">Title: </label>
                                <input class="input_title" type = "text" name = "title">
                            </td>
                        </tr>
                        <tr class ="normal_tr_height">
                            <td>
                                <label class="teacher">school: </label>
                                <select name="schools">
                                    @foreach($schools as $key => $school)
                                        <option value="{{$key}}">{{$school}}</option>
                                    @endforeach
                                </select><br>
                            </td>
                            <td>
                                <label class="small">program: </label>
                                <input class="small" type = "text" name = "program">
                            </td>
                            <td>
                                <label class="small">course: </label>
                                <input class="small" type = "text" name = "course">
                            </td>
                            <td>
                                <label class="teacher">instructor: </label>
                                <input class="small" type = "text" name = "instructor">
                            </td>
                            <td>
                                <label class="teacher">year taken: </label>
                                <input class="small" type = "number" name = "yearTaken">
                            </td>
                        </tr>
                        <tr class="large_tr_height">
                            <td colspan="3">
                                <label class="title">Description: </label><br>
                                <textarea class="input_description" name = "description"></textarea>
                            </td>
                        </tr>
                        <tr class ="last_tr_height">
                            <td>
                                <label class="small">Price: </label>
                                <input class="small" type = "number" name = "price">
                            </td>
                            <td>
                                <label class="teacher">Image: </label>
                                <input type="file" name="myImage" required>
                            </td>
                        </tr>
                    </table>
                </div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="user" value=" {{ \Auth::user()->id }}">

                <div class = "button">
                    <a href="#"><img class="back"></a>
                    <input type="reset" name="reset" value="Clear">
                    <input type="submit" name="submit" value="Post">
                </div>
            </form>
    </div>
@endsection
