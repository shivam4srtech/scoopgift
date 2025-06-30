@extends('layouts.web')
@push('styles')
<link rel="stylesheet" href="./css/auth.css">
@endpush
@section('content')
<section class="container">
    <div class="row login-box">
        <div class="col-lg-6 login-item">
            <div class="img">
                <img src="{{ asset('images/mobile.svg') }}">
            </div>
        </div>
        <div class="col-lg-6 login-item">
            <div class="login-content">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <img class="logo" src="{{ asset('images/bigaffilogo.jpeg') }}">
                    <h2 class="title">Welcome Back!</h2>

                    {{-- Email Field --}}
                    <div class="input-div one">
                        <div class="i">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Email</h5>
                            <input id="email" type="email" class="input @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                    </div>
                    @error('email')
                        <span class="text-danger small d-block mb-2">{{ $message }}</span>
                    @enderror

                    {{-- Password Field --}}
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input id="password" type="password" class="input @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password">
                        </div>
                    </div>
                    @error('password')
                        <span class="text-danger small d-block mb-2">{{ $message }}</span>
                    @enderror

                    {{-- Remember Me --}}
                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>

                    {{-- Forgot Password --}}
                    @if (Route::has('password.request'))
                        <a class="d-block mb-2" href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    @endif

                    {{-- Submit Button --}}
                    <input type="submit" class="btn" value="Login">

                    {{-- Register Link --}}
                    <a href="{{ route('register') }}" class="text-center d-block mt-3">
                        Don't have an account? Register
                    </a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
