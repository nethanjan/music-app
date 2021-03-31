@extends('layouts.authapp')

@section('content')
    <div class="rectangle-74-C61RwL"></div>
    <img class="line-1-C61RwL" src="img/line-1@1x.png" />
    <img class="chair-2-C61RwL" src="img/chair-2@1x.png" />
    <div class="log-in-to--ur-account-C61RwL valign-text-middle">Reset your password</div>

    Enter the email associated with your account and we’ll send an email with instructions to reset your password

    <form method="POST" action="/forgot-password">
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

        <div class="buttonsoli-arydefault-reset">
            <button class="masterbutt-nlargetext-JC31Xq" type="submit">
                <div class="content-p1rkmu">
                    <div class="log-in-admDNH valign-text-middle inter-normal-white-16px" role="button">Reset password</div>
                </div>
            </button>
        </div>
        <div class="buttonsoli-arydefault-reset smart-layers-pointers">
            <button class="masterbutt-nlargetext-ByrZT3">
                <div class="content-QVVfMl">
                    <div class="log-in-xZK00f valign-text-middle inter-normal-white-16px" role="button">Reset password</div>
                </div>
            </button>
        </div>
    </form>

    <div class="you-succes-ur-details-C61RwL valign-text-middle">
        @if(session()->has('success'))
            {{ session()->get('success') }}
            @endif
        </div>

    <div class="dont-have-an-account-reset valign-text-middle inter-medium-chicago-14px">
        Don’t have an account?
    </div>
        
    <a href="{{ route('register') }}">
        <div class="register-here-reset valign-text-middle inter-medium-chicago-14px">Register here</div>
    </a>

    <div class="have-an-ac-nt-already-C61RwL valign-text-middle inter-medium-chicago-14px">
        Have an account already?
    </div>
    <a href="{{ route('login') }}">
        <div class="login-here-C61RwL valign-text-middle inter-medium-chicago-14px">Login here</div>
    </a>
    
@endsection