$(document).ready(function () {

    $("#pizzas").change(function() {

        let selectedVal = $("#pizzas option:selected").val();
        let ingredients = [];
        //http://127.0.0.1:8000/api/pizza/hawai/ingredients

            $.getJSON("api/pizza/"+ selectedVal+ "/ingredients",

            function (data) {
                $("input:checkbox").prop('checked',false);
                $.each(data.ingredients, function (index,value) {
                    $('#'+value).prop('checked', true);
                });
            }

        );
        $.each(ingredients, function( index, value ) {
            console.log( index + ": " + value );
        });

    });

});

