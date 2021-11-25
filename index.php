<!DOCTYPE html>
<html lang="zxx">

<head>
 <script src="js/jquery-3.4.1.min.js"></script>
  
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
  <!--<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
-->
</head>

<body>
  
<?php
 session_start(); 
 if(!isset($_SESSION['membership'])){
  $_SESSION['membership']=0;
 }
 if(isset($_POST['logout'])){
   session_destroy();
   header('location:index.php');
   }

?>
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
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item @@books">
              <a class="nav-link" href="books.php">Books</a>
            </li>
           
            <li class="nav-item @@writter">
              <a class="nav-link" href="writter.php">Writer</a>
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
<div id="main"></div>
<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="images/banner/banner-1.jpg">
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Order now Your favourite Book</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">A service dedicated to students of the University of London's Distance learning community. We provide online resources, professional support and guidance to all our students whenever, and from wherever they have chosen to study.
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
            <a href="books.php" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Go To Books</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Download PDF and Read anywhere</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Borrow and read free ebooks, audiobooks, and magazines from your library using your phone or tablet
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
            <a href="books.php" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Go To Books</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Your bright future is our mission</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4"> Your vision is your most important dream or mental picture. It can also be a set of dreams and long-term goals. A vision defines the optimal desired future state; it tells of what you would like to achieve over a longer time. Vision can be your personal “why” or the organization’s internal purpose of existence.</p>
          
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /hero slider -->

<!-- banner-feature -->
<section class="bg-gray">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-xl-4 col-lg-5 align-self-end">
        <img class="img-fluid w-100" src="images/1.png"   alt="banner-feature">
      </div>
      <div class="col-xl-8 col-lg-7">
        <div class="row feature-blocks bg-gray justify-content-between">
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Member News</h3>
            <p>For our members. If your purchase is more than $100 then you'll receive a surprise gift from us.</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Our Notice Board</h3>
            <p>Hang on tight because new books are coming very soon with highly discounted price for you</p>
          </div>





          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Our Famous Books</h3>
            <p>We have variety of outstanding and remarkable books like THE KITE RUNNER, THE GREAT QUIZ BOOKS, THE STORY BOOKS and much more....... </p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-write mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Writer</h3>
            <p>Writers' texts are published across a range of media. Skilled writers who are able to use language to express ideas well, often contribute significantly to the cultural content of a society.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /banner-feature -->

<!-- about us -->
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title">About Library</h2>
        <p>I declare after all there is no enjoyment like reading! How much sooner one tires of any thing than of a book! -- When I have a house of my own, I shall be miserable if I have not an excellent library. </p>
        <p>A library is a curated collection of sources of information and similar resources, selected by experts and made accessible to a defined community for reference or borrowing. It provides physical or digital access to material, and may be a physical location or a virtual space, or both.</p>
        <a href="about.php" class="btn btn-primary-outline">Learn more</a>
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <img class="img-fluid w-100" src="images/about/about-us.jpg" alt="about image">
      </div>
    </div>
  </div>
</section>
<!-- /about us -->

<!-- courses -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">New Books</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          
        </div>
      </div>
    </div>
    <!-- course list -->
<div class="row justify-content-center">


<?php 
$con=mysqli_connect('localhost','root','','ebook');

$q="select * from books order by ID desc";
$Result=$con->query($q);
$i=0;
foreach($Result as $row){

?>



  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" height="400px" width="300px" src="<?php echo($row['B_Image']);?>" alt="course thumb">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i><?php echo($row['Date']);?></li>
        </ul>
        <a href="course-single.html">
          <h4 class="card-title"><?php echo($row['B_Name']);?></h4>
        </a>
        <p class="card-text mb-4"><?php echo($row['Description']);?></p>
        <a href="singlebook.php?B_ID=<?php echo($row['ID']);?>" class="btn btn-primary btn-sm">Download/More Info</a>
      </div>
    </div>
  </div>


  <?php
  $i++;
  if($i==3){
    break;  
  }
}
  ?>



<!-- courses -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Famous book</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          
        </div>
      </div>
    </div>
  <!-- course item -->
  <div class="row">
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow" >
      <img class="card-img-top rounded-0" height="400px" width="300px" src="images/books/1571811083.png" alt="course thumb">
     
    </div>
  </div>
  <!-- course item --> 
  <div class="col-lg-8 col-sm-8 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow" >
    <div class="card-body">
          <h4 class="card-title">Darkest Dungeon</h4>
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>12-10-2019</li>
          <br><br>
        <p class="card-text mb-4"> Darkest Dungeon is a gothic roguelike RPG dungeon crawler about the psychological stresses of adventuring. You will lead a band of four heroes on a perilous side-scrolling descent, dealing with a prodigious number of threats to their bodily health, and worse, a relentless assault on their mental fortitude! Five hundred feet below the earth you will not only fight unimaginable foes, but famine, disease.</p>
          <p class="card-text mb-4"> Darkest Dungeon is a gothic roguelike RPG dungeon crawler about the psychological stresses of adventuring. You will lead a band of four heroes on a perilous side-scrolling descent.</p>
          
         </div>
    </div>
  </div>

  </div>

</div>
<!-- /course list -->
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="courses.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /courses -->

<!-- cta -->
<section class="section bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h6 class="text-white font-secondary mb-0">Click to Join the our Membership</h6>
        <h2 class="section-title text-white">Join our Membership </h2>
        <a href="Login/membership.php" class="btn btn-secondary">Membership</a>
      </div>
    </div>
  </div>
</section>
<!-- /cta -->

<!-- success story -->
<section class="section bg-cover" data-background="images/backgrounds/success-story.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-4 position-relative success-video">
        <a class="play-btn venobox" href="https://www.youtube.com/watch?v=_p6Y1caQazk" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5">
          <h2 class="section-title">Top Ten books</h2>
          <p>Literary critics, historians, avid readers, and even casual readers will all have different opinions on which novel is truly the “greatest book ever written.” Is it a novel with beautiful, captivating figurative language? Or one with gritty realism? A novel that has had an immense social impact? Or one that has more subtly affected the world? Here is a list of 12 novels that, for various reasons, have been considered some of the greatest works of literature ever written.</p>
          <p>A few months back, one of our customers sent us a special request for a list of 10 books we felt everyone absolutely must read in his or her lifetime.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->



<!-- teachers -->

      <!-- teacher -->
      
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title">About writer</h2>
        <p>William Shakespeare was an English playwright, poet, and actor, widely regarded as the greatest writer in the English language and the world's greatest dramatist. His plays have been translated into every major living language and are performed more often than those of any other playwright. Shakespeare produced most of his known works between 1589 and 1613. Many of Shakespeare's plays were published in editions of varying quality and accuracy in his lifetime.
 </p>
        <p>However, in 1623, two fellow actors and friends of Shakespeare's, John Heminges and Henry Condell, published a more definitive text known as the First Folio, a posthumous collected edition of Shakespeare's dramatic works that included all but two of his plays. The volume was prefaced with a poem by Ben Jonson, in which Jonson presciently hailed Shakespeare in a now-famous quote as «not of an age, but for all time».</p>
        <a href="about.php" class="btn btn-primary-outline">Learn more</a>
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <img class="img-fluid w-100" src="images/william-shakespeare.jpg" alt="about image">
      </div>
    </div>
  </div>
</section>
  <!-- /teachers -->


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
            <li class="mb-2">ABC@gmail.com.com</li>
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