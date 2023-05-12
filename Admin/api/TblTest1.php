<?php
include("../connect.php");
// Prepare array

$mysql_data = array();
$result="";
$message="";
if($connect)
{

    $query = mysqli_query($connect,"SELECT id,uniquecode as studentid,name,email,sumv,sumr,suma,sumk,block1,block2,block3,block4 FROM `Test1`");
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
          "studentid" => $row["studentid"],"name" => $row["name"],"email" => $row["email"],"sumv" => $row["sumv"],"sumr" => $row["sumr"],"suma" => $row["suma"],"sumk" => $row["sumk"],"block1" => $row["block1"],"block2" => $row["block2"],"block3" => $row["block3"],"block4" => $row["block4"]
          
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