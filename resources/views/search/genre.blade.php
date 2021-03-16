@extends('layouts.app')

@section('content')

<div class="page-choose-the-genre screen">

<table border = "1">
<tr>
<td>Id</td>
<td>Name</td>
</tr>
@foreach ($genres as $genre)
<tr>
<td>{{ $genre->id }}</td>
<td>{{ $genre->name }}</td>
</tr>
@endforeach
</table>

        <div class="rectangle-1-C61RwL"></div>

        <!-- genre search filter -->
        <div id="genre-options" class="filter-options">
          <div class="gif-frame-C61RwL">
            <img class="genre-1-RbxIY1" src="img/genre-1@1x.gif" />
          </div>
          <img class="vector-18-C61RwL" src="img/vector-18@2x.svg" />
          <img class="vector-35-C61RwL" src="img/vector-18@2x.svg" />
          <div class="choose-the-genre-C61RwL valign-text-middle">CHOOSE THE GENRE</div>
          <div class="component-1-C61RwL">
          <div id="genre-filters">

          </div>     
          </div> 
          <!-- <div class="component-1-C61RwL">
            <div class="x40s-9p2GBv valign-text-middle inter-medium-chicago-14px">40’s</div>
            <div class="americana-9p2GBv valign-text-middle inter-medium-chicago-14px">Americana</div>
            <div class="holiday-9p2GBv valign-text-middle inter-medium-chicago-14px">Holiday</div>
            <div class="orchestral-9p2GBv valign-text-middle inter-medium-chicago-14px">Orchestral</div>
          </div>
          <div class="component-2-C61RwL">
            <div class="x50s-esxmfg valign-text-middle inter-medium-chicago-14px">50’s</div>
            <div class="electronic-esxmfg valign-text-middle inter-medium-chicago-14px">Electronic</div>
            <div class="jazz-esxmfg valign-text-middle inter-medium-chicago-14px">Jazz</div>
            <div class="pop-esxmfg valign-text-middle inter-medium-chicago-14px">Pop</div>
          </div>
          <div class="component-3-C61RwL">
            <div class="x60s-zmv7IO valign-text-middle inter-medium-chicago-14px">60’s</div>
            <div class="ethnic-zmv7IO valign-text-middle">Ethnic</div>
            <div class="latin-zmv7IO valign-text-middle inter-medium-chicago-14px">Latin</div>
            <div class="rock-zmv7IO valign-text-middle inter-medium-chicago-14px">Rock</div>
          </div>
          <div class="component-4-C61RwL">
            <div class="x70s-p4wM3n valign-text-middle inter-medium-chicago-14px">70’s</div>
            <div class="folk-p4wM3n valign-text-middle inter-medium-chicago-14px">Folk</div>
            <div class="lounge-p4wM3n valign-text-middle inter-medium-chicago-14px">Lounge</div>
            <div class="soul-p4wM3n valign-text-middle">Soul</div>
          </div>
          <div class="component-5-C61RwL">
            <div class="x80s-9wWKr1 valign-text-middle inter-medium-chicago-14px">80’s</div>
            <div class="funk-9wWKr1 valign-text-middle inter-medium-chicago-14px">Funk</div>
            <div class="lullaby-9wWKr1 valign-text-middle inter-medium-chicago-14px">Lullaby</div>
            <div class="surf-rock-9wWKr1 valign-text-middle inter-medium-chicago-14px">Surf Rock</div>
          </div>
          <div class="component-6-C61RwL">
            <div class="ambient-5mfU7d valign-text-middle inter-medium-chicago-14px">Ambient</div>
            <div class="hip-hop-5mfU7d valign-text-middle inter-medium-chicago-14px">Hip Hop</div>
            <div class="mnemonic-5mfU7d valign-text-middle inter-medium-chicago-14px">Mnemonic</div>
            <div class="tropical-5mfU7d valign-text-middle inter-medium-chicago-14px">Tropical</div>
          </div> -->
          <a href="{{ route('search-by-instrument') }}">
          <div class="group-8-C61RwL">
            <div class="instrument-3cZhlu valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px">
              Instrument
            </div>
            <div class="group-6-3cZhlu">
              <img class="vector-15-agmLXU" src="img/vector-15@2x.svg" />
              <img class="vector-16-agmLXU" src="img/vector-16-1@2x.svg" />
            </div>
          </div>
        </a>
        <div class="view-results-below-C61RwL valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px">
          View results below
        </div>
        <img class="vector-15-C61RwL" src="img/vector-15-1@2x.svg" />
        <img class="vector-16-C61RwL" src="img/vector-16-4@2x.svg" />
        </div>
        <!-- end genre search filter -->
        
        <!-- instrument search filter -->
        <div id="instrument-options" class="filter-options page-pick-the-instrument" style="display: none">
          <a href="{{ route('search-by-genre') }}">
              <div class="group-9-C61RwL">
                  <div class="genre-9dtg3L valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px">Genre</div>
                  <div class="group-6-9dtg3L">
                      <img class="vector-15-jUlmuf" src="img/vector-15-2@2x.svg" />
                      <img class="vector-16-jUlmuf" src="img/vector-16-2@2x.svg" />
                  </div>
              </div>
          </a>
          <div class="pick-the-instrument-C61RwL valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-56px">
            PICK THE INSTRUMENT
          </div>
          <div class="component-1-C61RwL">
            <div class="electronic-9p2GBv valign-text-middle inter-medium-chicago-14px">Electronic</div>
            <div class="percussion-9p2GBv valign-text-middle inter-medium-chicago-14px">Percussion</div>
            <div class="vocals-9p2GBv valign-text-middle inter-medium-chicago-14px">Vocals</div>
          </div>
          <div class="component-2-C61RwL">
            <div class="guitar-esxmfg valign-text-middle inter-medium-chicago-14px">Guitar</div>
            <div class="piano-organ-esxmfg valign-text-middle inter-medium-chicago-14px">Piano &amp; Organ</div>
            <div class="wind-instruments-esxmfg valign-text-middle">Wind Instruments</div>
          </div>
          <div class="component-3-C61RwL">
            <div class="horns-brass-zmv7IO valign-text-middle inter-medium-chicago-14px">Horns &amp; Brass</div>
            <div class="strings-zmv7IO valign-text-middle">Strings</div>
            <div class="world-zmv7IO valign-text-middle inter-medium-chicago-14px">World</div>
          </div>
          <img class="vector-35-C61RwL" src="img/vector-18@2x.svg" />
          <img class="vector-36-C61RwL" src="img/vector-18@2x.svg" />
          <div class="gif-frame-C61RwL"><img class="instruments-1-RbxIY1" src="img/instruments-1@2x.gif" /></div>
          <a href="{{ route('search-by-energy-level') }}">
            <div class="group-8-C61RwL">
              <div class="energy-3cZhlu valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px">
                Energy
              </div>
              <div class="group-6-3cZhlu">
                <img class="vector-15-agmLXU" src="img/vector-15@2x.svg" />
                <img class="vector-16-agmLXU" src="img/vector-16-3@2x.svg" />
              </div>
            </div>
          </a>
          <div class="view-results-below-C61RwL valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px">
            View results below
          </div>
        </div>
        <!-- end instrument search filter -->

        <!-- energy level search filter -->
        <div id="energy-level-options" class="filter-options page-pick-the-energy-level" style="display: none">
          <a href="{{ route('search-by-instrument') }}">
            <div class="group-9-C61RwL">
              <div class="instrument-9dtg3L valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px">
                Instrument
              </div>
              <div class="group-6-9dtg3L">
                <img class="vector-15-jUlmuf" src="img/vector-15-2@2x.svg" />
                <img class="vector-16-jUlmuf" src="img/vector-16-5@2x.svg" />
              </div>
            </div>
          </a>
          <a href="{{ route('search-by-mood') }}">
            <div class="group-8-C61RwL">
              <div class="mood-3cZhlu valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px">Mood</div>
              <div class="group-6-3cZhlu">
                <img class="vector-15-agmLXU" src="img/vector-15@2x.svg" />
                <img class="vector-16-agmLXU" src="img/vector-16-3@2x.svg" />
              </div>
            </div>
          </a>
          <div class="pick-the-e-ergy-level-C61RwL valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-56px">
            PICK THE ENERGY LEVEL
          </div>
          <div class="gif-frame-C61RwL"><img class="energy-1-RbxIY1" src="img/energy-1@2x.gif" /></div>
          <div class="component-3-C61RwL">
            <div class="low-zmv7IO valign-text-middle inter-medium-chicago-14px">Low</div>
            <div class="medium-zmv7IO valign-text-middle">Medium</div>
            <div class="high-zmv7IO valign-text-middle inter-medium-chicago-14px">High</div>
          </div>
          <div class="view-results-below-C61RwL valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px">
            View results below
          </div>
          <img class="vector-15-C61RwL" src="img/vector-15-1@2x.svg" />
          <img class="vector-16-C61RwL" src="img/vector-16-7@2x.svg" />
          <img class="vector-35-C61RwL" src="img/vector-18@2x.svg" />
        </div>
        <!-- end energy level search filter -->

        <!-- start mood search filter -->
        <div id="mood-options" class="filter-options page-pick-the-mood" style="display: none">
          <a href="{{ route('search-by-energy-level') }}">
            <div class="group-9-C61RwL">
              <div class="energy-9dtg3L valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px">
                Energy
              </div>
              <div class="group-6-9dtg3L">
                <img class="vector-15-jUlmuf" src="img/vector-15-2@2x.svg" />
                <img class="vector-16-jUlmuf" src="img/vector-16-5@2x.svg" />
              </div>
            </div>
          </a>
          <div class="pick-the-mood-C61RwL valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-56px">
            PICK THE MOOD
          </div>
          <div class="component-1-C61RwL">
            <div class="anthemic-9p2GBv valign-text-middle inter-medium-chicago-14px">Anthemic</div>
            <div class="edgy-9p2GBv valign-text-middle inter-medium-chicago-14px">Edgy</div>
            <div class="magical-9p2GBv valign-text-middle inter-medium-chicago-14px">Magical</div>
            <div class="quirky-9p2GBv valign-text-middle inter-medium-chicago-14px">Quirky</div>
          </div>
          <div class="component-2-C61RwL">
            <div class="atmospheric-esxmfg valign-text-middle inter-medium-chicago-14px">Atmospheric</div>
            <div class="emotional-esxmfg valign-text-middle inter-medium-chicago-14px">Emotional</div>
            <div class="minimal-esxmfg valign-text-middle inter-medium-chicago-14px">Minimal</div>
            <div class="sexy-esxmfg valign-text-middle inter-medium-chicago-14px">Sexy</div>
          </div>
          <div class="component-3-C61RwL">
            <div class="beautiful-zmv7IO valign-text-middle inter-medium-chicago-14px">Beautiful</div>
            <div class="epic-zmv7IO valign-text-middle">Epic</div>
            <div class="mysterious-zmv7IO valign-text-middle inter-medium-chicago-14px">Mysterious</div>
            <div class="swagger-zmv7IO valign-text-middle inter-medium-chicago-14px">Swagger</div>
          </div>
          <div class="component-4-C61RwL">
            <div class="building-p4wM3n valign-text-middle inter-medium-chicago-14px">Building</div>
            <div class="hopeful-p4wM3n valign-text-middle inter-medium-chicago-14px">Hopeful</div>
            <div class="ominous-p4wM3n valign-text-middle inter-medium-chicago-14px">Ominous</div>
            <div class="unexpected-p4wM3n valign-text-middle inter-medium-chicago-14px">Unexpected</div>
          </div>
          <div class="component-5-C61RwL">
            <div class="dramatic-9wWKr1 valign-text-middle inter-medium-chicago-14px">Dramatic</div>
            <div class="inspirational-9wWKr1 valign-text-middle inter-medium-chicago-14px">Inspirational</div>
            <div class="optimistic-9wWKr1 valign-text-middle inter-medium-chicago-14px">Optimistic</div>
            <div class="upbeat-9wWKr1 valign-text-middle inter-medium-chicago-14px">Upbeat</div>
          </div>
          <div class="component-5-VMr6Om">
            <div class="driving-Ut9V1h valign-text-middle inter-medium-chicago-14px">Driving</div>
            <div class="laid-back-Ut9V1h valign-text-middle inter-medium-chicago-14px">Laid Back</div>
            <div class="playful-Ut9V1h valign-text-middle inter-medium-chicago-14px">Playful</div>
            <div class="whimsical-Ut9V1h valign-text-middle inter-medium-chicago-14px">Whimsical</div>
          </div>
          <div class="gif-frame-C61RwL"><img class="mood-1-RbxIY1" src="img/mood-1@2x.gif" /></div>
          <div class="view-results-below-C61RwL valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px">
            View results below
          </div>
          <img class="vector-15-C61RwL" src="img/vector-15-1@2x.svg" />
          <img class="vector-16-C61RwL" src="img/vector-16-9@2x.svg" />
          <img class="vector-35-C61RwL" src="img/vector-18@2x.svg" />
        </div>
        <!-- end mood search filter -->
        
        <!-- HEADER -->
        <div class="rectangle-71-C61RwL"></div>
        <a href='/'>
            <img class="logo-C61RwL" src="img/logo-1@2x.png" />
            <img class="barking-owl-C61RwL" src="img/barking-owl-5@2x.svg" />
        </a>
        <a href='/profile'>
            <div class="profile-C61RwL valign-text-middle inter-normal-eerie-black-16px">
            Profile
            </div>
        </a>
        <a href='/'>
            <div class="home-C61RwL valign-text-middle inter-bold-eerie-black-16px">Home</div>
        </a>

        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <div class="logout-C61RwL valign-text-middle inter-normal-eerie-black-16px">
                Logout
            </div>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <!-- HEADER -->

        <img class="vector-25-C61RwL" src="img/vector-25@1x.svg" />

        <div class="frame-21-C61RwL">
            <!-- <a href="{{ route('search-by-genre') }}"> -->
                <div id="genreMenu" class="genre-G2B5sx-highlight valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px search-menu-item" onclick="filterTypeToggle('genre')">
                    Genre
                </div>
            <!-- </a> -->
            <!-- <a href="{{ route('search-by-instrument') }}"> -->
                <div id="instrumentMenu" class="instrument-G2B5sx valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px search-menu-item" onclick="filterTypeToggle('instrument')">
                    Instrument
                </div>
            <!-- </a> -->
            <!-- <a href="{{ route('search-by-energy-level') }}"> -->
                <div id="energy-levelMenu" class="energy-level-G2B5sx valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px search-menu-item" onclick="filterTypeToggle('energy-level')">
                    Energy level
                </div>
            <!-- </a> -->
            <!-- <a href="{{ route('search-by-mood') }}"> -->
                <div id="moodMenu" class="mood-G2B5sx valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px search-menu-item" onclick="filterTypeToggle('mood')">
                    Mood
                </div>
            <!-- </a> -->
        </div>
        
        <div class="rectangle-75-C61RwL"></div>
        <div class="select-a-v-ovies-here-C61RwL valign-text-middle">
          Select a video file from your computer<br /><br />this video will not be uploaded to any<br />server or cloud
          and will only play<br />directly from your computer<br /><br />tip: you can drag and drop movies here
        </div>
        <div class="rectangle-76-C61RwL border-1px-black"></div>
        <img class="rectangle-77-C61RwL" src="img/rectangle-77@2x.svg" />
        <img class="ellipse-1-C61RwL" src="img/ellipse-1@2x.svg" />
        <div class="rectangle-76-VMr6Om border-1px-black"></div>
        <img class="rectangle-77-VMr6Om" src="img/rectangle-77-1@2x.svg" />
        <img class="ellipse-1-VMr6Om" src="img/ellipse-1@2x.svg" />
        <div class="music-level-C61RwL valign-text-middle inter-bold-black-16px">Music level</div>
        <div class="video-level-C61RwL valign-text-middle inter-bold-black-16px">Video level</div>
        <div class="buttonsoli-arydefault-C61RwL">
          <div class="masterbutt-nlargetext-JC31Xq">
            <div class="content-p1rkmu">
              <div class="load-video-here-admDNH valign-text-middle inter-normal-white-16px">Load Video Here</div>
            </div>
          </div>
        </div>
        <div class="buttonsoli-arydefault-VMr6Om smart-layers-pointers">
          <div class="masterbutt-nlargetext-ByrZT3">
            <div class="content-QVVfMl">
              <div class="load-video-here-xZK00f valign-text-middle inter-normal-white-16px">Load Video Here</div>
            </div>
          </div>
        </div>
        <div class="buttonsoli-arydefault-mzXdH9">
          <div class="masterbutt-nlargetext-Sw6AQq">
            <div class="content-yNlhqY">
              <div class="forget-it--ets-search-qNCdGS valign-text-middle inter-normal-white-16px">
                Forget It, let&#39;s search
              </div>
            </div>
          </div>
        </div>
        <div class="buttonsoli-arydefault-QxM5SU smart-layers-pointers">
          <div class="masterbutt-nlargetext-5416h0">
            <div class="content-VQyg8I">
              <div class="forget-it--ets-search-Irc3DO valign-text-middle inter-normal-white-16px">
                Forget It, let&#39;s search
              </div>
            </div>
          </div>
        </div>
        <div class="results-200-C61RwL valign-text-middle">Results: 200</div>
        <div class="title-C61RwL valign-text-middle inter-bold-black-16px">Title</div>
        <div class="friendship-C61RwL valign-text-middle inter-normal-black-14px">Friendship</div>
        <div class="the-wrong-reason-C61RwL valign-text-middle inter-normal-black-14px">The Wrong Reason</div>
        <div class="drop-C61RwL valign-text-middle inter-normal-black-14px">Drop</div>
        <div class="ready-C61RwL valign-text-middle inter-normal-black-14px">Ready</div>
        <div class="rock-3-456c-C61RwL valign-text-middle inter-normal-black-14px">Rock 3 456c</div>
        <div class="rock-3-446d-C61RwL valign-text-middle inter-normal-black-14px">Rock 3 446d</div>
        <div class="orchestral-148-C61RwL valign-text-middle inter-normal-black-14px">Orchestral 148</div>
        <div class="urban-233-C61RwL valign-text-middle inter-normal-black-14px">Urban 233</div>
        <div class="x50s-60s-C61RwL valign-text-middle inter-normal-black-14px">50’s &amp; 60’s</div>
        <div class="x134-C61RwL valign-text-middle inter-normal-black-14px">1:34</div>
        <div class="x219-C61RwL valign-text-middle inter-normal-black-14px">2:19</div>
        <div class="x054-C61RwL valign-text-middle inter-normal-black-14px">0:54</div>
        <div class="x104-C61RwL valign-text-middle inter-normal-black-14px">1:04</div>
        <div class="x242-C61RwL valign-text-middle inter-normal-black-14px">2:42</div>
        <div class="x055-C61RwL valign-text-middle inter-normal-black-14px">0:55</div>
        <div class="x117-C61RwL valign-text-middle inter-normal-black-14px">1:17</div>
        <div class="x146-C61RwL valign-text-middle inter-normal-black-14px">1:46</div>
        <div class="x358-C61RwL valign-text-middle inter-normal-black-14px">3:58</div>
        <div class="x136-C61RwL valign-text-middle inter-normal-black-14px">1:36</div>
        <div class="length-C61RwL valign-text-middle inter-bold-black-16px">Length</div>
        <div class="action-C61RwL valign-text-middle inter-bold-black-16px">Action</div>
        <img class="vector-22-C61RwL" src="img/vector-22@1x.svg" />
        <img class="vector-23-C61RwL" src="img/vector-23@1x.svg" />
        <img class="vector-24-C61RwL" src="img/vector-23@1x.svg" />
        <img class="vector-26-C61RwL" src="img/vector-23@1x.svg" />
        <img class="vector-27-C61RwL" src="img/vector-23@1x.svg" />
        <img class="vector-28-C61RwL" src="img/vector-23@1x.svg" />
        <img class="vector-29-C61RwL" src="img/vector-23@1x.svg" />
        <img class="vector-30-C61RwL" src="img/vector-23@1x.svg" />
        <img class="vector-31-C61RwL" src="img/vector-23@1x.svg" />
        <img class="vector-32-C61RwL" src="img/vector-23@1x.svg" />
        <img class="vector-33-C61RwL" src="img/vector-23@1x.svg" />
        <img class="vector-34-C61RwL" src="img/vector-23@1x.svg" />
        <div class="rectangle-76-mzXdH9"></div>
        <div class="x2021-copyr-s-reserved-C61RwL">© 2021 Copyright LoseFound. All Rights Reserved.</div>
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
        <div class="heart-3-VkPPtx"><img class="vector-WLlorL" src="img/vector-4@2x.svg" /></div>
        <div class="your-results-C61RwL valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-56px">
          YOUR RESULTS
        </div>
        
        <div class="rectangle-79-C61RwL border-2px-eerie-black"></div>
        <div class="load-more-C61RwL valign-text-middle">Load more</div>
      </div>

    <!-- <div class="ais-InstantSearch">
      <h1>InstantSearch.js e-commerce demo</h1>

      <div class="left-panel">
        <div id="clear-refinements"></div>

        <h2>Brands</h2>
        <div id="brand-list"></div>
      </div>

      <div class="right-panel">
        <div id="searchbox" class="ais-SearchBox"></div>
        <div id="hits"></div>
        <div id="pagination"></div>
      </div>
    </div> -->

    <div id="hits"></div>

    <script src="https://cdn.jsdelivr.net/npm/algoliasearch@4/dist/algoliasearch-lite.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@4"></script>
    <script src="js/app.js"></script>
    <script src="js/search.js"></script>

@endsection