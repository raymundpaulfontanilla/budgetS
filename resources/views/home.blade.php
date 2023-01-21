@extends('layouts/components/Navbar.navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-5">
            <img src="{{URL('images/avatar.png')}}" alt="profile Pic" height="200" width="200"><h2>Welcome back, {{ Auth::user()->name }}</h2>
            <p class="text-muted">This is your dashboard. It gives you an overview of everything.</p>
        </div>
    </div>
</div>
@endsection
