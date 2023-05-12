function section1(){
  var formData = $('#form1').serializeArray(); // get form data as an array of objects
    var inputCount = Object.keys(formData).length; // get total number of form inputs 
  // Serialize the form data into a string that can be sent in the AJAX request
    var formData = $('#form1').serialize();
  if (inputCount < 10) { // check if total number of form inputs is not equal to 13
    alert('Please attempt all the questions in Section 1!');
}
else{
 $.ajax({
  type: "POST",
  url: "api/Test2.php",
  data: formData,
  dataType: "json",
  success: function(response) {  
    $('#section1_yes').val(response.yes); 
    nextpage = 'page1';
    switching(nextpage); 
},
error: function(jqXHR, textStatus, errorThrown) {
    // Handle any errors that occurred during the AJAX call
    console.log("Error: " + textStatus + " - " + errorThrown);
}
});
}
}


function section2(){
  var formData = $('#form2').serializeArray(); // get form data as an array of objects
    var inputCount = Object.keys(formData).length; // get total number of form inputs 
  // Serialize the form data into a string that can be sent in the AJAX request
    var formData = $('#form2').serialize();
  if (inputCount < 10) { // check if total number of form inputs is not equal to 13
    alert('Please attempt all the questions! in Section 2');
}
else{
 $.ajax({
  type: "POST",
  url: "api/Test2.php",
  data: formData,
  dataType: "json",
  success: function(response) {  
    $('#section2_yes').val(response.yes); 
    nextpage = 'page2';
    switching(nextpage); 
},
error: function(jqXHR, textStatus, errorThrown) {
    // Handle any errors that occurred during the AJAX call
    console.log("Error: " + textStatus + " - " + errorThrown);
}
});
}
}


function section3(){
  var formData = $('#form3').serializeArray(); // get form data as an array of objects
    var inputCount = Object.keys(formData).length; // get total number of form inputs 
  // Serialize the form data into a string that can be sent in the AJAX request
    var formData = $('#form3').serialize();
  if (inputCount < 10) { // check if total number of form inputs is not equal to 13
    alert('Please attempt all the questions! in Section 3');
}
else{
 $.ajax({
  type: "POST",
  url: "api/Test2.php",
  data: formData,
  dataType: "json",
  success: function(response) {  
    $('#section3_yes').val(response.yes); 
    nextpage = 'page3';
    switching(nextpage); 
},
error: function(jqXHR, textStatus, errorThrown) {
    // Handle any errors that occurred during the AJAX call
    console.log("Error: " + textStatus + " - " + errorThrown);
}
});
}
}

function section4(){
  var formData = $('#form4').serializeArray(); // get form data as an array of objects
    var inputCount = Object.keys(formData).length; // get total number of form inputs 
  // Serialize the form data into a string that can be sent in the AJAX request
    var formData = $('#form4').serialize();
  if (inputCount < 10) { // check if total number of form inputs is not equal to 14
    alert('Please attempt all the questions! in Section 4');
}
else{
 $.ajax({
  type: "POST",
  url: "api/Test2.php",
  data: formData,
  dataType: "json",
  success: function(response) {  
    $('#section4_yes').val(response.yes); 
    nextpage = 'page4';
    switching(nextpage); 
},
error: function(jqXHR, textStatus, errorThrown) {
    // Handle any errors that occurred during the AJAX call
    console.log("Error: " + textStatus + " - " + errorThrown);
}
});
}
}


function section5(){
  var formData = $('#form5').serializeArray(); // get form data as an array of objects
    var inputCount = Object.keys(formData).length; // get total number of form inputs 
  // Serialize the form data into a string that can be sent in the AJAX request
    var formData = $('#form5').serialize();
  if (inputCount < 10) { // check if total number of form inputs is not equal to 15
    alert('Please attempt all the questions! in Section 5');
}
else{
 $.ajax({
  type: "POST",
  url: "api/Test2.php",
  data: formData,
  dataType: "json",
  success: function(response) {  
    $('#section5_yes').val(response.yes); 
    nextpage = 'page5';
    switching(nextpage); 
},
error: function(jqXHR, textStatus, errorThrown) {
    // Handle any errors that occurred during the AJAX call
    console.log("Error: " + textStatus + " - " + errorThrown);
}
});
}
}


