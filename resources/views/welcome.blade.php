<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }



            .m-b-md {
                margin-bottom: 30px;
            }

            .links a{
                margin-left: 20px;
                font-size: 1.6em;
                font-weight: bold;

            }
            .dropdown-menu a{
                font-weight: bold;
                font-size: 1.5em !important;
            color: black !important;
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

            <div class="container">

                    <div class="jumbotron bg-dark text-center">
               <h1 id="home_title"> Q & A</h1>
                    </div>


                <div class="row links d-flex justify-content-center">

                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
