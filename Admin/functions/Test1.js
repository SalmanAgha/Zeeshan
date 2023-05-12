

function tblTest1(){
 
   $("#datatable").DataTable({
        "ajax": "api/TblTest1.php",
        "columns": [ 
           { "data": "studentid"} ,{ "data": "name"} ,{ "data": "email"} ,{ "data": "sumv"} ,{ "data": "sumr"} ,
           { "data": "suma"} ,{ "data": "sumk"} ,
           { "data": "block1"},
           { "data": "block2"}, 
           { "data": "block3"}, 
           { "data": "block4"}

          
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

 tblTest1(); 
 filtering();

$(document).on("click", ".edit-modal", function(){

       
         $("#id2").val($(this).attr("id"));$("#studentid1").val($(this).data("studentid"));$("#name1").val($(this).data("name"));$("#email1").val($(this).data("email"));$("#sumv1").val($(this).data("sumv"));$("#sumr1").val($(this).data("sumr"));$("#suma1").val($(this).data("suma"));$("#sumk1").val($(this).data("sumk"));$("#block1").val($(this).data("block"));
     
      });



 });


function AddTest1(){
 
var studentid = $("#studentid").val(); 

 var name = $("#name").val(); 

 var email = $("#email").val(); 

 var sumv = $("#sumv").val(); 

 var sumr = $("#sumr").val(); 

 var suma = $("#suma").val(); 

 var sumk = $("#sumk").val(); 

 var block = $("#block").val(); 

 
    
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
        

    } else if(sumv == "" ){

     $("#4v").css("display", "block");
      $("#4v").text("Invalid sumv."); 
         $("#sumv").css("border-color", "red");
         $("#sumv").focus();
        

    } else if(sumr == "" ){

     $("#5v").css("display", "block");
      $("#5v").text("Invalid sumr."); 
         $("#sumr").css("border-color", "red");
         $("#sumr").focus();
        

    } else if(suma == "" ){

     $("#6v").css("display", "block");
      $("#6v").text("Invalid suma."); 
         $("#suma").css("border-color", "red");
         $("#suma").focus();
        

    } else if(sumk == "" ){

     $("#7v").css("display", "block");
      $("#7v").text("Invalid sumk."); 
         $("#sumk").css("border-color", "red");
         $("#sumk").focus();
        

    } else if(block == "" ){

     $("#8v").css("display", "block");
      $("#8v").text("Invalid block."); 
         $("#block").css("border-color", "red");
         $("#block").focus();
        

    }
    else 
    {   

 
         Swal.fire({
  title: "Are you sure?",
  text: "You want to add New Test1!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
    $.ajax( {
            url: "api/AddTest1.php",
            method: "POST",
            data: {
 
                studentid:studentid,name:name,email:email,sumv:sumv,sumr:sumr,suma:suma,sumk:sumk,block:block
               
              
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result;
                if ( result == "Inserted" )
                {
                       Swal.fire({
            title: "Test1 Added Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 


 $("#btncancel").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblTest1();
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




function UpdateTest1() {

  var id = $("#id2").val();

var studentid1 = $("#studentid1").val(); 

 var name1 = $("#name1").val(); 

 var email1 = $("#email1").val(); 

 var sumv1 = $("#sumv1").val(); 

 var sumr1 = $("#sumr1").val(); 

 var suma1 = $("#suma1").val(); 

 var sumk1 = $("#sumk1").val(); 

 var block1 = $("#block1").val(); 

 
    
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
        

    } else if(sumv1 == "" ){

     $("#4v1").css("display", "block");
      $("#4v1").text("Invalid sumv."); 
         $("#sumv1").css("border-color", "red");
         $("#sumv1").focus();
        

    } else if(sumr1 == "" ){

     $("#5v1").css("display", "block");
      $("#5v1").text("Invalid sumr."); 
         $("#sumr1").css("border-color", "red");
         $("#sumr1").focus();
        

    } else if(suma1 == "" ){

     $("#6v1").css("display", "block");
      $("#6v1").text("Invalid suma."); 
         $("#suma1").css("border-color", "red");
         $("#suma1").focus();
        

    } else if(sumk1 == "" ){

     $("#7v1").css("display", "block");
      $("#7v1").text("Invalid sumk."); 
         $("#sumk1").css("border-color", "red");
         $("#sumk1").focus();
        

    } else if(block1 == "" ){

     $("#8v1").css("display", "block");
      $("#8v1").text("Invalid block."); 
         $("#block1").css("border-color", "red");
         $("#block1").focus();
        

    }
    else 
    { 
 
        Swal.fire({
  title: "Are you sure?",
  text: "You want to update this Test1!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
        $.ajax( {
            url: "api/UpdateTest1.php",
            method: "POST",
            data: {id:id,
                 studentid1:studentid1,name1:name1,email1:email1,sumv1:sumv1,sumr1:sumr1,suma1:suma1,sumk1:sumk1,block1:block1
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result; 
                if ( result == "Done" )
                { 
                      Swal.fire({
            title: "Test1 Updated Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 

$("#btncancel1").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblTest1();

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




