

function tblStudent(){
   
 $("#datatable").DataTable({
    "ajax": "api/TblStudent.php",
    "columns": [
       { "data": "Empty"},
       { "data": "Name"} ,
       { "data": "Email"} ,
       { "data": "Password"},
       { "data": "testtype"} ,
       { "data": "test1"} ,
       { "data": "test2"} ,
       { "data": "uniquecode"} 
       
       ],
});

}


$(document).ready(function()
{

   tblStudent(); 

   $(document).on("click", ".edit-modal", function(){

     
       $("#id2").val($(this).attr("id"));
       $("#Name1").val($(this).data("name"));
       $("#Email1").val($(this).data("email"));
       $("#Password1").val($(this).data("password"));
       $("#testtype1").val($(this).data("testtype"));

       
   });



});


function AddStudent(){
   
    var Name = $("#Name").val(); 

    var Email = $("#Email").val(); 

    var Password = $("#Password").val(); 
    var testtype = $("#testtype").val(); 
    


    
    
    if(Name == "" ){

       $("#1v").css("display", "block");
       $("#1v").text("Invalid Name."); 
       $("#Name").css("border-color", "red");
       $("#Name").focus();
       

   } else if(Email == "" ){

       $("#2v").css("display", "block");
       $("#2v").text("Invalid Email."); 
       $("#Email").css("border-color", "red");
       $("#Email").focus();
       

   } else if(Password == "" ){

       $("#3v").css("display", "block");
       $("#3v").text("Invalid Password."); 
       $("#Password").css("border-color", "red");
       $("#Password").focus();
       

   }
   else if(testtype == "" || testtype == null || testtype == "null" ){

       $("#4v").css("display", "block");
       $("#4v").text("Invalid tesT Type."); 
       $("#testtype").css("border-color", "red");
       $("#testtype").focus();
       

   }



   else 
   {   

       
       Swal.fire({
          title: "Are you sure?",
          text: "You want to add New Student!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes!"
      }).then((result) => {
          if (result.value) {  
            $.ajax( {
                url: "api/AddStudent.php",
                method: "POST",
                data: {
                   
                    Name:Name,Email:Email,
                    Password:Password,testtype:testtype
                    
                    
                },
                dataType: "JSON",
                success: function (data) 
                {
                    var result = data.result;
                    if ( result == "Inserted" )
                    {
                     Swal.fire({
                        title: "Student Added Successfully!",
                        type: "success",
                        timer: 4000,
                        showConfirmButton: true,
                    }) 


                     $("#btncancel").trigger("click");
                     $("#datatable").DataTable().destroy(); 
                     tblStudent();
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




function UpdateStudent() {

  var id = $("#id2").val();

  var Name1 = $("#Name1").val(); 

  var Email1 = $("#Email1").val(); 

  var Password1 = $("#Password1").val(); 
  var testtype1 = $("#testtype1").val(); 

  
  if(Name1 == "" ){

   $("#1v1").css("display", "block");
   $("#1v1").text("Invalid Name."); 
   $("#Name1").css("border-color", "red");
   $("#Name1").focus();
   

} else if(Email1 == "" ){

   $("#2v1").css("display", "block");
   $("#2v1").text("Invalid Email."); 
   $("#Email1").css("border-color", "red");
   $("#Email1").focus();
   

} else if(Password1 == "" ){

   $("#3v1").css("display", "block");
   $("#3v1").text("Invalid Password."); 
   $("#Password1").css("border-color", "red");
   $("#Password1").focus();
   

}

else if(testtype1 == "" || testtype1 == null || testtype1 == "null" ){

   $("#4v1").css("display", "block");
   $("#4v1").text("Invalid Test Type."); 
   $("#testtype1").css("border-color", "red");
   $("#testtype1").focus();
   

}



else 
{ 
   
    Swal.fire({
      title: "Are you sure?",
      text: "You want to update this Student!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes!"
  }).then((result) => {
      if (result.value) {  
        $.ajax( {
            url: "api/UpdateStudent.php",
            method: "POST",
            data: {id:id,
            Name1:Name1,Email1:Email1,Password1:Password1,testtype1:testtype1
        },
        dataType: "JSON",
        success: function (data) 
        {
            var result = data.result; 
            if ( result == "Done" )
            { 
              Swal.fire({
                title: "Student Updated Successfully!",
                type: "success",
                timer: 4000,
                showConfirmButton: true,
            }) 

              $("#btncancel1").trigger("click");
              $("#datatable").DataTable().destroy(); 
              tblStudent();

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




