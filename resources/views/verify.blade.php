@extends('layouts.application')

@section('content')
  <body class="auth verify-page">
    <div class="module-spacer container verify-container">
        <h1 class="variation-one vari-one-sub">Verify your email</h1>
        <p>You will need to verify your email to complete registration.</p>
        <!-- <div class="arrow-icon">
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
        </div> -->
        <div class="email-icon">
            <div class="email-lines">
                <svg class="line-one" width="72" height="28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.7558 23.0581C23.382 12.6461 55.8982 3.7878 69.8281.6601c1.1939 0 2.8654.3633 0 1.8161-3.5818 1.816-66.2662 24.2141-68.3557 24.2141-1.6716 0 1.4925-2.4214 3.2834-3.6322z"
                        fill="#000" stroke="#000" />
                </svg>
                <svg class="line-two" width="44" height="17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3.1177 13.8032C14.1332 7.6785 33.3632 2.4677 41.6013.6279c.706 0 1.6946.2137 0 1.0683C39.483 2.7645 2.4116 15.9398 1.1758 15.9398c-.9885 0 .8827-1.4244 1.9419-2.1366z"
                        fill="#000" stroke="#000" />
                </svg>
                <svg class="line-three" width="91" height="35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5.9174 29.4065C29.539 16.2383 70.7756 5.0351 88.4412 1.0795c1.5142 0 3.6339.4594 0 2.2969C83.8988 5.673 4.4032 34 1.7534 34c-2.12 0 1.8927-3.0624 4.164-4.5935z"
                        fill="#000" stroke="#000" />
                </svg>
            </div>
            <svg class="envelope" width="160" height="112" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M78.3533 23.185c3.0284-1.1484 10.5237-1.914 16.2776 4.2108 5.7541 6.1247 12.7441 2.5519 15.5201 0"
                    stroke="#000" stroke-width="3" stroke-linecap="round" />
                <path
                    d="M96.902 52.6601c13.628-11.9432 26.625-36.6208 31.42-47.4667 1.135-1.5312 2.422-4.0576-1.515-1.914-4.921 2.6796-28.0123 37.1312-29.905 40.9592-1.8928 3.8279-8.3281 12.7523-21.1988 6.8903-10.2965-4.6896-46.6878-15.2242-63.5963-19.9054l-7.571 1.1484.3785 3.0624C67.3751 53.8085 54.126 51.8945 73.432 56.1052c15.4448 3.3686 22.0821-.8931 23.4701-3.4451z"
                    fill="#000" stroke="#000" />
                <path
                    d="M2.2654 34.286c5.451 15.3118 31.2934 56.3985 43.5332 75.028 3.0285 1.225 6.3091.51 7.5708 0 31.5458-8.039 95.4706-24.2693 98.8016-24.8818 4.164-.7656 4.921-1.5312 5.678-1.914.606-.3062-.757-1.9139-1.514-2.6795-.606-4.5936-15.899-51.167-23.47-73.8796-.909-3.981-4.921-4.2107-6.814-3.828C92.7385 7.4904 8.3222 29.6925 4.9152 31.2237c-2.7255 1.225-2.9022 2.552-2.6498 3.0624z"
                    stroke="#000" stroke-width="4" />
                <path
                    d="M126.807 3.2795C111.06 9.4042 38.4791 26.2472 4.1573 33.9032c-1.2114 0-1.0095-.5104-.7571-.7656l12.1136-4.9764 68.1389-16.843 41.6403-8.8043 1.514.7656z"
                    fill="#000" stroke="#000" />
                <path
                    d="M48.8267 105.103C44.2841 92.8537 17.4071 52.5326 4.5364 33.9032H3.0222l1.5142 3.8279c2.4227 7.9622 28.0127 50.0187 40.5048 70.0519l3.7855 1.914L157.849 82.5182l-1.893-3.4451-23.848-73.8796-2.272-2.2968-1.514 2.2968c-1.211 12.2495 15.142 54.8674 23.47 74.6451-47.546 7.0435-88.4542 19.7778-102.9653 25.2644z"
                    fill="#000" stroke="#000" />
                <path
                    d="M68.8898 52.6602C64.65 58.4786 54.2525 90.0465 49.5837 105.103l1.8928.383C62.6816 82.212 68.7636 61.0817 70.404 53.4257l-1.5142-.7655zM98.06 50.5681c5.705 5.7731 38.675 22.6448 54.448 30.3589l.723-2.1097C129.49 62.321 107.28 52.0339 99.1428 48.9524L98.06 50.5681z"
                    fill="#000" stroke="#000" />
                <path
                    d="M42.3914 27.013c2.6498-1.0208 9.9937-1.3781 18.1703 5.3592 8.1767 6.7372 16.0253 2.0415 18.9275-1.1484M73.4324 44.563c1.5683-.5842 5.9146-.7887 10.7539 3.067 4.8392 3.8558 9.4843 1.1685 11.202-.6572M96.9021 10.8769c1.5683-.5842 5.9149-.7886 10.7539 3.0671 4.839 3.8558 9.484 1.1684 11.202-.6572M20.4353 29.3438c1.7305-.7511 6.5265-1.014 11.8664 3.9434 5.3398 4.9574 10.4655 1.5023 12.3608-.845"
                    stroke="#000" stroke-width="2" stroke-linecap="round" />
            </svg>
        </div>
        <p>An email has been sent to your email address with a link to verify your account. If you have not received the
            email after a few minutes, please check your spam folder or reset your password.</p>
        <div class="actions">
          <form method="POST" action="/resend-verify">
            @csrf
            <button type="submit" class="btn btn-resend-link">
              Resend link
            </button>
          </form>  
            <a href="/login" class="btn btn-login">Login</a>
        </div>

        @if(session()->has('success'))
          <div class="form-notice variation-three">
            {{ session()->get('success') }}
          </div>
        @endif
    </div>
    <footer class="footer variation-one">
        <div class="container">
            © 2021 Copyright LoseFound. All Rights Reserved.
        </div>
    </footer>
</body>

@endsection
