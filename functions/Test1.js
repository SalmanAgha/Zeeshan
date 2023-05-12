    // $(document).ready(function() {
    //         $('#mcq-form').submit(function(e) {
    //             e.preventDefault(); // prevent default form submit
    //             var formData = $(this).serialize(); // get form data
    //             alert('ss');
    //             $.ajax({
    //                 url: 'api/Test1.php',
    //                 type: 'POST',
    //                 data: formData,
    //                 success: function(response) {
    //                     $('#result').html(response); // show response in result div
    //                 },
    //                 error: function(xhr, status, error) {
    //                     alert(error); // show error if any
    //                 }
    //             });
    //         });
    //     });
function checkingresult() {
    var check = 1;

    $.ajax({
        url: "api/checkingresult_test1.php",
        method: "POST",
        data: {
            check: check
        },
        dataType: "JSON",
        success: function(response) {
            var result = response.result;
            if (result == 'success') {
                $('#userid').html(response.studentid);
                $('#name').html(response.Name);
                $('#email').html(response.dbemail);
                $('#uniquecode').html(response.uniquecode);
                $('#V').html(response.SumV);
                $('#R').html(response.SumR);
                $('#A').html(response.SumA);
                $('#K').html(response.SumK);
                $('#Highest').html(response.highest);
                $('#uniquecode').html(response.uniquecode);
             
             

                if (response.Block1 == 'Yes') {
                    $("#Block1").css({ 'display': 'block' });
                }

                if (response.Block2 == 'Yes') {
                    $("#Block2").css({ 'display': 'block' });
                }

                if (response.Block3 == 'Yes') {
                    $("#Block3").css({ 'display': 'block' });
                }
                if (response.Block4 == 'Yes') {
                    $("#Block4").css({ 'display': 'block' });
                }
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
}


$(document).ready(function() {

checkingresult();


    $('#mcq-form').submit(function(e) {
        e.preventDefault(); // prevent default form submit
        var formData = $(this).serializeArray(); // get form data as an array of objects
        var inputCount = Object.keys(formData).length; // get total number of form inputs 
 
        if (inputCount < 13) { // check if total number of form inputs is not equal to 13
            alert('Please attempt all the questions!');
         
        }
        else{

               $.ajax({
            url: 'api/Test1.php',
            type: 'POST',
            data: formData,
            dataType: "JSON",

            success: function(response) {  
                  $("#TestPage").css({ 'display': 'none'});
                  $("#Test_Result").css({ 'display': 'block'}); 




                $('#userid').html(response.userid);
                $('#name').html(response.name);
                $('#email').html(response.email);
                
                $('#V').html(response.v);
                $('#R').html(response.r);
                $('#A').html(response.a);
                $('#K').html(response.k);
                $('#Highest').html(response.Highest);


       
              if(response.Block1 == 'Yes'){
                  $("#Block1").css({ 'display': 'block'}); 
              } 

              if(response.Block2 == 'Yes'){
                  $("#Block2").css({ 'display': 'block'}); 
              } 

              if(response.Block3 == 'Yes'){
                  $("#Block3").css({ 'display': 'block'}); 
              }
              if(response.Block4 == 'Yes'){
                  $("#Block4").css({ 'display': 'block'}); 
              } 
 
 
            },
            error: function(xhr, status, error) {
                alert(error); // show error if any
            }
        });
        }
     
    });
});

