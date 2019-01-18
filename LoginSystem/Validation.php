<?php

include_once('Config.php');
session_start();

$email = $_POST['EntEmail'];
$password = $_POST['EntPassword'];

$x = " select * from usertable where email = '$email' && password = '$password'";
$y = " select * from usertable where email = '$email'";

$result = mysqli_query($conn, $x);
$result2 = mysqli_query($conn, $y);

$num =mysqli_num_rows($result);
$num2 =mysqli_num_rows($result2);

if($num == 1)
{
	$_SESSION['email'] = $email;
	header('location:Home.php');
	$JSON = array();
	$JSON[] = array("emial" => $email, "password" => $password);
}
else if ($num2 != 1)
{
	$_SESSION['error'] = "Email address does not exist!"; 
	header('location:Error.php');
	$JSON = array();
	$JSON[] = array("emial" => $email, "password" => $password);
}
else
{
	$_SESSION['error'] = "Password is incorect!"; 
	header('location:Error.php');
	$JSON = array();
	$JSON[] = array("emial" => $email, "password" => $password);
}	

/* Output header*/
header('Content-type: application/json');
echo json_encode($JSON);

?>