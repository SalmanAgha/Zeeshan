<?php


if(isset($_POST['check']) )
{

	include('../connect.php');

	session_start();
	$uniquecode = $_SESSION['uniquecode'];
	$Name = 	$_SESSION['name'] ;
	$dbemail = $_SESSION['email']; 


	$stmt = $connect -> prepare( "SELECT  `studentid`,   `SumV`, `SumR`, `SumA`, `SumK`,`highest`, `block1`, `block2`, `block3`, `block4` FROM `test1`  WHERE uniquecode = ?");
	$stmt -> bind_param("s", $uniquecode);

   //Executing the statement
	$stmt->execute();

   //Binding variables to resultset
	$stmt->bind_result($result[0]["studentid"],$result[0]["SumV"],$result[0]["SumR"],$result[0]["SumA"]
		,$result[0]["SumK"],$result[0]["highest"], $result[0]["block1"], $result[0]["block2"], $result[0]["block3"], $result[0]["block4"]);
	while ($stmt->fetch()) {
		$studentid = $result[0]["studentid"];
		$SumV = $result[0]["SumV"];
		$SumR = $result[0]["SumR"];
		$SumA = $result[0]["SumA"];
		$SumK = $result[0]["SumK"];
		$highest = $result[0]["highest"]; 

		$block1 = $result[0]["block1"]; 
		$block2 = $result[0]["block2"]; 
		$block3 = $result[0]["block3"]; 
		$block4 = $result[0]["block4"]; 


	}

 
	$data["uniquecode"] = $uniquecode;
	$data["studentid"] = $studentid;

	$data["SumV"] = $SumV;
	$data["SumR"] = $SumR;
	$data["SumA"] = $SumA;
	$data["SumK"] = $SumK;
	$data["Block1"] = $block1;
	$data["Block2"] = $block2;
	$data["Block3"] = $block3;
	$data["Block4"] = $block4;
	$data["highest"] = $highest;
	$data["Name"] = $Name;
	$data["dbemail"] = $dbemail;
	$data["result"] = "success";

	echo json_encode($data);



}



?>