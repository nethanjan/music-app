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

    // Ajax Reuqest
    $.ajax({
        url: main_site + "/remove-favourite",
        type: "get",
        dataType: "json",
        data: {
            songId: songId,
        },
        success: function (response) {
            $("#" + elementId)
                .closest("tr")
                .css("display", "none");
        },
    });
});

$("#load-more").on("click", function () {
    let totalCurrentResult = $(".song-list").length;
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
            $.each(response, function (index, value) {
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
                    '<span style="padding: 0 0 0 37px; cursor: pointer;" class="remove-favourite" id="favoured-' +
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
