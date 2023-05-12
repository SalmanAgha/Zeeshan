<?php

 function checkingblock($v,$r,$a,$k){
if($v>$r && $v>$a && $v>$k) 
{ 
	return 'Block1';
}

 if($r>$v && $r>$a && $r>$k)
{
	return 'Block2';

}   if($a>$v && $a>$r && $a>$k)
{
	return 'Block3';

}   if($k>$v && $k>$r && $k>$a) 
{
	return 'Block4';

}  

}

// get form data
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];
$q11 = $_POST['q11'];
$q12 = $_POST['q12'];
$q13 = $_POST['q13'];

session_start();
$userid = $_SESSION['userid'] ;
$name = $_SESSION['name'] ;
$email = $_SESSION['email'] ; 
$uniquecode = $_SESSION['uniquecode'] ; 



$Result='';


	// calculate the sums
$v = substr_count($q1.$q2.$q3.$q4.$q5.$q6.$q7.$q8.$q9.$q10.$q11.$q12.$q13, 'V');
$r = substr_count($q1.$q2.$q3.$q4.$q5.$q6.$q7.$q8.$q9.$q10.$q11.$q12.$q13, 'R');
$a = substr_count($q1.$q2.$q3.$q4.$q5.$q6.$q7.$q8.$q9.$q10.$q11.$q12.$q13, 'A');
$k = substr_count($q1.$q2.$q3.$q4.$q5.$q6.$q7.$q8.$q9.$q10.$q11.$q12.$q13, 'K');


$highest_value = max($v,$r,$a,$k);

$Block1='No';
$Block2='No';
$Block3='No';
$Block4='No';


if($v>$r && $v>$a && $v>$k) 
{ 
$Block1='Yes';
  
}

 if($r>$v && $r>$a && $r>$k)
{
$Block2='Yes';

}   if($a>$v && $a>$r && $a>$k)
{
$Block3='Yes';


}   if($k>$v && $k>$r && $k>$a) 
{
$Block4='Yes';
  

}  
 


// $Result = checkingblock($v,$r,$a,$k);


//Inserting into DB
  include("../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{
  
    $stmt = $connect->prepare("INSERT INTO test1(studentID,uniquecode,Name,Email,SumV,SumR,SumA,SumK,highest,Block1,Block2,Block3,Block4) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param('sssssssssssss', $userid,$uniquecode, $name, $email,$v,$r,$a,$k,$highest_value,$Block1,$Block2,$Block3,$Block4); 
 
    $stmt->execute();
    if ($stmt == true) 
    {
      $result="Inserted";
    }
    else{
      $result="Not Inserted";
    }
  
  }
  include("../connect.php");


  $plot_approving="UPDATE `student` SET `test1`='Completed'   WHERE uniquecode= $uniquecode ";
    $run_querry=mysqli_query($connect,$plot_approving);
    mysqli_close($connect);

 $_SESSION['test1'] = "Completed" ; 


 

$data["Highest"] = $highest_value;
$data["v"] = $v;
$data["r"] = $r;
$data["a"] = $a;
$data["k"] = $k;
$data["userid"] = $userid;
$data["name"] = $name;
$data["email"] = $email;
$data["uniquecode"] = $uniquecode;

$data["Block1"] = $Block1;
$data["Block2"] = $Block2;
$data["Block3"] = $Block3;
$data["Block4"] = $Block4;

 
echo json_encode($data);



?>
