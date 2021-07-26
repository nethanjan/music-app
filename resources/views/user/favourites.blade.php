@extends('layouts.fav')

@section('content')

<div class="tabs">
    <ul class="no-style-ul">
        <li><a href="/profile">Account Details</a></li>
        <li class="active"><a>Favourites</a></li>
    </ul>
    <svg class="the-line" width="1440" height="7" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M917.709 3.762c-1.2.154-1.939.305-2.272.43-.854.32-2.153.548-3.72.721-1.593.176-3.547.303-5.763.39-4.434.174-9.962.191-15.826.111-11.717-.159-24.824-.704-33.331-1.159-56.538.364-170.088 1.091-172.173 1.091-.81 0-3.55-.152-7.066-.347-2.275-.127-4.874-.271-7.486-.404-3.347-.17-6.735-.323-9.544-.4-2.844-.077-5.001-.072-5.947.052-.944.123-1.843.249-2.701.368-2.854.398-5.246.731-7.314.731-.52 0-1.687-.04-3.348-.098-6.966-.24-22.61-.783-35.601.096-6.484.439-15.708.004-25.674-.465-2.54-.12-5.128-.242-7.731-.352-12.887-.546-26.185-.812-36.215.807-8.224 1.327-26.23 1.412-45.285.994-19.098-.418-39.373-1.346-52.214-2.074h-.003c-6.081-.365-19.899-.866-26.87-.006-4.505.556-13.299.552-23.351.416-3.181-.043-6.494-.1-9.848-.157-7.293-.124-14.783-.252-21.547-.252-9.87 0-22.214.273-32.547.613-10.375.343-18.621.751-20.369 1.013-.303.045-.906.07-1.686.088-.809.018-1.885.028-3.185.032a858.67 858.67 0 01-10.268-.058c-8.287-.085-19.069-.256-29.963-.46-21.764-.41-44.044-.955-47.722-1.23-1.736-.13-5.974.066-11.839.418-2.182.131-4.58.282-7.138.444-4.26.27-8.966.567-13.861.844-15.661.886-33.423 1.573-45.215.474-18.58-1.732-42.143-2.173-51.77-2.178-1.127.348-3.135.58-5.532.746-2.575.18-5.745.293-9.084.359-6.68.132-14.08.077-18.858-.014l-.144-.003-.137-.043c-.402-.126-1.216-.252-2.452-.355a86.283 86.283 0 00-4.511-.228c-3.552-.104-8.057-.114-12.886-.066-9.655.095-20.57.422-27.674.695l-.076-1.999c7.116-.273 18.05-.6 27.73-.696 4.84-.048 9.374-.038 12.964.067 1.794.052 3.363.128 4.62.234 1.139.095 2.096.22 2.738.397 4.764.09 12.062.141 18.647.011 3.324-.066 6.456-.178 8.984-.354 2.58-.18 4.394-.42 5.181-.695l.16-.056h.17c9.55 0 33.343.437 52.116 2.187 11.619 1.083 29.233.407 44.916-.48 4.892-.277 9.58-.573 13.833-.842 2.561-.162 4.964-.314 7.16-.445 5.791-.348 10.202-.56 12.108-.417 3.605.27 25.804.815 47.61 1.225 10.891.205 21.666.375 29.945.46 4.14.043 7.653.064 10.243.058 1.295-.004 2.355-.014 3.146-.031.82-.019 1.282-.044 1.434-.067 1.894-.284 10.295-.694 20.599-1.033 10.346-.342 22.713-.615 32.613-.615 6.781 0 14.302.129 21.603.253 3.35.057 6.654.114 9.819.156 10.107.137 18.741.134 23.079-.401 7.18-.886 21.175-.37 27.233-.006 12.824.727 33.074 1.654 52.143 2.072 19.113.419 36.916.322 44.923-.97 10.259-1.655 23.754-1.375 36.618-.83 2.643.112 5.258.235 7.815.355 9.951.468 19.012.895 25.37.465 13.15-.89 29.114-.334 35.959-.095 1.569.054 2.659.092 3.125.092 1.916 0 4.117-.306 6.929-.697.879-.123 1.818-.253 2.826-.385 1.135-.15 3.465-.144 6.262-.068 2.832.077 6.239.23 9.591.401 2.709.138 5.37.286 7.666.414 3.417.19 6.026.335 6.784.335 2.077 0 115.654-.727 172.19-1.09l.03-.001.03.002c8.489.454 21.584.999 33.281 1.158 5.85.08 11.338.062 15.72-.11 2.192-.087 4.095-.211 5.622-.38 1.553-.171 2.637-.38 3.239-.606.578-.217 1.534-.39 2.718-.541 1.217-.156 2.774-.302 4.616-.438 3.686-.27 8.556-.503 14.223-.695C947.63.26 962.191.039 976.927.005c14.736-.034 29.653.119 41.703.486 6.03.183 11.35.42 15.57.715 4.19.292 7.38.645 9.11 1.08 6.28 1.582 14.04.8 20.87-.224 1.39-.209 2.76-.43 4.06-.64 1.84-.297 3.56-.574 5.05-.77 1.29-.168 2.46-.282 3.45-.299.97-.016 1.88.056 2.59.335.29.116.82.236 1.61.337.76.099 1.71.172 2.8.224 2.17.102 4.85.113 7.7.065 5.7-.095 12-.421 16.07-.693l.05-.004.06.002c12.31.546 31 1.282 47.09 1.718 8.04.219 15.42.361 21.03.368 2.8.004 5.15-.027 6.91-.099.88-.035 1.6-.081 2.15-.136.58-.059.89-.12 1-.159.34-.12.85-.208 1.42-.282a45.5 45.5 0 012.26-.217c1.78-.136 4.15-.257 6.94-.364 5.6-.215 12.95-.38 20.94-.502 16-.246 34.57-.328 46.8-.328h.02l.03.001c24.47 1.092 78.61 2.944 99.77 1.638 21.28-1.313 59.58-.547 76.05-.001l-.06 1.999c-16.48-.546-54.69-1.308-75.86-.002-21.29 1.313-75.53-.544-99.97-1.635-12.22 0-30.78.082-46.74.328-7.99.122-15.33.286-20.9.5-2.79.108-5.12.227-6.87.36-.88.067-1.6.136-2.15.207-.58.074-.9.143-1.02.186-.36.126-.89.203-1.46.26-.61.061-1.37.11-2.27.146-1.8.073-4.18.104-7 .1-5.63-.007-13.03-.15-21.08-.368-16.07-.436-34.75-1.172-47.07-1.717-4.08.273-10.39.599-16.11.694-2.86.048-5.6.038-7.83-.068-1.11-.052-2.12-.13-2.96-.237-.82-.106-1.55-.25-2.09-.46-.33-.13-.91-.212-1.82-.196-.88.015-1.96.118-3.22.283-1.47.193-3.13.46-4.94.753-1.3.21-2.68.433-4.13.65-6.83 1.023-14.94 1.877-21.66.186-1.53-.384-4.55-.73-8.76-1.024-4.19-.292-9.47-.528-15.49-.71-12.02-.367-26.916-.52-41.639-.486-14.722.034-29.261.255-40.57.638-5.656.192-10.496.424-14.144.692-1.825.134-3.342.277-4.508.427z"
            fill="#000" />
    </svg>
