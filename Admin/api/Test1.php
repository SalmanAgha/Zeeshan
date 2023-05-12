<?php

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


$Result='';


	// calculate the sums
$v = substr_count($q1.$q2.$q3.$q4.$q5.$q6.$q7.$q8.$q9.$q10.$q11.$q12.$q13, 'V');
$r = substr_count($q1.$q2.$q3.$q4.$q5.$q6.$q7.$q8.$q9.$q10.$q11.$q12.$q13, 'R');
$a = substr_count($q1.$q2.$q3.$q4.$q5.$q6.$q7.$q8.$q9.$q10.$q11.$q12.$q13, 'A');
$k = substr_count($q1.$q2.$q3.$q4.$q5.$q6.$q7.$q8.$q9.$q10.$q11.$q12.$q13, 'K');


$highest_value = max($v,$r,$a,$k);

if($v>$r && $v>$a && $v>$k) 
{ 
	$Result = 'Block1';
}

 if($r>$v && $r>$a && $r>$k)
{
	$Result = 'Block2';

}   if($a>$v && $a>$r && $a>$k)
{
	$Result = 'Block3';

}   if($k>$v && $k>$r && $k>$a) 
{
	$Result = 'Block4';

}  
 

$data["Highest"] = $highest_value;
$data["v"] = $v;
$data["r"] = $r;
$data["a"] = $a;
$data["k"] = $k;
$data["userid"] = $userid;
$data["name"] = $name;
$data["email"] = $email;


$data["result"] = $Result;
echo json_encode($data);



?>
