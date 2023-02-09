@extends('layouts.app')

@section('content')

<section class = "hero bg-light">
    <div class = "container mb-5">
        <div class = "row pb-5">
            <div class = "col-md-6 col-lg-6">
                <div class = "title pt-5 my-auto mx-auto">
                    <h1 class = "mb-4 fw-bold mt-5 pt-5 display-4">"Budgeting has one rule; Do not go over budget"</h1>
                    <div class = " mt-5">
                        <a href = "{{route ('register') }}" class = "btn btn-success shadown-none fs-5 w-40">Get Started</a>
                    </div>
                </div>
            </div>

            <div class = "col-md-6 mx-auto my-auto pt-4">
                <div class = "justify-content-center d-flex align-items-center">
                <img src = "https://www.practicalmoneyskills.com/assets/images/cards/creating_a_budget_sq_707_707.jpg" alt = "image" class = "img-fluid h-100 d-none d-lg-block d-md-block" style ="border-radius: 50px;">
                </div>
            </div> 
        </div>
    </div>
</section>

<section class="body">
   <div class="container">
    <div class="row py-5">
        <div class="col-12 text-center">
            <h1 class="text">Our Best Features</h1>
        </div>
    </div>
    <div class="row my-auto">
        <div class="item col-lg-3 col-md-3 col-sm-6 mb-4">
            <img src="https://www.freshbooks.com/wp-content/uploads/2022/02/keeping-track-of-business-expenses.jpg" class="img-fluid" style="border-radius: 30px;">
            <h5 class="text-center mt-3">Easily Track Income and Expenses</h5>
        </div>
        <div class="item col-lg-3 col-md-3 col-sm-6 mb-4">
            <img src="https://www.coventry.ac.uk/globalassets/media/global/news-articles/october-2019/cyber-security-checks.jpg" class="img-fluid" style="border-radius: 30px;">
            <h5 class="text-center mt-3">Protect Users’ Financial Information</h5>
        </div>
        <div class="item col-lg-3 col-md-3 col-sm-6 mb-4">
            <img src="https://www.questionpro.com/blog/wp-content/uploads/2018/07/Research-Reports.jpg" class="img-fluid" style="border-radius: 30px;">
            <h5 class="text-center mt-3">Daily and Monthly Reports</h5>
        </div>
        <div class="item col-lg-3 col-md-3 col-sm-6 mb-4">
            <img src="https://cdn.dribbble.com/users/5031392/screenshots/14769358/media/2d2075e253127baa1f95e120cb75deb4.png?compress=1&resize=800x600&vertical=top" class="img-fluid" style="border-radius: 30px;">
            <h5 class="text-center mt-3">Mobile App Friendly</h5>
        </div>
    </div>
   </div>
</section>

<section class=" my-5 py-5" style="background-color:#F2FFEE;">
    <div class="container my-4">
        <div class="row">
            <div class="col-12 col-sm-6 align-content-center justify content-md-center">
                <h1 class = "mb-3 mt-3 fw-bold text-center">Take control of your budget with ease.</h1>
                <p class = "mb-4 mt-3 pt-3 text-center">"You must gain control over your money or the lack of it will forever control you.” – Unknown</p>
            </div>
            <div class = "col-12 col-sm-6 d-md-flex justify content-md-center">
                <div class = "justify-content-center d-flex align-items-center">
                <img src = "https://img.freepik.com/premium-vector/budget-financial-analyst-managing-planning-spending-money-checklist-clipboard-calculator-calendar-background-vector-illustration_2175-1849.jpg?w=2000" width="553" height="746" class = "img-fluid" style ="border-radius: 50px;">
                </div>
            </div> 
        </div>
    </div>
</section>

<section class="py-5 mx-5">
    <div class="row">
        <div class="col-12 col-sm-6 d-md-flex justify content-md-center">
            <img src = "https://img.freepik.com/premium-vector/budget-financial-analyst-managing-planning-spending-money-checklist-clipboard-calculator-calendar-background-vector-illustration_2175-1886.jpg?w=2000" width="553" height="746" class="img-fluid pb-4" style="border-radius: 50px;">
        </div>
        <div class="col-12 col-sm-6 align-content-center justify content-md-center">
            <h1 class=" mb-4 text-center mt-5">“Empowering your financial future.”</h1>
            <p class="text-center mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam nisi laboriosam ducimus velit autem est ut, cum blanditiis, debitis nulla, vitae porro corporis ipsum provident veritatis voluptas quae dolorum doloremque?</p>
        </div>
    </div>
</section>

<section class=" my-5 py-5" style="background-color:#F2FFEE;">
    <div class="container my-4">
        <div class="row">
            <div class="col-12 col-sm-6 align-content-center justify content-md-center">
                <h1 class = "mb-3 mt-3 fw-bold text-center">"Smart budgeting, simplified."</h1>
                <p class = "mb-4 mt-3 pt-3 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quos repellat veniam esse quasi nesciunt amet enim quas accusantium blanditiis assumenda deleniti, incidunt aperiam itaque maiores repellendus eaque excepturi iusto.</p>
            </div>
            <div class = "col-12 col-sm-6 d-md-flex justify content-md-center">
                <div class = "justify-content-center d-flex align-items-center">
                <img src = "https://www.budgetease.biz/hubfs/bigstock-Personal-Budget-Planning-Tax--395321285.jpg" width="553" height="746" class = "img-fluid" style ="border-radius: 50px;">
                </div>
            </div> 
        </div>
    </div>
</section>

<section class="vh-100 py-5">
    <div class="container text-center">
        <h1 class="fw-bold">How BudgetS Works</h1>
        <p class="text-muted">Simplify your spending decisions without sacrificing the finer things in life, like fancy coffee drinks with hard-to-pronounce names.</p>
    </div>
    <div class="row py-5">
        <div class="col-lg-4 align-items-center justify-content-center d-flex">
            <img src="https://www-assets.youneedabudget.com/wp-content/uploads/2022/12/07195838/icon_home_phone-01.svg" class="img-fluid " style ="width: 300px; height: 200px;">
        </div>
        <div class="col-lg-4 align-items-center justify-content-center d-flex">
            <img src="https://www-assets.youneedabudget.com/wp-content/uploads/2022/12/07195838/icon_home_phone-01.svg" class="img-fluid " style ="width: 300px; height: 200px;">
        </div>
        <div class="col-lg-4 align-items-center justify-content-center d-flex">
            <img src="https://www-assets.youneedabudget.com/wp-content/uploads/2022/12/07195838/icon_home_phone-01.svg" class="img-fluid " style ="width: 300px; height: 200px;">
        </div>
    </div>
</section>



@endsection