</div>

    <div class="results-count">
        <div class="container">
            <div class="count">Results : {{ $user_favourites->total() }}</div>
        </div>
    </div>

    <div class="module-spacer results-table">
        <div class="container">
            <div class="row header">
                <div class="col-one title">
                    Title
                    <svg width="12" height="8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.25 1.375L6 6.625.75 1.375" stroke="#000" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="col-two title">
                    Length
                    <svg width="12" height="8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.25 1.375L6 6.625.75 1.375" stroke="#000" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="col-three title">
                    Action
                </div>
            </div>
            <div class="table-of-results">
                @foreach($user_favourites as $user_favourite)

                    <div class="row body result-element" id="{{ $user_favourite->id }}">
                        <div class="col-one">
                            {{$user_favourite->name}}
                        </div>
                        <div class="col-two">
                            {{$user_favourite->length}}
                        </div>
                        <div class="col-three">
                            <audio class="audio-player" id="audio-{{ $user_favourite->id }}" src="{{ env('AUDIO_S3_PATH') . $user_favourite->path }}">
                            </audio>
                            <div class="action-icons audio-play-js playIcon" id="play-{{ $user_favourite->id }}" onclick="play('{{ $user_favourite->id }}')" style="cursor: pointer;">
                                <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 18a9 9 0 01-9-9 9 9 0 019-9 9 9 0 019 9 9 9 0 01-9 9zm0-1.8A7.2 7.2 0 109 1.8a7.2 7.2 0 000 14.4zM7.76 5.774L12.15 8.7a.36.36 0 010 .6L7.76 12.226a.36.36 0 01-.559-.298V6.072a.36.36 0 01.56-.298z"
                                        fill="#37807E" />
                                </svg>
                            </div>
                            <div class="action-icons audio-play-js pauseIcon" id="pause-{{ $user_favourite->id }}" onclick="pause('{{ $user_favourite->id }}')" style="display: none; cursor: pointer;">
                                <svg width="22" height="22" viewBox="2 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 20a9 9 0 01-9-9 9 9 0 019-9 9 9 0 019 9 9 9 0 01-9 9zm0-1.8a7.2 7.2 0 100-14.4 7.2 7.2 0 000 14.4zM8.3 8.3h1.8v5.4H8.3V8.3zm3.6 0h1.8v5.4h-1.8V8.3z"
                                        fill="#37807E" />
                                </svg>
                            </div>
                            <a class="action-icons audio-download" href="{{ env('AUDIO_S3_PATH') . $user_favourite->path }}" download="{{ $user_favourite->name }}" rel="nofollow">
                                <svg width="16" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 16.2h16V18H0v-1.8zm8.889-9h6.222L8 14.4.889 7.2H7.11V0H8.89v7.2z"
                                        fill="#37807E" />
                                </svg>
                            </a>
                            <div class="action-icons audio-not-fav remove-favourite" id="favoured-{{ $user_favourite->id }}" style="cursor: pointer;">
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
            @if($user_favourites->total() > 10)
                <button id="load-more" class="btn btn-light" id="btn-results-load-js">
                    Load More
                </button>
            @endif
            
        </div>
    </div>


    <script>

        var main_site = "{{ url('/') }}";
        var s3Url = '<?php echo env('AUDIO_S3_PATH'); ?>';

        document.addEventListener("DOMContentLoaded", () => {
            if (document.querySelector(".nav")) {
                onMenuClick();
            }
        });

        function onMenuClick() {
            document.getElementById("menu-js").addEventListener("click", (e) => {
                e.preventDefault();
                document.getElementsByTagName("body")[0].classList.toggle("menu-open");
            });
        }

        function play(id) {
            console.log(id);
            const audio = document.getElementById("audio-" + id);

            const divsToHide = document.getElementsByClassName("pauseIcon");
            for (let i = 0; i < divsToHide.length; i++) {
                divsToHide[i].style.display = "none";
            }

            const divsToShow = document.getElementsByClassName("playIcon");
            for (let i = 0; i < divsToHide.length; i++) {
                divsToShow[i].style.display = "inline";
            }

            $("#play-" + id).hide();
            $("#pause-" + id).show();

            const playersToStop = document.getElementsByClassName("audio-player");
            for (let i = 0; i < playersToStop.length; i++) {
                playersToStop[i].pause();
            }

            audio.currentTime = 0;
            audio.play();
        }

        function pause(id) {
            const audio = document.getElementById("audio-" + id);
            audio.pause();

            $("#pause-" + id).hide();
            $("#play-" + id).show();
        }

        $(document).on("click", ".remove-favourite", function () {
            //do something
            const elementId = this.id;
            const songId = elementId.replace("favoured-", "");
            console.log(songId)
            // Ajax Reuqest
            $.ajax({
                url: main_site + "/remove-favourite",
                type: "get",
                dataType: "json",
                data: {
                    songId: songId,
                },
                success: function (response) {
                    $("#" + songId).css("display", "none");
                    totalCurrentResult = $(".result-element").length;
                    $(".count").text("Results : " + (parseInt(totalCurrentResult, 10) - 1));
                },
            });
        });

        $("#load-more").on("click", function () {
            let totalCurrentResult = $(".result-element").length;
            console.log(totalCurrentResult);
            // Ajax Reuqest
            $.ajax({
                url: main_site + "/favourites-load-more",
                type: "get",
                dataType: "json",
                data: {
                    skip: totalCurrentResult,
                },
                success: function (response) {
                    let _html = "";
                    console.log(response);
                    $.each(response.results, function (index, value) {

                        _html += `<div class="row body result-element">
                        <div class="col-one">
                            ${value.name}
                        </div>
                        <div class="col-two">
                            ${value.length}
                        </div>
                            <div class="col-three">
                                <audio class="audio-player" id="audio-${value.id}" src="${s3Url}${value.path}">
                                </audio>
                                <div class="action-icons audio-play-js playIcon" id="play-${value.id}" onclick="play('${value.id}')" style="cursor: pointer;">
                                    <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 18a9 9 0 01-9-9 9 9 0 019-9 9 9 0 019 9 9 9 0 01-9 9zm0-1.8A7.2 7.2 0 109 1.8a7.2 7.2 0 000 14.4zM7.76 5.774L12.15 8.7a.36.36 0 010 .6L7.76 12.226a.36.36 0 01-.559-.298V6.072a.36.36 0 01.56-.298z"
                                            fill="#37807E" />
                                    </svg>
                                </div>
                                <div class="action-icons audio-play-js pauseIcon" id="pause-${value.id}" onclick="pause('${value.id}')" style="display: none; cursor: pointer;">
                                    <svg width="22" height="22" viewBox="2 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11 20a9 9 0 01-9-9 9 9 0 019-9 9 9 0 019 9 9 9 0 01-9 9zm0-1.8a7.2 7.2 0 100-14.4 7.2 7.2 0 000 14.4zM8.3 8.3h1.8v5.4H8.3V8.3zm3.6 0h1.8v5.4h-1.8V8.3z"
                                            fill="#37807E" />
                                    </svg>
                                </div>
                                <a class="action-icons audio-download" href="${s3Url}${value.path}" download="${value.name}" rel="nofollow">
                                    <svg width="16" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 16.2h16V18H0v-1.8zm8.889-9h6.222L8 14.4.889 7.2H7.11V0H8.89v7.2z"
                                            fill="#37807E" />
                                    </svg>
                                </a>
                                <div class="action-icons audio-not-fav remove-favourite" id="favoured-${value.id}" style="cursor: pointer;">
                                    <svg width="20" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.48 2.583A5.766 5.766 0 0010 1.997a5.748 5.748 0 00-7.48 8.69l5.692 5.7016a2.548 2.548 0 003.575 0l5.6925-5.7016a5.7477 5.7477 0 000-8.1034z"
                                            fill="#37807E" />
                                    </svg>
                                </div>
                            </div>
                        </div>`;
                    });
                    $(".table-of-results").append(_html);
                    // // Change Load More When No Further result
                    totalCurrentResult = $(".result-element").length;
                    const totalResult = response.total;
                    if (totalCurrentResult == totalResult) {
                        $("#load-more").hide();
                    }
                },
            });
        });

    </script>

@endsection