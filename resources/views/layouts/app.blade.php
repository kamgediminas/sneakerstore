<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Vanity Kicks</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div id="app">
        <nav class="site-header sticky-top py-1 navbar navbar-expand-md">
            <div class="container">
            <a class="nav-link"  href="/"><img class="logoMini" src="/img/logo-mini.png" alt=""></a>
            <!-- <a class="nav-link"  href="/">Home</a> -->
            <a class="nav-link" href="/sneakers">Store</a>
            <a class="nav-link" href="/about">About</a>
            <a class="nav-link" href="/cart">Cart</a>
            @guest

                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                @if (Route::has('register'))
                        <!-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> -->
                @endif
            @else
                <!-- <a class="nav-link" href="/home">Dashboard</a> -->

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/sneakers_admin/">
                            Board
                        </a>
                        <a class="dropdown-item" href="/sneakers/create">
                            Insert
                        </a>
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
            </div>
        </nav>
        <div class="logoContainer">
        <a href="/"><img src="/img/logo.png" alt="logo"></a>
        </div>
        <main class="py-4">
            @yield('content')
            @yield('pagescript')
        </main>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h4>Social media</h4>
                    <p>Follow us on these platforms:</p>
                    <a href="https://www.facebook.com"><i class='fab fa-facebook' style='font-size:24px'></i></a>
                    <a href="https://www.instagram.com"><i class='fab fa-instagram' style='font-size:24px'></i></a>
                    <a href="https://www.youtube.com"><i class='fab fa-youtube' style='font-size:24px'></i></a>
                    <a href="https://www.linkedin.com"><i class='fab fa-linkedin' style='font-size:24px'></i></a>
                </div>

                <div class="col-md-5">
                    <h4>Newsletter</h4>
                    <p>Subscribe to our newsletter</p>
                    <form><input type="text" id="text" name="text"><br></form>
                    <button type="button" class="btn btn-sm button-bottom footer-button">Submit</button>
                </div>
            </div>
            <p class="footerSignature">&copy; Gediminas Kaminskas 2021</p>
            <br>
        </div>
    </footer>
    
    <script src="https://kit.fontawesome.com/ca08530022.js" crossorigin="anonymous"></script>

</body>
</html>
