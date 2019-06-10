<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
    <script src="http://vjs.zencdn.net/4.12/video.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/img.css') }}" rel="stylesheet">
    <link href="{{ asset('css/img2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/img3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/degrade.css') }}" rel="stylesheet">

</head>
<body>

<div class="header img-responsive">
   <div class="container" style="margin-left: 15%;">
            <div class="row">
               
                
                    <!-- Left Side Of Navbar -->
                                               
                    <div class="col-md-4 img-responsive" style="margin-top:2%; ">
                        <div class="row">
                        <a class="topbar-header-social" href="https://www.facebook.com/RadioUNNE997" target="blank" title="Facebook"><span class="fa fa-facebook" style="font-size: 25px"></span></a>

                        <a class="topbar-header-social" href="http://www.twitter.com/RadioUNNE997" target="blank" data-toggle="tooltip" title="Twitter"><span class="fa fa-twitter" style="font-size: 25px"></span></a>

                        <a class="topbar-header-social" href="http://instagram.com/RadioUNNE997" target="blank" data-toggle="tooltip" title="Instagram"><span class="fa fa-instagram" style="font-size: 25px"></span></a>

                        <a class="topbar-header-social" href="#" data-toggle="tooltip" title="Youtube"><span class="fa fa-youtube" style="font-size: 25px"></span></a>
                   </div>
                        </div>            
                              
                            
                        <div class="col-md-4 header-center img-responsive" style="margin: 0px,0px,0px,0px;">
                            <div class="row">
                <a class="navbar-brand img-responsive " href="{{ url('/principal') }}">
                    <img class="img-responsive " src="http://localhost:8000/public/img/b6vcC4MdnYxZVpJQIRUaK1FVAiKfWATIqQplaU64.jpeg" align="center" style="width: 110px; height: 75px; margin: 0px;">
                </a>
            </div>
                </div>
                
                <div class="col-md-4 header-right img-responsive" style="margin-top: 2%;">
                    <!-- Right Side Of Navbar -->
                    <div class="row img-responsive" >
                        <!-- Authentication Links -->
                        @guest
                            
                                <strong><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></strong>
                            
                            @if (Route::has('register'))
                                
                                    <strong> <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></strong>
                                
                            @endif
                        @else

                           <strong> <a class="nav-link" href="{{route('tags.index')}}">Etiquetas  </a></strong>
                            <strong><a class="nav-link" href="{{route('categories.index')}}">Categorias  </a></strong>
                           <strong> <a class="nav-link" href="{{route('posts.index')}}">Posts  </a></strong>

                           
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            
                        @endguest
                    </div></div>
              </div>
              </div>



  <!-- <nav class="navbar navbar-expand-lg " style="padding: 0 0 0 0;"> -->
       <!--  <div class="img-responsive topnav " id="myTopnav" style="background:#DAA520; width: 100%"> -->
                 

       <!--  <div class="navbar-collapse" > -->
      <!--            <ul class="topnav  ml-auto mt-2 mt-lg-0" id="myTopnav">
                         
                                   <strong> <a href="{{url('/principal')}}" class="nav-menu">INICIO<span class="sr-only" >(current)</span></a></strong>
                           
                                    <strong> <a href="{{url('/programacion')}}">PROGRAMACION</a></strong>
                          
                                    <strong> <a href="{{url('/contacto')}}">CONTACTO</a></strong>
                            
                                      <strong>  <a href="#contact">UNNE Medios</a></strong>
                            

                            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
                </ul>
                <ul class=" topnav mr-auto  " id="myTopnav">
                     <li>       
    
            {!! Form::open(['route' => ['post.search'], 'method' => 'GET']) !!}
            {!! Form::text('search', old('search'), array('placeholder'=>'buscar...','style' => 'height: 25px;' )) !!}
            {!! Form::submit('BUSCAR', ['class' => 'glyphicon glyphicon-search', 'style' => 'background:black;color: white; width: 80px; height: 30px;']) !!}
            {!! Form::close() !!}
                           
        
                    </li>
                </ul>
        </div>
      <!--   </div>
    </nav> -->

   

</div>



<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #000000;

}



.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;

  
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  border-top: 2px solid #DAA520;

  color: #DAA520;
}


.active {
  
  color: #DAA520;
}

.topnav .icon {
  display: none;
}



@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

 
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="{{url('/principal')}}" class="active">INICIO</a>
  <a href="{{url('/programacion')}}">PROGRAMACION</a>
  <a href="{{url('/contacto')}}">CONTACTO</a>
  <a href="#">UNNE Medios</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  <a style="margin-left: 30%; ">       
    
            {!! Form::open(['route' => ['post.search'], 'method' => 'GET']) !!}
            {!! Form::text('search', old('search'), array('placeholder'=>'buscar...','style' => 'height: 25px;' )) !!}
            {!! Form::submit('BUSCAR', ['class' => 'glyphicon glyphicon-search', 'style' => 'background:black;color: white; width: 80px; height: 30px;']) !!}
            {!! Form::close() !!}
  </a>
                
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>





 




  @yield('content')

        <main class="py-4">

            @if(count($errors))
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                                @endforeach
                             </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

             @if(session('info'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="alert alert-success">
                                {{session('info')}}
                            </div>
                        </div>
                    </div>
                </div>
            @endif


           
        </main>
      
         
         <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')

      
    
</body>
<p class="text-center" style="color: grey">UNIVERSIDAD NACIONAL DEL NORDESTE · CHACO · CORRIENTES · REPÚBLICA ARGENTINA
RECTORADO · 25 DE MAYO 868 - (3400) CORRIENTES · E-MAIL: COMUNICACIONINSTITUCIONAL.UNNE@GMAIL.COM</p>
</html>
