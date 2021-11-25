<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>FS Online book Store</title>
  <?php
session_start();
if(isset($_POST['logout'])){
  session_destroy();
  header('location:books.php');
  }

?>
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

</head>
<script src="js/jquery-3.4.1.min.js"></script>
<body>

<script>

$(document).ready(function(){

  $('#mcontent').html('');

  
 var row='';
$.get('main.php',{method:'gatallbooks'},function(data){

  var book=JSON.parse(data);
  
   $.each(book,function(i,j){
     
    row+='<div class="col-sm-4">'
    row+='<img style="height:350px" class="card-img-top rounded-0" src='+j.B_Image+' />';
    row+='<div class="card-body">'
    row+='<ul class="list-inline mb-2"><li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>'+j.Date+'</li><br><li class="list-inline-item"><a class="text-color"><h4 style="font-size:15px display:block;text-overflow: ellipsis;width: 250px;overflow: hidden; white-space: nowrap;" class="card-title">'+j.B_Name+'</h4></a></li>'
    row+='<br><li class="list-inline-item"><a class="text-color"><h4 class="card-title">Prize : $'+j.Prize+'</h4></a></li>    </ul>'
    row+='<h1 style="font-size:10px" class="card-text mb-4"><span style="display:block;text-overflow: ellipsis;width: 180px;overflow: hidden; white-space: nowrap;"><b style="font-size:15px">Description: </b>'+j.Description+'</span></h1><a href="singlebook.php?B_ID='+j.ID+'" class="btn btn-primary btn-sm">Order Now / Download</a>'
    
    row+='</div>';
   row+='</div>'; 
    
  });

$('#mcontent').html(row);

});


$( "#search" ).on('keyup', function() {
  
  var sn=$( "#search" ).val();
if(sn!=''){

  $('#mcontent').html('');

$.get('main.php',{method:'searchbooks',Sname:sn},function(data){

  var sbook=JSON.parse(data);
  
  var row2='';
if(sbook!=''){
  $.each(sbook,function(i,j){
    row2+='<div class="col-sm-4">'
    row2+='<img style="height:350px" class="card-img-top rounded-0" src='+j.B_Image+' />';
    row2+='<div class="card-body">'
    row2+='<ul class="list-inline mb-2"><li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>'+j.Date+'</li><br><li class="list-inline-item"><a class="text-color"><h4 style="font-size:15px" class="card-title">'+j.B_Name+'</h4></a></li>'
    row2+='<br><li class="list-inline-item"><a class="text-color"><h4 class="card-title">Prize : $'+j.Prize+'</h4></a></li>    </ul>'
    row2+='<h1 style="font-size:10px" class="card-text mb-4"><span style="display:block;text-overflow: ellipsis;width: 180px;overflow: hidden; white-space: nowrap;"><b style="font-size:15px">Description: </b>'+j.Description+'</span></h1><a href="singlebook.php?B_ID='+j.ID+'" class="btn btn-primary btn-sm">Order Now / Download</a>'
    
    row2+='</div>';
   row2+='</div>';
    
  });

}
else{
  row2+="<div class='container'><h3>No Result Found</h3></div>"
}

  $('#mcontent').html(row2);
  });

}
else{
  $('#mcontent').html(row);
  

}


});


});


</script>  

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="callto:+923343651969"><strong>CALL</strong> 090078601</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.facaebook.com/"><i class="ti-facebook"></i></a></li>
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
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="courses.html">Our Books</a></li>
          <li class="list-inline-item text-white h3 font-secondary "></li>
        </ul>
        <br>
        <p class="text-lighten">You can Order now for your Books and Download the books in PDF file.</p>
        <p class="text-lighten">Order your book With Cash On Delivery Facilities</p>
      </div>
    </div>
  </div>
</section>
<br>
<br>
<!-- /page title -->

  
<!-- courses -->
 <!--
<section class="section">
  <div class="container">
  
 < course item cancel
 <div class="row justify-content-center" >
 <div class="mb-5" >
 <div class=""></div>
 </div>
</div>
 /course list 
  </div>
</section>
-->
<!-- /courses -->
<div class="container row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<input type="text" maxlength="20" class="form-control mb-3" id="search" style="width:100%;margin-left:30px;" placeholder="Search Books">
</div >
</div>

<div class="container"> 
<div class="row" id="mcontent">

</div>
</div>


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