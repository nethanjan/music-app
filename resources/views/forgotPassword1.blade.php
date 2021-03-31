<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=1440, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/forgot-password.css" />
    <style>
      @import url("https://fonts.googleapis.com/css?family=Inter:500,700,400");

      @font-face {
        font-family: "Our Story Begins FREE-Regular";
        font-style: normal;
        font-weight: 400;
        src: url("https://anima-uploads.s3.amazonaws.com/projects/602cf5525ab477d8e2c77eba/fonts/our-story-begins-free.otf")
          format("opentype");
      }

      .component-wrapper a,
      .screen a {
        text-decoration: none;
        display: contents;
      }

      .full-width-a {
        width: 100%;
      }

      .full-height-a {
        height: 100%;
      }

      .screen textarea:focus,
      .screen input:focus {
        outline: none;
      }

      .screen *,
      .component-wrapper * {
        box-sizing: border-box;
      }

      .screen div {
        -webkit-text-size-adjust: none;
      }

      .container-center-vertical,
      .container-center-horizontal {
        pointer-events: none;
        display: flex;
        flex-direction: row;
        padding: 0;
        margin: 0;
      }

      .container-center-vertical {
        align-items: center;
        height: 100%;
      }

      .container-center-horizontal {
        justify-content: center;
        width: 100%;
      }

      .container-center-vertical > *,
      .container-center-horizontal > * {
        pointer-events: auto;
        flex-shrink: 0;
      }

      .component-wrapper,
      .screen {
        overflow-wrap: break-word;
        word-wrap: break-word;
        word-break: break-all;
        word-break: break-word;
      }

      .auto-animated div {
        opacity: 0;
        position: absolute;
        --z-index: -1;
      }

      .auto-animated .container-center-vertical,
      .auto-animated .container-center-horizontal {
        opacity: 1;
      }

      .overlay {
        position: absolute;
        opacity: 0;
        display: none;
        top: 0;
        width: 100%;
        height: 100%;
        position: fixed;
      }

      .animate-appear {
        opacity: 0;
        display: block;
        animation: reveal 0.3s ease-in-out 1 normal forwards;
      }

      .animate-disappear {
        opacity: 1;
        display: block;
        animation: reveal 0.3s ease-in-out 1 reverse forwards;
      }

      .animate-nodelay {
        animation-delay: 0s;
      }

      @keyframes reveal {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }
      .align-self-flex-start {
        align-self: flex-start;
      }
      .align-self-flex-end {
        align-self: flex-end;
      }
      .align-self-flex-center {
        align-self: center;
      }
      .valign-text-middle {
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      .valign-text-bottom {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
      }
      input:focus {
        outline: none;
      }
      .component-wrapper,
      .component-wrapper * {
        pointer-events: none;
      }

      .component-wrapper a *,
      .component-wrapper a,
      .component-wrapper input,
      .component-wrapper video,
      .component-wrapper iframe,
      .listeners-active,
      .listeners-active * {
        pointer-events: auto;
      }

      .hidden,
      .hidden * {
        visibility: hidden;
        pointer-events: none;
      }

      .smart-layers-pointers,
      .smart-layers-pointers * {
        pointer-events: auto;
        visibility: visible;
      }

      .component-wrapper.not-ready,
      .component-wrapper.not-ready * {
        visibility: hidden !important;
      }

      .listeners-active-click,
      .listeners-active-click * {
        cursor: pointer;
      }
      .login-error-C61RwL {
        background-color: transparent;
        color: var(--geraldine);
        font-family: "Inter", Helvetica, Arial, serif;
        font-size: 12px;
        font-style: normal;
        font-weight: 500;
        height: 20px;
        left: 169px;
        letter-spacing: 0px;
        line-height: 20px;
        position: absolute;
        text-align: right;
        top: 42px;
        white-space: nowrap;
        width: auto;
    }
    .email-sent {
      background-color: transparent;
    flex-shrink: 1;
    height: 36px;
    letter-spacing: 0.00px;
    line-height: 24px;
    margin-left: 2.0px;
    margin-top: 24px;
    min-height: 36px;
    position: relative;
    text-align: center;
    width: 428px;
      color: var(--eerie-black);
      font-family: "Inter", Helvetica, Arial, serif;
      font-size: 16px;
      font-style: normal;
      font-weight: 400;
    }
    </style>
    <meta name="author" content="AnimaApp.com - Design to code, Automated." />
  </head>
  <body style="margin: 0; background: rgba(255, 255, 255, 1)">
    <input type="hidden" id="anPageName" name="page" value="forgot-password" />
    <div class="container-center-horizontal">
      <div class="forgot-password screen">
        <a href="/login" class="align-self-flex-start">
          <div class="frame-2-C61RwL">
            <img class="vector-gUEd1c" src="img/vector-52@2x.svg" />
            <img class="vector-h9rsX8" src="img/vector-53@2x.svg" /></div
        ></a>
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
  </body>
</html>
