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
							
							<li><a href="checkout.php">Checkout</a></li>

							<li>
								<a href="#" class="dropdown-toggle">About</a>

								<ul>
									<li><a href="about.php">About Us</a></li>
									<li><a href="blog.php"class="active">Blog</a></li>
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
							<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>

							<div class="image main">
								<img src="images/blog-fullscreen-1-1920x700.jpg" class="img-fluid" alt="" />
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium maxime enim rem laborum provident culpa, nemo illo voluptatem vero similique, sapiente dolorum tempore, eos facere laboriosam excepturi nisi facilis nulla!</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, nostrum ad rerum odio expedita unde facilis, harum praesentium quibusdam veniam officiis totam, iusto esse cupiditate fugiat illo a dicta quod. Voluptatibus nam sapiente repellat accusamus ex quam eligendi inventore nemo.</p>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque ducimus numquam, ad reprehenderit quisquam nobis suscipit reiciendis consequuntur officia earum, assumenda illo maiores! Voluptates harum blanditiis non amet ex dignissimos expedita quis provident dolore voluptatum laudantium quam in nemo voluptatibus, fugit facilis voluptate, commodi quisquam corporis sed possimus. Sit, voluptate?</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam mollitia, obcaecati aperiam temporibus dicta voluptates, incidunt quibusdam eos a debitis molestias dolores quas. Culpa itaque dignissimos, nulla sequi velit repellat?</p>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Leave a comment</h2>
								
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>

										<div class="field half">
											<input type="text" name="email" id="email" placeholder="Email" />
										</div>

										<div class="field">
											<textarea name="message" id="message" rows="3" placeholder="Your message"></textarea>
										</div>

										<div class="field text-right">
											<label>&nbsp;</label>

											<ul class="actions">
												<li><input type="submit" value="Submit" class="primary" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section>

								<h2>Share This</h2>

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