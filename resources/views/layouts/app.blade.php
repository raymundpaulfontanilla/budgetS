<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    <title>Welcome to {{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" type="text/css" href="landingpage.css"/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

    <div class="container ">
        <div class="header-background ">
            <nav class="navbar navbar-expand-lg fixed-top" style="padding: 20px;" >
                <div class="container-fluid">
                    <a class="navbar-brand text-dark" href="{{ route('home')}}">
                        <img src="{{ ('images/logo.png') }}" class="img-fluid" style="width: 60px">
                        <span class="text-white fw-bold">BudgetS</span>
                    </a>
        
                    <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle Navigation" style="background-color:#7fb86e;">
                        <span class="navbar-toggler-icon" style="background-color:#7fb86e;"></span>
                        <span></span>
                    </button>
        
                    <div class="collapse navbar-collapse text-center" id="navbarCollapse">
                        <ul class="navbar-nav ms-auto mx-auto ">
                            <li class="nav-item ">
                                <a class="nav-link active fw-bold" aria-current="page"
                                    href="{{route ('home')}}" style="letter-spacing:2px; color:#1B6202;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="{{route ('about')}}" style="letter-spacing:2px; color:#1B6202;">About</a>
                            </li>
                        </ul>
                        <form class="align-items-center">
                                <button class="btn btn-success" href="{{route ('register')}}">Get Started</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <main>
        @yield('content')
    </main>
    @include('dashboard.components.footer')

</body>

</html>

