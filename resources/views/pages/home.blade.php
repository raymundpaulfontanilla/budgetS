@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
<section class = "hero bg-light">
    <div class = "container mb-5">
        <div class = "row pb-5 align-items-center ">
            <div class = "col-md-12 col-lg-6 pt-5">
                <div class = "title pt-5 my-auto px-5">
                    <div data-aos="fade-right">
                        <h1 class = "heo-title mb-4 fw-bold mt-5 pt-5 display-4" style="margin-top: 100px; color:#1B6202;">Get Your Finances Under Control with <u>BudgetS</u></h1>
                        <p class=" text-dark fs-4">BudgetS is a free online budgeting app for managing and tracking income and expenses.</p>
                        <div class = "mt-4">
                            <a href = "{{route ('register') }}" class = "btn btn-success shadown-none fs-5 w-40">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class = "col-md-12 col-lg-6 h-auto">
                <div class = "justify-content-center">
                    <div data-aos="zoom-in">
                        <img src = "{{ 'images/landingpage.png' }}" class = "landing-page-img img-fluid d-none d-lg-block d-sm-block">
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
{{-- End of Hero Section --}}

{{-- Features Section --}}
<section class="body">
   <div class="container">
    <div class="row py-5">
        <div class="col-12 text-center mt-4">
            <div data-aos="zoom-out">
                <h1 class="text fw-bold display-4" style="color:#1B6202;" >Our Best Features</h1>
            </div>
        </div>
    </div>
    <div class="row my-auto align-items-center align-items-center">
        <div class="item col-lg-3 col-md-6 col-sm-12 mb-4">
            <div data-aos="fade-up">
                <img src="https://www.freshbooks.com/wp-content/uploads/2022/02/keeping-track-of-business-expenses.jpg" class="features-img img-fluid">
                <h5 class="text-center mt-3 text-truncate">Easily Track Income and Expenses</h5>
            </div>
        </div>
        <div class="item col-lg-3 col-md-6 col-sm-12 mb-4">
            <div data-aos="fade-up">
                <img src="https://emprenderte.co/wp-content/uploads/2022/07/%C2%BFComo-se-usan-las-matematicas-en-la-ciberseguridad.jpgkeepProtocol.jpeg" class="features-img img-fluid">
                <h5 class="text-center mt-3 text-truncate">Protect Users Information</h5>
            </div>
        </div>
        <div class="item col-lg-3 col-md-6 col-sm-12 mb-4">
            <div data-aos="fade-up">
                <img src="https://fintranssolutions.com/wp-content/uploads/2018/04/Analytics-and-Intelligence.jpg" class="features-img img-fluid">
                <h5 class="text-center mt-3 text-truncate">Daily and Monthly Reports</h5>
            </div>
        </div>
        <div class="item col-lg-3 col-md-6 col-sm-12 mb-4">
            <div data-aos="fade-up">
                <img src="https://i.gadgets360cdn.com/large/gullak_app_screen_1490348757292.jpg" class="features-img img-fluid">
                <h5 class="text-center mt-3 text-truncate">Mobile App Friendly</h5>
            </div>
        </div>
    </div>
   </div>
</section>
{{-- End of Features Section --}}

{{-- Overview Section --}}

