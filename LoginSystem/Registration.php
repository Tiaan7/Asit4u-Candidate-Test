<?php

include_once('Config.php');
session_start();

$name = $_POST['EntName'];
$email = $_POST['EntEmail'];
$password = $_POST['EntPassword'];

$x = " select * from usertable where name = '$name'";
$y = " select * from usertable where email = '$email'";

$result1 = mysqli_query($conn, $x);
$result2 = mysqli_query($conn, $y);

$num1 =mysqli_num_rows($result1);
$num2 =mysqli_num_rows($result2);

if($num1 == 1)
{
	$_SESSION['error'] = "Username already exists, try again!"; 
	header('location:Error.php');
}
else if($num2 == 1)
{
	$_SESSION['error'] = "Email already exists, try again!"; 
	header('location:Error.php');
}
else
{
	$reg = " insert into usertable(name, email, password) values ('$name', '$email', '$password')";
	mysqli_query($conn, $reg);
	$_SESSION['error'] = "Registration is successfull!"; 
	header('location:Error.php');
}

?>