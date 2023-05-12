
<?php
if(isset($_POST["studentid"]) && isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["sumv"]) && isset($_POST["sumr"]) && isset($_POST["suma"]) && isset($_POST["sumk"]) && isset($_POST["block"]) )
{   

 
$studentid = filter_var(htmlentities($_POST["studentid"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$name = filter_var(htmlentities($_POST["name"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$email = filter_var(htmlentities($_POST["email"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$sumv = filter_var(htmlentities($_POST["sumv"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$sumr = filter_var(htmlentities($_POST["sumr"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$suma = filter_var(htmlentities($_POST["suma"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$sumk = filter_var(htmlentities($_POST["sumk"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$block = filter_var(htmlentities($_POST["block"]),FILTER_SANITIZE_MAGIC_QUOTES); 

   
  $result="";
  include("../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{
    $stmt = $connect->prepare("insert into Test1 (studentid,name,email,sumv,sumr,suma,sumk,block) values (?,?,?,?,?,?,?,?)");
    $stmt->bind_param('ssssssss', $studentid,$name,$email,$sumv,$sumr,$suma,$sumk,$block); 
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