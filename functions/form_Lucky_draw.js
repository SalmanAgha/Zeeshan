function BtnLoadingTrue(){            
    $("#btnlogin").attr("disabled", true);
    $('#btnlogin').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Loading...');
}
function BtnLoadingFalse(){            
    $("#btnlogin").attr("disabled", false);
    $('#btnlogin').html('Login');
}
function login(){

      $("#v1").css({ 'display': 'none'}); 
      $("#v2").css({ 'display': 'none'}); 
      $("#v3").css({ 'display': 'none'}); 
      $("#name").css({ 'border-color': '' });
      $("#email").css({ 'border-color': '' });
      $("#password").css({ 'border-color': '' });
      $("#code").css({ 'border-color': '' });
    
    var v_Name = $("#name").val();
    var v_email = $("#email").val();
    var v_pass = $("#password").val();
    var v_code = $("#code").val();
    
    var valid=true;
    var mailRegEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if ( v_Name == "") {  
      $("#Name").css({ 'border-color': 'red' });
      $("#v1").css({ 'display': 'block'}); 
      $("#v1").text("Please Enter Name!");           
  } else  if ( v_email == "") {  
      $("#Email").css({ 'border-color': 'red' });
   $("#v2").css({ 'display': 'block'}); 
      $("#v2").text("Please Enter Email!");            
  } 
  else if(!v_email.match(mailRegEx))
  {
    $("#Email").css({ 'border-color': 'red' });
      $("#v2").css({ 'display': 'block'}); 
      $("#v2").text("Please Enter Valid Email!");  
}
 else if ( v_pass == "") {
      $("#Password").css({ 'border-color': 'red' });
      $("#v3").css({ 'display': 'block'}); 
      $("#v3").text("Please Enter Password!");              
  } 
else
{
    $.ajax({
        url: "api/form_lucky_draw.php",
        method: "POST",
        data: {
            email : v_email,
            name : v_Name,
            pass : v_pass,
            code : v_code

        },
        dataType: "JSON",
        beforeSend: function(){
   // BtnLoadingTrue();
        },
        success: function (data) 
        { BtnLoadingFalse();
        var result = data.result;
        if ( result == "successful")
        {
            var username = data.username;
            Swal.fire({
              title: "Welcome " + username,
              type: "success",
              customClass: 'animated fadeIn',
              timer: 4000
          })
            .then(function () {
                window.location.href = 'Home.php';
            });
        } else if ( result == "inactive")
        {
            var username = data.username;
            Swal.fire({
               title: "User " + username + " is inactive",
               type: "error",
               customClass: 'animated fadeIn',
               timer: 4000
           }).then(function () {
            window.location.href = 'Login.php';
        });
       } else if ( result == "norecord")  { 
           Swal.fire({
            title: 'Account Not Found',
            type: "error",
            customClass: 'animated fadeIn',
            timer: 4000
        }).then(function () {
            window.location.href = 'Login.php';
        });
    }
    else if ( result == "incorrect")  { 
     Swal.fire({
        title: 'Email or Password is incorrect',
        type: "error",
        customClass: 'animated fadeIn'
    })
 }
 return data;
}
});
}
}
