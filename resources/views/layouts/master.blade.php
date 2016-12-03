<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/master.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">

        <div class="container">

            <div class="header">

                <div class="left-header">
                    <a class="brand" href="{{ url('/') }}">
                        <img src="{{URL::asset('/images/logo.png')}}" class="img_logo">
                        {{ config('app.name', 'Sell My Notes') }}
                    </a>
                </div>

                <div class="right-header">
                    <ul class="list">
                        <li><a class="headerLink" href="{{ url('/login') }}">My Listings</a></li>
                        <li><a class="headerLink" href="{{ url('/login') }}">Create</a></li>
                        @if (Auth::guest())
                            <li><a class="headerLink" href="{{ url('/login') }}">Log In</a></li>
                            <li><a class="headerLink" href="{{ url('/register') }}">Sign Up</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>

            </div>

            @yield('content')
        </div>
</div>

<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
</html>
