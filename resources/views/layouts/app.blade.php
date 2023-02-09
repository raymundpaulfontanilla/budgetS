<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    <title>Welcome to {{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .navbar-toggler-icon.dark {
            background-color: #333;
        }

        .motto {
            position: absolute;
            width: 599px;
            height: 226px;

            font-family: 'Lato';
            font-style: normal;
            font-size: 45px;
            align-items: flex-end;
            text-align: center;
            color: #1B6202;
        }

        .boy {
            position: absolute;
            width: 900px;
            height: 556px;
        }

        .sample {
            position: absolute;
            width: 249px;
            height: 191px;
            left: 0px;
            top: 500px;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            border-radius: 44px;
        }

        section.hero {
            margin: 4rem 0;
        }

        .item {
            transition: .35s;
        }
        
       .item:hover {
            opacity: 1;
            transform: scale(1.1);
        }


    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top d-flex " style="background-color:#DAFFC3">
        <div class="container-fluid">
            <a class="navbar-brand text-dark" href="{{ route('home')}}">
                <img src="{{ ('images/logo.png') }}" class="img-fluid" style="width: 60px">
            </a>

            <button class="navbar-toggler ml-auto bg-success" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-success"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mx-auto ">
                    <li class="nav-item">
                        <a class="nav-link active text-success fw-bold" aria-current="page"
                            href="{{route ('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success fw-bold" href="{{route ('about')}}">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item text-center">
                        <a class="btn btn-success" href="{{route ('register')}}">Get Started</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-3">
        @yield('content')
    </main>
    </div>
    @include('dashboard.components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>