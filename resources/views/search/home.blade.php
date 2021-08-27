@extends('layouts.user')

@section('content')

    <div class="module-spacer categories" data-id="genre">
        <div class="container">
            <ul class="no-style-ul list">
                <li>
                    <a href="#" class="category-js" data-id="genre">Genre</a>
                </li>
                <li>
                    <a href="#" class="category-js" data-id="instrument">Instrument</a>
                </li>
                <li>
                    <a href="#" class="category-js" data-id="energy-level">Energy level</a>
                </li>
                <li>
                    <a href="#" class="category-js" data-id="mood">Mood</a>
                </li>
            </ul>

            <div class="content">
                <div class="item" id="genre">
                    <p class="title">
                        CHOOSE THE GENRE
                    </p>
                    <ul class="no-style-ul sub-categories">
                        <?PHP
                            for ($x = 0; $x < sizeof($genres); $x++) {
                        ?>
                            <li class="select-genre" id="<?PHP echo $genres[$x]->id ?>" style="cursor: pointer;">
                                <?PHP echo $genres[$x]->name ?>
                                <svg class="shape" width="87" height="23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M83.487 2.525c1.317 6.253 6.542 18.943-20.99 19.398-34.413.568-63.631-1.9-61.374-10.427 2.256-8.527 11.844-7.265 29.333-9.54 17.49-2.273 45.697 0 51.339 1.706 4.513 1.364 4.513 2.842 3.949 3.41"
                                        stroke="#37807E" />
                                </svg>
                            </li>
                        <?php 
                            }
                        ?>
                    </ul>
                    <div class="cover-img" style="background-image: url('img/genre-1@1x.gif')"></div>
                    <a href="#" class="slider-arrow category-js" data-id="instrument">
                        Instrument
                        <svg class="arrow slider-line" width="83" height="4" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.455c12.258 0 39.027.18 48.043.896 9.015.717 25.108-.299 32.028-.896"
                                stroke="#000" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg class="arrow slider-curve" width="18" height="17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.077 3.245c1.39 2.022 5.023 3.6 6.665 4.137 1.014.62 1.878.913 2.183.983-2.519.651-7.723 2.69-8.386 5.638-.664 2.948.588 1.942 1.297 1.071 2.436-4.324 9.773-5.676 13.137-5.812.921-.331 1.329-.632 1.417-.741.07-.307-.034-.957-1.002-1.1-.968-.144-3.826-.52-5.134-.69C3.938 5.062 3.38 2.416 2.731 1.88c-.649-.535-1.534-.447-1.8-.12-.213.26.009 1.1.146 1.486z"
                                fill="#000" stroke="#000" />
                        </svg>
                    </a>
                </div>
                <div class="item" id="instrument">
                    <p class="title">
                        PICK THE INSTRUMENT
                    </p>
                    <ul class="no-style-ul sub-categories">
                        <?PHP
                            for ($y = 0; $y < sizeof($instruments); $y++) {
                        ?>
                            <li class="select-instrument" id="<?PHP echo $instruments[$y]->id ?>" style="cursor: pointer;">
                                <?PHP echo $instruments[$y]->name ?>
                                <svg class="shape" width="87" height="23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M83.487 2.525c1.317 6.253 6.542 18.943-20.99 19.398-34.413.568-63.631-1.9-61.374-10.427 2.256-8.527 11.844-7.265 29.333-9.54 17.49-2.273 45.697 0 51.339 1.706 4.513 1.364 4.513 2.842 3.949 3.41"
                                        stroke="#37807E" />
                                </svg>
                            </li>
                        <?php 
                            }
                        ?>
                    </ul>
                    <div class="cover-img" style="background-image: url('img/instruments-1@2x.gif')"></div>
                    <a href="#" class="slider-arrow slider-arrow-prev category-js" data-id="genre">
                        Genre
                        <svg class="arrow slider-line" width="83" height="4" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.455c12.258 0 39.027.18 48.043.896 9.015.717 25.108-.299 32.028-.896"
                                stroke="#000" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg class="arrow slider-curve" width="18" height="17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.923 13.755c-1.39-2.022-5.023-3.6-6.665-4.137-1.014-.62-1.878-.913-2.183-.983 2.519-.651 7.723-2.69 8.386-5.638.664-2.948-.588-1.942-1.297-1.071C12.728 6.25 5.391 7.602 2.027 7.738c-.921.331-1.329.632-1.417.741-.07.307.034.957 1.002 1.1.968.144 3.826.52 5.134.69 7.316 1.67 7.875 4.316 8.523 4.852.649.535 1.534.447 1.8.12.213-.26-.009-1.1-.146-1.486z"
                                fill="#000" stroke="#000" />
                        </svg>
                    </a>
                    <a href="#" class="slider-arrow category-js" data-id="energy-level">
                        Energy
                        <svg class="arrow slider-line" width="83" height="4" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.455c12.258 0 39.027.18 48.043.896 9.015.717 25.108-.299 32.028-.896"
                                stroke="#000" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg class="arrow slider-curve" width="18" height="17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.077 3.245c1.39 2.022 5.023 3.6 6.665 4.137 1.014.62 1.878.913 2.183.983-2.519.651-7.723 2.69-8.386 5.638-.664 2.948.588 1.942 1.297 1.071 2.436-4.324 9.773-5.676 13.137-5.812.921-.331 1.329-.632 1.417-.741.07-.307-.034-.957-1.002-1.1-.968-.144-3.826-.52-5.134-.69C3.938 5.062 3.38 2.416 2.731 1.88c-.649-.535-1.534-.447-1.8-.12-.213.26.009 1.1.146 1.486z"
                                fill="#000" stroke="#000" />
                        </svg>
                    </a>
                </div>
                <div class="item" id="energy-level">
                    <p class="title">
                        PICK THE ENERGY LEVEL
                    </p>
                    <ul class="no-style-ul sub-categories">
                        <?PHP
                            for ($p = 0; $p < sizeof($energyLevels); $p++) {
                        ?>
                            <li class="select-energy-level" id="<?PHP echo $energyLevels[$p]->id ?>" style="cursor: pointer;">
                                <?PHP echo $energyLevels[$p]->name ?>
                                <svg class="shape" width="87" height="23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M83.487 2.525c1.317 6.253 6.542 18.943-20.99 19.398-34.413.568-63.631-1.9-61.374-10.427 2.256-8.527 11.844-7.265 29.333-9.54 17.49-2.273 45.697 0 51.339 1.706 4.513 1.364 4.513 2.842 3.949 3.41"
                                        stroke="#37807E" />
                                </svg>
                            </li>
                        <?php 
                            }
                        ?>
                    </ul>
                    <div class="cover-img" style="background-image: url('img/energy-1@2x.gif')"></div>
                    <a href="#" class="slider-arrow slider-arrow-prev category-js" data-id="instrument">
                        Intrument
                        <svg class="arrow slider-line" width="83" height="4" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.455c12.258 0 39.027.18 48.043.896 9.015.717 25.108-.299 32.028-.896"
                                stroke="#000" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg class="arrow slider-curve" width="18" height="17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.923 13.755c-1.39-2.022-5.023-3.6-6.665-4.137-1.014-.62-1.878-.913-2.183-.983 2.519-.651 7.723-2.69 8.386-5.638.664-2.948-.588-1.942-1.297-1.071C12.728 6.25 5.391 7.602 2.027 7.738c-.921.331-1.329.632-1.417.741-.07.307.034.957 1.002 1.1.968.144 3.826.52 5.134.69 7.316 1.67 7.875 4.316 8.523 4.852.649.535 1.534.447 1.8.12.213-.26-.009-1.1-.146-1.486z"
                                fill="#000" stroke="#000" />
                        </svg>
                    </a>
                    <a href="#" class="slider-arrow category-js" data-id="mood">
                        Mood
                        <svg class="arrow slider-line" width="83" height="4" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.455c12.258 0 39.027.18 48.043.896 9.015.717 25.108-.299 32.028-.896"
                                stroke="#000" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg class="arrow slider-curve" width="18" height="17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.077 3.245c1.39 2.022 5.023 3.6 6.665 4.137 1.014.62 1.878.913 2.183.983-2.519.651-7.723 2.69-8.386 5.638-.664 2.948.588 1.942 1.297 1.071 2.436-4.324 9.773-5.676 13.137-5.812.921-.331 1.329-.632 1.417-.741.07-.307-.034-.957-1.002-1.1-.968-.144-3.826-.52-5.134-.69C3.938 5.062 3.38 2.416 2.731 1.88c-.649-.535-1.534-.447-1.8-.12-.213.26.009 1.1.146 1.486z"
                                fill="#000" stroke="#000" />
                        </svg>
                    </a>
                </div>
                <div class="item" id="mood">
                    <p class="title">
                        PICK THE MOOD
                    </p>
                    <ul class="no-style-ul sub-categories">
                        <?PHP
                            for ($q = 0; $q < sizeof($moods); $q++) {
                        ?>
                            <li class="select-energy-level" id="<?PHP echo $moods[$q]->id ?>" style="cursor: pointer;">
                                <?PHP echo $moods[$q]->name ?>
                                <svg class="shape" width="87" height="23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                         d="M83.487 2.525c1.317 6.253 6.542 18.943-20.99 19.398-34.413.568-63.631-1.9-61.374-10.427 2.256-8.527 11.844-7.265 29.333-9.54 17.49-2.273 45.697 0 51.339 1.706 4.513 1.364 4.513 2.842 3.949 3.41"
                                        stroke="#37807E" />
                                </svg>
                            </li>
                        <?PHP 
                            }
                        ?>
                    </ul>
                    <div class="cover-img" style="background-image: url('img/mood-1@2x.gif')"></div>
                    <a href="#" class="slider-arrow slider-arrow-prev category-js" data-id="energy-level">
                        Energy
                        <svg class="arrow slider-line" width="83" height="4" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.455c12.258 0 39.027.18 48.043.896 9.015.717 25.108-.299 32.028-.896"
                                stroke="#000" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg class="arrow slider-curve" width="18" height="17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.923 13.755c-1.39-2.022-5.023-3.6-6.665-4.137-1.014-.62-1.878-.913-2.183-.983 2.519-.651 7.723-2.69 8.386-5.638.664-2.948-.588-1.942-1.297-1.071C12.728 6.25 5.391 7.602 2.027 7.738c-.921.331-1.329.632-1.417.741-.07.307.034.957 1.002 1.1.968.144 3.826.52 5.134.69 7.316 1.67 7.875 4.316 8.523 4.852.649.535 1.534.447 1.8.12.213-.26-.009-1.1-.146-1.486z"
                                fill="#000" stroke="#000" />
                        </svg>
                    </a>
                </div>                   
            </div>

            <a href="#" class="view-results" id="view-results-js">
                View results below
                <svg class="arrow arrow-line" width="4" height="31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.5 1c0 4.44-.157 14.135-.784 17.4-.628 3.265.261 9.094.784 11.6" stroke="#000"
                        stroke-width="2" stroke-linecap="round" />
                </svg>
                <svg class="arrow arrow-curve" width="17" height="19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.755 1.577c-2.022 1.39-3.6 5.023-4.137 6.665-.62 1.014-.913 1.878-.983 2.183-.651-2.519-2.69-7.723-5.638-8.386-2.948-.664-1.942.588-1.071 1.297 4.324 2.436 5.676 9.773 5.812 13.137.331.921.632 1.329.741 1.417.307.07.957-.034 1.1-1.002.144-.968.52-3.826.69-5.134 1.67-7.316 4.316-7.875 4.852-8.523.535-.649.447-1.534.12-1.8-.26-.213-1.1.009-1.486.146z"
                        fill="#000" stroke="#000" />
                </svg>
            </a>

        </div>
        <svg class="category-line" width="1442" height="7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1 4.346c14.22-.545 43.7-1.309 47.861 0 9.538.182 29.55.219 33.295-1.09 9.538 0 33.295.436 52.023 2.182 23.411 2.182 70.752-2.728 78.035-2.183 7.283.546 88.959 2.183 92.601 1.637 3.642-.546 33.295-1.637 53.064-1.637 19.768 0 45.78 1.091 54.624 0 7.075-.873 20.983-.364 27.052 0 25.665 1.455 81.052 3.71 97.283 1.091 20.289-3.273 53.584 1.092 69.711 0 16.127-1.09 36.416 0 39.017 0 2.602 0 5.723-.545 9.885-1.09 4.162-.546 27.572 1.09 30.173 1.09 2.081 0 115.665-.727 172.197-1.09 16.994.909 52.439 2.182 58.266 0 7.283-2.729 114.973-3.274 127.973 0 13.01 3.273 31.74-3.274 35.9-1.638 3.33 1.31 20.46.546 28.61 0 24.63 1.092 74.81 2.947 78.56 1.637 3.74-1.31 53.58-1.637 78.03-1.637 24.45 1.092 78.66 2.947 99.89 1.637 21.22-1.31 59.48-.545 75.95 0"
                stroke="#000" stroke-width="1.5" />
        </svg>
    </div>

    <div class="position-sticky">
        <div class="module-spacer results-player">
            <div class="container">
                <div class="title">
                    YOUR RESULTS
                </div>
                <div class="video-player-box">
                    <div class="video-player">
                        <div id="video-section" class="instructions" onclick="document.getElementById('getFile').click()">
                            <div>
                                <p class="main-text">Select a video file from your computer</p>

                                <p>This video will not be uploaded to any<br>server
                                    or cloud
                                    and will only play<br>directly from your computer</p>
                            </div>
                        </div>
                        <!-- <video class="player" controls="true" id="mixer" autoplay></video>
                        <input type="file" id="getFile" class="uploader videoinputdrag" name="getFile"
                            accept="video/mp4,video/x-m4v,video/*"> -->

                            <video class="player" autoplay id="mixer" controls="true"
                            style="display: none" onclick="document.getElementById('getFile').click()"></video>
                        <!-- <div id="video-section" class="select-a-v-ovies-here-C61RwLL valign-text-middle"
                            style="top:40px; left:64px;" onclick="document.getElementById('getFile').click()">
                            Select a video file from your computer<br/><br/>this video will not be uploaded to any<br/>server or cloud
                            and will only play<br/>directly from your computer<br/><br/>tip: you can drag and drop movies here
                        </div> -->
                        <div>
                            <input
                                type="file"
                                id="getFile"
                                class="videoinputdrag"
                                name="getFile"
                                style="display: none;"
                                accept=""
                            />
                        </div>
                    </div>
                    
                    <div id="waveform" class="box"></div>

                    <div class="cont-container">
                        <div>
                            <button onclick="mainPlay('play')">Play</button>
                            <button onclick="mainPlay('pause')">Pause</button>
                            <button onclick="mainMute('on')">Mute</button>
                        </div>
                    </div>
                </div>

                <div class="volume-controller">
                    <div class="levels">
                        <div class="audio-control">
                            <input type="range" id="audio-control-js" class="slider" min="1" max="100" step="1">
                        </div>
                        <div>
                            <input type="range" id="video-control-js" class="slider" min="1" max="100" step="1">
                        </div>
                    </div>
                    <div class="content">
                        <span class="level-text music-level">Music level</span>
                        <span class="level-text video-level">Video level</span>
                    </div>
                </div>
                <div class="actions">
                    <button type="button" class="btn load-video" id="btn-video-js" onclick="document.getElementById('getFile').click()">Load Video Here</button>
                    <button type="button" class="btn" id="btn-search-js">Forget It, let's search</button>
                </div>
            </div>
        </div>
        <div class="results-count">
            <div class="container">
                <div class="count">Results: {{ $songs->total() }}</div>
            </div>
        </div>
    </div>

    <div class="module-spacer results-table">
        <div class="container">
            <div class="row header">
                <div class="col-one title">
                    Title
                </div>
                <div class="col-two title">
                    Length
                </div>
                <div class="col-three title">
                    Action
                </div>
            </div>
            <div class="table-of-results">
            @foreach($songs AS $song)

                <div class="row body result-element">
                    <div class="col-one">
                        {{ $song->name }}
                    </div>
                    <div class="col-two">
                        {{ $song->length }}
                    </div>
                    <div class="col-three">
                        <audio class="audio-player" id="audio-{{ $song->id }}" src="{{ env('AUDIO_S3_PATH') . $song->path }}">
                        </audio>
                        <div class="action-icons audio-play-js playIcon" id="play-{{ $song->id }}" onclick="play('{{ $song->id }}')" style="cursor: pointer;">
                            <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 18a9 9 0 01-9-9 9 9 0 019-9 9 9 0 019 9 9 9 0 01-9 9zm0-1.8A7.2 7.2 0 109 1.8a7.2 7.2 0 000 14.4zM7.76 5.774L12.15 8.7a.36.36 0 010 .6L7.76 12.226a.36.36 0 01-.559-.298V6.072a.36.36 0 01.56-.298z"
                                    fill="#37807E" />
                            </svg>
                        </div>
                        <div id="pause-{{ $song->id }}" class="action-icons audio-play-js pauseIcon" onclick="pause('{{ $song->id }}')" style="display: none; cursor: pointer;">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 20a9 9 0 01-9-9 9 9 0 019-9 9 9 0 019 9 9 9 0 01-9 9zm0-1.8a7.2 7.2 0 100-14.4 7.2 7.2 0 000 14.4zM8.3 8.3h1.8v5.4H8.3V8.3zm3.6 0h1.8v5.4h-1.8V8.3z"
                                    fill="#37807E" />
                            </svg>
                        </div>
                        <a class="action-icons audio-download" href="{{ env('AUDIO_S3_PATH') . $song->path }}" download="{{ $song->name }}" rel="nofollow">
                            <svg width="16" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 16.2h16V18H0v-1.8zm8.889-9h6.222L8 14.4.889 7.2H7.11V0H8.89v7.2z"
                                    fill="#37807E" />
                            </svg>
                        </a>
                        
                        <div class="action-icons audio-not-fav make-favourite" style="{{ !empty($song->user_id) ? 'display: none' : 'display: inline' }}; cursor: pointer;" id="make-favourite-{{ $song->id }}">
                            <svg width="20" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.48 2.583A5.766 5.766 0 0010 1.997a5.748 5.748 0 00-7.48 8.69l5.692 5.701a2.548 2.548 0 003.575 0l5.693-5.701a5.748 5.748 0 000-8.104zm-1.293 6.839l-5.692 5.692a.695.695 0 01-.99 0l-5.693-5.72a3.932 3.932 0 010-5.5 3.914 3.914 0 015.5 0 .917.917 0 001.302 0 3.914 3.914 0 015.5 0 3.932 3.932 0 01.073 5.5v.028z"
                                    fill="#37807E" />
                            </svg>
                        </div>
                        <div class="action-icons audio-not-fav remove-favourite" style="{{ !empty($song->user_id) ? 'display: inline' : 'display: none' }}; cursor: pointer;" id="favoured-{{ $song->id }}">
                            <svg width="20" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.48 2.583A5.766 5.766 0 0010 1.997a5.748 5.748 0 00-7.48 8.69l5.692 5.7016a2.548 2.548 0 003.575 0l5.6925-5.7016a5.7477 5.7477 0 000-8.1034z"
                                    fill="#37807E" />
                            </svg>
                        </div>
                    </div>
                </div>

            @endforeach
            </div>

            <div id="load-more-js"></div>
            <button id="load-more" class="btn btn-light" id="btn-results-load-js" data-totalResult="{{ $songs->total() }}">
            Load More
            </button>

        </div>
    </div>

    <script>
        var currentAudioPlayerId = null;

        document.addEventListener("DOMContentLoaded", () => {
            if (document.querySelector(".nav")) {
                onMenuClick();
            }

            if (document.querySelector(".categories")) {
                onCategoryClick();
                onViewResultsClick();
            }

            if (document.querySelector(".results-player")) {
                localFileVideoPlayer();
                rangeStylesUpdater(document.getElementById("video-control-js"));
                rangeStylesUpdater(document.getElementById("audio-control-js"));
            }
        });

        function localFileVideoPlayer() {

            const URL = window.URL || window.webkitURL;
            const displayMessage = (message, isError) => {
                var element = document.querySelector("#message");
                element.innerHTML = message;
                element.className = isError ? "error" : "info";
            };

            document.getElementById("video-control-js").addEventListener("input", (e) => {
                rangeStylesUpdater(e.target);
                playerVolumeUpdater(document.getElementById("mixer"), e.target);
            });

            document.getElementById("btn-search-js").addEventListener("click", () => {
                window.scrollTo({
                top: 0,
                behavior: "smooth",
                });
            });
        }

        const playSelectedFile = (e) => {

            const URL = window.URL || window.webkitURL;
            const file = e.target.files[0];
            const type = file.type;
            const player = document.getElementById("mixer");
            const canPlay = player.canPlayType(type);

            if (canPlay === "") canPlay = "no";
            const isError = canPlay === "no";
            const fileURL = URL.createObjectURL(file);

            if (isError && type !== "video/quicktime") {
            return;
            }

            const getFileInput = document.getElementById("getFile");
            getFileInput.disabled = true;
            player.style.display = "block";
            player.src = fileURL;

            document.getElementById('video-section').style.display = 'none';
            playerVolumeUpdater(player, document.getElementById("video-control-js"));
        };

        document
            .getElementById("getFile")
            .addEventListener("change", playSelectedFile);

        document.getElementById("video-control-js").addEventListener("input", (e) => {
            rangeStylesUpdater(e.target);
            playerVolumeUpdater(document.getElementById("mixer"), e.target);
        });

        document.getElementById("audio-control-js").addEventListener("input", (e) => {
            rangeStylesUpdater(e.target);
        });

        // Nav
        function onMenuClick() {
            document.getElementById("menu-js").addEventListener("click", (e) => {
                e.preventDefault();
                document.getElementsByTagName("body")[0].classList.toggle("menu-open");
            });
        }

        // Categories
        function onCategoryClick() {
            document.querySelectorAll(".category-js").forEach((item) => {
                item.addEventListener("click", (e) => {
                const id = e.target.dataset.id;
                e.preventDefault();
                document.querySelector(".categories").setAttribute("data-id", id);
                });
            });
        }

        function onViewResultsClick() {
            document.getElementById("view-results-js").addEventListener("click", (e) => {
                e.preventDefault();
                window.scroll({
                top: document.querySelector(".results-player").offsetTop - 35,
                left: 0,
                behavior: "smooth",
                });
            });
        }

        function rangeStylesUpdater(ele) {
            const val =
                (ele.value - ele.getAttribute("min")) /
                (ele.getAttribute("max") - ele.getAttribute("min"));

            ele.style.cssText = `background-image: -webkit-gradient(linear, left top, right top, color-stop(${val}, var(--dark)), color-stop(${val}, var(--light)))`;
        }

        const playerVolumeUpdater = (player, volumeController) => {
            player.volume = volumeController.value / 100;
        };

    </script>

    <script type="text/javascript">
        var main_site = "{{ url('/') }}";
        var filters = {
            'genre': [],
            'instrument': [],
            'energy': [],
            'mood': []
        };
        var globalAudioVolume = 0.5;
        var s3Url = '<?php echo env('AUDIO_S3_PATH'); ?>';

        //handle progress bar styles of slider in Chrome
        // $('input[type="range"]').change(function () {
        //     var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));

        //     $(this).css('background-image',
        //         '-webkit-gradient(linear, left top, right top, '
        //         + 'color-stop(' + val + ', var(--eerie-black)), '
        //         + 'color-stop(' + val + ', var(--white))'
        //         + ')'
        //     );
        // });

        var isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

        if(isSafari){
            var wavesurfer = WaveSurfer.create({
                container: '#waveform',
                height: 82,
                waveColor: '#fff',
                backend: 'MediaElement'
            });
        } else {
            var wavesurfer = WaveSurfer.create({
                container: '#waveform',
                height: 82,
                waveColor: '#fff'
            });
        }

    </script>

@endsection