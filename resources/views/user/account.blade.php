@extends('layouts.app')

@section('content')

<div class="account-details screen">
    <div class="overlap-group-C61RwL">
        <div class="rectangle-71-4eduM0"></div>
        <img class="logo-4eduM0" src="img/logo-1@2x.png" />
        <img class="barking-owl-4eduM0" src="img/barking-owl-7@2x.svg" />
          
        <a href="{{ route('my-account') }}">
            <div class="profile-4eduM0 valign-text-middle inter-bold-eerie-black-16px">Profile</div>
        </a>
        <a href='/'>
            <div class="home-4eduM0 valign-text-middle inter-normal-eerie-black-16px">Home</div>
        </a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <div class="logout-4eduM0 valign-text-middle inter-normal-eerie-black-16px">
                Logout
            </div>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

        <div class="auto-flex-C61RwL">
          <div class="account-details-fhuxN3 valign-text-middle">Account Details</div>
          <a href="{{ route('my-favourites') }}"><div class="favourites-fhuxN3 valign-text-middle">Favourites</div></a>
        </div>
        <img class="vector-25-C61RwL" src="img/vector-25@1x.svg" />
        <div class="first-name-C61RwL valign-text-middle inter-medium-chicago-12px">First Name</div>
        <div class="overlap-group1-C61RwL">
          <div class="plate-RH0WJ5 border-1px-eerie-black"></div>
          <input class="rectangle-78-RH0WJ5" name="rectangle-788" placeholder="" type="text" required />
        </div>
        <div class="last-name-C61RwL valign-text-middle inter-medium-chicago-12px">Last Name</div>
        <div class="overlap-group2-C61RwL">
          <div class="plate-4a9k2Y border-1px-eerie-black"></div>
          <input class="rectangle-78-4a9k2Y" name="rectangle-7813" placeholder="" type="password" required />
        </div>
        <div class="email-address-C61RwL valign-text-middle inter-medium-chicago-12px">Email Address</div>
        <div class="overlap-group3-C61RwL">
          <div class="plate-eSNWXa border-1px-eerie-black"></div>
          <input class="rectangle-78-eSNWXa" name="rectangle-7818" placeholder="" type="email" required />
        </div>
        <div class="password-C61RwL valign-text-middle inter-medium-chicago-12px">Password</div>
        <div class="overlap-group4-C61RwL">
          <div class="plate-cYXVq0 border-1px-eerie-black"></div>
          <input class="rectangle-78-cYXVq0" name="rectangle-7823" placeholder="" type="password" required />
        </div>
        <div class="overlap-group5-C61RwL">
          <div class="buttonsoli-arydefault-m4CVSK">
            <div class="masterbutt-nlargetext-RVL2w0">
              <div class="content-sBl78x">
                <div class="change-details-y3xGmq valign-text-middle inter-normal-white-16px">Change Details</div>
              </div>
            </div>
          </div>
          <a href="account-details-successful.html">
            <div class="buttonsoli-arydefault-aHaED2 smart-layers-pointers">
              <div class="masterbutt-nlargetext-RsPfgn">
                <div class="content-TzAuFg">
                  <div class="change-details-guNFp4 valign-text-middle inter-normal-white-16px">Change Details</div>
                </div>
              </div>
            </div></a
          >
        </div>
        <div class="overlap-group6-C61RwL">
          <div class="rectangle-72-KnyYHa"></div>
          <div class="x2021-copyr-s-reserved-KnyYHa">© 2021 Copyright LoseFound. All Rights Reserved.</div>
        </div>
</div>

@endsection