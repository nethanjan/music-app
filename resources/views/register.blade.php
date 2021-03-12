@extends('layouts.authapp')

@section('content')

    <div class="frame-1-C61RwL"></div>
    <div class="rectangle-1-C61RwL"></div>
        
    <img class="line-1-C61RwL" src="img/line-1@1x.png" />
    <img class="chair-2-C61RwL" src="img/chair-2@1x.png" />
    <div class="register-f-an-account-C61RwL valign-text-middle">Register for an account</div>

    <form method="POST" action="/register">
        @csrf

        <div class="plate-C61RwL border-1px-eerie-black"></div>
        <input class="rectangle-78-C61RwL" name="fname" placeholder="" type="text" value="{{ old('fname') }}"/>
        <div class="first-name-C61RwL valign-text-middle inter-medium-chicago-12px">First Name</div>
        @error('fname')
            <div class="register-error-C61RwL valign-text-middle">{{ $message }}</div>
        @enderror
        
        <div class="plate-VMr6Om border-1px-eerie-black"></div>
        <input class="rectangle-78-VMr6Om" name="lname" placeholder="" type="text" value="{{ old('lname') }}"/>
        <div class="last-name-C61RwL valign-text-middle inter-medium-chicago-12px">Last Name</div>
        @error('lname')
            <div class="register-error-VMr6Om valign-text-middle">{{ $message }}</div>
        @enderror

        <div class="plate-mzXdH9 border-1px-eerie-black"></div>
        <input class="rectangle-78-mzXdH9" name="email" placeholder="" type="text" value="{{ old('email') }}"/>
        <div class="email-address-C61RwL valign-text-middle inter-medium-chicago-12px">Email Address</div>
        @error('email')
            <div class="register-error-mzXdH9 valign-text-middle">{{ $message }}</div>
        @enderror

        <div class="plate-QxM5SU border-1px-eerie-black"></div>
        <input class="rectangle-78-QxM5SU" name="password" placeholder="" type="password" />
        <div class="password-C61RwL valign-text-middle inter-medium-chicago-12px">Password</div>
        @error('password')
            <div class="register-error-QxM5SU valign-text-middle">{{ $message }}</div>
        @enderror

        <div class="have-an-ac-nt-already-C61RwL valign-text-middle inter-medium-chicago-14px">
            Have an account already?
        </div>
        <a href="{{ route('login') }}">
            <div class="login-here-C61RwL valign-text-middle inter-medium-chicago-14px">Login here</div>
        </a>

        <div class="buttonsoli-arydefault-C61RwL">
            <div class="masterbutt-nlargetext-JC31Xq">
                <div class="content-p1rkmu">
                    <div class="register-admDNH valign-text-middle inter-normal-white-16px">Register</div>
                </div>
            </div>
        </div>

        <div class="buttonsoli-arydefault-VMr6Om smart-layers-pointers">
            <button class="masterbutt-nlargetext-ByrZT3" type="submit">
                <div class="content-QVVfMl">
                    <div class="register-xZK00f valign-text-middle inter-normal-white-16px">Register</div>
                </div>
            </button>
        </div>
    </form>
@endsection