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

						<li><a href="products.php" class="dropdown-toggle">Products</a>
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
 <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        
                        <a href="cart.php"  class="btn btn-dark pull-right">Add to cart</a>
                        
                    </div>
        </div>
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Products</h1>

							<div class="image main">
								<img src="images/banner-image-6-1920x500.jpg" class="img-fluid" alt="" />
							</div>

							<!-- Products COMICS -->
                             <strong><center><h1>COMICS</h1></center></strong>
							<section class="tiles">
                           
								<article class="style1">
									<span class="image">
										<img src="images/images.jpg" alt="" />
									</span>
									<a href="list of products.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$300.00</del> <strong>$200.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/images.jpg" alt="" />
									</span>
									<a href="list of products.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$150.00</del> <strong>$100.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/images.jpg" alt="" />
									</span>
									<a href="list of products.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$19.00</del> <strong>$11.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style4">
									<span class="image">
										<img src="images/images.jpg" alt="" />
									</span>
									<a href="list of products.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$130.00</del> <strong>$100.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style5">
									<span class="image">
										<img src="images/images.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$120.00</del> <strong>$80.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style6">
									<span class="image">
										<img src="images/images.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$140.00</del> <strong>$100.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
							</section>
                            <BR>
                            <!-- Products NOVELS -->
                            <strong><center><h1>NOVELS</h1></center></strong>
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
										<img src="images/novels.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$140.00</del> <strong>$120.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/novels.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$99.00</del> <strong>$50.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style4">
									<span class="image">
										<img src="images/novels.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$130.00</del> <strong>$100.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style5">
									<span class="image">
										<img src="images/novels.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$170.00</del> <strong>$100.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style6">
									<span class="image">
										<img src="images/novels.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$200.00</del> <strong>$170.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
							</section>
                            <BR>
                            <!-- Products story books -->
                            <strong><center><h1>STORY BOOKS</h1></center></strong>
							<section class="tiles">
                            
								<article class="style1">
									<span class="image">
										<img src="images/story book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$100.00</del> <strong>$70.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/story book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$70.00</del> <strong>$50.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/story book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$80.00</del> <strong>$40.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style4">
									<span class="image">
										<img src="images/story book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$90.00</del> <strong>$70.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style5">
									<span class="image">
										<img src="images/story book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$70.00</del> <strong>$90.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style6">
									<span class="image">
										<img src="images/story book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$150.00</del> <strong>$80.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
							</section>
						</div>
					</div>
                    <BR>
                    <!-- Products G.K BOOKS -->
                    <strong><center><h1>GENERAL KNOWLEGDE BOOKS</h1></center></strong>
                   
							<section class="tiles">
                            
                            
								<article class="style1">
									<span class="image">
										<img src="images/g.k book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$200.00</del> <strong>$130.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/g.k book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$100.00</del> <strong>$50.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/g.k book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$120.00</del> <strong>$60.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style4">
									<span class="image">
										<img src="images/g.k book.jpg"alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$150.00</del> <strong>$100.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style5">
									<span class="image">
										<img src="images/g.k book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$150.00</del> <strong>$100.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style6">
									<span class="image">
										<img src="images/g.k book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$70.00</del> <strong>$40.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
							</section>
<BR>
<!-- Products QUIZ BOOKS -->
<strong><center><h1>QUIZ BOOKS</h1></center></strong>
							<section class="tiles">
                            
								<article class="style1">
									<span class="image">
										<img src="images/quiz book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$450.00</del> <strong>$350.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/quiz book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$100.00</del> <strong>$80.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/quiz book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$60.00</del> <strong>$30.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style4">
									<span class="image">
										<img src="images/quiz book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$180.00</del> <strong>$120.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style5">
									<span class="image">
										<img src="images/quiz book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$100.00</del> <strong>$170.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style6">
									<span class="image">
										<img src="images/quiz book.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$200.00</del> <strong>$150.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
							</section>
                            <BR>
                            <!-- Products JOURNALS -->
                            <strong><center><h1>JOURNALS</h1></center></strong>
							<section class="tiles">
                            
								<article class="style1">
									<span class="image">
										<img src="images/journal.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$50.00</del> <strong>$30.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/journal.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$55.00</del> <strong>$30.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/journal.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$60.00</del> <strong>$40.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style4">
									<span class="image">
										<img src="images/journal.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$55.00</del> <strong>$70.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style5">
									<span class="image">
										<img src="images/journal.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$100.00</del> <strong>$88.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style6">
									<span class="image">
										<img src="images/journal.jpg" alt="" />
									</span>
									<a href="product-details.php">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$120.00</del> <strong>$70.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
							</section>
                            <BR>
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