<link rel="stylesheet" type="text/css" href="landingpage.css"/>
<title>About</title>

@extends('layouts.app')

@section('content')

<header>
    <div class="header-section">
        <div class="bg-light h-auto">
            <div class="container py-5 ms-auto d-flex">
                <div class="row align-items-center pt-5 mt-5">
                    <div class = "col-lg-12 col-md-12 col-sm-12 text-center">
                        <p class="fs-5 fw-bold " style="color: #1B6202; letter-spacing:5px; text-transform:uppercase;">About BudgetS</p>
                        <h2 class="fw-bold display-4 mb-4">Get on Top of Your Finances With BudgetS.</h2>
                        <p class="fs-5">BudgetS is a tool for managing and tracking your income and expenses. It provides you with detailed reports about your situation, so that you can adjust it accordingly. You can also find out how much you have in your account at any given time.</p>
                    </div>
                    <div class = "row align-items-center ms-auto py-5">
                        <div class = "col-lg-3 col-md-6 my-3">
                            <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c" class="image img-fluid d-none d-lg-block d-md-block">
                        </div>
                        <div class = "col-lg-3 col-md-6 my-3">
                            <img src="https://asesor-online.com/wp-content/uploads/2022/10/pexels-olya-kobruseva-7247407-1024x684.jpg" class="image img-fluid d-none d-lg-block d-md-block">
                        </div>
                        <div class = "col-lg-3 col-md-6 my-3">
                            <img src="https://images.unsplash.com/photo-1633158829585-23ba8f7c8caf" class="image img-fluid d-none d-lg-block d-md-block">
                        </div>
                        <div class = "col-lg-3 col-md-6 my-3">
                            <img src="https://images.unsplash.com/photo-1625225233840-695456021cde" class="image img-fluid d-none d-lg-block d-md-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <div class = "mvv bg-light py-5">
        <div class="container">
            <div class="row align-items-center text-center ">
                <div class="col-lg-4 col-md-4 justify-content-center py-5">
                    <img src = "https://www.pngitem.com/pimgs/m/185-1859950_hit-mission-icon-png-transparent-png.png" class="imageNobg img-fluid mb-3">
                    <h4 class="mvv-title">Mission</h4>
                    <p class="text-dark">BudgetS is committed to providing simple and effective tools to help our users manage their finances and stay on top of their budget. We want to empower our users to take control of their money and improve their financial well-being.</p>
                </div>
                <div class="col-lg-4 col-md-4 justify-content-center py-5">
                    <img src = "https://cdn-icons-png.flaticon.com/512/561/561094.png" class="imageNobg img-fluid">
                    <h4 class="mvv-title">Vision</h4>
                    <p class="text-dark">BudgetS is committed to providing a simple and effective way for people to manage their finances. We want to help people take control of their money so they can lead happier, more financially secure lives.</p>
                </div>
                <div class="col-lg-4 col-md-4 justify-content-center py-5">
                    <img src = "https://cdn-icons-png.flaticon.com/512/3362/3362061.png" class="imageNobg img-fluid">
                    <h4 class="mvv-title">Goal</h4>
                    <p class="text-dark">Our goal is to help our customers budget their finances and save money. We strive to provide a simple, user-friendly interface that makes budgeting easy and fun.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class = "team">
    <div class="container">
        <div class="section-title mt-5">
            <h2>Team</h2>
            <p class="mb-4">Check our team</p>
        </div>
        <div class="row gy-4 mb-4">
            <div class="col-xl-3 col-md-6 d-flex">
                <div class="member">
                    <img src = "https://www.ateneo.edu/sites/default/files/styles/large/public/2021-11/istockphoto-517998264-612x612.jpeg?itok=aMC1MRHJ" class="img-fluid" alt = "member">
                    <h4>Raymund Fontanilla</h4>
                    <span>Backend-Leader</span>
                <div class = "social">
                    <a href>
                        <i class="fab fa-brands fa-facebook"></i>
                    </a>
                    <a href>
                        <i class="fab fa-brands fa-instagram"></i>
                    </a>
                    <a href>
                        <i class="fab fa-brands fa-twitter"></i>
                    </a>
                </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex">
                <div class="member">
                    <img src = "https://www.ateneo.edu/sites/default/files/styles/large/public/2021-11/istockphoto-517998264-612x612.jpeg?itok=aMC1MRHJ" class="img-fluid" alt = "member">
                    <h4>Angela Morales</h4>
                    <span>Fullstack</span>
                <div class = "social">
                    <a href>
                        <i class="fab fa-brands fa-facebook"></i>
                    </a>
                    <a href>
                        <i class="fab fa-brands fa-instagram"></i>
                    </a>
                    <a href>
                        <i class="fab fa-brands fa-twitter"></i>
                    </a>
                </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex">
                <div class="member">
                    <img src = "https://www.ateneo.edu/sites/default/files/styles/large/public/2021-11/istockphoto-517998264-612x612.jpeg?itok=aMC1MRHJ" class="img-fluid" alt = "member">
                    <h4>Joshua Zafe</h4>
                    <span>Fullstack</span>
                <div class = "social">
                    <a href>
                        <i class="fab fa-brands fa-facebook"></i>
                    </a>
                    <a href>
                        <i class="fab fa-brands fa-instagram"></i>
                    </a>
                    <a href>
                        <i class="fab fa-brands fa-twitter"></i>
                    </a>
                </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex">
                <div class="member">
                    <img src = "https://www.ateneo.edu/sites/default/files/styles/large/public/2021-11/istockphoto-517998264-612x612.jpeg?itok=aMC1MRHJ" class="img-fluid" alt = "member">
                    <h4>Danica Libres</h4>
                    <span>Fullstack</span>
                <div class = "social">
                    <a href>
                        <i class="fab fa-brands fa-facebook"></i>
                    </a>
                    <a href>
                        <i class="fab fa-brands fa-instagram"></i>
                    </a>
                    <a href>
                        <i class="fab fa-brands fa-twitter"></i>
                    </a>
                </div>
                </div>
            </div>
        </div>
        
        
    </div>
</section>

@endsection





