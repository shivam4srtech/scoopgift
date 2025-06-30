@extends('layouts.web')
@push('styles')
<link rel="stylesheet" href="./css/auth.css">
@endpush
@section('content')
<section class="container mb-4">
    <div class="row login-box">
        <div class="col-lg-6 login-item">
            <div class="img">
                <img src="{{ asset('images/register.svg') }}">
            </div>
        </div>
        <div class="col-lg-6 login-item">
            <div class="login-content">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <img class="logo" src="{{ asset('images/bigaffilogo.jpeg') }}">
                    <h2 class="title">Sign Up!</h2>

                    {{-- Name Field --}}
                    <div class="input-div one">
                        <div class="i">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Name</h5>
                            <input id="name" type="text" name="name" class="input @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                    </div>
                    @error('name')
                        <span class="text-danger small d-block mb-2">{{ $message }}</span>
                    @enderror

                    {{-- Email Field --}}
                    <div class="input-div one">
                        <div class="i">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="div">
                            <h5>Email Address</h5>
                            <input id="email" type="email" name="email"
                                class="input @error('email') is-invalid @enderror" value="{{ old('email') }}" required
                                autocomplete="email">
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
                            <input id="password" type="password"
                                class="input @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">
                        </div>
                    </div>
                    @error('password')
                        <span class="text-danger small d-block mb-2">{{ $message }}</span>
                    @enderror

                    {{-- Confirm Password Field --}}
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Confirm Password</h5>
                            <input id="password-confirm" type="password" class="input" name="password_confirmation"
                                required autocomplete="new-password">
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <input type="submit" class="btn" value="Register">

                    {{-- Login Redirect --}}
                    <a href="{{ route('login') }}" class="text-center d-block mt-3 isaccont">
                        Already have an account? Login
                    </a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
