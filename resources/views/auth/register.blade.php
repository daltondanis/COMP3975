@extends('layouts.master')

@section('content')
<div class="content">
    <div class="loginPanel">
        <h1 class="login-title">Sign Up</h1>
        <div>
            <form role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}

                <table class="loginTable">
                    <tr>
                        <td>
                            <div class="group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="username" class="tableLabel">Username</label><br>
                                <input id="username" type="text" class="input" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="tableLabel">Email</label><br>
                                <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required>

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
                            <div class="group">
                                <label for="password-confirm" class="tableLabel">Confirm Password</label><br>
                                <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="PanelButtonWrapper">
                                <button type="submit" class="PanelButton">
                                    Sign Up
                                </button>
                            </div>
                        </td>
                    </tr>
                </table>

            </form>
        </div>
    </div>
</div>
@endsection
