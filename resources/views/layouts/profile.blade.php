<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('css/lumen.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <title>Social </title>

        
    </head>
    <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <div class="container">
                        <a class="navbar-brand" href="#">Social Media</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button> 
                        <div class="collapse navbar-collapse" id="navbarColor01">
                          <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                              <a class="nav-link" href="#"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#"><i class="fa fa-users"></i> Friends</a>
                            </li> 
                            <li class="nav-item">
                              <a class="nav-link" href="#"><i class="fa fa-bell"></i> Notifications</a>
                            </li> 
                          </ul>
                          <ul class="navbar-nav"> 
                                @if (Route::has('login'))
                                @auth 
                                <li class="nav-item active">
                                <a href="/my/profile/" class="nav-link">Welcome, {{Auth::user()->name}}</a>
                                </li>
                                   <li class="nav-item">  
                                            <a class="nav-link" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a> 
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{csrf_field()}}
                                            </form> 
                                    </li>
                                    @else
                                    <li class="nav-item">        
                                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li class="nav-item">  
                                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                                    </li>
                                    
                                    @endauth
                                    @endif
                        </div>
                    </div>
                      </nav> 
                      @show
    
          
          
        <div class="container">
                @if (session('status'))
                <div class="alert alert-success">
                    <i class="fa fa-check"></i> {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
    </div>  
    </body>
</html>