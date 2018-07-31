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
        @section('navbar') 
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
        <div class="row">
            @section('left-side')
                <div class="col">  
                <div class="card">
                    <div class="card-body" style="text-align:center">
                        @if(Auth::user()->profile_picture == null)
                        <img src="https://bootstrap-themes.github.io/application/assets/img/avatar-dhg.png" class="rounded-circle" style="width:80px" alt="">
                        @else
                        <img  src="{{asset('/storage/uploads/'.Auth::user()->profile_picture)}}" style="width:100px" alt="">
       
                        @endif
                        <br><br>
                    <h4 class="card-title">{{Auth::user()->name}}</h4>
                    <h6 class="card-subtitle mb-2 text-muted">{{Auth::user()->profile_intro}}</h6>
                     <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                </div>
            @show
            
            <div class="col-6">
              <div class="card post-card" >
                    <div class="card-body">
                        <form action="/post"method="post" enctype="multipart/form-data" >
                            {{csrf_field()}} 
                        <textarea class="form-control" required name="post" id="exampleTextarea" rows="1" placeholder="Whats on your mind?"></textarea>
                        <img src=""  id="photo"  class="img img-fluid"> 
                    </div>
                    <div class="card-footer">
                            <label href="" class="btn btn-secondary  btn-sm">
                                <i class="fa fa-image"></i>&nbsp;Image
                                <input type="file" name="photo" id="imgInp" style="display:none">
                            </label>
                            <button type="submit" class="btn btn-primary btn-sm" style="float:right">
                                Post
                            </button>
                        </form>
                    </div>  
                </div>
                
            @yield('content')
            </div>

            @section('right-side')
            <div class="col">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                    </div>
                </div>  
                <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">People you may know</h4> 
                        <ul class="list-unstyled">
                        @foreach($peoples as $people)
                            <li class="list-group-flush">
                            <i class="fa fa-circle text-success fa-xs"></i> {{$people->name}}
                            </li>
                        @endforeach
                    </ul>
                        </div>
                    </div> 
            </div>
            @show
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    
<script type="text/javascript">
    function readURL(input) {
   if (input.files && input.files[0]) {
       var reader = new FileReader();
       
       reader.onload = function (e) {
           $('#photo').attr('src', e.target.result);
       }
       
       reader.readAsDataURL(input.files[0]);
   }
}

$("#imgInp").change(function(){
   readURL(this);
});
 </script>
<script>
    
$('textarea').off('focus', function() {
    $('.post-card').removeClass('focused');
});
    $('textarea').on('focus', function() {
    $('.post-card').addClass('focused');
});

</script>



</html>


