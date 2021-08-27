$("#load-more").on("click", function () {
    let totalCurrentResult = $(".result-element").length;

    // Ajax Reuqest
    $.ajax({
        url: main_site + "/search-load-more",
        type: "get",
        dataType: "json",
        data: {
            skip: totalCurrentResult,
            filter: filters,
        },
        success: function (response) {
            let _html = "";
            $.each(response, function (index, value) {
                let favouriteSpanDisplay = "display: none;";
                let makeFavouriteSpanDisplay = "display: none;";
                if (value.user_id) {
                    favouriteSpanDisplay = "";
                } else {
                    makeFavouriteSpanDisplay = "";
                }

                _html += `
                <div class="row body result-element">
                  <div class="col-one">
                      ${value.name}
                  </div>
                  <div class="col-two">
                      ${value.length}
                  </div>
                  <div class="col-three">
                    <audio class="audio-player" id="audio-${
                        value.id
                    }" src="${s3Url}${value.path}"/>
                    <div class="action-icons audio-play-js playIcon" id="play-${
                        value.id
                    }" onclick="play('${value.id}')" style="cursor: pointer;">
                        <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 18a9 9 0 01-9-9 9 9 0 019-9 9 9 0 019 9 9 9 0 01-9 9zm0-1.8A7.2 7.2 0 109 1.8a7.2 7.2 0 000 14.4zM7.76 5.774L12.15 8.7a.36.36 0 010 .6L7.76 12.226a.36.36 0 01-.559-.298V6.072a.36.36 0 01.56-.298z"
                                fill="#37807E" />
                        </svg>
                    </div>
                    <div id="pause-${
                        value.id
                    }" class="action-icons audio-play-js pauseIcon" onclick="pause('${
                    value.id
                }')" style="display: none; cursor: pointer;">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 20a9 9 0 01-9-9 9 9 0 019-9 9 9 0 019 9 9 9 0 01-9 9zm0-1.8a7.2 7.2 0 100-14.4 7.2 7.2 0 000 14.4zM8.3 8.3h1.8v5.4H8.3V8.3zm3.6 0h1.8v5.4h-1.8V8.3z"
                                fill="#37807E" />
                        </svg>
                    </div>
                    <a class="action-icons audio-download" href="${s3Url}${
                    value.path
                }" download="${value.name}" rel="nofollow">
                        <svg width="16" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 16.2h16V18H0v-1.8zm8.889-9h6.222L8 14.4.889 7.2H7.11V0H8.89v7.2z"
                                fill="#37807E" />
                        </svg>
                    </a>
                    <div class="action-icons audio-not-fav make-favourite" style="${
                        value.user_id ? "display: none" : "display: inline"
                    };" id="make-favourite-${value.id}">
                        <svg width="20" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.48 2.583A5.766 5.766 0 0010 1.997a5.748 5.748 0 00-7.48 8.69l5.692 5.701a2.548 2.548 0 003.575 0l5.693-5.701a5.748 5.748 0 000-8.104zm-1.293 6.839l-5.692 5.692a.695.695 0 01-.99 0l-5.693-5.72a3.932 3.932 0 010-5.5 3.914 3.914 0 015.5 0 .917.917 0 001.302 0 3.914 3.914 0 015.5 0 3.932 3.932 0 01.073 5.5v.028z"
                                fill="#37807E" />
                        </svg>
                    </div>
                    <div class="action-icons audio-not-fav remove-favourite" style="${
                        value.user_id ? "display: inline" : "display: none"
                    };" id="favoured-${value.id}">
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
            const totalResult = parseInt(
                $("#load-more").attr("data-totalResult")
            );

            if (totalCurrentResult == totalResult) {
                $("#load-more").hide();
            }
        },
    });
});

$(document).on("click", ".make-favourite", function () {
    //do something
    const elementId = this.id;
    const songId = elementId.replace("make-favourite-", "");

    // Ajax Reuqest
    $.ajax({
        url: main_site + "/make-favourite",
        type: "get",
        dataType: "json",
        data: {
            songId: songId,
        },
        success: function () {
            $("#" + elementId).hide();
            $("#favoured-" + songId).show();
        },
    });
});

$(document).on("click", ".remove-favourite", function () {
    //do something
    const elementId = this.id;
    const songId = elementId.replace("favoured-", "");

    // Ajax Reuqest
    $.ajax({
        url: main_site + "/remove-favourite",
        type: "get",
        dataType: "json",
        data: {
            songId: songId,
        },
        success: function (response) {
            $("#" + elementId).hide();
            $("#make-favourite-" + songId).show();
        },
    });
});

$(document).on("click", ".select-genre", function () {
    const genreId = this.id;
    if (filters.genre.includes(genreId)) {
        const arr = filters.genre;
        filters.genre = arr.filter(function (item) {
            return item !== genreId;
        });
        $(this).removeClass("active");
    } else {
        filters.genre.push(genreId);
        $(this).addClass("active");
    }

    // // Ajax Reuqest
    $.ajax({
        url: main_site + "/filter",
        type: "get",
        dataType: "json",
        data: {
            filter: filters,
        },
        success: function (response) {
            let _html = "";
            $(".table-of-results").html("");

            $.each(response.data, function (i, value) {
                _html += `
                <div class="row body result-element">
                  <div class="col-one">
                      ${value.name}
                  </div>
                  <div class="col-two">
                      ${value.length}
                  </div>
                  <div class="col-three">
                    <audio class="audio-player" id="audio-${
                        value.id
                    }" src="${s3Url}${value.path}"/>
                    <div class="action-icons audio-play-js playIcon" id="play-${
                        value.id
                    }" onclick="play('${value.id}')" style="cursor: pointer;">
                        <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 18a9 9 0 01-9-9 9 9 0 019-9 9 9 0 019 9 9 9 0 01-9 9zm0-1.8A7.2 7.2 0 109 1.8a7.2 7.2 0 000 14.4zM7.76 5.774L12.15 8.7a.36.36 0 010 .6L7.76 12.226a.36.36 0 01-.559-.298V6.072a.36.36 0 01.56-.298z"
                                fill="#37807E" />
                        </svg>
                    </div>
                    <div id="pause-${
                        value.id
                    }" class="action-icons audio-play-js pauseIcon" onclick="pause('${
                    value.id
                }')" style="display: none; cursor: pointer;">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 20a9 9 0 01-9-9 9 9 0 019-9 9 9 0 019 9 9 9 0 01-9 9zm0-1.8a7.2 7.2 0 100-14.4 7.2 7.2 0 000 14.4zM8.3 8.3h1.8v5.4H8.3V8.3zm3.6 0h1.8v5.4h-1.8V8.3z"
                                fill="#37807E" />
                        </svg>
                    </div>
                    <a class="action-icons audio-download" href="${s3Url}${
                    value.path
                }" download="${value.name}" rel="nofollow">
                        <svg width="16" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 16.2h16V18H0v-1.8zm8.889-9h6.222L8 14.4.889 7.2H7.11V0H8.89v7.2z"
                                fill="#37807E" />
                        </svg>
                    </a>
                    <div class="action-icons audio-not-fav make-favourite" style="${
                        value.user_id ? "display: none" : "display: inline"
                    };" id="make-favourite-${value.id}">
                        <svg width="20" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.48 2.583A5.766 5.766 0 0010 1.997a5.748 5.748 0 00-7.48 8.69l5.692 5.701a2.548 2.548 0 003.575 0l5.693-5.701a5.748 5.748 0 000-8.104zm-1.293 6.839l-5.692 5.692a.695.695 0 01-.99 0l-5.693-5.72a3.932 3.932 0 010-5.5 3.914 3.914 0 015.5 0 .917.917 0 001.302 0 3.914 3.914 0 015.5 0 3.932 3.932 0 01.073 5.5v.028z"
                                fill="#37807E" />
                        </svg>
                    </div>
                    <div class="action-icons audio-not-fav remove-favourite" style="${
                        value.user_id ? "display: inline" : "display: none"
                    };" id="favoured-${value.id}">
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
            $(".count").text("Results : " + response.total);
            $("#link-count").text("(" + response.total + ")");
            const totalCount = response.total;
            totalCurrentResult = $(".result-element").length;
            if (totalCurrentResult < totalCount) {
                $("#load-more").show();
            } else {
                $("#load-more").hide();
            }
        },
    });
});

