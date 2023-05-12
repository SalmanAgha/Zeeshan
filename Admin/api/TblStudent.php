<?php
include("../connect.php");
// Prepare array

$mysql_data = array();
$result="";
$message="";
if($connect)
{

    $query = mysqli_query($connect,"SELECT Studentid,Name,Email,Password,type,test1,test2,uniquecode FROM `student`");
    if (!$query
  )  {


      $result  = "error";
      $message = "query error";
    }
    else
    {
      $result  = "success";
      $message = "query success";
      $empty="";
      while ($row = mysqli_fetch_array($query))
      {

if($row["test1"] == 'Completed'){
$test1 = '<td>'.$row["test1"] . '</br><span><a target="_blank" style="color:blue;" href="Test1.php?code='.$row["uniquecode"].'">See Result</a></span></td>' ;
}else {
  $test1 = '<td>'.$row["test1"] . '</td>' ;
}

if($row["test2"] == 'Completed'){
$test2 = '<td>'.$row["test2"] . '</br><span><a target="_blank" style="color:blue;" href="Test2.php?code='.$row["uniquecode"].'">See Result</a></span></td>' ;
}else {
  $test2 = '<td>'.$row["test2"] . '</td>' ;
}


        
      $Action="<td><a  id=".$row["Studentid"]." 
data-testtype='".$row["type"]."'
      data-Name='".$row["Name"]."' data-Email='".$row["Email"]."' data-Password='".$row["Password"]."'  class='mr-2 edit-modal' data-toggle='modal' data-animation='bounce' data-target='.edit-modal1' ><i class='fas fa-edit text-info font-16'></i> </a>";
        $mysql_data[] = array
        (
          "Empty"     => $Action,

     
          "Name" => $row["Name"],"Email" => $row["Email"],"Password" => $row["Password"],
          "testtype" => $row["type"],
          "test1" => $test1,
          "test2" => $test2,
          "uniquecode" => $row["uniquecode"]          
        );
      }
    }
  // Close database connection
  mysqli_close($connect);
}
// Prepare data
$data = array(
  "result"  => $result,
  "message" => $message,
  "data"    => $mysql_data
);
// Convert PHP array to JSON array
$json_data = json_encode($data);
print $json_data;
?>