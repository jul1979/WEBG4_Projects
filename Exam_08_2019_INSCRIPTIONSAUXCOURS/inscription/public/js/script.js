$(document).ready(function () {
    $(".cours").click(function (e) {
        e.preventDefault();
        let selectedVal = e.target.id;
        $("#shows").empty();
        $("#info").removeAttr("hidden");
        $.getJSON(
            "/api/pae/cours/" + selectedVal + "/inscrits",
            function (data) {
                $.each(data, function (index, value) {
                    $.each(value, function (indexInArray, valueOfElement) {
                        $("#shows").append(
                            "<tr>" +
                                "<td>" +
                                valueOfElement.id +
                                "</td>" +
                                "<td>" +
                                valueOfElement.name +
                                "</td>" +
                                "</tr>"
                        );

                        // console.log(valueOfElement.id);
                        //console.log(valueOfElement.);
                    });
                });
            }
        );
    });

    $("#addStudent").click(function (e) {
        e.preventDefault();
        //let id = $("#aioConceptName").find(":selected").text();
        let id = $("#aioConceptName option:selected").val();
        //let matricule = $("#inputGroupSelect").find(":selected").text();
        let matricule = $("#inputGroupSelect option:selected").val();

        ///pae/cours/{id}/student/{matricule}
        $(".course_list option:selected").val();
        console.log(id);
        console.log(matricule);
        $.ajax({
            url:
                "http://127.0.0.1:8000/api/pae/cours/" +
                id +
                "/student/" +
                matricule,
            type: "POST",
            dataType: "json",
            contentType: "application/json;charset=UTF-8",
            data: JSON.stringify({
                course_id: id,
                student_id: matricule,
            }),
            success: function (response) {
                window.location.assign("http://127.0.0.1:8000/inscrits/" + id);
                //console.log(response);
                // window.location.reload();
            },
        });
    });
});
