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

<body>

<?php
session_start();
if(isset($_POST['logout'])){
    session_destroy();
    header('location:index.php');
    }
 

if(!empty($_SESSION['username'])  ){
$membershipcheck=$_SESSION['membership'];
  $bid=$_GET['B_ID'];

?>


<script>
$(document).ready(function(){
var bid = '<?php echo $bid; ?>';
var membershipcheck = '<?php echo $membershipcheck; ?>';
$('#bookcontent').html('');

$.get('main.php',{B_ID:bid,method:'singlebook'},function(book){
if(book){
    var row='';
    var cat;
    var error="'Buy a Membership for download this Pdf'";
    var error2="'Buy a Membership to Preview the Book '";
    var sbook=JSON.parse(book);
    
    $.each(sbook,function(i,j){
      type=j.Type;
      row+='<div class="col-md-5 mb-5"><img class="img-fluid w-100" src='+j.B_Image+' alt="teacher"></div>';
      row+='<div class="col-md-6 mb-5">'
      row+='<h3>'+j.B_Name+'</h3>'
      row+='<h6 class="text-color">Description</h6><p class="mb-5">'+j.Description+'</p>'
      row+='<div class="row">'
      row+=' <div class="col-md-6 mb-5 mb-md-0">'
      row+=' <h4 class="mb-4">Detail: </h4>'

      row+='<ul class="list-unstyled">'
      row+='<li class="mb-3"><i class=" mr-2">PRIZE</i> : <b>$ '+j.Prize+'</b></li>'
      row+='<li class="mb-3"><i class=" mr-2">Issue Date</i> :<b> '+j.Date+'</b></li>'
      row+='</ul>'
      row+='</div>'




      row+=' <div class="col-md-6 mb-5 mb-md-0">'
      row+=' <h4 class="mb-4">Action: </h4>'

      row+='<ul class="list-unstyled">'
      
      if(type==0){
        row+='<li class="mb-3"><a class="btn btn-success" target="_blank" href="preview.php?Path='+j.Pdf+'" >Preview</a></li>'
      
      row+='<li class="mb-3"><a class="btn btn-info" href='+j.Pdf+' download>Free DOWNLOAD PDF</a></li>'
      }
      else if(type==1 && membershipcheck==1){
        row+='<li class="mb-3"><a class="btn btn-info" target="_blank" href="preview.php?Path='+j.Pdf+'" >Preview</a></li>'
      
      row+='<li class="mb-3"><a class="btn btn-info"  href='+j.Pdf+' download> DOWNLOAD PDF</a></li>'
     
      }
      else{
        row+='<li class="mb-3"><a class="btn btn-success" onclick="alert('+error2+')" >Preview</a></li>'
        row+='<li class="mb-3"><a class="btn btn-info" onclick="alert('+error+')" >DOWNLOAD PDF</a></li>'
      
      }
      row+='<li class="mb-3"  ><h6 style="width:245px" class="" >Quantity</h6></li>'
      row+='<li class="mb-3"><input type="number" id="quant" value="1" min="1"/></li>'
    
      row+='<li class="mb-3"  ><h6 style="width:245px" class="" > Order  Hard Copy</h6></li>'
      row+='<li class="mb-3"  ><button style="width:245px" class="btn btn-primary" onclick="gocart()" value="'+j.ID+'" id="btnn"> Add to Cart</button></li>'
      row+='</ul>'
       
  
      row+='</div>'
      row+='</div>';



    });
    $('#bookcontent').html(row);

}
else{
    alert('Fail To find Book');
    window.location.href="books.php";
}

});


});
function gocart(){

var idd=$('#btnn').val();
  var q=$("#quant").val();

window.location.href='addtocart.php?B_ID='+idd+'&quant='+q+'';

}

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
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" >Our Book</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted"></li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- teacher details -->

<br>  
<div class="container">
    <div class="row" id="bookcontent" >

      


      
         
        
            
             




      
    





    </div>





  </div>
<!-- /teacher details -->



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
<?php }
else{
    
 
  echo "<script>
alert('Login First');
window.location.href='Login/index.php';
</script>";

}
?>
</body>
</html>