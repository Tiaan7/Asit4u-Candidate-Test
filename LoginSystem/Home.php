<?php

session_start();

if(!isset($_SESSION['email']))
{
	header('location:login.php');
}
?>

<html>

<head>
	<title> Home Page </title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<a class="float-right" href="logout.php"> Logout </a>
		<h2> WELCOME: <?php echo $_SESSION['email'];?> </h2>
	</div>
</body>

</html>