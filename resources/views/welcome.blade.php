<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>

        <title>RAN</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

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

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
            <a class="navbar-brand" href="#">
                @lang('public.ran')
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">@lang('public.home')
                        <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('public.news')
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">UPDATE</a>
                          <a class="dropdown-item" href="#">PATCH</a>
                          <a class="dropdown-item" href="#">ANNOUNCEMENTS</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('public.community')
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">FACEBOOK</a>
                          <a class="dropdown-item" href="#">FORUM</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          @lang('public.support')
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">CONTACT</a>
                          <a class="dropdown-item" href="#">RULES</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          LANGUAGE
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="locale/en">ENGLISH <i><img src="{{url('/img/en-flag.jpg')}}" style="width: 30px; height: 30px; margin-left: 3px" alt="Image"/></i></a>
                          <a class="dropdown-item" href="locale/kr">KOREAN <i><img src="{{url('/img/kr-flag.png')}}" style="width: 30px; height: 30px; margin-left: 3px" alt="Image"/></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">@lang('public.login')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">@lang('public.register')</a>
                    </li>
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
                    <strong>Ran online Developer</strong>
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
            <!-- /.row -->

            
        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
            </div>
            <!-- /.container -->
        </footer>
    </body>
</html>
