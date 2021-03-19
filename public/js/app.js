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
                _html += '<span style="padding: 0 0 0 1px;">';
                _html += '<img class="playIcon" src="img/vector-4@2x.svg"/>';
                _html += "</span>";
                _html += '<span style="padding: 0 0 0 32px;">';
                _html +=
                    '<img class="downloadIcon" src="img/vector-3@2x.svg"/>';
                _html += "</span>";
                _html +=
                    '<span style="padding: 0 0 0 32px;" class="make-favourite" id="' +
                    value.id +
                    '">';
                _html += '<img class="heartIcon" src="img/vector-84@2x.svg"/>';
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
    const songId = this.id;
    console.log(songId);

    // Ajax Reuqest
    $.ajax({
        url: main_site + "/make-favourite",
        type: "get",
        dataType: "json",
        data: {
            songId: songId,
        },
        success: function (response) {},
    });
});

$(document).on("click", ".select-genre", function () {
    //do something
    const genreId = this.id;
    filters.genre.push(genreId);
    console.log(filters);
    // // Ajax Reuqest
    $.ajax({
        url: main_site + "/filter",
        type: "get",
        dataType: "json",
        data: {
            filter: filters,
        },
        success: function (response) {},
    });
});

$(document).on("click", ".select-instrument", function () {
    //do something
    const instrumentId = this.id;
    filters.instrument.push(instrumentId);
    console.log(filters);
    // // Ajax Reuqest
    $.ajax({
        url: main_site + "/filter",
        type: "get",
        dataType: "json",
        data: {
            filter: filters,
        },
        success: function (response) {
            console.log(response);
            let _html = "";
            $(".song-results").html("");
            $.each(response.data, function (index, value) {
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
                _html += '<span style="padding: 0 0 0 1px;">';
                _html += '<img class="playIcon" src="img/vector-4@2x.svg"/>';
                _html += "</span>";
                _html += '<span style="padding: 0 0 0 32px;">';
                _html +=
                    '<img class="downloadIcon" src="img/vector-3@2x.svg"/>';
                _html += "</span>";
                _html +=
                    '<span style="padding: 0 0 0 32px;" class="make-favourite" id="' +
                    value.id +
                    '">';
                _html += '<img class="heartIcon" src="img/vector-84@2x.svg"/>';
                _html += "</span>";
                _html += "</td>";
                _html += "</tr>";
            });
            $(".song-results").append(_html);
            $(".results-200-C61RwLL").text("Results : " + response.total);

            $("#load-more").data("totalResult", response.total);
            totalCurrentResult = $(".song-list").length;
            console.log(totalCurrentResult);
            console.log(response.total);
            if (totalCurrentResult == response.total) {
                $(".load-more-C61RwLL").remove();
            }
        },
    });
});

$(document).on("click", ".select-energy-level", function () {
    //do something
    const energyLevelId = this.id;
    filters.energy.push(energyLevelId);

    // // Ajax Reuqest
    $.ajax({
        url: main_site + "/filter",
        type: "get",
        dataType: "json",
        data: {
            filter: filters,
        },
        success: function (response) {
            console.log(response);
            let _html = "";
            $(".song-results").html("");
            $.each(response.data, function (index, value) {
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
                _html += '<span style="padding: 0 0 0 1px;">';
                _html += '<img class="playIcon" src="img/vector-4@2x.svg"/>';
                _html += "</span>";
                _html += '<span style="padding: 0 0 0 32px;">';
                _html +=
                    '<img class="downloadIcon" src="img/vector-3@2x.svg"/>';
                _html += "</span>";
                _html +=
                    '<span style="padding: 0 0 0 32px;" class="make-favourite" id="' +
                    value.id +
                    '">';
                _html += '<img class="heartIcon" src="img/vector-84@2x.svg"/>';
                _html += "</span>";
                _html += "</td>";
                _html += "</tr>";
            });
            $(".song-results").append(_html);
            $(".results-200-C61RwLL").text("Results : " + response.total);

            $("#load-more").data("totalResult", response.total);
            totalCurrentResult = $(".song-list").length;
            console.log(totalCurrentResult);
            console.log(response.total);
            if (totalCurrentResult == response.total) {
                $(".load-more-C61RwLL").remove();
            }
        },
    });
});

$(document).on("click", ".select-mood", function () {
    //do something
    const moodId = this.id;
    filters.mood.push(moodId);

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
                _html += '<span style="padding: 0 0 0 1px;">';
                _html += '<img class="playIcon" src="img/vector-4@2x.svg"/>';
                _html += "</span>";
                _html += '<span style="padding: 0 0 0 32px;">';
                _html +=
                    '<img class="downloadIcon" src="img/vector-3@2x.svg"/>';
                _html += "</span>";
                _html +=
                    '<span style="padding: 0 0 0 32px;" class="make-favourite" id="' +
                    value.id +
                    '">';
                _html += '<img class="heartIcon" src="img/vector-84@2x.svg"/>';
                _html += "</span>";
                _html += "</td>";
                _html += "</tr>";
            });
            $(".song-results").append(_html);
            $(".results-200-C61RwLL").text("Results : " + response.total);

            $("#load-more").data("totalResult", response.total);
            totalCurrentResult = $(".song-list").length;
            console.log(totalCurrentResult);
            console.log(response.total);
            if (totalCurrentResult == response.total) {
                $(".load-more-C61RwLL").remove();
            }
        },
    });
});
