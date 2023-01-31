<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Landing Page</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        body,
        html {
            margin: 0;
            font-family: Roboto, Arial, helvetica, sans-serif;
        }

        a {
            outline: none;
        }

        .navbar-container {
            text-align: center;
            background-color: #50d71e;
            box-shadow: 0px -20px 5px 20px #333333;
            padding: 10px;
            font-size: 0;
            font-weight: bold;
        }

        .navbar-container ul {
            margin: 0;
            padding: 0;
            text-align: right;
            display: inline-block;
            vertical-align: middle;
        }

        .navbar-container ul li {
            display: inline-block;
            font-size: 16px;
        }

        .navbar-container ul li a {
            color: black;
            text-decoration: none;
            display: inline-block;
            padding: 10px;
            transition: color 0.5s;
        }

        .navbar-container ul li .underline {
            height: 3px;
            background-color: transparent;
            width: 0%;
            transition: width 0.2s, background-color 0.5s;
            margin: 0 auto;
        }

        .navbar-container ul li.active-link .underline {
            width: 100%;
            background-color: white;
        }

        .navbar-container ul li:hover .underline {
            background-color: white;
            width: 100%;
        }

        .navbar-container ul li:hover a {}

        .navbar-container ul li:active a {
            transition: none;
            color: rgba(255, 255, 255, 0.76);
        }

        .navbar-container ul li:active .underline {
            transition: none;
            background-color: rgba(255, 255, 255, 0.76);
        }
    </style>
</head>

<body>
<div class="navbar-container">
    
    
    <img src="{{ asset('images/logo.png') }}" class="img-fluid float-start" style="width: 50px;"></img>
    <span><h5 class="float-start">budgetS</h5></span>
	<ul>
		<li class="nav-link active-link">
			<a href="{{ route('landingpage')}}">Home
			</a>
			<div class="underline"></div>
		</li>
		<li class="nav-link">
			<a href="{{ route('about') }}">About Us</a>
			<div class="underline"></div>
		</li>
		<li class="nav-link">
			<a href="#">Testimonials</a>
			<div class="underline"></div>
		</li>
		<li class="nav-link">
			<a href="#">Contact</a>
			<div class="underline"></div>
		</li>
	</ul>
</div>

    <script>
        $('.nav-link').on('click', function() {
            $('.active-link').removeClass('active-link');
            $(this).addClass('active-link');
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>