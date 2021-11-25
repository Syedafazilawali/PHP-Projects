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
							<li><a href="index.php" class="active">Home</a></li>

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
									<li><a href="blog.php">Blog</a></li>
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
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" src="images/slider-image-1-1920x700.jpg" alt="First slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="images/slider-image-2-1920x700.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="images/slider-image-3-1920x700.jpg" alt="Third slide">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>

						<br>
						<br>

						<div class="inner">
							<!-- About Us -->
							<header id="inner">
								<h1>Find your new book!</h1>
								<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
							</header>

							<br>

							<h2 class="h2">Featured Products</h2>

							<!-- Products -->
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/images.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$300.00</del> <strong>$200.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/novels.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$150.00</del> <strong>$100.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/story book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$100.00</del> <strong>$70.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style4">
									<span class="image">
										<img src="images/g.k book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$200.00</del> <strong>$130.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style5">
									<span class="image">
										<img src="images/quiz book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$450.00</del> <strong>$350.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style6">
									<span class="image">
										<img src="images/journal.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$50.00</del> <strong>$30.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
							</section>

							<p class="text-center"><a href="products.php">More Books &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>
							
							<br>

							<h2 class="h2">Testimonials</h2>
							
							<div class="row">
								<div class="col-sm-6 text-center">
									<p class="m-n"><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus mollitia, debitis architecto recusandae? Quidem ipsa, quo, labore minima enim similique, delectus ullam non laboriosam laborum distinctio repellat quas deserunt voluptas reprehenderit dignissimos voluptatum deleniti saepe. Facere expedita autem quos."</em></p>

									<p><strong> - John Doe</strong></p>
								</div>

								<div class="col-sm-6 text-center">
									<p class="m-n"><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus mollitia, debitis architecto recusandae? Quidem ipsa, quo, labore minima enim similique, delectus ullam non laboriosam laborum distinctio repellat quas deserunt voluptas reprehenderit dignissimos voluptatum deleniti saepe. Facere expedita autem quos."</em></p>

									<p><strong>- John Doe</strong> </p>
								</div>
							</div>

							<p class="text-center"><a href="testimonials.php">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

							<br>

							<h2 class="h2">Blog</h2>
							
							<div class="row">
								<div class="col-sm-4 text-center">
									<img src="images/blog-1-720x480.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

									<p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
								</div>

								<div class="col-sm-4 text-center">
									<img src="images/blog-2-720x480.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

									<p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
								</div>

								<div class="col-sm-4 text-center">
									<img src="images/blog-3-720x480.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

									<p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
								</div>
							</div>

							<p class="text-center"><a href="blog.php">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

							
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Contact Us</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>

										<div class="field half">
											<input type="text" name="email" id="email" placeholder="Email" />
										</div>

										<div class="field">
											<input type="text" name="subject" id="subject" placeholder="Subject" />
										</div>

										<div class="field">
											<textarea name="message" id="message" rows="3" placeholder="Notes"></textarea>
										</div>

										<div class="field text-right">
											<label>&nbsp;</label>

											<ul class="actions">
												<li><input type="submit" value="Send Message" class="primary" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section>
								<h2>Contact Info</h2>

								<ul class="alt">
									<li><span class="fa fa-envelope-o"></span> <a href="https://www.gmail.com/">fsfreeonlinebookstore@gmail.com</a></li>
									<li><span class="fa fa-phone"></span>090078601 </li>
									<li><span class="fa fa-map-pin"></span> ABC area karachi Pakistan</li>
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