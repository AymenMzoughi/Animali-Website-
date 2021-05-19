<?php
use PHPMailer\PHPMailer\PHPMailer;
include_once '../Entities/Avis.php';
include_once '../Controller/AvisC.php';
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";
if (
isset($_POST["nom"]) &&
isset($_POST["prenom"]) &&
isset($_POST["note"])
&&isset($_POST["message"])&&
isset($_POST["email"])) 
  { 
  if(!empty($_POST["nom"]) &&
  !empty($_POST["prenom"]) &&
  !empty($_POST["email"])&&
  !empty($_POST["note"])
  &&!empty($_POST["message"])&&($_POST["note"]!="Select")) 
  {$avis = null;
  $avisC = new AvisC();
$avis= new Avis($_POST['message'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['note']);
$avisC->ajouteravis($avis);
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$mail=new PHPMailer();
$mail->IsSMTP();
$mail -> Host="smtp.gmail.com";
$mail ->SMTPAuth=true;
$mail ->Username="animalitn2021@gmail.com";
$mail ->Password='animali123';
$mail ->Port=465;
$mail ->SMTPSecure='ssl';
$mail->isHTML(true);
$mail ->setFrom('animalitn2021@gmail.com','Animali.tn');
$mail->addAddress($_POST["email"]);
$mail->Subject = " A propos votre Avis sur notre site Animali.tn ";
$mail->Body = "Bonjour Madame/Monsieur " .$prenom." ".$nom."  Animali a bien  reçu votre avis pour le ". date("Y/m/d"). "  merci pour votre fidélité et votre confiance . ";
if($mail->send())
	{
	   echo " oui";	}
	else
	{
		echo $mail->ErrorInfo;
	}
  }}

 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from slidesigma.com/themes/html/petitudio/home-v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 14:03:34 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animali- Pet Shop </title>

  <!-- Vendor Stylesheets -->
  <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
  <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/plugins/slick.css">
  <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
  <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">
  <script src="assets/js/formulaire1.js"></script>
  <!-- Icon Fonts -->
  <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome/css/all.min.css">

  <!-- Petitdio Style sheet -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

</head>

<body>

  


  <!-- Aside (Mobile Navigation) -->
  <aside class="andro_aside andro_aside-left">
    <a class="navbar-brand" href="index.html"> <img src="assets/img/logo.png" alt="logo"> </a>

    <ul>
      <li class="menu-item menu-item-has-children">
              <a href="index.html">Home Page</a>
              
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="#">veterinarians</a>
              <ul class="sub-menu">
 
                  <li class="menu-item"> <a href="afficherveto.php">show veterinarians</a> </li>
                    <li class="menu-item"> <a href="afficherconseil.php">show advice</a> </li>
              </ul>
            </li>
           
            <li class="menu-item menu-item-has-children">
              <a href="#">Products</a>
               <ul class="sub-menu">
 
                  <li class="menu-item"> <a href="afficherprodfront.php">show products</a> </li>
              </ul>
              
            </li>
            <li class="menu-item"> <a href="AjouterAvis.php">Notice</a> </li>
    </ul>

  </aside>
  <div class="andro_aside-overlay aside-trigger-left"></div>

  <!-- Header Start -->
  <header class="andro_header header-2 can-sticky">

   <!-- Topheader Start -->
<div class="andro_header-top">
  <div class="container">
    <div class="andro_header-top-inner">
      <ul class="andro_header-top-sm andro_sm">
        <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
      </ul>
      <ul class="andro_header-top-links">
          <li class="menu-item"><a href="compte.php"> My Account </a></li>
            <li class="menu-item menu-item-has-children">
              <a href="#"> <span class="andro_current-currency-text">Currency</span> (TND) </a>
              <ul class="sub-menu sub-menu-left">
                <li> <a href="#">Dinar Tunisien</a> </li>
              </ul>
            </li>
      </ul>
    </div>
  </div>
</div>
<!-- Topheader End -->

    <!-- Middle Header Start -->
    <div class="andro_header-middle">
      <div class="container">
        <nav class="navbar">
          <!-- Logo -->
          <a class="navbar-brand" href="index.html"> <img src="assets/img/logo.png" alt="logo"> </a>

          <!-- Menu -->
          <ul class="navbar-nav">
            
           <li class="menu-item menu-item-has-children">
              <a href="index.html">Home Page</a>
              
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="#">veterinarians</a>
              <ul class="sub-menu">
 
                  <li class="menu-item"> <a href="afficherveto.php">show veterinarians</a> </li>
                    <li class="menu-item"> <a href="afficherconseil.php">show advice</a> </li>
              </ul>
            </li>
           
            <li class="menu-item menu-item-has-children">
              <a href="#">Products</a>
               <ul class="sub-menu">
 
                  <li class="menu-item"> <a href="afficherprodfront.php">show products</a> </li>
              </ul>
              
            </li>
            <li class="menu-item"> <a href="AjouterAvis.php">Notice</a> </li>

          </ul>

          <div class="andro_header-controls">

          <ul class="andro_header-controls-inner">
              <li class="andro_header-panier">
                <a href="panier.php" title="Bag">
                  <i class="flaticon-shopping-basket"></i>
                  <div class="andro_header-panier-content">
                    
                  </div>
                </a>
              </li>
            </ul>

            <!-- Toggler -->
            <div class="aside-toggler aside-trigger-left">
              <span></span>
              <span></span>
              <span></span>
            </div>

          </div>
        </nav>
      </div>
    </div>
    <!-- Middle Header End -->

    <!-- Bottom Header Start -->
    <div class="andro_header-bottom">
      <div class="container">

        <div class="andro_header-bottom-inner">

          <!-- Search Form -->
          <div class="andro_search-adv">
            <form method="post">
              
              </div>
              
            </form>
          </div>

          

        </div>

      </div>
    </div>
    <!-- Bottom Header End -->

  </header>
  <!-- Header End -->

  <!-- Banner Start -->
  <div class="andro_banner banner-2">
    <div class="andro_banner-slider">
      <div class="andro_banner-slider-inner" style="background-image: url('assets/img/banner/1.jpg');">
        <div class="container">
          <div class="andro_banner-slider-text">
            <img src="assets/img/products/8.png" class="img-1" alt="product">
            <p>Use code <strong class="custom-primary">PETFOOD2233</strong> during checkout</p>
            <h1 style="background-image: url('assets/img/cta/3.jpg') "> Organic Cat Food   </h1>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula.</p>
            <a href="afficherprodfront.php" class="andro_btn-custom">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="andro_banner-slider-inner" style="background-image: url('assets/img/banner/2.jpg');">
        <div class="container">
          <div class="andro_banner-slider-text">
            <img src="assets/img/products/14.png" class="img-1" alt="product">
            <p>Use code <strong class="custom-primary">PETFOOD2233</strong> during checkout</p>
            <h1 style="background-image: url('assets/img/cta/2.jpg') "> Organic Exotic Food Flower  </h1>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula.</p>
            <a href="afficherprodfront.php" class="andro_btn-custom">Shop Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner End -->

  


          

          

          </div>
        </div>
        <!-- Sidebar End -->

      </div>

    </div>
  </div>
  <!-- Featured Products End -->
  <!-- FAQ & Contact Form Start -->
  <div class="section pt-0">
    <div class="container">
      <div class="row">

        <div class="col-lg-5 mb-lg-30">

          <div class="section-title">
            <h4 class="title">FAQ</h4>
          </div>

          <div class="accordion with-gap" id="generalFAQExample">
            <div class="card">
              <div class="card-header" data-toggle="collapse" role="button" data-target="#generalOne" aria-expanded="true" aria-controls="generalOne">
                What is Animali?
              </div>

              <div id="generalOne" class="collapse show" data-parent="#generalFAQExample">
                <div class="card-body">
                  Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" data-toggle="collapse" role="button" data-target="#generalTwo" aria-expanded="false" aria-controls="generalTwo">
                Getting Started with Animali
              </div>

              <div id="generalTwo" class="collapse" data-parent="#generalFAQExample">
                <div class="card-body">
                  Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" data-toggle="collapse" role="button" data-target="#generalThree" aria-expanded="false" aria-controls="generalThree">
                Do i have the latest version?
              </div>

              <div id="generalThree" class="collapse" data-parent="#generalFAQExample">
                <div class="card-body">
                  Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" data-toggle="collapse" role="button" data-target="#generalFour" aria-expanded="false" aria-controls="generalFour">
                How many times can I use Animali?
              </div>

              <div id="generalFour" class="collapse" data-parent="#generalFAQExample">
                <div class="card-body">
                  Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" data-toggle="collapse" role="button" data-target="#generalFive" aria-expanded="false" aria-controls="generalFive">
                How to migrate my website?
              </div>

              <div id="generalFive" class="collapse" data-parent="#generalFAQExample">
                <div class="card-body">
                  Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-7">

          <div class="section-title">
            <h4 class="title">  Ajouter un Avis </h4>
          </div>

          <form method="post" >
            <div class="row">
              <div class="form-group col-lg-6">
                <input type="text" placeholder="Prenom" class="form-control" name="prenom" id="prenom">
              </div>
              <div class="form-group col-lg-6">
                <input type="text" placeholder="Nom" class="form-control" name="nom" id="nom" >
              </div>
              <div class="form-group col-lg-6">
                <input type="email" placeholder="Email" class="form-control" name="email" id="email" >
              </div>
              <div class="form-group col-lg-12">
                <textarea name="message" class="form-control" placeholder="Type your message"  id="message" rows="8"></textarea>
              </div>
              <div class="form-group col-lg-12">
              <select class="form-control"  placeholder="rate" name="note" id="note" >
                <option>  Select  </option>
                  <option>1 Star</option>
                  <option>2 Stars</option>
                  <option>3 Stars</option>
                  <option>4Stars</option>
                  </select>
                </div>
            </div>
            <button type="submit" class="andro_btn-custom primary" name="button" onclick="test1()==true;">Send Message</button>
          </form>

        </div>

      </div>
    </div>
  </div>
 


  <!-- Footer Start -->
  <footer class="andro_footer andro_footer-dark">
    <!-- Top Footer -->
    <div class="container">
      <div class="andro_footer-top">
        <div class="andro_footer-logo">
          <img src="assets/img/logo.png" alt="logo">
        </div>
        <div class="andro_footer-buttons">
        </div>
      </div>
    </div>

    <!-- Middle Footer -->
    <div class="andro_footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
          <h5 class="widget-title">Information</h5>
            <ul>
              <li> <a href="index.html">Home</a> </li>
              <li> <a href="afficherveto.php">Show veterinarians</a>  </li>
              <li> <a href="mailto:animalitn2021@gmail.com">Contact</a> </li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title">Categories</h5>
            <ul>
              <li> <a href="afficherprodfront.php">Products animals</a> </li>
             
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title">Others</h5>
            <ul>
            <li> <a href="AjouterAvis.php">Notice</a> </li>
            <li> <a href="checkout.php">Checkout</a> </li>
              <li> <a href="panier.php">Bag</a> </li>

            </ul>
          
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 footer-widget">
            <h5 class="widget-title">Social Media</h5>
            <ul class="social-media">
              <li> <a href="#" class="facebook"> <i class="fab fa-facebook-f"></i> </a> </li>
              <li> <a href="mailto:animalitn2021@gmail.com" class="google"> <i class="fab fa-google"></i> </a> </li>
            </ul>
            <div class="andro_footer-offer">
              <p>Signup and get exclusive offers and coupon codes</p>
              <a href="register.php" class="andro_btn-custom btn-sm shadow-none">Sign Up</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="andro_footer-bottom">
      <div class="container">
        <ul>
          <li> <a href="#">Privacy Policy</a> </li>
          <li> <a href="#">Refund Policy</a> </li>
          <li> <a href="#">Cookie Policy</a> </li>
          <li> <a href="#">Terms & Conditions</a> </li>
        </ul>
        <div class="andro_footer-copyright">
          <p> Copyright © 2021 <a href="#">Yourwebsite</a> All Rights Reserved. </p>
          <a href="#" class="andro_back-to-top">Back to top <i class="fas fa-chevron-up"></i> </a>
        </div>
      </div>
    </div>

  </footer>
  <!-- Footer End -->

  <!-- Vendor Scripts -->
  <script src="assets/js/plugins/jquery-3.4.1.min.js"></script>
  <script src="assets/js/plugins/popper.min.js"></script>
  <script src="assets/js/plugins/waypoint.js"></script>
  <script src="assets/js/plugins/bootstrap.min.js"></script>
  <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/plugins/jquery.slimScroll.min.js"></script>
  <script src="assets/js/plugins/imagesloaded.min.js"></script>
  <script src="assets/js/plugins/jquery.steps.min.js"></script>
  <script src="assets/js/plugins/jquery.countdown.min.js"></script>
  <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
  <script src="assets/js/plugins/slick.min.js"></script>
  <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
  <script src="assets/js/plugins/jquery.zoom.min.js"></script>


  <!-- Petitdio Scripts -->
  <script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from slidesigma.com/themes/html/petitudio/home-v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 14:04:01 GMT -->
</html>
