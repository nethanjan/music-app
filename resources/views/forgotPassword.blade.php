@extends('layouts.reset')

@section('content')

<div class="container-center-horizontal">
  <div class="forgot-password screen">
    <a href="/login" class="align-self-flex-start">
      <div class="frame-2-C61RwL">
        <img class="vector-gUEd1c" src="img/vector-52@2x.svg" />
        <img class="vector-h9rsX8" src="img/vector-53@2x.svg" />
      </div>
    </a>

    <div class="forgot-password-C61RwL valign-text-middle">Forgot password?</div>
        
    <div class="enter-the--r-password-C61RwL valign-text-middle inter-normal-eerie-black-16px">
      Enter the email associated with your account and we’ll send an email with instructions to reset your password
    </div>

    <div>
      <form method="POST" action="/forgot-password" style="display: inline-block">
        @csrf
        <div class="email-address-C61RwL valign-text-middle inter-medium-chicago-12px">Email Address</div>
        <div class="overlap-group1-C61RwL">
          <div class="plate-RH0WJ5 border-1px-eerie-black"></div>
          <input class="rectangle-78-RH0WJ5" name="email" placeholder="" type="email" value="{{ old('email') }}" />
          @error('email')
            <div class="login-error-C61RwL valign-text-middle">{{ $message }}</div>
          @enderror
        </div>

        @if ($message = Session::get('error'))
            <div class="login-error-C61RwL valign-text-middle">{{ $message }}</div>
        @endif

        <div class="overlap-group-C61RwL">
          <div class="buttonsoli-arydefault-4eduM0">
            <button class="masterbutt-nlargetext-VfO5nt">
              <div class="content-KW9xXp">
                <div class="reset-password-IVx1Ci valign-text-middle inter-normal-white-16px">Reset Password</div>
              </div>
            </button>
          </div>

          <div class="buttonsoli-arydefault-BJQsbv smart-layers-pointers">
            <button class="masterbutt-nlargetext-WqQ16E">
              <div class="content-mc3CxX">
                <div class="reset-password-CMZUxz valign-text-middle inter-normal-white-16px">Reset Password</div>
              </div>
            </button>
          </div>
        </div>    
      <form>
    </div>

    @if(session()->has('success'))
      <div class="email-sent">
        {{ session()->get('success') }}
      </div>
    @endif
      
  </div>
</div>

@endsection