function section6(){
  var formData = $('#form6').serializeArray(); // get form data as an array of objects
    var inputCount = Object.keys(formData).length; // get total number of form inputs 
  // Serialize the form data into a string that can be sent in the AJAX request
    var formData = $('#form6').serialize();
  if (inputCount < 10) { // check if total number of form inputs is not equal to 16
    alert('Please attempt all the questions! in Section 6');
}
else{
 $.ajax({
  type: "POST",
  url: "api/Test2.php",
  data: formData,
  dataType: "json",
  success: function(response) {  
    $('#section6_yes').val(response.yes); 
    nextpage = 'page6';
    switching(nextpage); 
},
error: function(jqXHR, textStatus, errorThrown) {
    // Handle any errors that occurred during the AJAX call
    console.log("Error: " + textStatus + " - " + errorThrown);
}
});
}
}


function section7(){
  var formData = $('#form7').serializeArray(); // get form data as an array of objects
    var inputCount = Object.keys(formData).length; // get total number of form inputs 
  // Serialize the form data into a string that can be sent in the AJAX request
    var formData = $('#form7').serialize();
  if (inputCount < 10) { // check if total number of form inputs is not equal to 17
    alert('Please attempt all the questions! in Section 7');
}
else{
 $.ajax({
  type: "POST",
  url: "api/Test2.php",
  data: formData,
  dataType: "json",
  success: function(response) {  
    $('#section7_yes').val(response.yes); 
    nextpage = 'page7';
    switching(nextpage); 
},
error: function(jqXHR, textStatus, errorThrown) {
    // Handle any errors that occurred during the AJAX call
    console.log("Error: " + textStatus + " - " + errorThrown);
}
});
}
}


function section8(){
  var formData = $('#form8').serializeArray(); // get form data as an array of objects
    var inputCount = Object.keys(formData).length; // get total number of form inputs 
  // Serialize the form data into a string that can be sent in the AJAX request
    var formData = $('#form8').serialize();
  if (inputCount < 10) { // check if total number of form inputs is not equal to 18
    alert('Please attempt all the questions! in Section 8');
}
else{
 $.ajax({
  type: "POST",
  url: "api/Test2.php",
  data: formData,
  dataType: "json",
  success: function(response) {  
    $('#section8_yes').val(response.yes);
    checkingresult2(); 
    
},
error: function(jqXHR, textStatus, errorThrown) {
    // Handle any errors that occurred during the AJAX call
    console.log("Error: " + textStatus + " - " + errorThrown);
}
});
}
}


function checkingresult2(){

 var section1_yes = $('#section1_yes').val();
 var section2_yes = $('#section2_yes').val();
 var section3_yes = $('#section3_yes').val();
 var section4_yes = $('#section4_yes').val();
 var section5_yes = $('#section5_yes').val();
 var section6_yes = $('#section6_yes').val();
 var section7_yes = $('#section7_yes').val();
 var section8_yes = $('#section8_yes').val();

 $.ajax({
  type: "POST",
  url: "api/Test2_Result.php",
  data: {
    section1_yes : section1_yes,
    section2_yes : section2_yes,
    section3_yes : section3_yes,
    section4_yes : section4_yes,
    section5_yes : section5_yes,
    section6_yes : section6_yes,
    section7_yes : section7_yes,
    section8_yes : section8_yes
},
dataType: "json",
success: function(response) {  
  $("#TestPage").css({ 'display': 'none'});
  $("#Test_Result").css({ 'display': 'block'}); 

  $('#userid').html(response.userid);
  $('#name').html(response.name);
  $('#email').html(response.email);
  var finalresult = ' <tr><td>'+response.highest_section+'</td><td>1st Highest</td></tr>';
  finalresult += ' <tr><td>'+response.second_highest_section+'</td><td>2nd Highest</td></tr>';
  finalresult += ' <tr><td>'+response.third_highest_section+'</td><td>3rd Highest</td></tr>';


if (response.highest == 'Linguistic' || response.second_highest == 'Linguistic' || response.third_highest == 'Linguistic' ) {
                    $("#Linguistic").css({ 'display': 'block' });
                }

 if (response.highest == 'Logical-Mathematical' || response.second_highest == 'Logical-Mathematical' || response.third_highest == 'Logical-Mathematical' ) {
                    $("#Logical-Mathematical").css({ 'display': 'block' });
                }

if (response.highest == 'Musical' || response.second_highest == 'Musical' || response.third_highest == 'Musical' ) {
                    $("#Musical").css({ 'display': 'block' });
                }
if (response.highest == 'Bodily-Kinesthetic' || response.second_highest == 'Bodily-Kinesthetic' || response.third_highest == 'Bodily-Kinesthetic' ) {
                    $("#Bodily-Kinesthetic").css({ 'display': 'block' });
                }
 if (response.highest == 'Spatial-Visual' || response.second_highest == 'Spatial-Visual' || response.third_highest == 'Spatial-Visual' ) {
                    $("#Spatial-Visual").css({ 'display': 'block' });
                }

if (response.highest == 'Interpersonal' || response.second_highest == 'Interpersonal' || response.third_highest == 'Interpersonal' ) {
                    $("#Interpersonal").css({ 'display': 'block' });
                }
if (response.highest == 'Intrapersonal' || response.second_highest == 'Intrapersonal' || response.third_highest == 'Intrapersonal' ) {
                    $("#Intrapersonal").css({ 'display': 'block' });
                }
if (response.highest == 'section8' || response.second_highest == 'section8' || response.third_highest == 'section8' ) {
                    $("#section8").css({ 'display': 'block' });
                }



  $('#result_table').html(finalresult);


  
  
},
error: function(jqXHR, textStatus, errorThrown) {
    // Handle any errors that occurred during the AJAX call
    console.log("Error: " + textStatus + " - " + errorThrown);
}
});


}



