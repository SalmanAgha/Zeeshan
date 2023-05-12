
<?php


if(isset($_POST["id"]) && isset($_POST["studentid1"]) && isset($_POST["name1"]) && isset($_POST["email1"]) && isset($_POST["sumv1"]) && isset($_POST["sumr1"]) && isset($_POST["suma1"]) && isset($_POST["sumk1"]) && isset($_POST["block1"]) )
{
	
 $id = filter_var(htmlentities($_POST["id"]),FILTER_SANITIZE_MAGIC_QUOTES); 
 $studentid = filter_var(htmlentities($_POST["studentid1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$name = filter_var(htmlentities($_POST["name1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$email = filter_var(htmlentities($_POST["email1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$sumv = filter_var(htmlentities($_POST["sumv1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$sumr = filter_var(htmlentities($_POST["sumr1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$suma = filter_var(htmlentities($_POST["suma1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$sumk = filter_var(htmlentities($_POST["sumk1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$block = filter_var(htmlentities($_POST["block1"]),FILTER_SANITIZE_MAGIC_QUOTES); 

	include("../connect.php");    
	 
 		$plot_approving="UPDATE `Test1` SET `studentid`='$studentid',`name`='$name',`email`='$email',`sumv`='$sumv',`sumr`='$sumr',`suma`='$suma',`sumk`='$sumk',`block`='$block' WHERE `Test1id`=$id ";
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
