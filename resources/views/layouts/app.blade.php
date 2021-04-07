<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RAN') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'RAN') }}
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
                            <li class="nav-item active">
                                <a class="nav-link" href="#">HOME
                                <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  NEWS
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item" href="#">UPDATE</a>
                                  <a class="dropdown-item" href="#">PATCH</a>
                                  <a class="dropdown-item" href="#">ANNOUNCEMENTS</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  COMMUNITY
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item" href="#">FACEBOOK</a>
                                  <a class="dropdown-item" href="#">FORUM</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  SUPPORT
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item" href="#">CONTACT</a>
                                  <a class="dropdown-item" href="#">RULES</a>
                                </div>
                            </li>
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

        <!-- Header -->
        <header class="bg-primary py-5 mb-5">
            <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                <h1 class="display-4 text-white mt-5 mb-2">RAN ONLINE</h1>
                <p class="lead mb-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non possimus ab labore provident mollitia. Id assumenda voluptate earum corporis facere quibusdam quisquam iste ipsa cumque unde nisi, totam quas ipsam.</p>
                </div>
            </div>
            </div>
        </header>

        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://placehold.it/300x200" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Find Out More!</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://placehold.it/300x200" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
                        </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Find Out More!</a>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://placehold.it/300x200" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Find Out More!</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->        
        </div>

        @guest
    
        @else
            <main class="py-4">
                @yield('content')
            </main>
        @endguest
        

        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-5">
                    <h2>ABOUT US</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
                    <a class="btn btn-primary btn-lg" href="#">Call to Action &raquo;</a>
                </div>
                <div class="col-md-4 mb-5">
                    <h2>Contact Us</h2>
                    <hr>
                    <address>
                    <strong>Ran Online developers</strong>
                    <br>3481 Melrose Place
                    <br>Beverly Hills, CA 90210
                    <br>
                    </address>
                    <address>
                    <abbr title="Phone">P:</abbr>
                    (123) 456-7890
                    <br>
                    <abbr title="Email">E:</abbr>
                    <a href="mailto:#">name@example.com</a>
                    </address>
                </div>
            </div>
        </div>
        
        <!-- /.row -->    
        
         <!-- Footer -->
         <footer class="py-5 bg-dark">
            <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
            </div>
            <!-- /.container -->
        </footer>
    </div>
</body>
</html>
