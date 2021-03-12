@extends('layouts.authapp')

@section('content')
    <div class="rectangle-74-C61RwL"></div>
    <img class="line-1-C61RwL" src="img/line-1@1x.png" />
    <img class="chair-2-C61RwL" src="img/chair-2@1x.png" />
    <div class="log-in-to--ur-account-C61RwL valign-text-middle">Log in to your account</div>

    <form method="POST" action="/login">
        @csrf

        <div class="plate-C61RwL border-1px-eerie-black"></div>
        <input class="rectangle-78-C61RwL" name="email" placeholder="" type="email" value="{{ old('email') }}"/>
        <div class="email-address-C61RwL valign-text-middle inter-medium-chicago-12px">Email Address</div>
        @error('email')
            <div class="login-error-C61RwL valign-text-middle">{{ $message }}</div>
        @enderror

        @if ($message = Session::get('error'))
            <div class="login-error-C61RwL valign-text-middle">{{ $message }}</div>
        @endif

        <div class="plate-VMr6Om border-1px-eerie-black"></div>
        <input class="rectangle-78-VMr6Om" name="password" placeholder="" type="password" />
        <div class="password-C61RwL valign-text-middle inter-medium-chicago-12px">Password</div>
        @error('password')
            <div class="login-error-VMr6Om valign-text-middle">{{ $message }}</div>
        @enderror

        <div class="buttonsoli-arydefault-C61RwL">
            <button class="masterbutt-nlargetext-JC31Xq" type="submit">
                <div class="content-p1rkmu">
                    <div class="log-in-admDNH valign-text-middle inter-normal-white-16px" role="button">Log in</div>
                </div>
            </button>
        </div>

        <div class="buttonsoli-arydefault-VMr6Om smart-layers-pointers">
            <button class="masterbutt-nlargetext-ByrZT3">
                <div class="content-QVVfMl">
                    <div class="log-in-xZK00f valign-text-middle inter-normal-white-16px" role="button">Log in</div>
                </div>
            </button>
        </div>
    </form>

    <a href="/forgot-password">
        <div class="forgot-password-C61RwL inter-normal-eerie-black-14px">Forgot password?</div>
    </a>
    <div class="dont-have-an-account-C61RwL valign-text-middle inter-medium-chicago-14px">
        Don’t have an account?
    </div>
        
    <a href="{{ route('register') }}">
        <div class="register-here-C61RwL valign-text-middle inter-medium-chicago-14px">Register here</div>
    </a>
    
@endsection