$(document).on("click", ".select-instrument", function () {
    const instrumentId = this.id;
    if (filters.instrument.includes(instrumentId)) {
        const arr = filters.instrument;
        filters.instrument = arr.filter(function (item) {
            return item !== instrumentId;
        });
        $(this).removeClass("active");
    } else {
        filters.instrument.push(instrumentId);
        $(this).addClass("active");
    }

    // // Ajax Reuqest
    $.ajax({
        url: main_site + "/filter",
        type: "get",
        dataType: "json",
        data: {
            filter: filters,
        },
        success: function (response) {
            let _html = "";
            $(".table-of-results").html("");
            $.each(response.data, function (index, value) {
                _html += `
                <div class="row body result-element">
                  <div class="col-one">
                      ${value.name}
                  </div>
                  <div class="col-two">
                      ${value.length}
                  </div>
                  <div class="col-three">
                    <audio class="audio-player" id="audio-${
                        value.id
                    }" src="${s3Url}${value.path}"/>
                    <div class="action-icons audio-play-js playIcon" id="play-${
                        value.id
                    }" onclick="play('${value.id}')" style="cursor: pointer;">
                        <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 18a9 9 0 01-9-9 9 9 0 019-9 9 9 0 019 9 9 9 0 01-9 9zm0-1.8A7.2 7.2 0 109 1.8a7.2 7.2 0 000 14.4zM7.76 5.774L12.15 8.7a.36.36 0 010 .6L7.76 12.226a.36.36 0 01-.559-.298V6.072a.36.36 0 01.56-.298z"
                                fill="#37807E" />
                        </svg>
                    </div>
                    <div id="pause-${
                        value.id
                    }" class="action-icons audio-play-js pauseIcon" onclick="pause('${
                    value.id
                }')" style="display: none; cursor: pointer;">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 20a9 9 0 01-9-9 9 9 0 019-9 9 9 0 019 9 9 9 0 01-9 9zm0-1.8a7.2 7.2 0 100-14.4 7.2 7.2 0 000 14.4zM8.3 8.3h1.8v5.4H8.3V8.3zm3.6 0h1.8v5.4h-1.8V8.3z"
                                fill="#37807E" />
                        </svg>
                    </div>
                    <a class="action-icons audio-download" href="${s3Url}${
                    value.path
                }" download="${value.name}" rel="nofollow">
                        <svg width="16" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 16.2h16V18H0v-1.8zm8.889-9h6.222L8 14.4.889 7.2H7.11V0H8.89v7.2z"
                                fill="#37807E" />
                        </svg>
                    </a>
                    <div class="action-icons audio-not-fav make-favourite" style="${
                        value.user_id ? "display: none" : "display: inline"
                    };" id="make-favourite-${value.id}">
                        <svg width="20" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.48 2.583A5.766 5.766 0 0010 1.997a5.748 5.748 0 00-7.48 8.69l5.692 5.701a2.548 2.548 0 003.575 0l5.693-5.701a5.748 5.748 0 000-8.104zm-1.293 6.839l-5.692 5.692a.695.695 0 01-.99 0l-5.693-5.72a3.932 3.932 0 010-5.5 3.914 3.914 0 015.5 0 .917.917 0 001.302 0 3.914 3.914 0 015.5 0 3.932 3.932 0 01.073 5.5v.028z"
                                fill="#37807E" />
                        </svg>
                    </div>
                    <div class="action-icons audio-not-fav remove-favourite" style="${
                        value.user_id ? "display: inline" : "display: none"
                    };" id="favoured-${value.id}">
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
            $(".count").text("Results : " + response.total);
            $("#link-count").text("(" + response.total + ")");
            const totalCount = response.total;
            totalCurrentResult = $(".result-element").length;
            if (totalCurrentResult < totalCount) {
                $("#load-more").show();
            } else {
                $("#load-more").hide();
            }
        },
    });
});

$(document).on("click", ".select-energy-level", function () {
    const energyLevelId = this.id;
    if (filters.energy.includes(energyLevelId)) {
        const arr = filters.energy;
        filters.energy = arr.filter(function (item) {
            return item !== energyLevelId;
        });
        $(this).removeClass("active");
    } else {
        filters.energy.push(energyLevelId);
        $(this).addClass("active");
    }

    // // Ajax Reuqest
    $.ajax({
        url: main_site + "/filter",
        type: "get",
        dataType: "json",
        data: {
            filter: filters,
        },
        success: function (response) {
            let _html = "";
            $(".table-of-results").html("");
            $.each(response.data, function (i, value) {
                _html += `
                <div class="row body result-element">
                  <div class="col-one">
                      ${value.name}
                  </div>
                  <div class="col-two">
                      ${value.length}
                  </div>
                  <div class="col-three">
                    <audio class="audio-player" id="audio-${
                        value.id
                    }" src="${s3Url}${value.path}"/>
                    <div class="action-icons audio-play-js playIcon" id="play-${
                        value.id
                    }" onclick="play('${value.id}')" style="cursor: pointer;">
                        <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 18a9 9 0 01-9-9 9 9 0 019-9 9 9 0 019 9 9 9 0 01-9 9zm0-1.8A7.2 7.2 0 109 1.8a7.2 7.2 0 000 14.4zM7.76 5.774L12.15 8.7a.36.36 0 010 .6L7.76 12.226a.36.36 0 01-.559-.298V6.072a.36.36 0 01.56-.298z"
                                fill="#37807E" />
                        </svg>
                    </div>
                    <div id="pause-${
                        value.id
                    }" class="action-icons audio-play-js pauseIcon" onclick="pause('${
                    value.id
                }')" style="display: none; cursor: pointer;">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 20a9 9 0 01-9-9 9 9 0 019-9 9 9 0 019 9 9 9 0 01-9 9zm0-1.8a7.2 7.2 0 100-14.4 7.2 7.2 0 000 14.4zM8.3 8.3h1.8v5.4H8.3V8.3zm3.6 0h1.8v5.4h-1.8V8.3z"
                                fill="#37807E" />
                        </svg>
                    </div>
                    <a class="action-icons audio-download" href="${s3Url}${
                    value.path
                }" download="${value.name}" rel="nofollow">
                        <svg width="16" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 16.2h16V18H0v-1.8zm8.889-9h6.222L8 14.4.889 7.2H7.11V0H8.89v7.2z"
                                fill="#37807E" />
                        </svg>
                    </a>
                    <div class="action-icons audio-not-fav make-favourite" style="${
                        value.user_id ? "display: none" : "display: inline"
                    };" id="make-favourite-${value.id}">
                        <svg width="20" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.48 2.583A5.766 5.766 0 0010 1.997a5.748 5.748 0 00-7.48 8.69l5.692 5.701a2.548 2.548 0 003.575 0l5.693-5.701a5.748 5.748 0 000-8.104zm-1.293 6.839l-5.692 5.692a.695.695 0 01-.99 0l-5.693-5.72a3.932 3.932 0 010-5.5 3.914 3.914 0 015.5 0 .917.917 0 001.302 0 3.914 3.914 0 015.5 0 3.932 3.932 0 01.073 5.5v.028z"
                                fill="#37807E" />
                        </svg>
                    </div>
                    <div class="action-icons audio-not-fav remove-favourite" style="${
                        value.user_id ? "display: inline" : "display: none"
                    };" id="favoured-${value.id}">
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
            $(".count").text("Results : " + response.total);
            $("#link-count").text("(" + response.total + ")");
            const totalCount = response.total;
            totalCurrentResult = $(".result-element").length;
            $("#load-more").data("totalresult", totalCount);
            if (totalCurrentResult < totalCount) {
                $("#load-more").show();
            } else {
                $("#load-more").hide();
            }
        },
    });
});

