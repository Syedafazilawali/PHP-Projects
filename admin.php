<?php
include ('db.php');
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Admin Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url(images/bg-registration-form-2.jpg);">
			<div class="inner">
            <br>
            
				<form action="admin.php" method="POST">
					<h3>Admin Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label>adminname</label>
							<input type="text" name="adminname" class="form-control" required>
						</div>
					</div>
                    <div class="form-wrapper">
						<label>adminpassword</label>
						<input type="password" name="adminpassword" class="form-control"required>
					</div>
					<button type="submit" name="login" value="submit" class=" btn btn-danger">Login Now</button>
                    
				</form>
			</div>
		</div>
        <?php
include('db.php');
if(isset($_POST['login']))
{
	$adminname = $_POST['adminname'];
	$adminpassword = $_POST['adminpassword'];

	$hash = password_hash($adminpassword, PASSWORD_DEFAULT);
	$query = "INSERT INTO admin(adminname,adminpassword)
	values
	('$adminname','$hash')";
	$run = mysqli_query($con,$query);
	if($run)
	{
		header('location:view.php');
		}
		else
		{
			echo"username or password incorrect!!!";
			}
}
?>	
	</body>
</html>