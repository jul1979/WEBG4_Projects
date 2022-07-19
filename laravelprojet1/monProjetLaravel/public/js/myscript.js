$(document).ready(function () {
    $.getJSON("https://git.esi-bru.be/api/v4/projects/",
        function (data) {
            $.each(data, function (index,value) {
                let id=data[index].id;
                $("#projects").append('<a href='+'detail/'+ id +'>'+ '<p>'+data[index].name+'</p></a>');
                //$("#projects").append('<a href='+'detail/'+ id + 'onclick'+'="+myFunction'+'('+ id+')'+"+'>'+ '<p>'+data[index].name+'</p></a>');
                //console.log(data[index].name);
            });
        }
    );

$('p').click( function(e) {e.preventDefault();
    $.getJSON("url",
        function (data) {
            $.each(data, function () {


            });


} );
})});

function myFunction(id){
    console.log("hello");
}


