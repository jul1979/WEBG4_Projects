$(document).ready(function () {
    $(".detail").click(function(e) {
        e.preventDefault();
        let selectedVal = e.target.id;
        // http://127.0.0.1:8000/api/repository/{id}
        $.getJSON("api/repository/" + selectedVal ,
            function (data) {
                $( "#info" ).empty();
                $("#info").removeAttr('hidden');
                $("#info").append('<div id="repoName" class="text-primary">'+"Nom du dépôt"+'</div>');
                $("#info").append('<div id="userName" class="text-primary">'+"Nom de l'utilisateur"+'</div>');
                $("#info").append('<div id="commits" class="text-primary">'+"Liste des commits"+'</div>');

                $.each(data.repository_name, function (indexInArray, valueOfElement) {
                    $("#repoName").append('<br>'+'<p class="text-danger">'+ valueOfElement +'</p>');
                });
                $.each(data.user_name, function (indexInArray, valueOfElement) {
                    $("#userName").append('<br>'+'<p class="text-danger">'+ valueOfElement +'</p>');
                });
                $.each(data.commits, function (indexInArray, valueOfElement) {
                    $("#commits").append('<br>'+'<p class="text-danger">'+ valueOfElement.date +'</p>');
                    $("#commits").append('<p class="text-danger">'+ valueOfElement.message +'</p>');
                });
            }
        );


    });
});



