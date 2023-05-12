

function tblTest2(){
 
   $("#datatable").DataTable({
        "ajax": "api/TblTest2.php",
        "columns": [
        
           { "data": "studentid"} ,{ "data": "name"} ,{ "data": "email"} ,{ "data": "section1"} ,{ "data": "section2"} ,{ "data": "section3"} ,{ "data": "section4"} ,{ "data": "section5"} ,{ "data": "section6"} ,{ "data": "section7"} ,{ "data": "section8"} ,{ "data": "highest"} ,{ "data": "second_highest"} ,{ "data": "third_highest"} 
          
        ],
      });

}

//getting id from url
var getUrlParameter = function getUrlParameter(sParam) {
  var sPageURL = window.location.search.substring(1),
  sURLVariables = sPageURL.split('&'),
  sParameterName,
  i;
  for (i = 0; i < sURLVariables.length; i++) {
    sParameterName = sURLVariables[i].split('=');
    if (sParameterName[0] === sParam) {
      return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
    }
  }
};


function filtering(){
 var code= getUrlParameter('code');
 $('input[type="search"]').val(code).trigger('input');
 
}

$(document).ready(function()
    {

 tblTest2(); 
 filtering();
 

$(document).on("click", ".edit-modal", function(){

       
         $("#id2").val($(this).attr("id"));$("#studentid1").val($(this).data("studentid"));$("#name1").val($(this).data("name"));$("#email1").val($(this).data("email"));$("#section11").val($(this).data("section1"));$("#section21").val($(this).data("section2"));$("#section31").val($(this).data("section3"));$("#section41").val($(this).data("section4"));$("#section51").val($(this).data("section5"));$("#section61").val($(this).data("section6"));$("#section71").val($(this).data("section7"));$("#section81").val($(this).data("section8"));$("#highest1").val($(this).data("highest"));$("#second_highest1").val($(this).data("second_highest"));$("#third_highest1").val($(this).data("third_highest"));
     
      });



 });


