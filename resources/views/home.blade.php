<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
    
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/register.css" />
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
        <div class="container-center-horizontal">
        <div class="register screen">
            <div class="auto-flex1-C61RwL">
            <div
                class="looking-fo-fect-track-uxzUmT valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-56px"
            >
                LOOKING FOR THE PERFECT TRACK?
            </div>
            <a href="{{ route('register') }}">
                <div class="buttonsoli-arydefault-uxzUmT smart-layers-pointers">
                    <div class="masterbutt-nlargetext-fQePec">
                        <div class="content-i8lMNI">
                            <div class="register-hQA9a4 valign-text-middle inter-normal-white-16px">Register</div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('register') }}">
                <div class="buttonsoli-arydefault-UD57O0 smart-layers-pointers">
                    <div class="masterbutt-nlargetext-D3e0U3">
                        <div class="content-MUvqOe">
                            <div class="register-x6zJtp valign-text-middle inter-normal-white-16px">Register</div>
                        </div>
                    </div>
                </div>
            </a>
            <div class="auto-flex-uxzUmT">
                <a href="{{ route('login') }}">
                    <div class="buttonsoli-arydefault-c24oYb">
                        <div class="masterbutt-nlargetext-HMHGPa">
                            <div class="content-BttEGz">
                                <div class="log-in-LAxjHA valign-text-middle inter-normal-white-16px">Log in</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('login') }}">
                <div class="buttonsoli-arydefault-aAPFT0 smart-layers-pointers">
                    <div class="masterbutt-nlargetext-WRY905">
                    <div class="content-4JfRLC">
                        <div class="log-in-rlxDpW valign-text-middle inter-normal-white-16px">Log in</div>
                    </div>
                    </div>
                </div></a
                >
            </div>
            <div class="x2021-copyr-s-reserved-uxzUmT valign-text-middle">
                © 2021 Copyright LoseFound. All Rights Reserved.
            </div>
            </div>
            <div class="auto-flex2-C61RwL">
            <img class="logo-phANlq" src="img/logo@2x.png" />
            <img class="barking-owl-phANlq" src="img/barking-owl@2x.svg" />
            </div>
            <img class="line-1-C61RwL" src="img/line-1@1x.png" />
            <img class="chair-2-C61RwL" src="img/chair-2@1x.png" />
        </div>
        </div>
    </body>
</html>
