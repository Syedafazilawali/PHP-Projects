<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>FS Online Book Store</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

  <script src="js/jquery-3.4.1.min.js"></script>

</head>

<?php
session_start();


if(isset($_POST['clear'])){
  unset($_SESSION['cart']);
}



if(!empty($_SESSION['cart'])){
if(isset($_POST['deletebtn'])){
  $id=$_POST['deletebtn'];
  
  
  foreach($_SESSION['cart'] as $varr=>$valuueee){
		
		if($valuueee['ID']==$id){
      $vax=$varr['ID'];
     
      array_splice($_SESSION['cart'],$vax,$vax+1);
           
           
    }	 
    
		}
	}

  }



	

if(isset($_POST['logout'])){
    session_destroy();
    header('location:index.php');
    }




   ?>
    







<body>


<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="callto:+923343651969"><strong>CALL</strong> 090078601</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.facebook.com/"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.twitter.com/"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.linkedin.com/"><i class="ti-linkedin"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.instagram.com/"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
           <?php
           if(empty($_SESSION['username'])){?>

            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="Login/index.php">Login</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="Login/register.php" >register</a></li>
           <?php }
           else{?>
           
           <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="showcart.php"><img style="height:30px" src="images/cart.png"/></a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="Login/membership.php">Membership</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#"><?php echo( $_SESSION['username']);?></a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"><form method="post"><input  class="btn-warning" style="font-size:12px" type="submit" value="Log Out" name="logout"/></form></a></li>
            
           <?php }
           ?>
            
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav id="nav" class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="index.php"><img src="admin/logo.png" height="80px" width="120px" alt="logo"></a>
        <a class="navbar-brand" href="index.php" style="color:white">FS Book Online Store</a>
        
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item @@Home">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="books.php">Books</a>
            </li>
           
            <li class="nav-item @@writter">
              <a class="nav-link" href="writter.php">Writter</a>
            </li>
            <li class="nav-item @@contact">
              <a class="nav-link" href="contact.php">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" >Your Cart</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted"></li>
        </ul>
       </div>
    </div>
  </div>
</section>
<!-- page title  close-->

<!-- Code-->

<div class="container">

<?php if(!empty($_SESSION['cart'])){ ?>
<table class="table table-condensed" >
<tr>
<th width="10%">Title</th>
<th width="10%">Name</th>
<th width="10%">Prize</th>
<th width="10%">Quantity</th>
<th width="10%">Total Prize</th>

<th width="10%">Delete Item</th>
</tr>

<?php
$tprice=0;
foreach($_SESSION['cart'] as $value){?>
<tr>
<td><img style="width:50px;height: 50px" src="<?php echo($value['b_image']);?>"/> </td>
<td><?php echo($value['b_name']);?></td>
<td><?php echo('$'.$value['prize']);?></td>
<td><?php echo($value['quant']);?></td>
<?php 
$prize=$value['prize'];
$tprixe=$prize*$value['quant'];

$tprice=$tprice+$tprixe;
?>
<td><?php echo('$'.$tprixe);?></td>
<form method="POST">
<td><button name="deletebtn" style="background-color: transparent;color: red;border: 0px;" value="<?php echo($value['ID'])?>">Delete</button></td>
</form>
</tr>
<?php }?>
</table>


<?php
    

if(isset($_POST['addtocart']) ){

if($_POST['address']!=''){
$con=mysqli_connect('localhost','root','','ebook');

$i=0;
$address=$_POST['address'];
$Uid=uniqid();
$userid=$_SESSION['userid']; 
$email=$_SESSION['email']; 
$date=date("Y/m/d");
$t_prive=0;

foreach($_SESSION['cart'] as $key=>$value){
  $t=$value["prize"]*$value["quant"];
  $t_prive=$t_prive+$t;
$BID=$value["ID"];
$p=$value["prize"];
$q=$value["quant"];
$tp=$value["prize"]*$value["quant"];

  $q="insert into orderdetail values(0,'$Uid','$BID','$p','$q','$tp')";
  
  $r=$con->query($q);
  


   }

   $q1="insert into b_order values(0,'$Uid','$userid','$email','$date','$address','$t_prive',0)";
   
  $result=$con->query($q1);
  
  if($result){
    
  unset($_SESSION['cart']);
  
  echo "<script>
 alert('Your order has been recieve');
  </script>
  ";
  echo '<script>
  window.location.href = "index.php";
  </script>
  ';
  }

  }
  else{
    
   
  echo "<script>
  alert('Enter Address');
  </script>";
  
  }
    
}
    
?>











<form method="POST">
<div class="row">

<div class="col-sm-3">
<br>

<input type="submit" class="btn btn-danger" name="clear" value="Clear Cart"/>

</div>
<div class="col-sm-5">
<br>

<textarea  rows="5" cols="35" placeholder="Enter the complete Address Where you want to Deliver" name="address"></textarea>

</div>

<div class="col-sm-4">
  
<h5>Your Total Price is : <?php echo('$'.$tprice); ?></h5>

<input type="submit" class="btn btn-primary" name="addtocart" value="Check Out"/>

</div>


</div></form>
<br>
<?php }
else{
?>

<div class=" container">
  <div>
    <h1>Cart is Empty</h1>
  </div>
  <br/>
  <div>
    <a class="btn btn-primary" href="books.php">Go To Books</a>
  </div>
</div>

<?php
}
?>


</div>
<!-- Code close-->




<!-- footer -->
<footer>
 
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" height="80px" width="120px" src="images/sdfsdfsf.png" height="" alt="logo" ></a>
          <ul class="list-unstyled">
            <li class="mb-2">Aptech FB area naseerabad, karachi, Pakistan</li>
            <li class="mb-2">090078601</li>
            <li class="mb-2">090078601</li>
            <li class="mb-2">ABC@gmail.com</li>
          </ul>
        </div>
        <!-- company -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5 Social">Social Media</h4>
          <ul class="list-unstyled">
            <li class="mb-3 ti-facebook"><a class="text-color" href="https://www.facebook.com/"> Facebook</a></li>
            <li class="mb-3 ti-instagram"><a class="text-color" href="https://www.instagram.com/"> instagram</a></li>
            <li class="mb-3 ti-twitter-alt"><a class="text-color" href="https://twitter.com/"> Twitter</a></li>
          </ul>
        </div>
       
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">Pages</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="./index.php">Home</a></li>
            <li class="mb-3"><a class="text-color" href="about.php">About</a></li>
            <li class="mb-3"><a class="text-color" href="writter.php">Writer</a></li>
            <li class="mb-3"><a class="text-color" href="contact.php">Contact Us</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">RECOMMEND</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="books.php">Books</a></li>
            <li class="mb-3"><a class="text-color" href="showcart.php">Cart</a></li>
              </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>


</body>
</html>