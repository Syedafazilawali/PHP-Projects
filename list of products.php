<?php
include ('db.php');
session_start();
$query = "select * from product";
$row = mysqli_query($con,$query);
$totalrow = mysqli_num_rows($row);


	if ($totalrow != 0)
	{
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
                           

        <table border="1" align="center" style="text-align:center" width="100%">
        <br>
        <br>
        <tr>
        <th>product_id</th>
        <th>product_name</th>
        <th>product_price</th>
         <th>product_image</th>
        <th>product_code</th>
        
        
        

        </tr>
        
        <?php
		
		while($data = mysqli_fetch_assoc($row))
		{
			echo "<tr>
			<td>". $data['product_id']."</td>
			<td>". $data['product_name']."</td>
			<td>". $data['product_price']."</td>
			<td><img src='$data[product_image]' height='150' width='150'.</td>
			<td>". $data['product_code']."</td>			
			</tr>";
		}
	}
		else
		{
			echo"No Records Found";
			}
		
?>
</table>
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
<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>
</body>
</html>