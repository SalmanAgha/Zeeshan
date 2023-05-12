
<?php


if(isset($_POST["id"]) && isset($_POST["Name1"]) && isset($_POST["Email1"]) && isset($_POST["Password1"])
&& isset($_POST["testtype1"]) )
{
	
 $id = htmlentities($_POST["id"]); 
 $Name = htmlentities($_POST["Name1"]); 
$Email = htmlentities($_POST["Email1"]); 
$Password = htmlentities($_POST["Password1"]); 
$testtype = htmlentities($_POST["testtype1"]); 

	include("../connect.php");    
	 
 		$plot_approving="UPDATE `Student` SET `Name`='$Name',`Email`='$Email',`Password`='$Password',`type`='$testtype'  WHERE `Studentid`=$id ";
 		$run_querry=mysqli_query($connect,$plot_approving);
		mysqli_close($connect);
						 

	if( $run_querry == "True"){
	 
 		$data["result"] = "Done";
		echo json_encode($data);
	}
	else
	{
	 
	$data["result"] = "error";
	echo json_encode($data);


	}

 
}

?>
