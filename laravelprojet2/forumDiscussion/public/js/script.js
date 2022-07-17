function displayChannels(id) {
    $(".channel").addClass('alert alert-warning');

    $('#chan' + id).toggleClass('alert alert-warning');

    $.getJSON("api/threads/" + id + "/messages",
        function (data, status) {
            $('#list').empty();
            $.each(data, function (index,value) {
                $("#list").append('<p>'+data[index].text+'</p>');
            });
    }
    );
    $('#message').removeAttr('hidden');
    $('#btn').removeAttr('hidden');
    $("#channel_id").val(id);
}
$(document).ready(function () {
    $(document).on('click','#btn', function (e) {
    e.preventDefault();
    let id=$('#channel_id').val();
    let message=$('#message').val();

        let data={
           'login':$('#login').val(),
            'message':$('#message').val(),
            'channel_id':$('#channel_id').val()
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "post",
            url: "api/threads/"+id+"/messages",
            data: data,
            dataType: "json",
            success: function (response) {

                if(response.status===200){
                    $("#list").append('<p>'+message+'</p>');
                }
               /* if(response.status===400){
                    $("#saveform_errList").html("");
                    $("#saveform_errList").addClass('alert alert-danger');
                    //$("#saveform_errList").attr({html:"",addClass:'alert alert-danger'});
                    $.each(response.errors, function (key, err_values) {
                        $("#saveform_errList").append('<li>'+err_values +'</li>')
                    });
                }else{
                    $("#saveform_errList").html("");
                    $("#saveform_errList").addClass('alert alert-primary');
                    $("#saveform_errList").html("Message added successfully");
                    //$("#saveform_errList").attr({html:"", addClass:'alert alert-primary',html:"Message added successfully"});

                }*/
                //console.log(response);
            }
        });
    });


});
