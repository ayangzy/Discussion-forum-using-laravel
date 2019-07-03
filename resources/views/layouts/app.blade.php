<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Discussion forum</title>


   

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{asset('js/jquery-2.1.3.min.js')}}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/forum') }}">
                    Discussion forum
                </a>
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
                            <li class="nav-item dropdown">
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
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

            
            
            <div class="container">
                   
                <div class="row">
                    <div class="col-lg-4">
                       
                        <div class="card">
                        <a href="{{route('discussions.create')}}" class="btn  btn-primary">Create a new discussion</a>
                                <br><br><br><br><br><br>
                        <div class="card-header">
                            Channels
                        </div>

                        <div class="card card-default">
                            <div class="card-body">
                                <ul class="list-group">
                               <li class="list-group-item"> <a href="{{route('forum')}}">Home</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-body">
                                <ul class="list-group">
                            @foreach($channels as $channel)
                                <a href="{{route('channel', ['id'=>$channel->id])}}" style="text-decoration:none"> <li class="list-group-item" >{{$channel->title}}</a></li>
                            @endforeach
                        </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                            @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                        
                            <div class="alert alert-danger">
                            {{$error}}
                            </div>
                            @endforeach

                        @endif
                            @yield('content')   
                    </div>
                </div>

            </div>
                 
            
        </main>
    </div>



    
<script src="{{asset('js/toastr.min.js')}}"></script>

<script>
    @if(Session::has('success'))
        toastr.success("{{Session::get('success')}}")
    @endif
</script>

<script>
        @if(Session::has('info'))
            toastr.info("{{Session::get('info')}}")
        @endif
    </script>

<script>s
        @if(Session::has('warning'))
            toastr.warning("{{Session::get('warning')}}")
        @endif
    </script>




</body>
</html>
