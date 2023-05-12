<?php
include("../connect.php");
// Prepare array

$mysql_data = array();
$result="";
$message="";
if($connect)
{

    $query = mysqli_query($connect,"SELECT id,uniquecode as studentid,name,email,section1,section2,section3,section4,section5,section6,section7,section8,highest,second_highest,third_highest FROM `Test2`");
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
      $Action=" ";
        $mysql_data[] = array
        (
          "Empty"     => $Action,
          "studentid" => $row["studentid"],"name" => $row["name"],"email" => $row["email"],"section1" => $row["section1"],"section2" => $row["section2"],"section3" => $row["section3"],"section4" => $row["section4"],"section5" => $row["section5"],"section6" => $row["section6"],"section7" => $row["section7"],"section8" => $row["section8"],"highest" => $row["highest"],"second_highest" => $row["second_highest"],"third_highest" => $row["third_highest"]
          
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