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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>

<body>
    
    <div class="container ">
        <div class="header-background ">
            <nav class="navbar navbar-expand-lg fixed-top" style="padding: 20px;" >
                <div class="container-fluid">
                    <a class="navbar-brand text-dark" href="{{ route('home')}}">
                        <img src="{{ ('images/logo.png') }}" class="img-fluid" style="width: 60px">
                        <span class="fw-bold" style="color:#1B6202;">BudgetS</span>
                    </a>
                
                            <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                                aria-label="Toggle Navigation" style="background-color:#1c62027e;">
                                <span class="navbar-toggler-icon" style="background-color: #1c62027e;"></span>
                                <span></span>
                            </button>
                
                            <div class="bg-nav collapse navbar-collapse text-center" id="navbarCollapse">
                                <ul class="navbar-nav ms-auto mx-auto ">
                                    <li class="nav-item ">
                                        <a class="nav-link active fw-bold fs-5" aria-current="page"
                                            href="{{route ('home')}}" style="letter-spacing:2px; color:#1B6202;">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fw-bold fs-5" href="{{route ('about')}}" style="letter-spacing:2px; color:#1B6202;">About</a>
                                    </li>
                                </ul>
                        <form class="align-items-center">
                        <a class="btn btn-success" href="{{route ('register')}}">Get Started</a>
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

    <script>
        const navScroll = document.querySelector('.navbar');

        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 50 ) {
                navScroll.classList.add('bg-light','shadow');
            } else {
                navScroll.classList.remove('bg-light','shadow');
            }
        });

    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>