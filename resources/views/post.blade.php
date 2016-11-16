@extends('layouts.posts')

@section('content')
    <div class="content">
            <form method="POST" action="{{ url('/login') }}">
                <div class = "info">
                    <table class="post_table">
                        <tr >
                            <td>
                                <label class="email">Email: </label>
                                <input class="input" type = "text" name = "email">
                            </td>
                            <td>
                                <label class="phone">Phone Number: </label>
                                <input class="input" type = "text" name = "phone_number">
                            </td>
                        </tr>
                    </table>
                </div>
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
                        </tr>
                        <tr class="large_tr_height">
                            <td colspan="3">
                                <label class="title">Description: </label><br>
                                <textarea class="input_description" name = "description"></textarea>
                            </td>
                        </tr>
                        <tr class ="last_tr_height">
                            <td>
                                <label class="teacher">Condition: </label>
                                <input class="small" type = "text" name = "condition">
                            </td>
                            <td>
                                <label class="small">Price: </label>
                                <input class="small" type = "text" name = "price">
                            </td>
                            <td>
                                <label class="teacher">Location: </label>
                                <input class="small" type = "text" name = "location">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class = "button">
                    <a href="#"><img class="back"></a>
                    <input class="submit" type="submit" name="submit" value=" ">
                </div>
            </form>


    </div>
@endsection
