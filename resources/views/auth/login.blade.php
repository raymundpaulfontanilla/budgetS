@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5 pt-5">
        <div class="col-lg-6 col-md-10"> 
            <div class="card">
                <div class="text-center pt-5">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" width="110" />
                </div>
                <div class="card-body"></div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <hr>
                        <h2 class="text-center">Sign In</h2>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" "{{ old('remember') ? 'checked' : '' }}">

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success rounded-pill">
                                {{ __('Login Now') }}
                            </button>
                            <br/>
                            <a href="{{ route('register') }}">{{ __('Create an account') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
