<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;

            margin: 0;
        }

    .nav-link{
        color: white;
        font-weight: bold;
        font-size: 1.4em !important;
    }
        .nav-link:hover{
            color: seagreen;
        }

    </style>
</head>
<body>
<nav  class=" p-2 navbar-expand-sm bg-dark navbar-dark text-white">
    <ul class="nav justify-content-end">
    @if (Route::has('login'))



            @auth
            <li class="nav-item"> <a class="nav-link" href="{{ route('questions.index') }}">Questions</a></li>

            <li class="nav-item">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">
                       {{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>

                    </div>
                </div>
            </li>
            @else
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @endauth
            @endif
        </ul>


</nav>
<div class="flex-center position-ref full-height mt-5">

    @yield('content')
</div>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>