$(document).on("click", ".select-mood", function () {
    //do something
    const moodId = this.id;

    if (filters.mood.includes(moodId)) {
        const arr = filters.mood;
        filters.mood = arr.filter(function (item) {
            return item !== moodId;
        });
        $(this).addClass("filter-options-table-td");
        $(this).removeClass("filter-options-table-td-selected");
        $(this).children("div").removeClass("td-background");
    } else {
        filters.mood.push(moodId);
        // show selecting circle and change selected text colour classes
        $(this).removeClass("filter-options-table-td");
        $(this).addClass("filter-options-table-td-selected");
        $(this).children("div").addClass("td-background");
    }

    // // Ajax Reuqest
    $.ajax({
        url: main_site + "/filter",
        type: "get",
        dataType: "json",
        data: {
            filter: filters,
        },
        success: function (response) {
            let _html = "";
            $(".song-results").html("");
            $.each(response.data, function (index, value) {
                let favouriteSpanDisplay = "display: none;";
                let makeFavouriteSpanDisplay = "display: none;";
                if (value.user_id) {
                    favouriteSpanDisplay = "";
                } else {
                    makeFavouriteSpanDisplay = "";
                }
                _html += '<tr id="' + value.id + '" class="song-list">';
                _html +=
                    '<td class="inter-normal-black-14px title-C61RwLL">' +
                    value.name +
                    "</td>";
                _html +=
                    '<td class="length-C61RwLL inter-normal-black-14px">' +
                    value.length +
                    "</td>";
                _html += '<td class="action-C61RwLL">';
                _html += '<span style="padding: 0 0 0 1px; cursor: pointer;">';
                _html +=
                    '<audio class="audio-player" id="audio-' +
                    value.id +
                    '" src="' +
                    s3Url +
                    value.path +
                    '"></audio>';
                _html +=
                    '<img id="play-' +
                    value.id +
                    '" class="playIcon" src="img/vector-4@2x.svg" onclick="play(' +
                    value.id +
                    ')"/>';
                _html +=
                    '<img id="pause-' +
                    value.id +
                    '" class="pauseIcon" style="display: none" src="img/pause-circle-line.svg" onclick="pause(' +
                    value.id +
                    ')"/>';
                _html += "</span>";
                _html +=
                    '<a href="' +
                    s3Url +
                    value.path +
                    '" download="' +
                    value.name +
                    '" rel="nofollow">';
                _html += '<span style="margin: 0 0 0 37px; cursor: pointer;">';
                _html +=
                    '<img class="downloadIcon" src="img/vector-3@2x.svg"/>';
                _html += "</span>";
                _html += "</a>";
                _html +=
                    '<span style="' +
                    makeFavouriteSpanDisplay +
                    'margin: 0 0 0 37px; cursor: pointer;" class="make-favourite" id="make-favourite-' +
                    value.id +
                    '">';
                _html += '<img class="heartIcon" src="img/vector-84@2x.svg"/>';
                _html += "</span>";
                _html +=
                    '<span style="' +
                    favouriteSpanDisplay +
                    'padding: 0 0 0 37px; cursor: pointer;" class="remove-favourite" id="favoured-' +
                    value.id +
                    '">';
                _html +=
                    '<img class="heartFilledIcon" src="img/heart-solid.svg"/>';
                _html += "</span>";
                _html += "</td>";
                _html += "</tr>";
            });
            $(".song-results").append(_html);
            $(".results-200-C61RwLL").text("Results : " + response.total);
            $("#link-count").text("(" + response.total + ")");

            $("#load-more").data("totalResult", response.total);
            totalCurrentResult = $(".song-list").length;
            if (totalCurrentResult == response.total) {
                $(".load-more-C61RwLL").remove();
            }
        },
    });
});

