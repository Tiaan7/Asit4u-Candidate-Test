<?php

session_start();

?>

<html>

<head>
	<title> Error Page </title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<a class="float-right" href="logout.php"> Back </a>
		<h2><?php echo $_SESSION['error'];?> </h2>
	</div>
</body>

</html>