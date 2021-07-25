@extends('layouts.application')

@section('content')

<body class="auth verify-page">
    <div class="module-spacer container verify-container">
        <h1 class="variation-one vari-one-sub">Forgot password?</h1>
        <p>Enter the email associated with your account and we’ll send an email with instructions to reset your password
        </p>
        <div class="arrow-icon">
            <a href="/login">
                <svg class="arrow-curve" width="18" height="33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.5625 2.8718L2 16.936l13.5625 14.0642" stroke="#000" stroke-width="4"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg class="arrow-line" width="35" height="5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 2.936h31" stroke="#000" stroke-width="4" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>
        </div>
        <form class="form" method="POST" action="/forgot-password">
          @csrf
            <div class="container form-container">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <div class="form-control">
                        <input placeholder="" value="{{ old('email') }}" name="email" id="email">
                        @error('email')
                          <span class="error required">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button class="btn btn-submit" type="submit">Reset Password</button>

                @if(session()->has('success'))
                  <div class="form-notice variation-three">
                    {{ session()->get('success') }}
                  </div>
                @endif
                
            </div>
        </form>
    </div>
    <footer class="footer variation-one">
        <div class="container">
            © 2021 Copyright LoseFound. All Rights Reserved.
        </div>
    </footer>
</body>

@endsection