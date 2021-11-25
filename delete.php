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

						<li><a href="list of products.php" class="dropdown-toggle">Products</a>
                        <ul>
								<li><a href="list of products.php">COMICS</a></li>
								<li><a href="list of products.php">NOVELS</a></li>
								<li><a href="list of products.php">STORY BOOKS</a></li>
								<li><a href="list of products.php">GENERAL KNOWLEDGE BOOKS</a></li>
                                <li><a href="list of products.php">QUIZ BOOKS</a></li>
                                <li><a href="list of products.php">JOURNALS</a></li>
							</ul>
                        </li>
                        <li><a href="logout.php">Logout</a></li>
					</ul>
				</nav>
                <div id="main">
						<div class="inner">
							<h1>Edit</h1>
                           <button type="submit" name="delete" value="delete" class=" btn btn-danger"><a href="list of products.php">List of products</button></a>
<?php

include('db.php');

$product_id = $_GET['product_id'];

$query = "delete from product where product_id = '$product_id'";

$row = mysqli_query($con,$query);

if($row)
{
	echo"Data Deleted";
	header("location: view.php");
	
	}
	else {
		echo"Data Not Deleted";
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