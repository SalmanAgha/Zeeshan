
<?php
if(isset($_POST["studentid"]) && isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["section1"]) && isset($_POST["section2"]) && isset($_POST["section3"]) && isset($_POST["section4"]) && isset($_POST["section5"]) && isset($_POST["section6"]) && isset($_POST["section7"]) && isset($_POST["section8"]) && isset($_POST["highest"]) && isset($_POST["second_highest"]) && isset($_POST["third_highest"]) )
{   

 
$studentid = filter_var(htmlentities($_POST["studentid"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$name = filter_var(htmlentities($_POST["name"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$email = filter_var(htmlentities($_POST["email"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$section1 = filter_var(htmlentities($_POST["section1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$section2 = filter_var(htmlentities($_POST["section2"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$section3 = filter_var(htmlentities($_POST["section3"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$section4 = filter_var(htmlentities($_POST["section4"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$section5 = filter_var(htmlentities($_POST["section5"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$section6 = filter_var(htmlentities($_POST["section6"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$section7 = filter_var(htmlentities($_POST["section7"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$section8 = filter_var(htmlentities($_POST["section8"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$highest = filter_var(htmlentities($_POST["highest"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$second_highest = filter_var(htmlentities($_POST["second_highest"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$third_highest = filter_var(htmlentities($_POST["third_highest"]),FILTER_SANITIZE_MAGIC_QUOTES); 

   
  $result="";
  include("../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{
    $stmt = $connect->prepare("insert into Test2 (studentid,name,email,section1,section2,section3,section4,section5,section6,section7,section8,highest,second_highest,third_highest) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param('ssssssssssssss', $studentid,$name,$email,$section1,$section2,$section3,$section4,$section5,$section6,$section7,$section8,$highest,$second_highest,$third_highest); 
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