var currenntAudioTrack = null;
var currentTrack = null;

function play(id) {
    const audio = document.getElementById("audio-" + id);
    currentAudioPlayerId = id;

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

    const mainPlay = document.getElementById("mainPlay");
    const mainPause = document.getElementById("mainPause");

    // const playersToStop = document.getElementsByClassName("audio-player");
    // for (let i = 0; i < playersToStop.length; i++) {
    //     playersToStop[i].pause();
    // }
    // audio.volume = globalAudioVolume;
    // audio.currentTime = 0;
    // // audio.play();
    if (currentTrack !== id) {
        wavesurfer.load(audio.src);
        if (isSafari) {
            wavesurfer.on("waveform-ready", function () {
                wavesurfer.play();
                $("#mainPlay").hide();
                $("#mainPause").show();
            });
        } else {
            wavesurfer.on("ready", function () {
                wavesurfer.play();
                $("#mainPlay").hide();
                $("#mainPause").show();
            });
        }
        currentTrack = id;
    } else {
        wavesurfer.playPause();
        $("#mainPlay").hide();
        $("#mainPause").show();
    }

    // currenntAudioTrack = "audio-" + id;
    // const volumeSlider = document.getElementById("audioController");

    // volumeSlider.addEventListener("input", (e) => {
    //     const value = e.target.value;
    //     audio.volume = value / 100;
    // });
}

