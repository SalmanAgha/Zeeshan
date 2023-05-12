
<?php
if(isset($_POST["Name"]) && isset($_POST["Email"]) && isset($_POST["Password"]) && isset($_POST["testtype"]) )
{   

 
$Name = htmlentities($_POST["Name"]); 
$Email = htmlentities($_POST["Email"]); 
$Password = htmlentities($_POST["Password"]); 
$testtype = htmlentities($_POST["testtype"]); 

   
  $result="";
  include("../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{
 
  include('../connect.php');

$uniquecode='';
  $stmt = $connect -> prepare( "SELECT max(uniquecode)+1 as finalcode FROM `student`");
   //Executing the statement
  $stmt->execute();

   //Binding variables to resultset
$stmt->bind_result($result);
$stmt->fetch();
 
$uniquecode = '00'.$result;
 $stmt->close();

$test1 = 'Pending';
$test2 = 'Pending'; 

    $stmt = $connect->prepare("insert into Student (Name,Email,Password,type,test1,test2,uniquecode) values (?,?,?,?,?,?,?)");
    $stmt->bind_param('sssssss', $Name,$Email,$Password,$testtype,$test1,$test2,$uniquecode); 
    $stmt->execute();
    if ($stmt == true) 
    {
      $result="Inserted";
    }
    else{
      $result="Not Inserted";
    }
  
  }
  
   


  $data ["result"] = $result;
    echo json_encode($data);

}
?>