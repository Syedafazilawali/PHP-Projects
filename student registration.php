<?php
include ('db.php');
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration Form</title>
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
	top:630px;
	
	
	}</style>Already have an account ? <a href="login.php">Login Now</a></div>
				<form action="student registration.php" method="POST">
					<h3>Registration Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label>firstname</label>
							<input type="text" name="firstname" class="form-control" required>
						</div>
						<div class="form-wrapper">
							<label>lastname</label>
							<input type="text" name="lastname" class="form-control" required>
						</div>
					</div>
                    <div class="form-wrapper">
						<label>fathername</label>
						<input type="text" name="fathername" class="form-control"required>
					</div>
                   
					<div class="form-wrapper">
						<label>emailaddress</label>
						<input type="email" name="emailaddress" class="form-control"required>
					</div>
                    <div class="form-wrapper">
						<label>city</label>
						<input type="text" name="city" class="form-control"required>
					</div>
                    <div class="form-wrapper">
						<label>mobilenumber</label>
						<input type="number" name="mobilenumber" class="form-control"required>
					</div>
					<div class="form-wrapper">
						<label>password</label>
						<input type="password" name="password" class="form-control"required>
					</div>
					<button type="submit" name="Register" value="submit" class=" btn btn-danger">Register Now</button>
                    
				</form>
			</div>
		</div>
        <?php
include('db.php');
if(isset($_POST['Register']))
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$fathername = $_POST['fathername'];
	$emailaddress = $_POST['emailaddress'];
	$city = $_POST['city'];
    $mobilenumber = $_POST['mobilenumber'];
	$password = $_POST['password'];

	$hash = password_hash($password, PASSWORD_DEFAULT);
	$query = "INSERT INTO registration_tb(firstname,lastname,fathername,emailaddress,city,mobilenumber,password)
	values
	('$firstname','$lastname','$fathername','$emailaddress','$city','$mobilenumber','$hash')";
	$run = mysqli_query($con,$query);
	if($run)
	{
		header('location:login.php');
		}
		else
		{
			echo"username or password incorrect!!!";
			}
}
?>	
	</body>
</html>