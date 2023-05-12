<?php


if( isset($_POST['section1_yes']) && isset($_POST['section2_yes']) 
&& isset($_POST['section3_yes']) && isset($_POST['section4_yes'])
&& isset($_POST['section5_yes']) && isset($_POST['section6_yes'])
&& isset($_POST['section7_yes']) && isset($_POST['section8_yes']) )
{
	

	$section1_yes = htmlentities($_POST["section1_yes"]);  
	$section2_yes = htmlentities($_POST["section2_yes"]); 
	$section3_yes = htmlentities($_POST["section3_yes"]);  
	$section4_yes = htmlentities($_POST["section4_yes"]); 
	$section5_yes = htmlentities($_POST["section5_yes"]);  
	$section6_yes = htmlentities($_POST["section6_yes"]); 
	$section7_yes = htmlentities($_POST["section7_yes"]);  
	$section8_yes = htmlentities($_POST["section8_yes"]);
 
// Create an associative array with section numbers as keys and corresponding yes counts as values
// $section_yes_counts = array(
//     "section1" => $section1_yes,
//     "section2" => $section2_yes,
//     "section3" => $section3_yes,
//     "section4" => $section4_yes,
//     "section5" => $section5_yes,
//     "section6" => $section6_yes,
//     "section7" => $section7_yes,
//     "section8" => $section8_yes
// );


  // // Create an associative array with section numbers as keys and corresponding yes counts as values
$section_yes_counts = array(
    "Linguistic" => $section1_yes,
    "Logical-Mathematical" => $section2_yes,
    "Musical" => $section3_yes,
    "Bodily-Kinesthetic" => $section4_yes,
    "Spatial-Visual" => $section5_yes,
    "Interpersonal" => $section6_yes,
    "Intrapersonal " => $section7_yes,
    "section8" => $section8_yes
);


// Sort the array in descending order based on values
arsort($section_yes_counts);
// Get the keys (section numbers) of the first three elements in the sorted array
$section_yes_counts_slice = array_slice($section_yes_counts, 0, 3, true);
$highest_section = key($section_yes_counts_slice);
$highest_value = reset($section_yes_counts_slice);

$section_yes_counts_slice = array_slice($section_yes_counts, 1, 2, true);
$second_highest_section = key($section_yes_counts_slice); 

$third_highest_section = key(array_slice($section_yes_counts, 2, 1, true)); 

 
session_start();
$userid = $_SESSION['userid'] ;
$name = $_SESSION['name'] ;
$email = $_SESSION['email'] ; 
$uniquecode = $_SESSION['uniquecode'] ; 


 //Inserting into DB
  include("../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{
 

    $stmt = $connect->prepare("  INSERT INTO `test2`(  `studentid`, `Name`, `Email`, `Section1`, `Section2`, `Section3`, `Section4`, `Section5`, `Section6`, `Section7`, `Section8`,`highest`,`second_highest`,`third_highest` ,`uniquecode`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param('issiiiiiiiissss', $userid,$name,$email,$section1_yes,$section2_yes,$section3_yes,$section4_yes,$section5_yes,$section6_yes,$section7_yes,$section8_yes,$highest_section,$second_highest_section,$third_highest_section,$uniquecode); 
 
    $stmt->execute();
    if ($stmt == true) 
    {
      $result="Inserted";


        include("../connect.php");


  $plot_approving="UPDATE `student` SET `test2`='Completed'   WHERE uniquecode= $uniquecode ";
    $run_querry=mysqli_query($connect,$plot_approving);
    mysqli_close($connect);

$_SESSION['test2'] ='Completed'; 

    }
    else{
      $result="Not Inserted";
    }
  
  }														
 

  $data["highest_section"] = $highest_section; 
  $data["second_highest_section"] = $second_highest_section; 
  $data["third_highest_section"] = $third_highest_section; 
$data["userid"] = $userid;
$data["name"] = $name;
$data["email"] = $email;
 

    echo json_encode($data);
}

?>
