$(document).ready(function () {
    $(".detail").click(function (e) {
        e.preventDefault();
        let selectedVal = e.target.id;
        // http://127.0.0.1:8000/api/movies/2/shows
        $.getJSON("api/movies/" + selectedVal + "/shows", function (data) {
            $("#shows").empty();
            $.each(data.shows, function (index, value) {
                myDate = value.start.split(" ");
                let jour = myDate[0];
                let heure = myDate[1];
                $("#shows").append(
                    "<tr>" +
                        "<td>" +
                        jour +
                        "</td> " +
                        "<td>" +
                        heure +
                        "</td> " +
                        "<td>" +
                        value.idRoom +
                        "</td>" +
                        "<td>" +
                        value.capacity +
                        "</td>" +
                        "</tr>"
                );
            });
        });
    });
});

function showTable() {
    $("#seances").removeAttr("hidden");
}
