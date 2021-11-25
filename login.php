<?php
include ('db.php');
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
 		<div class="wrapper" style="background-image: url('images/bg-registration-form-2.jpg');">
        <div class="inner">
        <br>

<center>
<div class="text-right"><style>.text-right{
	
	position:relative;
	top:150px;
	
	
	}</style>Don't have an account ? <a href="student registration.php">Register Now</a></div>
				<form action="login.php" method="POST">
					<h3>Login Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label>firstname</label>
							<input type="text" name="firstname" class="form-control" required>
						</div>
                        <br>
                        <br>
                        
<div class="form-wrapper">
						<label>password</label>
						<input type="password" name="password" class="form-control"required>
					</div>
                    <br>
                    <br>
<button type="submit" name="login" value="submit" class=" btn btn-danger">Login Now</button>

</form>


<?php
if (isset($_POST['login']))
{
	$firstname = $_POST['firstname'];
	$password = $_POST['password'];
	
	$hash = password_hash($password, PASSWORD_DEFAULT);
	$verify = password_verify($password, $hash);
if(isset($_POST['login']))
{
	$firstname = $_POST['firstname'];
	setcookie('firstname',$firstname);
	header('location:index.php');
	
	}
	
	$query = "select * from registration_tb where firstname = '$firstname'
	and
	password = '$verify'
	";
	
	$run = mysqli_query($con,$query);
	$totalrows = mysqli_num_rows($run);
	
	if(password_verify($password,$hash))
	{
		$_SESSION['firstname'] = $firstname;
		header('location:index.php');
		echo'successfully login';
	}
	
	else
	{
		$message = '<br><div class="alert alert-danger" role="alert">invalid credentials</div>';
		echo"USERNAME OR PASSWORD IS INCORRECT";
	}
}
?>
</body>
<html>
