<link rel="stylesheet" type="text/css" href="landingpage.css"/>
<title>About</title>

@extends('layouts.app')

@section('content')

{{-- About Header --}}
<header>
    <div class="header-section">
        <div class="bg-light h-auto py-5">
            <div class="container py-5 ms-auto d-flex">
                <div class="row align-items-center pt-5 mt-5">
                    <div class = "col-lg-12 col-md-12 col-sm-12 pt-5 text-center justify-content-center">
                        <div data-aos="zoom-in">
                            <h2 class="fw-bold display-4 mb-4">Get on Top of Your Finances With BudgetS.</h2>
                            <p class="fs-5">BudgetS is a tool for managing and tracking your income and expenses. It provides you with detailed reports about your situation, so that you can adjust it accordingly. You can also find out how much you have in your account at any given time.</p>
                        </div>
                    </div>
                    <div class = "row align-items-center ms-auto py-5">
                        <div class = "col-lg-3 col-md-3 col-sm-3">
                            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c" class="image img-fluid d-none d-lg-block d-md-block">
                            </div>
                        </div>
                        <div class = "col-lg-3 col-md-3 col-sm-3">
                            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <img src="https://asesor-online.com/wp-content/uploads/2022/10/pexels-olya-kobruseva-7247407-1024x684.jpg" class="image img-fluid d-none d-lg-block d-md-block">
                            </div>
                        </div>
                        <div class = "col-lg-3 col-md-3 col-sm-3">
                            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <img src="https://images.unsplash.com/photo-1633158829585-23ba8f7c8caf" class="image img-fluid d-none d-lg-block d-md-block">
                            </div>
                        </div>
                        <div class = "col-lg-3 col-md-3 col-sm-3">
                            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <img src="https://images.unsplash.com/photo-1625225233840-695456021cde" class="image img-fluid d-none d-lg-block d-md-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
{{-- End of About Header --}}

{{-- FAQs --}}

<section class="faqs">
    <div class="bg-success h-auto">
        <div class="container p-5">
            <div class="row align-items-center p-5">
                <div data-aos="zoom-in-down">
                    <h2 class="d-flex justify-content-center text-white display-4 fw-bold">Frequently Asked Questions</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 mt-3">
                    <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="accordion accordion-flush d-grid gap-3" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header " id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <span class ="fw-bold" style="color: #1B6202;">How do I get started with BudgetS?</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Getting started is super easy! Just sign up with your email address and start adding your financial information. With BudgetS, you can track your income and expenses so that you know exactly where your finances stand. You can also set budget limits, view spending trends, and even set up goals to help you stay on top of your finances.</div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <span class = "fw-bold" style="color: #1B6202;">What is the best way to use BudgetS?</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">The best way to use BudgetS is to start by setting up a budget. This will help you provide structure to your spending and make it easier to track your income and expenses. Once you’ve set up your budget, track all of your income and expenses over time to gain better visibility into exactly where your money is going. Finally, use the reports feature to see how well you’re doing in meeting your financial goals.</div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <span class = "fw-bold" style="color: #1B6202;">How do I know if I am tracking my expenses correctly?</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">BudgetS gives you an accurate picture of your finances and lets you see what percentage of your income or expenses is going towards each category. With our easy-to-use bar charts, you can quickly and easily determine if you are staying within budget, overspending, or may need to adjust your budget.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6 col-md-12 col-sm-12 mt-3">
                    <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="accordion accordion-flush d-grid gap-3" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <span class = "fw-bold" style="color: #1B6202;">Do I need to sign up for an account to use BudgetS?</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Yes, you need to sign up for an account to use BudgetS, having one makes it easier to track your income and expenses over time. With a free account you can access all of our features, including budgeting tools, expense tracking and more. Plus, you can even sync your accounts across different devices. So sign up today and make the most out of BudgetS!</div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingfive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        <span class = "fw-bold" style="color: #1B6202;">How do I know if I am on track with my budget?</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">BudgetS provides you with a birds-eye view of your budget so you can easily track if you are on track or not. Our budget tracking feature helps you keep an eye on what’s coming in and going out, as well as where your money is being spent. You can also set up reminders to stay on top of payments and know exactly when money will come in and go out. Our goal is to help you stay within your budget and maximize your savings!</div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        <span class = "fw-bold" style="color: #1B6202;">What are the main features of BudgetS and how can it help with managing personal finances?</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">BudgetS is the perfect tool to help you manage your budget and track your money. With our easy-to-use dashboard, you can quickly view your finances in one place. You can see where your money is going and create custom budgets based on your income and expenses. BudgetS also has features like setting reminders for bills, tracking spending habits, and more!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- End of FAQs --}}

