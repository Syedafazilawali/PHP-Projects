<?php
include ('db.php');
session_start();
?> 

<!DOCTYPE HTML>
<html>
	<head>
		<title>FS Free Book Online Store</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
    <?php
if(isset($_COOKIE['firstname']))
{
echo"<center><h3>welcome ".$_COOKIE['firstname']." To OUR Online Store</h3></center>";
	}
	else
	{
		header('location:login.php');
		}
?>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="fa fa-book"></span> <span class="title">FS Book Online Store</span>
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
							<li><a href="index.php">Home</a></li>

							<li><a href="#" class="dropdown-toggle">Products Categories</a>
                        <ul>
								<li><a href="products.php">COMICS</a></li>
								<li><a href="products.php">NOVELS</a></li>
								<li><a href="products.php">STORY BOOKS</a></li>
								<li><a href="products.php">GENERAL KNOWLEDGE BOOKS</a></li>
                                <li><a href="products.php">QUIZ BOOKS</a></li>
                                <li><a href="products.php">JOURNALS</a></li>
							</ul>
                        </li>

							<li><a href="checkout.php">Checkout</a></li>

							<li>
								<a href="#" class="dropdown-toggle">About</a>

								<ul>
									<li><a href="about.php">About Us</a></li>
									<li><a href="blog.php" class="active">Blog</a></li>
									<li><a href="testimonials.php">Testimonials</a></li>
									<li><a href="terms.php">Terms</a></li>
								</ul>
							</li>

							<li><a href="contact.php">Contact Us</a></li>
                            <li><a href="logout.php">Logout</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Blog</h1>

							<div class="image main">
								<img src="images/banner-image-6-1920x500.jpg" class="img-fluid" alt="" />
							</div>
							
							<div class="container-fluid">
								<div class="row">
									<div class="col-9">
										<div class="row">
											<div class="col-sm-6 text-center">
												<img src="images/blog-1-720x480.jpg" class="img-fluid" alt="" />

												<h2 class="m-n"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

												<p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
											</div>

											<div class="col-sm-6 text-center">
												<img src="images/blog-2-720x480.jpg" class="img-fluid" alt="" />

												<h2 class="m-n"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

												<p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
											</div>

											<div class="col-sm-6 text-center">
												<img src="images/blog-3-720x480.jpg" class="img-fluid" alt="" />

												<h2 class="m-n"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

												<p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
											</div>

											<div class="col-sm-6 text-center">
												<img src="images/blog-4-720x480.jpg" class="img-fluid" alt="" />

												<h2 class="m-n"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

												<p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
											</div>

											<div class="col-sm-6 text-center">
												<img src="images/blog-5-720x480.jpg" class="img-fluid" alt="" />

												<h2 class="m-n"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

												<p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
											</div>

											<div class="col-sm-6 text-center">
												<img src="images/blog-6-720x480.jpg" class="img-fluid" alt="" />

												<h2 class="m-n"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

												<p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
											</div>
										</div>
									</div>

									<div class="col-3">
										<div class="form-group">
				                            <h4>Blog Search</h4>
				                        </div>

										<div class="form-group">
				                            <div class="input-group">
				                                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">

				                                <span class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a></span>
				                            </div>
				                        </div>

				                        <br>

				                        <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></p>

				                        <p><a href="#">Non, magni, sequi. Explicabo illum quas debitis ut.</a></p>

				                        <p><a href="#">Vatae expedita deleniti optio ex adipisci . </a></p>

				                        <p><a href="#">Soluta non modi dolorem voluptates dolor laborum.</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>

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

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>