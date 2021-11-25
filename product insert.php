<?php
include('db.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>FS Free Book Online Store Admin panel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
    
	<body class="is-preload">
    <div class="wrapper" style="background-image: url(../images/bg-registration-form-2.jpg);">
    <!-- Main -->
					

    <!-- Wrapper -->
			<div id="wrapper">
            <center>
            <strong>
<span class="fa fa-book"></span> <span class="title">Welcome to Admin panel</span></strong></center>
				<!-- Header -->
				<header id="header">
					<div class="inner">
                    

						<!-- Logo -->
							<a href="view.php" class="logo">
									<span class="fa fa-book"></span> <span class="title">FS Book Online Store Admin panel</span>
								</a>
                              
                            

						<!-- Nav -->
							<nav>
								<ul>
									<li><a href="#menu">Menu</a></li>
								</ul>
							</nav>

					</div>
				</header>

			<!-- Menu -->
				<nav id="menu">
					<h2>Menu</h2>
					<ul>
						<li><a href="view.php">Client</a></li>

						<li><a href="product list.php" class="dropdown-toggle">list of Products</a>
                        <li><a href="product insert.php" class="dropdown-toggle">Products insert</a>                        </li>
                        <li><a href="admin logout.php">Logout</a></li>
					</ul>
				</nav>
			<div class="inner">
            <br>
            <form action="" method="POST" enctype="multipart/form-data">
					<h3>Product insert</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label>product_name</label>
							<input type="text" name="product_name" class="form-control" required>
						</div>
					</div>
                    <div class="form-wrapper">
							<label>product_image</label>
							<input type="file" name="product_image" required>
						</div>
                        <div class="form-wrapper">
							<label>product_price</label>
							<input type="text" name="product_price" class="form-control" required>
						</div>
                        <div class="form-wrapper">
							<label>product_code</label>
							<input type="text" name="product_code" class="form-control" required>
						</div>
					<button type="submit" name="uploadbtn" value="upload" class=" btn btn-success">product insert</button>
                    
				</form>
            <?php
if(isset ($_POST['uploadbtn']))
{
	$product_name = $_POST['product_name'];
	$image_name=$_FILES['product_image']['name']; //name of image
	    $temp_name=$_FILES['product_image']['tmp_name']; //temp location
	    $image_type=$_FILES['product_image']['type']; //image type
	    $image_size=$_FILES['product_image']['size'];//image size
	    $Folder="product_image/";
	$product_price = $_POST['product_price'];
	$product_code = $_POST['product_code'];
	
	if(strtolower($image_type)=="image/jpg" || strtolower($image_type)=="image/jpeg" || strtolower($image_type)=="image/png")
	{
		
		
	
	$Folder="product_image/".$image_name;
	$query = "insert into product (product_name,product_image,product_price,product_code) values ('$product_name','$Folder','$product_price','$product_code')";
	
	
	$run = mysqli_query($con,$query);

		if($run)
		{
			move_uploaded_file($temp_name,$Folder);
			echo"<h1>data Inserted</h1>";
			echo"<br>";
			header("location: product list.php");
			
			}
			}
			else
			{
				echo"product not inserted";
				}
	}



?>
<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<ul class="icons">
									<li><a href="https://www.twitter.com/" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="https://www.linkedIn.com/" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								</ul>

								&nbsp;
							</section>
						</div>
					</footer>
<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>
</body>
</html>