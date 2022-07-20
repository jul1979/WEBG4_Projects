$(document).ready(function () {

    $("#pizzas").change(function() {
        let selectedVal = $("#pizzas option:selected").val();
        //http://127.0.0.1:8000/api/pizza/hawai/ingredients
  if(selectedVal.length!==0) {
    $.getJSON("api/pizza/" + selectedVal + "/ingredients",

        function (data) {
            $("input:checkbox").prop('checked', false);
            $.each(data.ingredients, function (index, value) {
                $('#' + value).prop('checked', true);
            });
        }
    );
}
    });
    $('#myform :checkbox').change(function() {
        upDatePizzaSelection();
    });
});

function upDatePizzaSelection() {
    //all Selected checkBoxes
    /*const values = Array
        .from(document.querySelectorAll('input[type="checkbox"]'))
        .filter((checkbox) => checkbox.checked)
        .map((checkbox) => checkbox.value);*/
    $("div.id_100 select").val("").change();
}
