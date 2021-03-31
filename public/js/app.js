$("#load-more").on("click", function () {
    let totalCurrentResult = $(".song-list").length;
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
                    'margin: 0 0 0 37px; cursor: pointer;"  class="make-favourite" id="make-favourite-' +
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
            // // Change Load More When No Further result
            totalCurrentResult = $(".song-list").length;
            const totalResult = parseInt(
                $("#load-more").attr("data-totalResult")
            );

            if (totalCurrentResult == totalResult) {
                $(".load-more-C61RwLL").remove();
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
    //do something
    const genreId = this.id;
    if (filters.genre.includes(genreId)) {
        const arr = filters.genre;
        filters.genre = arr.filter(function (item) {
            return item !== genreId;
        });
        $(this).addClass("filter-options-table-td");
        $(this).removeClass("filter-options-table-td-selected");
        $(this).children("div").removeClass("td-background");
    } else {
        filters.genre.push(genreId);
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
                    ' padding: 0 0 0 37px; cursor: pointer;" class="remove-favourite" id="favoured-' +
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

            $("#load-more").data("totalResult", response.total);
            totalCurrentResult = $(".song-list").length;
            if (totalCurrentResult == response.total) {
                $(".load-more-C61RwLL").remove();
            }
        },
    });
});

$(document).on("click", ".select-instrument", function () {
    //do something
    const instrumentId = this.id;

    if (filters.instrument.includes(instrumentId)) {
        const arr = filters.instrument;
        filters.instrument = arr.filter(function (item) {
            return item !== instrumentId;
        });
        $(this).addClass("filter-options-table-td");
        $(this).removeClass("filter-options-table-td-selected");
        $(this).children("div").removeClass("td-background");
    } else {
        filters.instrument.push(instrumentId);
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

            $("#load-more").data("totalResult", response.total);
            totalCurrentResult = $(".song-list").length;
            if (totalCurrentResult == response.total) {
                $(".load-more-C61RwLL").remove();
            }
        },
    });
});

$(document).on("click", ".select-energy-level", function () {
    //do something
    const energyLevelId = this.id;

    if (filters.energy.includes(energyLevelId)) {
        const arr = filters.energy;
        filters.energy = arr.filter(function (item) {
            return item !== energyLevelId;
        });
        $(this).addClass("filter-options-table-td");
        $(this).removeClass("filter-options-table-td-selected");
        $(this).children("div").removeClass("td-background");
    } else {
        filters.energy.push(energyLevelId);
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

            $("#load-more").data("totalResult", response.total);
            totalCurrentResult = $(".song-list").length;
            if (totalCurrentResult == response.total) {
                $(".load-more-C61RwLL").remove();
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

            $("#load-more").data("totalResult", response.total);
            totalCurrentResult = $(".song-list").length;
            if (totalCurrentResult == response.total) {
                $(".load-more-C61RwLL").remove();
            }
        },
    });
});

var currenntAudioTrack = null;

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
    audio.volume = globalAudioVolume;
    audio.currentTime = 0;
    audio.play();
    currenntAudioTrack = "audio-" + id;
    const volumeSlider = document.getElementById("audioController");

    volumeSlider.addEventListener("input", (e) => {
        const value = e.target.value;
        audio.volume = value / 100;
    });
}

function pause(id) {
    const audio = document.getElementById("audio-" + id);
    audio.pause();

    $("#pause-" + id).hide();
    $("#play-" + id).show();
}

//mixer controler
function changeAudioVolume(elementID, volumePercentage = 100) {
    let element = document.getElementById(elementID);
    let volume = volumePercentage / 100;

    element.volume = volume;
    globalAudioVolume = volume;
}

$(document).ready(function () {
    $(document).on("input", "#audioController", function () {
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
