@extends('layouts.master')

@section('content')
<div class="content">
    <div class="loginPanel">
        <h1 class="login-title">Log In</h1>
        <div>
            <form role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <table class="loginTable">
                    <tr>
                        <td>
                            <div class="group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="tableLabel">Username (Email)</label><br>
                                <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="tableLabel">Password</label><br>
                                <input id="password" type="password" class="input" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>
                                <input type="checkbox" name="remember"> <strong>Remember Me</strong>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="PanelButtonWrapper">
                                <button type="submit" class="PanelButton">
                                    Log In
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a class="tableLink" href="{{ url('/password/reset') }}">
                                Forgot Your Password?
                            </a>
                        </td>
                    </tr>

                </table>

            </form>
        </div>
    </div>
</div>
@endsection
