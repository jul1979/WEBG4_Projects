$(document).ready(function () {
    $("button").click(function (e) {
        e.preventDefault();
        let selectedVal = e.target.id;
        console.log(selectedVal);
    });

    $("input[type=checkbox]").change(function () {
        if ($("input.checkbox_check").is(":checked")) {
            console.log("checked");
            console.log($(this).attr("id"));
        } else {
            console.log("unchecking ...");
            console.log($(this).attr("id"));
        }
    });
});