function switching(value) {
    $("#" + value + "-button").prop("disabled", false);
    if (value == "page0") {
        $("#page0").css("display", "inline");
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
        $("#page8").css("display", "none");
    } else if (value == "page1") {
        $("#page0").css("display", "none");
        $("#page1").css("display", "inline");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
        $("#page8").css("display", "none");
    }
    else if (value == "page2") {
        $("#page0").css("display", "none");
        $("#page1").css("display", "none");
        $("#page2").css("display", "inline");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
        $("#page8").css("display", "none");
    } else if (value == "page3") {
        $("#page0").css("display", "none");
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "inline");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
        $("#page8").css("display", "none");
    } else if (value == "page4") {
        $("#page0").css("display", "none");
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "inline");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
        $("#page8").css("display", "none");
    } else if (value == "page5") {
        $("#page0").css("display", "none");
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "inline");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
        $("#page8").css("display", "none");
    } else if (value == "page6") {
        $("#page0").css("display", "none");
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "inline");
        $("#page7").css("display", "none");
        $("#page8").css("display", "none");
    } else if (value == "page7") {
        $("#page0").css("display", "none");
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "inline");
        $("#page8").css("display", "none");
    }  else if (value == "page8") {
        $("#page0").css("display", "none");
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
        $("#page8").css("display", "inline");
    } 
}




$(document).ready(function() {

checkingresult(); 


});



function checkingresult(){
 
    var check = 1;

 $.ajax({
        url: "api/checkingresult_test2.php",
        method: "POST",
        data: {
            check : check
        },
        dataType: "JSON", 
        success: function (response) 
        {  
        var result = response.result;
        if(result == 'success'){
 

                $('#userid').html(response.studentid);
                $('#name').html(response.Name);
                $('#email').html(response.dbemail);
                $('#uniquecode').html(response.uniquecode);
  
   var finalresult = ' <tr><td>1st Highest</td><td>'+response.highest+'</td></tr>';
  finalresult += ' <tr><td>2nd Highest</td><td>'+response.second_highest+'</td></tr>';
  finalresult += ' <tr><td>3rd Highest</td><td>'+response.third_highest+'</td></tr>';



if (response.highest == 'Linguistic' || response.second_highest == 'Linguistic' || response.third_highest == 'Linguistic' ) {
                    $("#Linguistic").css({ 'display': 'block' });
                }

 if (response.highest == 'Logical-Mathematical' || response.second_highest == 'Logical-Mathematical' || response.third_highest == 'Logical-Mathematical' ) {
                    $("#Logical-Mathematical").css({ 'display': 'block' });
                }

if (response.highest == 'Musical' || response.second_highest == 'Musical' || response.third_highest == 'Musical' ) {
                    $("#Musical").css({ 'display': 'block' });
                }
if (response.highest == 'Bodily-Kinesthetic' || response.second_highest == 'Bodily-Kinesthetic' || response.third_highest == 'Bodily-Kinesthetic' ) {
                    $("#Bodily-Kinesthetic").css({ 'display': 'block' });
                }
 if (response.highest == 'Spatial-Visual' || response.second_highest == 'Spatial-Visual' || response.third_highest == 'Spatial-Visual' ) {
                    $("#Spatial-Visual").css({ 'display': 'block' });
                }

if (response.highest == 'Interpersonal' || response.second_highest == 'Interpersonal' || response.third_highest == 'Interpersonal' ) {
                    $("#Interpersonal").css({ 'display': 'block' });
                }
if (response.highest == 'Intrapersonal' || response.second_highest == 'Intrapersonal' || response.third_highest == 'Intrapersonal' ) {
                    $("#Intrapersonal").css({ 'display': 'block' });
                }
if (response.highest == 'section8' || response.second_highest == 'section8' || response.third_highest == 'section8' ) {
                    $("#section8").css({ 'display': 'block' });
                }


  $('#result_table').html(finalresult);

        }

           
  
 return response;
}
});

}