<section class="overview bg-light py-5">
    <div class="overview container">
        <div class="container mt-5 pt-5">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 justify-content-center" style="height:30%;">
                    <div data-aos="fade-right">
                        <h3 class = " fw-bold text-center" style="color:#1B6202;">"Take control of your budget with ease"</h3>
                    <p class = " mt-3 pt-3 text-center">With a friendly, flexible method for managing your finances, you can enjoy guilt-free spending and effortless saving.</p>
                    </div>
                </div>
                <div class = "col-lg-6 col-md-6 col-sm-12 d-md-flex justify-content-center mt-5"  style="height:30%;">
                    <div data-aos="flip-right">
                        <img src = "https://images.unsplash.com/photo-1559526324-593bc073d938" width="453" height="646" class = "img-fluid d-none d-lg-block d-md-block" style ="border-radius: 30px; mix-blend-mode: multiply;">
                    </div>
                </div> 
            </div>
        </div>
    </div>
    
    <div class="overview container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12 d-md-flex justify-content-center mt-5" style="height:30%;">
                <div data-aos="flip-right">
                    <img src = "https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3" width="453" height="646" class="img-fluid d-none d-lg-block d-md-block" style="border-radius: 30px; mix-blend-mode: multiply;">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 justify-content-center">
                <div data-aos="fade-right">
                    <h3 class=" mb-4 text-center mt-5 fw-bold" style="color:#1B6202;">“Empowering your financial future.”</h3>
                <p class="text-center mb-4">BudgetS tracks and categorizes your spending, all you have to do is remain disciplined and adhere to the spending limits you set for yourself.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="overview container">
        <div class="container my-4">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 justify-content-center">
                    <div data-aos="fade-right">
                        <h3 class = "mb-4 text-center mt-5 fw-bold" style="color:#1B6202;">"Smart budgeting, simplified."</h3>
                    <p class = "text-center mb-4">Making and sticking to a budget is one of the most difficult aspects of money management. Aside from the discipline required to stick to your budget, you must also track every purchase you make, noting how much money you spent and what you spent it on.</p>
                    </div>
                </div>
                <div class = "col-lg-6 col-md-6 col-sm-12 d-md-flex justify-content-center mt-5" style="height:30%;">
                    <div class = "justify-content-center d-flex align-items-center">
                        <div data-aos="flip-right">
                            <img src = "https://images.unsplash.com/photo-1556155092-490a1ba16284" width="453" height="646" class = "img-fluid d-none d-lg-block d-md-block" style ="border-radius: 30px; mix-blend-mode: multiply;">
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>

{{-- End of Overview Section --}}

{{-- How BudgetS Work --}}
<section class="how-budget mt-5 pt-5 px-5">
    <div class="container text-center" >
        <div data-aos="fade-down">
            <h1 class="fw-bold" style="color:#1B6202;">How BudgetS Works</h1>
        </div>
        <div data-aos="zoom-in">
            <p class="text-muted">Simplify your spending decisions without sacrificing the finer things in life, like fancy coffee drinks with hard-to-pronounce names.</p>
        </div>
    </div>
    <div class="row py-5 align-items-center text-center ms-auto">
        <div class="col-lg-4 col-md-4 col-sm-12 justify-content-center">
            <div data-aos="zoom-in-up">
                <img src="https://cdn-icons-png.flaticon.com/512/2037/2037710.png" class="img-fluid" style ="width: 30%;">
            </div>
            <div data-aos="zoom-in">
                <h3 class="mt-4" style="color:#1B6202;">Enter your details</h3>
                <p>Sign up for an account and start adding your income and expenses.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12  justify-content-center">
            <div data-aos="zoom-in-up">
                <img src="https://icon-library.com/images/expenses-icon/expenses-icon-20.jpg" class="img-fluid" style ="width: 30%;">
            </div>
            <div data-aos="zoom-in">
                <h3 class="mt-4" style="color:#1B6202;"> Enter your income and expenses</h3>
                <p>Log your income and expenses for the week/month.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 justify-content-center">
            <div data-aos="zoom-in-up">
                <img src="https://cdn-icons-png.flaticon.com/512/6821/6821002.png" class="img-fluid" style ="width: 30%;">
            </div>
            <div data-aos="zoom-in">
            <h3 class="mt-4" style="color:#1B6202;">See where you stand</h3>
            <p>Check out your progress at the end of the month to help make informed decisions about your spending.</p>
            </div>
        </div>
    </div>
</section>
{{-- End of How BudgetS Work --}}

@endsection



