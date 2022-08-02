$(document).ready(function () {
    $('#btn').click(function (e) {
        e.preventDefault();
        let user = $('#userName').val();
        let message = $('#message').val();
        let password = $('#password').val();
        let id = $('#threadId').val();
        $.ajax({
            url: "http://127.0.0.1:8000/api/thread/" + id + "/message",
            type: "POST",
            dataType: 'json',
            contentType: 'application/json;charset=UTF-8',
            data: JSON.stringify({'author': user, 'password': password, 'text': message}),
            success: function (response) {
                console.log(response);
                window.location.reload();
            }
        });
    });
});




