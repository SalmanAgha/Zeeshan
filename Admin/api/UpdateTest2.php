
<?php


if(isset($_POST["id"]) && isset($_POST["studentid1"]) && isset($_POST["name1"]) && isset($_POST["email1"]) && isset($_POST["section11"]) && isset($_POST["section21"]) && isset($_POST["section31"]) && isset($_POST["section41"]) && isset($_POST["section51"]) && isset($_POST["section61"]) && isset($_POST["section71"]) && isset($_POST["section81"]) && isset($_POST["highest1"]) && isset($_POST["second_highest1"]) && isset($_POST["third_highest1"]) )
{
	
 $id = filter_var(htmlentities($_POST["id"]),FILTER_SANITIZE_MAGIC_QUOTES); 
 $studentid = filter_var(htmlentities($_POST["studentid1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$name = filter_var(htmlentities($_POST["name1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$email = filter_var(htmlentities($_POST["email1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$section1 = filter_var(htmlentities($_POST["section11"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$section2 = filter_var(htmlentities($_POST["section21"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$section3 = filter_var(htmlentities($_POST["section31"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$section4 = filter_var(htmlentities($_POST["section41"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$section5 = filter_var(htmlentities($_POST["section51"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$section6 = filter_var(htmlentities($_POST["section61"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$section7 = filter_var(htmlentities($_POST["section71"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$section8 = filter_var(htmlentities($_POST["section81"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$highest = filter_var(htmlentities($_POST["highest1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$second_highest = filter_var(htmlentities($_POST["second_highest1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
$third_highest = filter_var(htmlentities($_POST["third_highest1"]),FILTER_SANITIZE_MAGIC_QUOTES); 

	include("../connect.php");    
	 
 		$plot_approving="UPDATE `Test2` SET `studentid`='$studentid',`name`='$name',`email`='$email',`section1`='$section1',`section2`='$section2',`section3`='$section3',`section4`='$section4',`section5`='$section5',`section6`='$section6',`section7`='$section7',`section8`='$section8',`highest`='$highest',`second_highest`='$second_highest',`third_highest`='$third_highest' WHERE `Test2id`=$id ";
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
