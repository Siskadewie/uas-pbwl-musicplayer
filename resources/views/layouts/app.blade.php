
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/
bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <style>
    html, body {
            background-color: grey;
            color: #808080
            font-family: 'Cambria', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
    }
    table {
        margin:10px;
        border-collapse: collapse;
        width: 100%;
        }
    table th {
        text-align: center;
        width: 300px;
        padding: 10px;
        background-color: green;
        color: #ffffff;
        border: 2px solid gainsboro;
        border-radius: 10px;
    }
    table td {
        text-align: left;
        padding:10px;
        object-position: center;
        left: 20px;
        background-color: white;
        border: 2px solid gainsboro;
        border-radius: 10px;
    }
    .cen{
        text-align: center;
    }
    #tbh {
        padding: 2px 10px 3px 10px;
        background-color: white;
        border: 2px solid gray;
        border-radius: 50px;
        font-size: 20px;
        font-weight: bolder;
        text-decoration: none;
        color: black;
        margin-top: 5px;
        margin-left: 10px;
    }
    #btn {
        padding: 2px 10px 3px 10px;
        background-color: white;
        border: 2px solid gray;
        border-radius: 50px;
        font-size: 14px;
        font-weight: bolder;
        text-decoration: none;
        color: black;
        margin-top: 5px;
        margin-left: 10px;
    }
    #tbh:hover,#btn:hover {
        background-color: green;
    }
    #app{
        border-radius: 50px;
    }
    
}
</style>
</head>
<body>
    <div id="header">
    </div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
  <a class="navbar-brand" href="#">MUSIC PLAYER</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                                                <li class="nav-item active">
                                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/artis">ARTIS</a>
                              </li>
                            </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/album">ALBUM</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/track">TRACK</a>
                              
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
