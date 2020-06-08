<!DOCTYPE html>
<html lang="en">
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
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>ï
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="" class="navbar-brand" href="#">Food</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggle-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item" active=""><a href="#" class="nav-link"><span class="sr-only">current</span></a></li>
      <li class="nav-item" active=""><a href="#" class="nav-link"><span class="sr-only">features</span></a></li>
        <li class="nav-item" active=""><a href="#" class="nav-link"><span class="sr-only">pricing</span></a></li>
        <li class="nav-item" active=""><a href="#" class="nav-link"><span class="sr-only">disabled</span></a></li>
      </ul>
    </div>
    </nav>
  </header>

    

    
    <form class="input-group" action="{{url('/food/search')}}" method="get">
        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
        <div class="input-group-append">
            <button class="btn btn-success" type="button">Love it</button>
        </div>
    </form>
</body>
</html>