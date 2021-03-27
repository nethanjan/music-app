@extends('layouts.app')

@section('content')

<div class="favourites screen">

    <!-- Header -->
    <div class="overlap-group-fav" style="z-index: 1;">
        <div class="navigation">
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
        </div>
    </div>
    <!-- Header  -->

    <div style="width: 1440px; height: auto; margin: 0 auto; position: relative;">
        <a href="{{ route('my-account') }}">
            <div class="account-details-C61RwL valign-text-middle">Account Details</div>
        </a>
        <div class="favourites-C61RwL valign-text-middle">Favourites</div>
        <img class="vector-25-C61RwL" src="img/vector-25@1x.svg"/>

        <!--    RESULTS section-->
        <div class="results-200-C61RwL valign-text-middle">Results: {{ $user_favourites->total() }}</div>


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
                    <span style="padding: 0 0 0 1px; cursor: pointer;">
                        <audio class="audio-player" id="audio-{{ $user_favourite->id }}" src="{{ $user_favourite->path }}">
                        </audio>
                        <img id="play-{{ $user_favourite->id }}" class="playIcon" src="img/vector-4@2x.svg" onclick="play('{{ $user_favourite->id }}')"/>
                        <img id="pause-{{ $user_favourite->id }}" style="display: none" class="pauseIcon" src="img/pause-circle-line.svg" onclick="pause('{{ $user_favourite->id }}')"/>
                    </span>
                    <a href="{{ $user_favourite->path }}" download="{{ $user_favourite->name }}" rel="nofollow">
                        <span style="padding: 0 0 0 32px; cursor: pointer;">
                            <img class="downloadIcon" src="img/vector-3@2x.svg"/>
                        </span>
                    </a>

                    <span style="padding: 0 0 0 32px; cursor: pointer;" class="remove-favourite"
                        id="favoured-{{ $user_favourite->id }}"
                    >
                        <img class="heartFilledIcon" src="img/heart-solid.svg"/>
                    </span>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        <!--    RESULTS section-->
        @if($user_favourites->total() > count($user_favourites) )
            <div id="load-more-section" class="rectangle-79-C61RwL border-2px-eerie-black">
                <button class="load-more-C61RwLL valign-text-middle"
                    id="load-more"
                    style="border: none; background: none; height: 40px; cursor:pointer;">
                    Load more
                </button>
            </div>
        @endif
    </div>

    <!-- FOOTER -->
    <div>
        <div class="rectangle-76-C61RwL">
            <div class="x2021-copyr-s-reserved-C61RwL">© 2021 Copyright LoseFound. All Rights
                Reserved.
            </div>
        </div>
    </div>
</div>

<script src="js/user.js"></script>
<script type="text/javascript">
    var main_site = "{{ url('/') }}";
</script>

@endsection
