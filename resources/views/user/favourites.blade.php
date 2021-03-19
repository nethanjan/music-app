@extends('layouts.app')

@section('content')

<div class="favourites screen">
    <div class="rectangle-1-C61RwL"></div>
    <div class="rectangle-71-C61RwL"></div>
    <img class="vector-25-C61RwL" src="img/vector-25@1x.svg"/>

    <a href="{{ route('my-account') }}">
        <div class="account-details-C61RwL valign-text-middle">Account Details</div>
    </a>
    <div class="favourites-C61RwL valign-text-middle">Favourites</div>

    <img class="logo-C61RwL" src="img/logo-1@2x.png"/>
    <img class="barking-owl-C61RwL" src="img/barking-owl-10@2x.svg"/>
    <a href="{{ route('my-account') }}">
        <div class="profile-C61RwL valign-text-middle inter-bold-eerie-black-16px">Profile</div>
    </a>
    <a href='/'>
        <div class="home-C61RwL valign-text-middle inter-normal-eerie-black-16px">Home</div>
    </a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <div class="logout-C61RwL valign-text-middle inter-normal-eerie-black-16px">
            Logout
        </div>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <!--    RESULTS section-->
    <div class="results-200-C61RwL valign-text-middle">Results: {{ $total }}</div>

    <!--    <table>-->
    <!--        <thead class="thead">-->
    <!--        <tr>-->
    <!--            <th>-->
    <!--                <div class="title-C61RwL valign-text-middle inter-bold-black-16px">Title</div>-->
    <!--            </th>-->
    <!--            <th>-->
    <!--                <div class="length-C61RwL valign-text-middle inter-bold-black-16px">Length</div>-->
    <!--            </th>-->
    <!--            <th>-->
    <!--                <div class="action-C61RwL valign-text-middle inter-bold-black-16px">Action</div>-->
    <!--            </th>-->
    <!--        </tr>-->
    <!--        </thead>-->
    <!--        <tbody>-->
    <!--        @foreach($user_favourites as $user_favourite)-->
    <!--        <tr>-->
    <!--            <td>-->
    <!--                <div class="friendship-C61RwL valign-text-middle inter-normal-black-14px">{{$user_favourite->name}}-->
    <!--                </div>-->
    <!--            </td>-->
    <!--            <td> {{$user_favourite->length}}</td>-->
    <!--            <td> {{$user_favourite->id}}</td>-->
    <!--        </tr>-->
    <!--        @endforeach-->
    <!--        </tbody>-->
    <!--    </table>-->

    <table class="favourites-table">
        <thead>
        <th class="title-C61RwLL inter-bold-black-16px">Title</th>
        <th class="length-C61RwLL inter-bold-black-16px">Length</th>
        <th class="action-C61RwLL inter-bold-black-16px">Action</th>
        </thead>
        <tbody class="song-results">
        @foreach($user_favourites as $user_favourite)
        <tr class="song-list">
            <td class="inter-normal-black-14px title-C61RwLL">{{$user_favourite->name}}</td>
            <td class="length-C61RwLL inter-normal-black-14px">{{$user_favourite->length}}</td>
            <td class="action-C61RwLL">
                <div style="display: none;">{{$user_favourite->id}}</div>
                <span style="padding: 0 0 0 1px;">
                        <img class="playIcon" src="img/vector-4@2x.svg"/>
                    </span>
                <span style="padding: 0 0 0 32px;">
                        <img class="downloadIcon" src="img/vector-3@2x.svg"/>
                    </span>
                <span style="padding: 0 0 0 32px;">
                        <img class="heartIcon" src="img/vector-84@2x.svg"/>
                    </span>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <!--    RESULTS section-->

    <div class="rectangle-79-C61RwL border-2px-eerie-black"></div>
    <div class="load-more-C61RwL valign-text-middle">Load more</div>

    <div class="rectangle-76-C61RwL"></div>
    <div class="x2021-copyr-s-reserved-C61RwL">© 2021 Copyright LoseFound. All Rights Reserved.</div>
</div>

@endsection
