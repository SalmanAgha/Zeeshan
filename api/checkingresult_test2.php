<?php


if(isset($_POST['check']) )
{

	include('../connect.php');

	session_start();
	$uniquecode = $_SESSION['uniquecode'];
	$Name = 	$_SESSION['name'] ;
	$dbemail = $_SESSION['email']; 


	$stmt = $connect -> prepare( "SELECT   `studentid`,  `highest`, `second_highest`, `third_highest` FROM `test2`   WHERE uniquecode = ?");
	$stmt -> bind_param("s", $uniquecode);

   //Executing the statement
	$stmt->execute();

   //Binding variables to resultset
	$stmt->bind_result($result[0]["studentid"],$result[0]["highest"],$result[0]["second_highest"],$result[0]["third_highest"]);
	while ($stmt->fetch()) {
		$studentid = $result[0]["studentid"];
		$highest = $result[0]["highest"];
		$second_highest = $result[0]["second_highest"];
		$third_highest = $result[0]["third_highest"]; 

	}

 
	$data["uniquecode"] = $uniquecode;
	$data["studentid"] = $studentid;

	$data["highest"] = $highest;
	$data["second_highest"] = $second_highest;
	$data["third_highest"] = $third_highest;
  
	$data["Name"] = $Name;
	$data["dbemail"] = $dbemail;
	$data["result"] = "success";

	echo json_encode($data);



}



?>