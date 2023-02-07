@extends('layouts.app')

@section('content')
<div class = "container-fluid vh-100 mt-5 pt-5 mb-5">
    <div class = "row bg-light shadow-lg m-0" style ="border-radius: 30px;">
    <div class = "col-lg-6">
        <div class = "justify-content-center align-items-center d-flex">
            <img src="{{ asset('images/logo.png') }}" class = "img-fluid" alt="logo" width="110" />
        </div>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <hr>
            <h2 class="text-center mb-3">Sign Up</h2>

            <div class="row mb-4 mx-auto">
                <label for="name" class="col-md-3 col-form-label text-md-end">{{ __('Name') }}</label>
                
                <div class="col-md-8 ">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            
            <div class="row mb-4 mx-auto">
                <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('Email Address') }}</label>
                
                <div class="col-md-8">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            
            <div class="row mb-4 mx-auto">
                <label for="password" class="col-md-3 col-form-label text-md-end">{{ __('Password') }}</label>
                
                <div class="col-md-8">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            
            <div class="row mb-4 mx-auto">
                <label for="password-confirm" class="col-md-3 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                
                <div class="col-md-8">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            
            <div class="text-center m-3 mx-auto">
                <button type="submit" class="btn btn-primary btn-success rounded-pill p-2 w-50 mb-4">
                    {{ __('Register') }}
                </button>
                <br/>
                <a href="{{route('login')}}" class = "text-decoration-none">Already Have An Account?</a>
            </div>
        </div>
    </form>
    
    <div class = "col-lg-6 p-0 d-none d-lg-block">
        <img src = "https://145335.fs1.hubspotusercontent-na1.net/hub/145335/hubfs/examples-of-company-profile-pages.jpg?length=1200&name=examples-of-company-profile-pages.jpg" class = "img-fluid" style = "height: 75vh; width: 900px; border-top-right-radius:30px; border-bottom-right-radius:30px;">
    </div>
</div>
</div>
@endsection
