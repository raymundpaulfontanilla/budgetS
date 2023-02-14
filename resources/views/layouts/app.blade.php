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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>

<body>
    
    <div class="container">
        <div class="header-background blur-none">
            <nav class="navbar navbar-expand-lg fixed-top" style="padding: 20px;" >
                <div class="container-fluid">
                        <a class="navbar-brand text-dark" href="{{ route('home')}}">
                            <img src="{{ ('images/logo.png') }}" class="img-fluid" style="width: 60px">
                            <span class="fw-bold" style="color:#1B6202;">BudgetS</span>
                        </a>
                    
                    <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle Navigation">
                        <span class="navbar-toggler-icon">
                            <i class="fas fa-bars fs-3"></i>
                        </span>
                    </button>
                    
                        <div class="collapse navbar-collapse text-center backdrop-blur" id="navbarCollapse">
                            <ul class="navbar-nav ms-auto mx-auto ">
                                <li class="nav-item ">
                                    <a class="nav-link active fw-bold fs-5" aria-current="page" href="{{route ('home')}}" style="letter-spacing:2px; color:#1B6202;">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold fs-5" href="{{route ('about')}}" style="letter-spacing:2px; color:#1B6202;">About</a>
                                </li>
                            </ul>
                            <div class="align-items-center">
                                <a class="btn btn-success" href="{{route ('register')}}">Get Started</a>
                            </div>
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
  duration: 1200,
});
  </script>
</body>

</html>

