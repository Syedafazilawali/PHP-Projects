<?php
include('db.php');

$query = "select * from registration_tb";
$row = mysqli_query($con,$query);
$totalrow = mysqli_num_rows($row);


	if ($totalrow != 0)
	{
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
							<h1>List of Client</h1>
        <table border="1" align="center" style="text-align:center" width="50%">
        
        <tr>
        <th>Id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>fathername</th>
        <th>emailaddress</th>
        <th>city</th>
        <th>mobilenumber</th>
        <th>password</th>
        
        

        </tr>
        
        <?php
		
		while($data = mysqli_fetch_assoc($row))
		{
			echo "<tr>
			<td>". $data['id']."</td>
			<td>". $data['firstname']."</td>
			<td>". $data['lastname']."</td>
			<td>". $data['fathername']."</td>
			<td>". $data['emailaddress']."</td>
			<td>". $data['city']."</td>
			<td>". $data['mobilenumber']."</td>
			<td>". $data['password']."</td>
			
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