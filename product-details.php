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
									<li><a href="blog.php">Blog</a></li>
									<li><a href="testimonials.php">Testimonials</a></li>
									<li><a href="terms.php">Terms</a></li>
								</ul>
							</li>

							<li><a href="contact.php">Contact Us</a></li>
                            <li><a href="logout.php">Logout</a></li>
						</ul>
					</nav>
                    <?php
					$product_id=$_GET['product_id'];
					$product_name=$_GET['product_name'];
					$product_price=$_GET['product_price'];
					$product_image=$_GET['product_image'];
					$product_code=$GET['product_code'];
					
					$result=mysqli_query($con,)
					?>
				<!-- Main -->
                	<div id="main">
						<div class="inner">
						
							<h1>Lorem ipsum dolor sit amet <span class="pull-right"><del>$99.00</del> $79.00</span></h1>
							
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-5">
										<img src="images/images.jpg" class="img-fluid" alt="">
									</div>

									<div class="col-md-7">
										<p> Quas qui, repellendus ullam, quam possimus ducimus earum!</p>

										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, iste neque, ut recusandae quibusdam perferendis qui modi aliquam quaerat molestiae.</p>

										<div class="row">
							                <div class="col-sm-4">
														                </div>

							                <div class="col-sm-8">
							                  	<td> Quantity</td>
                                                <td><input type="text" name="qty" class="form-control col-lg-6"></td>
						<br>	                    <div class="col-sm-6">
							                      		<input type="submit" class="primary" value="Add to Cart" name="addcart">
								                    </div>
							                  	</div>
							                </div>
							            </div>
									</div>
								</div>
							</div>
                            

							<br>
							<br>

							<div class="container-fluid">
								<h2 class="h2">Similar Products</h2>

								<!-- Products -->
								<section class="tiles">
									<article class="style1">
										<span class="image">
											<img src="images/novels.jpg" alt="" />
										</span>
										<a href="product-details.php">
											<h2>Lorem ipsum dolor sit amet, consectetur</h2>
											
											<p><del>$150.00</del> <strong>$100.00</strong></p>

											<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
										</a>
									</article>

									<article class="style2">
										<span class="image">
											<img src="images/story book.jpg" alt="" />
										</span>
										<a href="product-details.php">
											<h2>Lorem ipsum dolor sit amet, consectetur</h2>
											
											<p><del>$100.00</del> <strong>$70.00</strong></p>

											<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
										</a>
									</article>

									<article class="style3">
										<span class="image">
											<img src="images/g.k book.jpg" alt="" />
										</span>
										<a href="product-details.php">
											<h2>Lorem ipsum dolor sit amet, consectetur</h2>
											
											<p><del>$200.00</del> <strong>$130.00</strong></p>

											<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
										</a>
									</article>
								</section>
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