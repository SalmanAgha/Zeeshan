<?php


if(isset($_POST['email']) &&  isset($_POST['name']) &&  isset($_POST['pass']) )
{
	

	$email = htmlentities($_POST["email"]); 
	$name = htmlentities($_POST["name"]); 
	$Password = htmlentities($_POST["pass"]); 
	$dbemail = '';
	$dbPassword = '';
	$type='';
$test1='';
$test2='';
$uniquecode='';


	$result = array();
	$modules = array();
	$rights = array();

	include('../connect.php');


	$stmt = $connect -> prepare( "SELECT `studentid`, `Name`, `Email`, `password`, `type`, `test1`, `test2`, `uniquecode` FROM `Student` WHERE uniquecode = ?");
	$stmt -> bind_param("s", $name);

   //Executing the statement
	$stmt->execute();

   //Binding variables to resultset
	$stmt->bind_result($result[0]["studentid"],$result[0]["Name"],$result[0]["Email"],$result[0]["password"]
,$result[0]["type"],$result[0]["test1"],$result[0]["test2"],$result[0]["uniquecode"]);
	while ($stmt->fetch()) {
		$studentid = $result[0]["studentid"];
		$Name = $result[0]["Name"];
		$dbemail = $result[0]["Email"];
		$dbPassword = $result[0]["password"];
		$type = $result[0]["type"];
		$test1 = $result[0]["test1"];
		$test2 = $result[0]["test2"];
		$uniquecode = $result[0]["uniquecode"];

	}


	if($dbemail == NULL)
	{
		mysqli_close($connect);
		$data["result"] = "norecord";
		echo json_encode($data);
	}	

	else if(strtoupper($dbemail) == strtoupper($email) &&  $dbPassword == $Password )
	{	
 
			session_start();
			$_SESSION['userid'] = $studentid;
			$_SESSION['name'] = $Name;
			$_SESSION['email'] = $dbemail; 
			$_SESSION['type'] = $type; 
			$_SESSION['test1'] = $test1; 
			$_SESSION['test2'] = $test2; 
			$_SESSION['uniquecode'] = $uniquecode; 
			
 
			mysqli_close($connect);
			$data["username"] = $Name;
			$data["result"] = "successful";
			echo json_encode($data);
 

	}	
	else {
		mysqli_close($connect);
		$data["result"] = "incorrect";
		echo json_encode($data);
	}															

}

?>
