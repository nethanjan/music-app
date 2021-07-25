@extends('layouts.application')

@section('content')

<body class="auth verify-page">
    <div class="module-spacer container verify-container">
        <h1 class="variation-one vari-one-sub">Password reset</h1>

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
        <form class="form" method="POST" action="/password-reset">
          @csrf
            <div class="container form-container">
                <div class="form-group">
                    <label for="email">New Password</label>
                    <div class="form-control">
                        <input placeholder="" name="password" placeholder="" type="password" id="password">
                        @error('password')
                          <span class="error required">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Confirm Password</label>
                    <div class="form-control">
                        <input placeholder="" name="password_confirmation" placeholder="" type="password" id="password_confirmation">
                        @error('password_confirmation')
                          <span class="error required">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <input class="rectangle-78-RH0WJ5" name="token" placeholder="" type="text" hidden value="{{ $token }}"/>

                <button class="btn btn-submit" type="submit">Reset Password</button>

                @if(session()->has('success'))
                  <div class="form-notice variation-three">
                    {{ session()->get('success') }}
                  </div>
                @endif

                @if ($message = Session::get('error'))
                <div class="form-notice variation-three">{{ $message }}</div>
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