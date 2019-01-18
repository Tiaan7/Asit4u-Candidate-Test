<html>
<head>
	<title> Login and Registration </title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
	<body>
		<div class="container">
		<div class="login-box">
		<div class="row">
		
		<div class="col-md-6 login-left">
			<h1> Login Here </h1>
			<form action="Validation.php" method="post">
		<div class="form-group">
			<lable>Email Address</lable>
			<input type="text" name="EntEmail" class="form-control" required>
		</div>
		<div class="form-group">
			<lable>Password</lable>
			<input type="password" name="EntPassword" class="form-control" required>
		</div>
			<button type="submit" class="btn btn-primary"> Login </button>
		</form>
		</div>
		
		<div class="col-md-6 register-right">
			<h1> Register Here </h1>
			<form action="Registration.php" method="post">
		<div class="form-group">
			<lable>Username</lable>
			<input type="text" name="EntName" class="form-control" required>
		</div>
		<div class="form-group">
			<lable>Email address</lable>
			<input type="text" name="EntEmail" class="form-control" required>
		</div>
		<div class="form-group">
			<lable>Password</lable>
			<input type="password" name="EntPassword" class="form-control" required>
		</div>
			<button type="submit" class="btn btn-primary"> Register </button>
		</form>
		</div>
		
		</div>
		</div>
	</body>
</html>
