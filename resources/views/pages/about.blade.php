<link rel="stylesheet" type="text/css" href="landingpage.css"/>
<title>About</title>

@extends('layouts.app')

@section('content')

<header>
    <div class="container py-5 text-center text-white">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h1 class="mb-5 mt-5 display-2 fw-bold">BudgetS</h1>
            </div>
        <hr>

        </div class = "col-lg-12 col-md-12 col-sm-12">
        <h5 class="mt-5 display-5">BudgetS is a budget system business located in the Philippines. It offers convenient and reliable solutions to help people manage their finances,from budgeting and tracking expenses to creating savings goals and more.</h5>
        </div>
    </div>
</header>

<section class="team">
    <div class="container ">
        <div class="row py-5">
            <h1 class="text-center">The Team</h1>
        </div>
    </div>

    <div class="section text-center" id="section-container">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <img src = "https://www.ateneo.edu/sites/default/files/styles/large/public/2021-11/istockphoto-517998264-612x612.jpeg?itok=aMC1MRHJ" id="image">
                </div>
                <div class="col-lg-8">
                    <h1>Raymund Fontanilla</h1>
                    <p>Backend-Leader</p>
            </div>
        </div>
    </div>

    <div class="section text-center" id="section-container">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Angela Morales</h1>
                    <p>Fullstack</p>
            </div>
                <div class="col-lg-4">
                    <img src = "https://www.ateneo.edu/sites/default/files/styles/large/public/2021-11/istockphoto-517998264-612x612.jpeg?itok=aMC1MRHJ" id="image">
                </div>
        </div>
    </div>

    <div class="section text-center" id="section-container">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <img src = "https://www.ateneo.edu/sites/default/files/styles/large/public/2021-11/istockphoto-517998264-612x612.jpeg?itok=aMC1MRHJ" id="image">
                </div>
                <div class="col-lg-8">
                    <h1>Joshua Zafe</h1>
                    <p>Fullstack</p>
            </div>
        </div>
    </div>

    <div class="section text-center" id="section-container">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1>Danica Libres</h1>
                    <p>Fullstack</p>
            </div>
                <div class="col-lg-4">
                    <img src = "https://www.ateneo.edu/sites/default/files/styles/large/public/2021-11/istockphoto-517998264-612x612.jpeg?itok=aMC1MRHJ" id="image">
                </div>
        </div>
    </div>
</section>

@endsection



