<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=1440, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/register-verify-email.css" />
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
    </style>
    <meta name="author" content="AnimaApp.com - Design to code, Automated." />
  </head>
    <body style="margin: 0; background: rgba(255, 255, 255, 1)">
        <div class="register-verify-email screen">
            <div class="auto-flex1-C61RwL">
                <!-- <a href="{{ route('register') }}"> -->
                    <div class="frame-2-uxzUmT">
                        <!-- <img class="vector-6ZYbZn" src="img/vector@2x.svg" />
                        <img class="vector-rU8gYN" src="img/vector-1@2x.svg" /> -->
                    </div>
                <!-- </a> -->
                <div class="auto-flex-uxzUmT">
                    <div class="verify-your-email-c24oYb valign-text-middle">Verify your email</div>
                    <div class="you-will-n-gistration-c24oYb valign-text-middle inter-normal-eerie-black-16px">
                        You will need to verify your email to complete registration.
                    </div>
                </div>
            </div>
            <div class="auto-flex3-C61RwL">
                <div class="an-email-h-r-password-mCninq valign-text-middle inter-normal-eerie-black-16px">
                An email has been sent to your email address with a link to verify your account. If you have not received the
                email after a few minutes, please check your spam folder or reset your password.
                </div>
                <div class="auto-flex2-mCninq">
                    <form>
                        <div class="overlap-group1-QxkHfZ">
                            <div class="buttonsoli-arydefault-SLt283">
                                <div class="masterbutt-nlargetext-YHC9xQ">
                                    <div class="content-fATuIe">
                                        <div class="resend-link-hlx077 valign-text-middle inter-normal-white-16px">Resend link</div>
                                    </div>
                                </div>
                            </div>
                            <div class="buttonsoli-arydefault-O104dy smart-layers-pointers">
                                <button class="masterbutt-nlargetext-Rm3gaG" type="submit">
                                    <div class="content-xpx4lI">
                                        <div class="resend-link-pkgFQS valign-text-middle inter-normal-white-16px">Resend link</div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>
                    <a href="{{ route('login') }}">
                        <div class="buttonsoli-arydefault-QxkHfZ">
                            <div class="masterbutt-nlargetext-p257TO">
                                <div class="content-ilOwOY">
                                    <div class="login-Tqwylb valign-text-middle inter-normal-eerie-black-16px">Login</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <img class="group-4-C61RwL" src="img/group-4@2x.svg" />
            <img class="vector-12-C61RwL" src="img/vector-12@2x.svg" />
            <div class="overlap-group-C61RwL">
                <img class="vector-13-4eduM0" src="img/vector-13@2x.svg" />
                <img class="vector-14-4eduM0" src="img/vector-14@2x.svg" />
            </div>
        </div>
    </body>
</html>
