@extends('layouts.app')
@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-3">
            <p class="motto d-flex align-items-center" style="font-size:2vw;">Lead a comfortable life;<br> we take care of your finances</p>
            <a class="btn btn-primary" href="{{route ('register')}}">Get Started</a>
         
        </div>
        <div class="col-7">
            <img src="https://i.ibb.co/SPkJ7zQ/Untitled-design-6.png" class="img-fluid" alt="Untitled-design-6"></img>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
 

<div class="container-fluid bg-white p-5">
    <p class="text-center text-success fw-bold"> Our Best Features</p>
    <div class="d-flex">
    <img src="https://i.ibb.co/2PPRTqJ/sample.jpg" alt="" class="p-2" alt="logo" width="250"/>
    <img src="https://i.ibb.co/2PPRTqJ/sample.jpg" alt="" class="p-2" alt="logo" width="250" />
    <img src="https://i.ibb.co/2PPRTqJ/sample.jpg" alt="" class="p-2" alt="logo" width="250"/>
    <img src="https://i.ibb.co/2PPRTqJ/sample.jpg" alt="" class="p-2" alt="logo" width="250"/>
    <img src="https://i.ibb.co/2PPRTqJ/sample.jpg" alt="" class="p-2" alt="logo" width="250"/>
    </div>
    <div class="d-flex">
    <p>Easily Track your income and expenses</p>
    <p>Easily Track your income and expenses</p>
    <p>Easily Track your income and expenses</p>
    <p>Easily Track your income and expenses</p>
    <p>Easily Track your income and expenses</p>
    </div>
</div>

<div class="p-5">
    <h1 class="text-center text-success">How BudgetS works</h1>

    <p class="text-center text-success fs-5">Simplify your spending decisions<br>
without sacrificing the finner things in <br>
life, like fancy coffee drinks with <br>
hard-to-pronunce names</p>
</div>
<div class="container-fluid bg-white p-5">

<p class="text-success fs-5">Simplify your spending decisions</p>


@endsection