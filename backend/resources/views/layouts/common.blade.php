<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <title>{{ config('app.name', 'Laravel') }}</title>

  

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--script-->

</head>

<body>
    <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a href="" class="navbar-brand" href="#">Food</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item" active="">
                            <a href="#" class="nav-link">HOME<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item" active="">
                            <a href="{{ route('comparison.index')}}" class="nav-link">比較<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item" active="">
                            <a href="#" class="nav-link">Pricing<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item" active="">
                            <a href="#" class="nav-link">Disabled<span class="sr-only"></span></a>
                        </li>
                        @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    </ul>
                </div>

            </nav>
    </header>
    <div id="app">

        <form class="form-inline">
            <div class="form-search-center">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </div>
        </form>
        <div class="container">
        
        @yield('content')
    </div>
        
    </div>
    
    
    <script src=" {{ mix('js/app.js') }} "></script>
    
</body>

</html>