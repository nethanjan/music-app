@extends('layouts.app')

@section('content')

<div class="page-choose-the-genre screen">
    <!-- HEADER -->
    <div class="rectangle-71-C61RwLL" style="z-index: 1;">
        <a href='/'>
            <img class="logo-C61RwL" src="img/logo-1@2x.png"/>
            <img class="barking-owl-C61RwL" src="img/barking-owl-5@2x.svg"/></a>
        <a  href="{{ route('my-account') }}">
            <div class="profile-C61RwL valign-text-middle inter-normal-eerie-black-16px">Profile</div>
        </a>
        <a href='/'>
            <div class="home-C61RwL valign-text-middle inter-bold-eerie-black-16px">Home</div>
        </a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <div class="logout-C61RwL valign-text-middle inter-normal-eerie-black-16px">Logout</div>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    <!-- HEADER -->

    <!-- CONTENT -->
    <div>

        <!--          4 tabs Genre, Instrument, Energy level, Mood-->
        <!-- TODO - add style (color: var(--paradiso);) when selecting the categories, now hardcoded to Genre       -->
        <div class="frame-21-C61RwL">
            <!--            <a href="{{ route('search-by-genre') }}">-->
            <div id="genreMenu" class="genre-G2B5sx-highlight valign-text-middle search-menu-item" onclick="filterTypeToggle('genre')">Genre</div>
            <!--            </a>-->
            <!--            <a href="{{ route('search-by-instrument') }}">-->
            <div id="instrumentMenu" class="instrument-G2B5sx valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px search-menu-item" onclick="filterTypeToggle('instrument')">
                Instrument
            </div>
            <!--            </a>-->
            <!--            <a href="{{ route('search-by-energy-level') }}">-->
            <div id="energy-levelMenu" class="energy-level-G2B5sx valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px search-menu-item" onclick="filterTypeToggle('energy-level')">
                Energy level
            </div>
            <!--            </a>-->
            <!--            <a href="{{ route('search-by-mood') }}">-->
            <div id="moodMenu" class="mood-G2B5sx valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px search-menu-item" onclick="filterTypeToggle('mood')">Mood
            </div>
            <!--            </a>-->
        </div>

        <!-- genre search filter -->
        <div id="genre-options" class="filter-options">
            <!--          topic-->
            <div class="choose-the-genre-C61RwL valign-text-middle">CHOOSE THE GENRE</div>

            <!--          start - previous and next tabs-->
            <a href="{{ route('search-by-instrument') }}">
                <div class="group-8-C61RwL">
                    <div class="instrument-3cZhlu valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px">
                        Instrument
                    </div>
                    <div class="group-6-3cZhlu">
                        <img class="vector-15-agmLXU" src="img/vector-15@2x.svg"/>
                        <img class="vector-16-agmLXU" src="img/vector-16@2x.svg"/>
                    </div>
                </div>
            </a>
            <!--          end - previous and next tabs-->

            <!--          filter options table -->
            <div style="display: flex; justify-content: center;">
                <table class="filter-options-table">
                    <!--                TODO filling the table-->
                    <!--                @foreach ($genres as $genre)-->
                    <!--                <tr>-->
                    <!--                    <td>{{ $genre->id }}</td>-->
                    <!--                    <td>{{ $genre->name }}</td>-->
                    <!--                </tr>-->
                    <!--                @endforeach-->
                    <tr>
                        <td>40’s</td>
                        <td>50’s</td>
                        <td>60's</td>
                        <td>70's</td>
                        <td>80's</td>
                        <td>Ambient</td>
                    </tr>
                    <tr>
                        <td>aaaaaa</td>
                        <td>bbbbbb</td>
                        <td>cccccc</td>
                        <td>dddddd</td>
                        <td>eeeeee</td>
                        <td>ffffff</td>
                    </tr>
                    <tr>
                        <td>aaaaaa</td>
                        <td>bbbbbb</td>
                        <td>cccccc</td>
                        <td>dddddd</td>
                        <td>eeeeee</td>
                        <td>ffffff</td>
                    </tr>
                    <tr>
                        <td>aaaaaa</td>
                        <td>bbbbbb</td>
                        <td>cccccc</td>
                        <td>dddddd</td>
                        <td>eeeeee</td>
                        <td>ffffff</td>
                    </tr>
                </table>
            </div>

            <!--          TODO selecting circle-->
            <!--        <img class="vector-35-C61RwL" src="img/vector-18@2x.svg" />-->

            <!--          main category gif-->
            <div class="gif-frame-C61RwLL">

                <!--            main gif-->
                <span style="padding-left: 227px;padding-top: 60px;">
                    <img class="genre-1-RbxIY1" src="img/genre-1@1x.gif"/>
                </span>

                <!--            view results below arrow-->
                <span style="position: absolute;padding-left: 1159px;padding-top: 258px;">
                <div
                    class="view-results-below-C61RwLL valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px">
                    View results below
                </div>
                    <!--          View results below arrow-->
                <img class="vector-15-C61RwLL" src="img/vector-15-1@2x.svg"/>
                <img class="vector-16-C61RwLL" src="img/vector-16-7@2x.svg"/>
            </span>

                <!--          separator above Your Results section-->
                <div style="padding: 338px;position: absolute;padding-left: 0px;">
                    <img class="vector-25-C61RwLL" src="img/vector-25@1x.svg"/>
                </div>
            </div>


        </div>
        <!-- end genre search filter -->

        <!-- instrument search filter -->
        <div id="instrument-options" class="filter-options" style="display: none">
            <!--          topic-->
            <div class="pick-the-instrument-C61RwL valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-56px">
                PICK THE INSTRUMENT
            </div>
            <!--          start - previous and next tabs-->
            <!--        TODO need to add and fix styles for these two-->
            <a href="{{ route('search-by-genre') }}">
                <div class="group-9-C61RwL">
                    <div class="genre-9dtg3L valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px">Genre</div>
                    <div class="group-6-9dtg3L">
                        <img class="vector-15-jUlmuf" src="img/vector-15-2@2x.svg" />
                        <img class="vector-16-jUlmuf" src="img/vector-16-2@2x.svg" />
                    </div>
                </div>
            </a>
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
            <!--          end - previous and next tabs-->

            <!--          filter options table -->
            <div style="display: flex; justify-content: center;">
                <table class="filter-options-table">
                    <!--                TODO filling the table-->
                    <!--                @foreach ($genres as $genre)-->
                    <!--                <tr>-->
                    <!--                    <td>{{ $genre->id }}</td>-->
                    <!--                    <td>{{ $genre->name }}</td>-->
                    <!--                </tr>-->
                    <!--                @endforeach-->
                    <tr>
                        <td>40’s</td>
                        <td>50’s</td>
                        <td>60's</td>
                        <td>70's</td>
                        <td>80's</td>
                        <td>Ambient</td>
                    </tr>
                    <tr>
                        <td>aaaaaa</td>
                        <td>bbbbbb</td>
                        <td>cccccc</td>
                        <td>dddddd</td>
                        <td>eeeeee</td>
                        <td>ffffff</td>
                    </tr>
                    <tr>
                        <td>aaaaaa</td>
                        <td>bbbbbb</td>
                        <td>cccccc</td>
                        <td>dddddd</td>
                        <td>eeeeee</td>
                        <td>ffffff</td>
                    </tr>
                    <tr>
                        <td>aaaaaa</td>
                        <td>bbbbbb</td>
                        <td>cccccc</td>
                        <td>dddddd</td>
                        <td>eeeeee</td>
                        <td>ffffff</td>
                    </tr>
                </table>
            </div>

            <!--          TODO selecting circle-->
            <!--        <img class="vector-35-C61RwL" src="img/vector-18@2x.svg" />-->

            <!--          main category gif-->
            <div class="gif-frame-C61RwLL">

                <!--            main gif-->
                <span style="padding-left: 521px;padding-top: 72px;">
                                    <img class="instruments-1-RbxIY1" src="img/instruments-1@2x.gif" />
                </span>

                <!--            view results below arrow-->
                <span style="position: absolute;padding-left: 1159px;padding-top: 258px;">
                <div
                    class="view-results-below-C61RwLL valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px">
                    View results below
                </div>
                    <!--          View results below arrow-->
                <img class="vector-15-C61RwLL" src="img/vector-15-1@2x.svg"/>
                <img class="vector-16-C61RwLL" src="img/vector-16-7@2x.svg"/>
            </span>

                <!--          separator above Your Results section-->
                <div style="padding: 338px;position: absolute;padding-left: 0px;">
                    <img class="vector-25-C61RwLL" src="img/vector-25@1x.svg"/>
                </div>
            </div>


        </div>
        <!-- end instrument search filter -->

        <!-- energy level search filter -->
        <div id="energy-level-options" class="filter-options" style="display: none">
            <!--          topic-->
            <div class="pick-the-e-ergy-level-C61RwL valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-56px">
                PICK THE ENERGY LEVEL
            </div>
            <!--          start - previous and next tabs-->
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
            <!--          end - previous and next tabs-->

            <!--          filter options table -->
            <div style="display: flex; justify-content: center;">
                <table class="filter-options-table">
                    <!--                TODO filling the table-->
                    <!--                @foreach ($genres as $genre)-->
                    <!--                <tr>-->
                    <!--                    <td>{{ $genre->id }}</td>-->
                    <!--                    <td>{{ $genre->name }}</td>-->
                    <!--                </tr>-->
                    <!--                @endforeach-->
                    <tr>
                        <td>40’s</td>
                        <td>50’s</td>
                        <td>60's</td>
                        <td>70's</td>
                        <td>80's</td>
                        <td>Ambient</td>
                    </tr>
                    <tr>
                        <td>aaaaaa</td>
                        <td>bbbbbb</td>
                        <td>cccccc</td>
                        <td>dddddd</td>
                        <td>eeeeee</td>
                        <td>ffffff</td>
                    </tr>
                    <tr>
                        <td>aaaaaa</td>
                        <td>bbbbbb</td>
                        <td>cccccc</td>
                        <td>dddddd</td>
                        <td>eeeeee</td>
                        <td>ffffff</td>
                    </tr>
                    <tr>
                        <td>aaaaaa</td>
                        <td>bbbbbb</td>
                        <td>cccccc</td>
                        <td>dddddd</td>
                        <td>eeeeee</td>
                        <td>ffffff</td>
                    </tr>
                </table>
            </div>

            <!--          TODO selecting circle-->
            <!--        <img class="vector-35-C61RwL" src="img/vector-18@2x.svg" />-->

            <!--          main category gif-->
            <div class="gif-frame-C61RwLL">

                <!--            main gif-->
                <span style="padding-left: 482px;">
                                    <img class="energy-1-RbxIY11" src="img/energy-1@2x.gif" />
                </span>

                <!--            view results below arrow-->
                <span style="position: absolute;padding-left: 1159px;padding-top: 258px;">
                <div
                    class="view-results-below-C61RwLL valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px">
                    View results below
                </div>
                    <!--          View results below arrow-->
                <img class="vector-15-C61RwLL" src="img/vector-15-1@2x.svg"/>
                <img class="vector-16-C61RwLL" src="img/vector-16-7@2x.svg"/>
            </span>

                <!--          separator above Your Results section-->
                <div style="padding: 338px;position: absolute;padding-left: 0px;">
                    <img class="vector-25-C61RwLL" src="img/vector-25@1x.svg"/>
                </div>
            </div>


        </div>
        <!-- end energy level search filter -->

        <!-- start mood search filter -->
        <div id="mood-options" class="filter-options" style="display: none">
            <!--          topic-->
            <div class="pick-the-mood-C61RwL valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-56px">
                PICK THE MOOD
            </div>
            <!--          start - previous and next tabs-->
            <!--        TODO need to add and fix styles for this-->
            <a href="{{ route('search-by-energy-level') }}">
                <div class="group-9-C61RwL">
                    <div class="energy-9dtg3L valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px">
                        Energy
                    </div>
                    <div class="group-6-9dtg3L">
                        <img class="vector-15-jUlmuf" src="img/vector-15-2@2x.svg" />
                        <img class="vector-16-jUlmuf" src="img/vector-16-5@2x.svg" />
                    </div></div
                ></a>
            <!--          end - previous and next tabs-->

            <!--          filter options table -->
            <div style="display: flex; justify-content: center;">
                <table class="filter-options-table">
                    <!--                TODO filling the table-->
                    <!--                @foreach ($genres as $genre)-->
                    <!--                <tr>-->
                    <!--                    <td>{{ $genre->id }}</td>-->
                    <!--                    <td>{{ $genre->name }}</td>-->
                    <!--                </tr>-->
                    <!--                @endforeach-->
                    <tr>
                        <td>40’s</td>
                        <td>50’s</td>
                        <td>60's</td>
                        <td>70's</td>
                        <td>80's</td>
                        <td>Ambient</td>
                    </tr>
                    <tr>
                        <td>aaaaaa</td>
                        <td>bbbbbb</td>
                        <td>cccccc</td>
                        <td>dddddd</td>
                        <td>eeeeee</td>
                        <td>ffffff</td>
                    </tr>
                    <tr>
                        <td>aaaaaa</td>
                        <td>bbbbbb</td>
                        <td>cccccc</td>
                        <td>dddddd</td>
                        <td>eeeeee</td>
                        <td>ffffff</td>
                    </tr>
                    <tr>
                        <td>aaaaaa</td>
                        <td>bbbbbb</td>
                        <td>cccccc</td>
                        <td>dddddd</td>
                        <td>eeeeee</td>
                        <td>ffffff</td>
                    </tr>

                </table>
            </div>

            <!--          TODO selecting circle-->
            <!--        <img class="vector-35-C61RwL" src="img/vector-18@2x.svg" />-->

            <!--          main category gif-->
            <div class="gif-frame-C61RwLL">

                <!--            main gif-->
                <span style="padding-left: 492px;padding-top: 85px;">
                                    <img class="mood-1-RbxIY1" src="img/mood-1@2x.gif" />
                </span>

                <!--            view results below arrow-->
                <span style="position: absolute;padding-left: 1159px;padding-top: 258px;">
                <div
                    class="view-results-below-C61RwLL valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px">
                    View results below
                </div>
                    <!--          View results below arrow-->
                <img class="vector-15-C61RwLL" src="img/vector-15-1@2x.svg"/>
                <img class="vector-16-C61RwLL" src="img/vector-16-7@2x.svg"/>
            </span>

                <!--          separator above Your Results section-->
                <div style="padding: 338px;position: absolute;padding-left: 0px;">
                    <img class="vector-25-C61RwLL" src="img/vector-25@1x.svg"/>
                </div>
            </div>


        </div>
        <!-- end mood search filter -->

        <!--          music level video level section-->
        <div style="height: 700px;">
            <div class="your-results-C61RwLL valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-56px">
                YOUR RESULTS
            </div>

            <!--            music and video results -->
            <div style="height: 400px;">
                <!-- Music and video level adjusters (TODO need to style the below span adding necessary padding) -->
                <span>
                    <span>
                    <div class="music-level-C61RwL valign-text-middle inter-bold-black-16px">Music level</div>
                    <div class="rectangle-76-VMr6Om border-1px-black"></div>
                    <img class="rectangle-77-C61RwL" src="img/rectangle-77@2x.svg"/>
                    <img class="ellipse-1-C61RwL" src="img/ellipse-1@2x.svg"/>
                    </span>
                    <span>
                    <div class="video-level-C61RwL valign-text-middle inter-bold-black-16px">Video level</div>
                    <div class="rectangle-76-mzXdH9 border-1px-black"></div>
                    <img class="rectangle-77-VMr6Om" src="img/rectangle-77-1@2x.svg"/>
                    <img class="ellipse-1-VMr6Om" src="img/ellipse-1@2x.svg"/>
                    </span>
                </span>

                <!--        upload video box-->
                <span style="position: absolute;padding-left: 404px;padding-top: 12px;">
                    <div class="rectangle-75-C61RwLL">
                        <div class="select-a-v-ovies-here-C61RwLL valign-text-middle" style="top:40px; left:64px;" onclick="document.getElementById('getFile').click()">
                            <video autoplay id="mixer" controls="true" ></video>
                              <input
                                  type="file"
                                  id="getFile"
                                  class="videoinputdrag"
                                  name="getFile"
                                  style="display: none;"
                                  accept="video/*"
                              />
                            Select a video file from your computer<br/><br/>this video will not be uploaded to any<br/>server or cloud
                            and will only play<br/>directly from your computer<br/><br/>tip: you can drag and drop movies here
                        </div>
                                        <div >
                          <input type="range" id="mixercontroller" />
                        </div>
                    </div>
                </span>

                <!--        load and search buttons-->
                <span style="position: absolute;padding-left: 1076px;padding-top: 66px;">
                    <div class="buttonsoli-arydefault-C61RwLL">
                        <div class="masterbutt-nlargetext-JC31Xq">
                            <div class="content-p1rkmu">
                                <div class="load-video-here-admDNH valign-text-middle inter-normal-white-16px">Load Video Here</div>
                            </div>
                        </div>
                    </div>
                    <div class="buttonsoli-arydefault-VMr6Omm smart-layers-pointers">
                        <div class="masterbutt-nlargetext-ByrZT3">
                            <div class="content-QVVfMl">
                                <div class="load-video-here-xZK00f valign-text-middle inter-normal-white-16px">Load Video Here</div>
                            </div>
                        </div>
                    </div>
                    <div class="buttonsoli-arydefault-mzXdH99">
                        <div class="masterbutt-nlargetext-Sw6AQq">
                            <div class="content-yNlhqY">
                                <div class="forget-it--ets-search-qNCdGS valign-text-middle inter-normal-white-16px">
                                    Forget It, let&#39;s search
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttonsoli-arydefault-QxM5SUU smart-layers-pointers">
                        <div class="masterbutt-nlargetext-5416h0">
                            <div class="content-VQyg8I">
                                <div class="forget-it--ets-search-Irc3DO valign-text-middle inter-normal-white-16px">
                                    Forget It, let&#39;s search
                                </div>
                            </div>
                        </div>
                    </div>
                </span>
            </div>

            <!--          separator above results table-->
            <div style="padding: 8px;position: absolute;padding-left: 80px;">
                <img class="vector-22-C61RwLL" src="img/vector-22@1x.svg"/>
            </div>

            <!--          results table topic -->
            <div class="results-200-C61RwLL valign-text-middle" style="padding-top: 45px;padding-left: 88px;">Results:
                200
            </div>

            <!--          results table -->
            <div style="padding-left: 80px; padding-top: 22px;">
                <table class="results-table">
                    <thead>
                    <th class="title-C61RwLL inter-bold-black-16px">Title</th>
                    <th class="length-C61RwLL inter-bold-black-16px">Length</th>
                    <th class="action-C61RwLL inter-bold-black-16px">Action</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="inter-normal-black-14px title-C61RwLL">Friendship</td>
                        <td class="length-C61RwLL inter-normal-black-14px">2:19</td>
                        <td class="action-C61RwLL">
                            <span style="padding: 0 0 0 1px;"><img class="playIcon" src="img/vector-4@2x.svg"/></span>
                            <span style="padding: 0 0 0 32px;"><img class="downloadIcon"
                                                                    src="img/vector-3@2x.svg"/></span>
                            <span style="padding: 0 0 0 32px;"><img class="heartIcon"
                                                                    src="img/vector-84@2x.svg"/></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="inter-normal-black-14px title-C61RwLL">The Wrong Reason</td>
                        <td class="length-C61RwLL inter-normal-black-14px">0:54</td>
                        <td class="action-C61RwLL">
                            <span style="padding: 0 0 0 1px;"><img class="playIcon" src="img/vector-4@2x.svg"/></span>
                            <span style="padding: 0 0 0 32px;"><img class="downloadIcon"
                                                                    src="img/vector-3@2x.svg"/></span>
                            <span style="padding: 0 0 0 32px;"><img class="heartIcon"
                                                                    src="img/vector-84@2x.svg"/></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="inter-normal-black-14px title-C61RwLL">Drop</td>
                        <td class="length-C61RwLL inter-normal-black-14px">1:04</td>
                        <td class="action-C61RwLL">
                            <span style="padding: 0 0 0 1px;"><img class="playIcon" src="img/vector-4@2x.svg"/></span>
                            <span style="padding: 0 0 0 32px;"><img class="downloadIcon"
                                                                    src="img/vector-3@2x.svg"/></span>
                            <span style="padding: 0 0 0 32px;"><img class="heartIcon"
                                                                    src="img/vector-84@2x.svg"/></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="inter-normal-black-14px title-C61RwLL">Ready</td>
                        <td class="length-C61RwLL inter-normal-black-14px">2:42</td>
                        <td class="action-C61RwLL">
                            <span style="padding: 0 0 0 1px;"><img class="playIcon" src="img/vector-4@2x.svg"/></span>
                            <span style="padding: 0 0 0 32px;"><img class="downloadIcon"
                                                                    src="img/vector-3@2x.svg"/></span>
                            <span style="padding: 0 0 0 32px;"><img class="heartIcon"
                                                                    src="img/vector-84@2x.svg"/></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="inter-normal-black-14px title-C61RwLL">Rock 3 456c</td>
                        <td class="length-C61RwLL inter-normal-black-14px">0:55</td>
                        <td class="action-C61RwLL">
                            <span style="padding: 0 0 0 1px;"><img class="playIcon" src="img/vector-4@2x.svg"/></span>
                            <span style="padding: 0 0 0 32px;"><img class="downloadIcon"
                                                                    src="img/vector-3@2x.svg"/></span>
                            <span style="padding: 0 0 0 32px;"><img class="heartIcon"
                                                                    src="img/vector-84@2x.svg"/></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="inter-normal-black-14px title-C61RwLL">Rock 3 446d</td>
                        <td class="length-C61RwLL inter-normal-black-14px">1:17</td>
                        <td class="action-C61RwLL">
                            <span style="padding: 0 0 0 1px;"><img class="playIcon" src="img/vector-4@2x.svg"/></span>
                            <span style="padding: 0 0 0 32px;"><img class="downloadIcon"
                                                                    src="img/vector-3@2x.svg"/></span>
                            <span style="padding: 0 0 0 32px;"><img class="heartIcon"
                                                                    src="img/vector-84@2x.svg"/></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="inter-normal-black-14px title-C61RwLL">Orchestral 148</td>
                        <td class="length-C61RwLL inter-normal-black-14px">1:46</td>
                        <td class="action-C61RwLL">
                            <span style="padding: 0 0 0 1px;"><img class="playIcon" src="img/vector-4@2x.svg"/></span>
                            <span style="padding: 0 0 0 32px;"><img class="downloadIcon"
                                                                    src="img/vector-3@2x.svg"/></span>
                            <span style="padding: 0 0 0 32px;"><img class="heartIcon"
                                                                    src="img/vector-84@2x.svg"/></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="inter-normal-black-14px title-C61RwLL">Urban 233</td>
                        <td class="length-C61RwLL inter-normal-black-14px">3:58</td>
                        <td class="action-C61RwLL">
                            <span style="padding: 0 0 0 1px;"><img class="playIcon" src="img/vector-4@2x.svg"/></span>
                            <span style="padding: 0 0 0 32px;"><img class="downloadIcon"
                                                                    src="img/vector-3@2x.svg"/></span>
                            <span style="padding: 0 0 0 32px;"><img class="heartIcon"
                                                                    src="img/vector-84@2x.svg"/></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="inter-normal-black-14px title-C61RwLL">50’s &amp; 60’s</td>
                        <td class="length-C61RwLL inter-normal-black-14px">1:36</td>
                        <td class="action-C61RwLL">
                            <span style="padding: 0 0 0 1px;"><img class="playIcon" src="img/vector-4@2x.svg"/></span>
                            <span style="padding: 0 0 0 32px;"><img class="downloadIcon"
                                                                    src="img/vector-3@2x.svg"/></span>
                            <span style="padding: 0 0 0 32px;"><img class="heartIcon"
                                                                    src="img/vector-84@2x.svg"/></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <!--          load more button-->
            <div class="rectangle-79-C61RwLL load-more-C61RwLL border-2px-eerie-blackk valign-text-middle"
                 style="margin:40px auto;">Load more
            </div>

        </div>

    </div>
    <!-- CONTENT -->

    <!-- FOOTER -->
    <div style="padding-top: 630px;">
        <div class="rectangle-76-C61RwLL">
            <div class="x2021-copyr-s-reserved-C61RwL" style="top:8px;">© 2021 Copyright LoseFound. All Rights
                Reserved.
            </div>
        </div>
    </div>
    <!-- FOOTER -->

