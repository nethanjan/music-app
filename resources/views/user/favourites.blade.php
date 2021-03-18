@extends('layouts.app')

@section('content')

<div class="favourites screen">
  <div class="rectangle-1-C61RwL"></div>
  <div class="rectangle-71-C61RwL"></div>
  <img class="vector-25-C61RwL" src="img/vector-25@1x.svg" />

   <a href="{{ route('my-account') }}">
    <div class="account-details-C61RwL valign-text-middle">Account Details</div>
  </a>
  <div class="favourites-C61RwL valign-text-middle">Favourites</div>

  <div class="results-200-C61RwL valign-text-middle">Results: {{ $total }}</div>

  <table>
    <thead class="thead">
        <tr>
          <th>
            <div class="title-C61RwL valign-text-middle inter-bold-black-16px">Title</div> 
          </th>
          <th> 
            <div class="length-C61RwL valign-text-middle inter-bold-black-16px">Length</div>
          </th>
            <th> <div class="action-C61RwL valign-text-middle inter-bold-black-16px">Action</div>  </th>
        </tr>
    </thead>
    <tbody>
         @foreach($user_favourites as $user_favourite)
          <tr>
              <td> <div class="friendship-C61RwL valign-text-middle inter-normal-black-14px">{{$user_favourite->name}}</div> </td>
              <td> {{$user_favourite->length}} </td>
              <td> {{$user_favourite->id}} </td>
          </tr>
         @endforeach
   </tbody>
  </table>
        
        <!-- <div class="friendship-C61RwL valign-text-middle inter-normal-black-14px">Friendship</div>
        <div class="the-wrong-reason-C61RwL valign-text-middle inter-normal-black-14px">The Wrong Reason</div>
        <div class="drop-C61RwL valign-text-middle inter-normal-black-14px">Drop</div>
        <div class="ready-C61RwL valign-text-middle inter-normal-black-14px">Ready</div>
        <div class="rock-3-456c-C61RwL valign-text-middle inter-normal-black-14px">Rock 3 456c</div>
        <div class="rock-3-446d-C61RwL valign-text-middle inter-normal-black-14px">Rock 3 446d</div>
        <div class="orchestral-148-C61RwL valign-text-middle inter-normal-black-14px">Orchestral 148</div>
        <div class="urban-233-C61RwL valign-text-middle inter-normal-black-14px">Urban 233</div>
        <div class="x50s-60s-C61RwL valign-text-middle inter-normal-black-14px">50’s &amp; 60’s</div>
        <div class="acoustic-C61RwL valign-text-middle inter-normal-black-14px">Acoustic</div>
        <div class="x134-C61RwL valign-text-middle inter-normal-black-14px">1:34</div>
        <div class="x219-C61RwL valign-text-middle inter-normal-black-14px">2:19</div>
        <div class="x054-C61RwL valign-text-middle inter-normal-black-14px">0:54</div>
        <div class="x104-C61RwL valign-text-middle inter-normal-black-14px">1:04</div>
        <div class="x242-C61RwL valign-text-middle inter-normal-black-14px">2:42</div>
        <div class="x055-C61RwL valign-text-middle inter-normal-black-14px">0:55</div>
        <div class="x117-C61RwL valign-text-middle inter-normal-black-14px">1:17</div>
        <div class="x146-C61RwL valign-text-middle inter-normal-black-14px">1:46</div>
        <div class="x358-C61RwL valign-text-middle inter-normal-black-14px">3:58</div>
        <div class="x136-C61RwL valign-text-middle inter-normal-black-14px">1:36</div> -->
        
        
        <!-- <img class="vector-22-C61RwL" src="img/vector-22-4@1x.svg" />
        <img class="vector-23-C61RwL" src="img/vector-23-4@1x.svg" />
        <img class="vector-24-C61RwL" src="img/vector-23-4@1x.svg" />
        <img class="vector-26-C61RwL" src="img/vector-23-4@1x.svg" />
        <img class="vector-27-C61RwL" src="img/vector-23-4@1x.svg" />
        <img class="vector-28-C61RwL" src="img/vector-23-4@1x.svg" />
        <img class="vector-29-C61RwL" src="img/vector-23-4@1x.svg" />
        <img class="vector-30-C61RwL" src="img/vector-23-4@1x.svg" />
        <img class="vector-31-C61RwL" src="img/vector-23-4@1x.svg" />
        <img class="vector-32-C61RwL" src="img/vector-23-4@1x.svg" />
        <img class="vector-33-C61RwL" src="img/vector-23-4@1x.svg" />
        <img class="vector-34-C61RwL" src="img/vector-23-4@1x.svg" />
        
        <div class="heart-1-C61RwL"><img class="vector-xE3uHn" src="img/vector-2@2x.svg" /></div>
        <div class="heart-2-C61RwL"><img class="vector-6H6OPj" src="img/vector-3@2x.svg" /></div>
        <div class="heart-3-C61RwL"><img class="vector-GnEHta" src="img/vector-4@2x.svg" /></div>
        <div class="heart-1-VMr6Om"><img class="vector-Olt1FA" src="img/vector-2@2x.svg" /></div>
        <div class="heart-2-VMr6Om"><img class="vector-oFA4vZ" src="img/vector-3@2x.svg" /></div>
        <div class="heart-3-VMr6Om"><img class="vector-il8yJu" src="img/vector-4@2x.svg" /></div>
        <div class="heart-1-mzXdH9"><img class="vector-nkqx4q" src="img/vector-2@2x.svg" /></div>
        <div class="heart-2-mzXdH9"><img class="vector-TfxX1x" src="img/vector-3@2x.svg" /></div>
        <div class="heart-3-mzXdH9"><img class="vector-UgGFTE" src="img/vector-4@2x.svg" /></div>
        <div class="heart-1-QxM5SU"><img class="vector-Pqpd5x" src="img/vector-2@2x.svg" /></div>
        <div class="heart-2-QxM5SU"><img class="vector-fTWrXo" src="img/vector-3@2x.svg" /></div>
        <div class="heart-3-QxM5SU"><img class="vector-jakCyx" src="img/vector-4@2x.svg" /></div>
        <div class="heart-1-2P4qUJ"><img class="vector-MOcxBe" src="img/vector-2@2x.svg" /></div>
        <div class="heart-2-2P4qUJ"><img class="vector-CYQ7bl" src="img/vector-3@2x.svg" /></div>
        <div class="heart-3-2P4qUJ"><img class="vector-tcqY3v" src="img/vector-4@2x.svg" /></div>
        <div class="heart-1-qr8e7q"><img class="vector-DyTV0E" src="img/vector-2@2x.svg" /></div>
        <div class="heart-2-qr8e7q"><img class="vector-a9wIIA" src="img/vector-3@2x.svg" /></div>
        <div class="heart-3-qr8e7q"><img class="vector-y17mYe" src="img/vector-4@2x.svg" /></div>
        <div class="heart-1-J1YQmd"><img class="vector-LG06OP" src="img/vector-2@2x.svg" /></div>
        <div class="heart-2-J1YQmd"><img class="vector-svJTnJ" src="img/vector-3@2x.svg" /></div>
        <div class="heart-3-J1YQmd"><img class="vector-4jfzUB" src="img/vector-4@2x.svg" /></div>
        <div class="heart-1-a5WPlX"><img class="vector-wiL0hc" src="img/vector-2@2x.svg" /></div>
        <div class="heart-2-a5WPlX"><img class="vector-mj0e2y" src="img/vector-3@2x.svg" /></div>
        <div class="heart-3-a5WPlX"><img class="vector-QjaiFl" src="img/vector-4@2x.svg" /></div>
        <div class="heart-1-HlKRTo"><img class="vector-RcwfUe" src="img/vector-2@2x.svg" /></div>
        <div class="heart-2-HlKRTo"><img class="vector-Yv6ksh" src="img/vector-3@2x.svg" /></div>
        <div class="heart-3-HlKRTo"><img class="vector-XUySlj" src="img/vector-4@2x.svg" /></div>
        <div class="heart-1-VkPPtx"><img class="vector-fLGRxx" src="img/vector-2@2x.svg" /></div>
        <div class="heart-2-VkPPtx"><img class="vector-Upkd2T" src="img/vector-3@2x.svg" /></div>
        <div class="heart-3-VkPPtx"><img class="vector-WLlorL" src="img/vector-4@2x.svg" /></div> -->


        <img class="logo-C61RwL" src="img/logo-1@2x.png" />
        <img class="barking-owl-C61RwL" src="img/barking-owl-10@2x.svg" />
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
        <div class="rectangle-79-C61RwL border-2px-eerie-black"></div>
        <div class="load-more-C61RwL valign-text-middle">Load more</div>

        <div class="rectangle-76-C61RwL"></div>
        <div class="x2021-copyr-s-reserved-C61RwL">© 2021 Copyright LoseFound. All Rights Reserved.</div>
</div>

@endsection