function AddTest2(){
 
var studentid = $("#studentid").val(); 

 var name = $("#name").val(); 

 var email = $("#email").val(); 

 var section1 = $("#section1").val(); 

 var section2 = $("#section2").val(); 

 var section3 = $("#section3").val(); 

 var section4 = $("#section4").val(); 

 var section5 = $("#section5").val(); 

 var section6 = $("#section6").val(); 

 var section7 = $("#section7").val(); 

 var section8 = $("#section8").val(); 

 var highest = $("#highest").val(); 

 var second_highest = $("#second_highest").val(); 

 var third_highest = $("#third_highest").val(); 

 
    
  if(studentid == "" ){

     $("#1v").css("display", "block");
      $("#1v").text("Invalid studentid."); 
         $("#studentid").css("border-color", "red");
         $("#studentid").focus();
        

    } else if(name == "" ){

     $("#2v").css("display", "block");
      $("#2v").text("Invalid name."); 
         $("#name").css("border-color", "red");
         $("#name").focus();
        

    } else if(email == "" ){

     $("#3v").css("display", "block");
      $("#3v").text("Invalid email."); 
         $("#email").css("border-color", "red");
         $("#email").focus();
        

    } else if(section1 == "" ){

     $("#4v").css("display", "block");
      $("#4v").text("Invalid section1."); 
         $("#section1").css("border-color", "red");
         $("#section1").focus();
        

    } else if(section2 == "" ){

     $("#5v").css("display", "block");
      $("#5v").text("Invalid section2."); 
         $("#section2").css("border-color", "red");
         $("#section2").focus();
        

    } else if(section3 == "" ){

     $("#6v").css("display", "block");
      $("#6v").text("Invalid section3."); 
         $("#section3").css("border-color", "red");
         $("#section3").focus();
        

    } else if(section4 == "" ){

     $("#7v").css("display", "block");
      $("#7v").text("Invalid section4."); 
         $("#section4").css("border-color", "red");
         $("#section4").focus();
        

    } else if(section5 == "" ){

     $("#8v").css("display", "block");
      $("#8v").text("Invalid section5."); 
         $("#section5").css("border-color", "red");
         $("#section5").focus();
        

    } else if(section6 == "" ){

     $("#9v").css("display", "block");
      $("#9v").text("Invalid section6."); 
         $("#section6").css("border-color", "red");
         $("#section6").focus();
        

    } else if(section7 == "" ){

     $("#10v").css("display", "block");
      $("#10v").text("Invalid section7."); 
         $("#section7").css("border-color", "red");
         $("#section7").focus();
        

    } else if(section8 == "" ){

     $("#11v").css("display", "block");
      $("#11v").text("Invalid section8."); 
         $("#section8").css("border-color", "red");
         $("#section8").focus();
        

    } else if(highest == "" ){

     $("#12v").css("display", "block");
      $("#12v").text("Invalid highest."); 
         $("#highest").css("border-color", "red");
         $("#highest").focus();
        

    } else if(second_highest == "" ){

     $("#13v").css("display", "block");
      $("#13v").text("Invalid second_highest."); 
         $("#second_highest").css("border-color", "red");
         $("#second_highest").focus();
        

    } else if(third_highest == "" ){

     $("#14v").css("display", "block");
      $("#14v").text("Invalid third_highest."); 
         $("#third_highest").css("border-color", "red");
         $("#third_highest").focus();
        

    }
    else 
    {   

 
         Swal.fire({
  title: "Are you sure?",
  text: "You want to add New Test2!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
    $.ajax( {
            url: "api/AddTest2.php",
            method: "POST",
            data: {
 
                studentid:studentid,name:name,email:email,section1:section1,section2:section2,section3:section3,section4:section4,section5:section5,section6:section6,section7:section7,section8:section8,highest:highest,second_highest:second_highest,third_highest:third_highest
               
              
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result;
                if ( result == "Inserted" )
                {
                       Swal.fire({
            title: "Test2 Added Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 


 $("#btncancel").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblTest2();
                } 
                else 
                { 
                    Swal.fire({
            title: "Opps! Some Error Occured!",
            type: "error",
            text: "Please login first",
             timer: 4000,
            showConfirmButton: true,
          }).then(function () {
            window.location.href = "index.php";
          });
                }
                return data;
            }
        });

  } })
        
    }
}




function UpdateTest2() {

  var id = $("#id2").val();

var studentid1 = $("#studentid1").val(); 

 var name1 = $("#name1").val(); 

 var email1 = $("#email1").val(); 

 var section11 = $("#section11").val(); 

 var section21 = $("#section21").val(); 

 var section31 = $("#section31").val(); 

 var section41 = $("#section41").val(); 

 var section51 = $("#section51").val(); 

 var section61 = $("#section61").val(); 

 var section71 = $("#section71").val(); 

 var section81 = $("#section81").val(); 

 var highest1 = $("#highest1").val(); 

 var second_highest1 = $("#second_highest1").val(); 

 var third_highest1 = $("#third_highest1").val(); 

 
    
  if(studentid1 == "" ){

     $("#1v1").css("display", "block");
      $("#1v1").text("Invalid studentid."); 
         $("#studentid1").css("border-color", "red");
         $("#studentid1").focus();
        

    } else if(name1 == "" ){

     $("#2v1").css("display", "block");
      $("#2v1").text("Invalid name."); 
         $("#name1").css("border-color", "red");
         $("#name1").focus();
        

    } else if(email1 == "" ){

     $("#3v1").css("display", "block");
      $("#3v1").text("Invalid email."); 
         $("#email1").css("border-color", "red");
         $("#email1").focus();
        

    } else if(section11 == "" ){

     $("#4v1").css("display", "block");
      $("#4v1").text("Invalid section1."); 
         $("#section11").css("border-color", "red");
         $("#section11").focus();
        

    } else if(section21 == "" ){

     $("#5v1").css("display", "block");
      $("#5v1").text("Invalid section2."); 
         $("#section21").css("border-color", "red");
         $("#section21").focus();
        

    } else if(section31 == "" ){

     $("#6v1").css("display", "block");
      $("#6v1").text("Invalid section3."); 
         $("#section31").css("border-color", "red");
         $("#section31").focus();
        

    } else if(section41 == "" ){

     $("#7v1").css("display", "block");
      $("#7v1").text("Invalid section4."); 
         $("#section41").css("border-color", "red");
         $("#section41").focus();
        

    } else if(section51 == "" ){

     $("#8v1").css("display", "block");
      $("#8v1").text("Invalid section5."); 
         $("#section51").css("border-color", "red");
         $("#section51").focus();
        

    } else if(section61 == "" ){

     $("#9v1").css("display", "block");
      $("#9v1").text("Invalid section6."); 
         $("#section61").css("border-color", "red");
         $("#section61").focus();
        

    } else if(section71 == "" ){

     $("#10v1").css("display", "block");
      $("#10v1").text("Invalid section7."); 
         $("#section71").css("border-color", "red");
         $("#section71").focus();
        

    } else if(section81 == "" ){

     $("#11v1").css("display", "block");
      $("#11v1").text("Invalid section8."); 
         $("#section81").css("border-color", "red");
         $("#section81").focus();
        

    } else if(highest1 == "" ){

     $("#12v1").css("display", "block");
      $("#12v1").text("Invalid highest."); 
         $("#highest1").css("border-color", "red");
         $("#highest1").focus();
        

    } else if(second_highest1 == "" ){

     $("#13v1").css("display", "block");
      $("#13v1").text("Invalid second_highest."); 
         $("#second_highest1").css("border-color", "red");
         $("#second_highest1").focus();
        

    } else if(third_highest1 == "" ){

     $("#14v1").css("display", "block");
      $("#14v1").text("Invalid third_highest."); 
         $("#third_highest1").css("border-color", "red");
         $("#third_highest1").focus();
        

    }
    else 
    { 
 
        Swal.fire({
  title: "Are you sure?",
  text: "You want to update this Test2!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
        $.ajax( {
            url: "api/UpdateTest2.php",
            method: "POST",
            data: {id:id,
                 studentid1:studentid1,name1:name1,email1:email1,section11:section11,section21:section21,section31:section31,section41:section41,section51:section51,section61:section61,section71:section71,section81:section81,highest1:highest1,second_highest1:second_highest1,third_highest1:third_highest1
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result; 
                if ( result == "Done" )
                { 
                      Swal.fire({
            title: "Test2 Updated Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 

$("#btncancel1").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblTest2();

                } 
                else 
                { 
                    Swal.fire({
            title: "Opps! Some Error Occured!",
            type: "error",
            text: "Please login first",
             timer: 4000,
            showConfirmButton: true,
          }).then(function () {
            window.location.href = "Home.php";
          });
                }
                return data;
            }
        });
          } })
    }
}




