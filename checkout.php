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
							<a href="index.php" class="logo">
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
						<li><a href="index.php" >Home</a></li>

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

						<li><a href="checkout.php" class="active">Checkout</a></li>

						<li>
							<a href="#" class="dropdown-toggle">About</a>

							<ul>
								<li><a href="about.php">About Us</a></li>
								<li><a href="blog.php" >Blog</a></li>
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
							<h1>Checkout</h1>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<select>
		                                       <option value="">-- Choose Title--</option>
		                                       <option value="dr">Dr.</option>
		                                       <option value="miss">Miss</option>
		                                       <option value="mr">Mr.</option>
		                                       <option value="mrs">Mrs.</option>
		                                       <option value="ms">Ms.</option>
		                                       <option value="other">Other</option>
		                                       <option value="prof">Prof.</option>
		                                       <option value="rev">Rev.</option>
											</select>
										</div>

										<div class="field half">
											<input type="text" name="field-2" id="field-2" placeholder="Name">
										</div>

										<div class="field half">
											<input type="text" name="field-3" id="field-3" placeholder="Email">
										</div>

										<div class="field half">
											<input type="text" name="field-4" id="field-4" placeholder="Phone">
										</div>

										<div class="field half">
											<input type="text" name="field-5" id="field-5" placeholder="Address 1">
										</div>

										<div class="field half">
											<input type="text" name="field-6" id="field-6" placeholder="Address 2">
										</div>

										<div class="field half">
											<input type="text" name="field-7" id="field-7" placeholder="City">
										</div>

										<div class="field half">
											<input type="text" name="field-8" id="field-8" placeholder="State">
										</div>

										<div class="field half">
											<input type="text" name="field-7" id="field-7" placeholder="Zip">
										</div>

										<div class="field half">
											<select>
		                                       <option value="">-- Choose Country--</option>
		                                       <option value="">-- Choose Country --</option>
		                                       <option value="">-- Choose Country --</option>
		                                       <option value="">-- Choose Country --</option>
											</select>
										</div>

										<div class="field half">

											<select>
		                                       <option value="">-- Choose Payment Method--</option>
		                                       <option value="">-- Choose Payment Method--</option>
		                                       <option value="">-- Choose Payment Method--</option>
		                                       <option value="">-- Choose Payment Method--</option>
											</select>
										</div>

										<div class="field half">
											<input type="text" name="field-9" id="field-9" placeholder="Captcha">
										</div>

										<div class="field">
					                        <div>
												<input type="checkbox" id="checkbox-4"> 
												
												<label for="checkbox-4">
					                            	I agree with the <a href="terms.html" target="_blank">Terms &amp; Conditions</a>
					                        	</label>
											</div>
										</div>


										<div class="field half text-right">
											<ul class="actions">
												<li><input type="submit" value="Finish" class="primary"></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section>
								<h2>Contact Info</h2>

								<ul class="alt">
									<li><span class="fa fa-envelope-o"></span> <a href="#">contact@company.com</a></li>
									<li><span class="fa fa-phone"></span> +1 333 4040 5566 </li>
									<li><span class="fa fa-map-pin"></span> 212 Barrington Court New York, ABC 10001 United States of America</li>
								</ul>

								<h2>Follow Us</h2>

								<ul class="icons">
									<li><a href="https://www.twitter.com/" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="https://www.linkedIn.com/" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								</ul>
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