function pause(id) {
    const audio = document.getElementById("audio-" + id);
    // audio.pause();

    $("#pause-" + id).hide();
    $("#play-" + id).show();

    wavesurfer.playPause();
    // $("#mainPlay").show();
    // $("#mainPause").hide();
}

function mainPlay(type) {
    if (!currentTrack) {
        return false;
    }
    wavesurfer.playPause();
    // if (type === "play") {
    //     $("#mainPlay").hide();
    //     $("#mainPause").show();
    // }
    // if (type === "pause") {
    //     $("#mainPlay").show();
    //     $("#mainPause").hide();
    // }
}

function mainMute(type) {
    if (!currentTrack) {
        return false;
    }
    wavesurfer.toggleMute();
    // if (type === "on") {
    //     $("#mainMuteOff").show();
    //     $("#mainMuteOn").hide();
    // }
    // if (type === "off") {
    //     $("#mainMuteOff").hide();
    //     $("#mainMuteOn").show();
    // }
}

//mixer controler
function changeAudioVolume(elementID, volumePercentage = 100) {
    // let element = document.getElementById(elementID);
    let volume = volumePercentage / 100;

    // element.volume = volume;
    wavesurfer.setVolume(volume);
    globalAudioVolume = volume;
}

$(document).ready(function () {
    $(document).on("input", "#audio-control-js", function () {
        let volumePercentage = $(this).val();
        changeAudioVolume(currenntAudioTrack, volumePercentage);
    });
});

$(".viewResults").click(function () {
    $("html, body").animate(
        {
            scrollTop: $("#yourResults").offset().top,
        },
        1000
    );
});

var video;

function init() {
    // initialize the player
    // first, get the media element and assign it to the video variable
    video = document.getElementById("mixer");

    // get the current playbackRate from the HTML5 media API
    // range is 0 to very fast, with 1 being normal playback
    speed = video.playbackRate;

    // volume range is 0 to 1
    // set it in the middle so we have room to move it with our buttons
    volume = 0.5;
    video.volume = volume;
}

function playVideo() {
    video.play();
}

function pauseVideo() {
    video.pause();
}

// wait until the web page has finished loading, then run the init function
window.onload = init;
