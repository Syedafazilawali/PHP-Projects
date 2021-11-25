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
                        <li><a href="product insert.php" class="dropdown-toggle">Products insert</a>
                        </li>
                        <li><a href="admin logout.php">Logout</a></li>
					</ul>
				</nav>
                <div id="main">
						<div class="inner">
							<h1>Edit</h1>
                           <button type="submit" name="Edit" value="submit" class=" btn btn-success"><a href="list of products.php">List of products</button></a>
<?php
error_reporting(0);
$product_id=$_GET['product_id'];
$product_name=$_GET['product_name'];
$product_image=$_GET['product_image'];
$product_price=$_GET['product_price'];
$product_code=$_GET['product_code'];

if(isset($_POST['updatebtn']))
{	
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$image_name=$_FILES['product_image']['name']; //name of image
	    $temp_name=$_FILES['product_image']['tmp_name']; //temp location
	    $image_type=$_FILES['product_image']['type']; //image type
	    $image_size=$_FILES['product_image']['size'];//image size
	    $Folder="product_image/";
	
$product_price=$_POST['product_price'];
$product_code=$_POST['product_code'];


if(strtolower($image_type)=="image/jpg" || strtolower($image_type)=="image/jpeg" || strtolower($image_type)=="image/png")
	{
		
		
	
	$Folder="product_image/".$image_name;
	
	
	$result=mysqli_query($con,"update product set product_name = '$product_name', product_image = '$Folder', product_price = '$product_price', product_code = '$product_code' where product_id = '$product_id'");	
	$run = mysqli_query($con,$query);
	
	if($result)
	{
		move_uploaded_file($temp_name,$Folder);
		header("location: view.php");
		
	}
	}
	else
	{
		echo "Error!!";
	}
	
}

?>


<form method="post" action="edit.php">

<input type="hidden" name="product_id" value="<?php echo $product_id; ?>">

<label>product_name</label>
<br>
<input type="text" name="product_name"  value="<?php echo $product_name?>"required>
<br>
<label>product_image</label>
<br>
<input type="file" name="product_image"  value"<?php echo $product_image?>"required>
<br>
<label>product_price</label>
<br>
<input type="text" name="product_price" value="<?php echo $product_price?>"required >
<br>
<label>product_code</label>
<br>
<input type="text" name="product_code"  value="<?php echo $product_code?>"required>
<br>
<br>
<input type="submit" name="updatebtn" value="update" class="btn btn-success">

</form>
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
<html>