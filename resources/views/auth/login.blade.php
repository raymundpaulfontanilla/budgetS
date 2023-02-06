@extends('layouts.app')

@section('content')
<div class = "container-fluid vh-100 mt-5 pt-5">
    <div class = "row bg-light shadow-lg m-0" style ="border-radius: 30px;">
    <div class = "col-lg-6 p-0 d-none d-lg-block">
        <img src = "https://145335.fs1.hubspotusercontent-na1.net/hub/145335/hubfs/examples-of-company-profile-pages.jpg?length=1200&name=examples-of-company-profile-pages.jpg" class = "img-fluid" style = "height: 75vh; width: 900px; border-top-left-radius:30px; border-bottom-left-radius:30px;">
    </div>
    <div class = "col-lg-6">
        <div class = "justify-content-center align-items-center d-flex">
            <img src="{{ asset('images/logo.png') }}" class = "img-fluid" alt="logo" width="110" />
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <hr>
            <h2 class="text-center mb-5">Sign In</h2>

            <div class="row mb-3 mx-auto">
                <label for="email" class="col-md-3 col-form-label text-md-end mb-3">{{ __('Email Address') }}</label>
                <div class="col-md-6 ">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 mx-auto">
                <label for="password" class="col-md-3 col-form-label text-md-end">{{ __('Password') }}</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-4 mx-auto">
                <div class="col-md-6 offset-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" "{{ old('remember') ? 'checked' : '' }}">
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="text-center m-3 mx-auto">
                <button type="submit" class="btn btn-success rounded-pill p-2 w-50 mb-4">
                    {{ __('Login Now') }}
                </button>
                <br/>
                Dont have an account? <a href="{{ route('register') }}" class ="text-decoration-none mb-3">{{ __('Create an account') }}</a>
            </div>

        </form>
    </div>
</div>
</div>
@endsection
