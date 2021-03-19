$(".load-more").on("click", function () {
    let totalCurrentResult = $(".song-list").length;
    // Ajax Reuqest
    $.ajax({
        url: main_site + "/search-load-more",
        type: "get",
        dataType: "json",
        data: {
            skip: totalCurrentResult,
        },
        beforeSend: function () {
            $(".load-more").html("Loading...");
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
                $(".load-more").attr("data-totalResult")
            );

            if (totalCurrentResult == totalResult) {
                $(".load-more").remove();
            } else {
                $(".load-more").html("Load More");
            }
        },
    });
});

$(".make-favourite").on("click", function () {
    const songId = this.id;
    console.log(songId);
    // Ajax Reuqest
    // $.ajax({
    //     url: main_site + "/make-favourite",
    //     type: "get",
    //     dataType: "json",
    //     data: {
    //         skip: songId,
    //     },
    //     success: function (response) {
    //         let _html = "";
    //         $.each(response, function (index, value) {
    //             _html += '<tr id="' + value.id + '" class="song-list">';
    //             _html +=
    //                 '<td class="inter-normal-black-14px title-C61RwLL">' +
    //                 value.name +
    //                 "</td>";
    //             _html +=
    //                 '<td class="length-C61RwLL inter-normal-black-14px">' +
    //                 value.length +
    //                 "</td>";
    //             _html += '<td class="action-C61RwLL">';
    //             _html += '<span style="padding: 0 0 0 1px;">';
    //             _html += '<img class="playIcon" src="img/vector-4@2x.svg"/>';
    //             _html += "</span>";
    //             _html += '<span style="padding: 0 0 0 32px;">';
    //             _html +=
    //                 '<img class="downloadIcon" src="img/vector-3@2x.svg"/>';
    //             _html += "</span>";
    //             _html += '<span style="padding: 0 0 0 32px;">';
    //             _html += '<img class="heartIcon" src="img/vector-84@2x.svg"/>';
    //             _html += "</span>";
    //             _html += "</td>";
    //             _html += "</tr>";
    //         });
    //         $(".song-results").append(_html);
    //         // // Change Load More When No Further result
    //         totalCurrentResult = $(".song-list").length;
    //         const totalResult = parseInt(
    //             $(".load-more").attr("data-totalResult")
    //         );

    //         if (totalCurrentResult == totalResult) {
    //             $(".load-more").remove();
    //         } else {
    //             $(".load-more").html("Load More");
    //         }
    //     },
    // });
});