{{-- Mission, Vision, Goal  --}}
<section class="p-5">
   
    <div class="mvv container">
        <div class="container">
            <div class="row align-items-center mt-5 pt-5">
                <div class = "col-lg-4 col-md-4 col-sm-12 justify-content-center">
                    <div data-aos="flip-right">
                        <img src = "https://www.pngitem.com/pimgs/m/185-1859950_hit-mission-icon-png-transparent-png.png" width="353" height="446" class = "img-fluid d-none d-lg-block d-md-block" style ="border-radius: 30px; mix-blend-mode: multiply; object-fit:cover;">
                    </div>
                </div> 
                <div class="col-lg-8 col-md-8 col-sm-12 justify-content-center mx-auto ">
                    <div data-aos="fade-right">
                        <h1 class = "fw-bold" style="color:#1B6202; text-align: justify;
                        text-justify: inter-word;"><u>Mission</u></h1>
                    <p class = "mt-3 pt-3 fs-4" style="text-align: justify;
                    text-justify: inter-word;">BudgetS is committed to providing simple and effective tools to help our users manage their finances and stay on top of their budget. We want to empower our users to take control of their money and improve their financial well-being.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mvv container">
        <div class="container">
            <div class="row align-items-center mt-5 pt-5">
                <div class="col-lg-8 col-md-8 col-sm-12 justify-content-center mx-auto">
                    <div data-aos="fade-left">
                        <h1 class = "fw-bold" style="color:#1B6202; text-align: right;"><u>Vision</u></h1>
                        <p class = "mt-3 pt-3 fs-4" style="text-align: justify;
                        text-justify: inter-word;">BudgetS is committed to providing a simple and effective way for people to manage their finances. We want to help people take control of their money so they can lead happier, more financially secure lives.</p>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-4 col-sm-12 justify-content-center">
                    <div data-aos="flip-right">
                        <img src = "https://cdn-icons-png.flaticon.com/512/561/561094.png" width="353" height="446" class = "img-fluid d-none d-lg-block d-md-block" style ="border-radius: 30px; mix-blend-mode: multiply; object-fit:cover;">
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div class="mvv container">
        <div class="container">
            <div class="row align-items-center mt-5 pt-5">
                <div class = "col-lg-4 col-md-4 col-sm-12 justify-content-center">
                    <div data-aos="flip-right">
                        <img src = "https://cdn-icons-png.flaticon.com/512/3362/3362061.png" width="353" height="446" class = "img-fluid d-none d-lg-block d-md-block" style ="border-radius: 30px; mix-blend-mode: multiply; object-fit:cover;">
                    </div>
                </div> 
                <div class="col-lg-8 col-md-8 col-sm-12 justify-content-center mx-auto">
                    <div data-aos="fade-right">
                        <h1 class = "fw-bold" style="color:#1B6202; text-align: justify;
                        text-justify: inter-word;"><u>Goal</u></h1>
                        <p class = "mt-3 pt-3 fs-4" style="text-align: justify;
                        text-justify: inter-word;">Our goal is to help our customers budget their finances and save money. We strive to provide a simple, user-friendly interface that makes budgeting easy and fun.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</section>
{{-- End of Mission, Vision, Goal  --}}

{{-- Team --}}
<section class="team p-5">

    <div class="row text-center align-items-center p-5 display-4">
        <div data-aos="zoom-in-up">
            <h1 class="display-5">Our <span class= "fw-bold" style="color: #1B6202;">Team</span></h1>
            <hr class="bg-success w-100" >
        </div>
    </div>
 
    <div class="row align-items-center">
        <div class="card-image col-xl-3 col-md-6 mb-5">
                <div class="card border-0 shadow justify-content-center d-flex">
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <img src="{{ 'images/raymund.png' }}" class="card-img-top" id="image">
                    </div>
                    <div class="card-body text-center">
                        <div data-aos="fade-up">
                            <h5 class="card-title mb-0" style="color: #1B6202;">Raymund Fontanilla</h5>
                            <div class="card-text text-black-50">Backend Developer</div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="card-image col-xl-3 col-md-6 mb-5">
                <div class="card border-0 shadow justify-content-center d-flex">
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <img src="{{ 'images/angela.jpg' }}" class="card-img-top">
                    </div>
                    <div class="card-body text-center">
                        <div data-aos="fade-up">
                            <h5 class="card-title mb-0"style="color: #1B6202;">Angela Morales</h5>
                            <div class="card-text text-black-50">Fullstack Web Developer</div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="card-image col-xl-3 col-md-6 mb-5">
                <div class="card border-0 shadow justify-content-center d-flex">
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <img src="{{ 'images/joshua.jpg' }}" class="card-img-top">
                    </div>
                    <div class="card-body text-center">
                        <div data-aos="fade-up">
                            <h5 class="card-title mb-0" style="color: #1B6202;">Joshua Zafe</h5>
                            <div class="card-text text-black-50">Fullstack Web Developer</div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="card-image col-xl-3 col-md-6 mb-5">
                <div class="card border-0 shadow justify-content-center d-flex">
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <img src="{{ 'images/danica.jpg' }}" class="card-img-top">
                    </div>
                    <div class="card-body text-center">
                        <div class="card-body text-center">
                            <div data-aos="fade-up">
                                <h5 class="card-title mb-0" style="color: #1B6202;">Danica Libres</h5>
                                <div class="card-text text-black-50">Fullstack Web Developer</div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</section>
{{-- End of Team Area --}}

@endsection