</div>

    <!-- <script src="js/app.js"></script> -->
    <script src="js/search.js"></script>

<script>(function localFileVideoPlayer() {

  'use strict'
  var URL = window.URL || window.webkitURL
  var displayMessage = function (message, isError) {
    var element = document.querySelector('#message')
    element.innerHTML = message
    element.className = isError ? 'error' : 'info'
  }
  var playSelectedFile = function (event) {
    var file = this.files[0]
    var type = file.type
    var videoNode = document.querySelector('video')
    var canPlay = videoNode.canPlayType(type)
    if (canPlay === '') canPlay = 'no'
    var message = 'Can play type "' + type + '": ' + canPlay
    var isError = canPlay === 'no'

    if (isError) {
      return
    }

    var fileURL = URL.createObjectURL(file)
    videoNode.src = fileURL
  }

  var inputNode = document.getElementById('getFile')
  inputNode.addEventListener('change', playSelectedFile, false)
  var inputNodedrag = document.querySelector('.videoinputdrag')
  inputNodedrag.addEventListener('change', playSelectedFile, false)
  })()

  //mixer controler
  function changeVolume(elementID, volumePercentage = 100)
  {
    let element     = document.getElementById(elementID);
    let volume      = volumePercentage / 100;

    element.volume = volume
  }

  $(document).ready(function(){
    $(document).on('input', '#mixercontroller', function(){
        let volumePercentage = $(this).val();
        changeVolume('mixer', volumePercentage);
    });
  })
</script>

@endsection
