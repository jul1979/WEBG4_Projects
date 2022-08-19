

//http://127.0.0.1:8000/api/pae/students/1
$(document).ready(function () {
    $(".detail").click(function (e) {
        e.preventDefault();
        let selectedVal = e.target.id;
        $("tbody").empty();
        $("#shows").removeAttr('hidden');
        //NB:faire attention au premier / dans l'url.
        $.getJSON("/api/pae/students/" + selectedVal , function (data) {


            $.each(data, function (index, value) {
                $.each(value, function (indexInArray, valueOfElement) {


                    $('tbody').append(
                        '<tr>'+
                            '<td  >' +' <button  class="btn btn-link cours"  id='+valueOfElement.id+'-'+selectedVal+'>'+valueOfElement.id  +'</button>' +'</td>'
                        +
                            '<td>'+valueOfElement.title +'</td>'
                        +
                            '<td>'+valueOfElement.credits +'</td>'
                    +
                        '</tr>'

                    );


                });
            });
        });
    });
    $(".btn").click(function (e) {
        e.preventDefault();
       // let selectedVal = e.target.id;
        console.log("hello world");
    });


  /* $(".btn").click(function (e) {
        e.preventDefault();
        console.log(e.target.id);

       $.ajax({
           url: "/api/pae/students/"+studentId +'/'+courseId,
          // "/api/pae/students/" + selectedVal ,
           type: 'DELETE',
           success: function(result) {
               // Do something with the result
           }
       });
    });*/

});


