  <!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>FS Online Book store</title>
  <?php
session_start();
if(isset($_POST['logout'])){
  session_destroy();
  header('location:contact.php');
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
<!--Jquery link-->

<script src="js/jquery-3.4.1.min.js"></script>

</head>

<body>

  <script>
  $(document).ready(function(){
    $('#btn').click(function(e){    
     e.preventDefault();
      if($('#name').val()!='' && $('#mail').val()!='' && $('#subject').val()!='' && $('#message').val()!=''){
     
      var name=$('#name').val();
      var mmail=$('#mail').val();
      var sub=$('#subject').val();
      var msg=$('#message').val();
      
        if(IsEmail(mmail)==false){
                alert('invalid_email');
                return false;
            }
   else{
    $.get('main.php',{Name:name,Email:mmail,Sub:sub,Msg:msg,method:'contact'},function(data){
      $('#cform').each(function() { this.reset() });
      alert(data);
    });

   }
      }
      else{
        alert('Fil All th Field');
      }
    });

    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
    }
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
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://facebook.com/"><i class="ti-facebook"></i></a></li>
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
            <li class="nav-item @@books">
              <a class="nav-link" href="books.php">Books</a>
            </li>
           
            <li class="nav-item @@writter">
              <a class="nav-link" href="writter.php">Writter</a>
            </li>
            <li class="nav-item active">
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

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Contact Us</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Do you have other questions? Don't worry, there aren't any dumb questions. Just fill out the form below and we'll get back to you as soon as possible.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- contact -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Contact Us</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 mb-4 mb-lg-0">
        <form id="cform" >
          <input type="text" maxlength="20" class="form-control mb-3" id="name" name="name" placeholder="Your Name">
          
          <input type="email"maxlength="40" class="form-control mb-3" id="mail" name="mail" placeholder="Your Email">
         
          <input type="text" maxlength="100" class="form-control mb-3" id="subject" name="subject" placeholder="Subject">
          
          <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message"></textarea>
         
          <input type="submit" value="Send Message" id="btn" class="btn btn-primary"/>
        </form>
      </div>
      <div class="col-lg-5">
        <p class="mb-5">Contact us pages are often the go-to for a new visitor on a mission. It’s where they go when they have a question and truly want to speak to an individual at your organization.
<br>
They exist to serve the user with the purpose of providing them with information on how they can get in touch with you.
<br>
The goal of every contact us page is to convert by clearly and effectively presenting the method(s) of getting in touch with a company as quickly as possible.</p>
        <a href="cell:+923343651969" class="text-color h5 d-block">090078601</a>
        <a href="mailto:yourmail@email.com" class="mb-5 text-color h5 d-block">FSOnlinebookstore@gmail.com</a>
        <p>Aptech FB area<br>naseerabad</p>
      </div>
    </div>
  </div>
</section>
<!-- /contact -->

<!-- gmap -->
<section class="section pt-0">
  <!-- Google Map -->
  <div id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758"></div>
</section>
<!-- /gmap -->


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