<?php
use PHPMailer\PHPMailer\PHPMailer;
include_once '../Entities/client.php';
include_once '../Controller/clientC.php';
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";


if (
isset($_POST["CIN"]) &&
isset($_POST["Email"])) 
  { 
  if(!empty($_POST["CIN"]) &&
  !empty($_POST["Email"]))
  {
    $clientC=new clientC();
    $password=$clientC->recupMDP($_POST["CIN"]);
    foreach($password as $PWD){
        $ipwd= $PWD["MDP"];
        $inom= $PWD["Nom"];

    }

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
$mail->addAddress($_POST["Email"]);
$mail->Subject = " A propos votre Avis sur notre site Animali.tn ";
$mail->Body = "Bonjour Madame/Monsieur ".$inom.", votre mot de passe est ".$ipwd." ! ";
if($mail->send())
	{
	   }
	else
	{
		echo $mail->ErrorInfo;
	}
  }}

  header('Location: signin.php');
?>




<!DOCTYPE html>


<html lang="en" dir="ltr">


<!-- Mirrored from slidesigma.com/themes/html/petitudio/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 14:05:20 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Petitdio - Pet Shop HTML Template</title>

  <!-- Vendor Stylesheets -->
  <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
  <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/plugins/slick.css">
  <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
  <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">

  <!-- Icon Fonts -->
  <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome/css/all.min.css">

  <!-- Petitdio Style sheet -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

</head>

<body>

  <!-- Prealoder start -->
  <div class="andro_preloader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>
  <!-- Prealoader End -->

  <!-- Newsletter Modal Start -->
  <div class="modal fade" id="androNewsletterPopup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog andro_newsletter-popup-modal modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <img src="assets/img/ig/3.jpg" alt="newsletter">
          <div class="close-btn close newsletter-popup-trigger" data-dismiss="modal">
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="modal-body">

          <div class="andro_newsletter-popup-text-wrapper">
            <h3>Join Our Newsletter</h3>
            <p>Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere.</p>
          </div>

          <form method="post" class="text-center">
            <div class="form-group">
              <input type="email" placeholder="Email Address" class="form-control" name="newsletter-email" value="">
            </div>
            <button type="submit" class="andro_btn-custom" name="button">Subscribe</button>
            <span class="newsletter-popup-trigger" data-dismiss="modal">No Thanks</span>
          </form>

        </div>
      </div>
    </div>
  </div>
  <!-- Newsletter Modal End -->

  <!-- Quick View Modal Start -->
  <div class="modal fade andro_quick-view-modal" id="quickViewModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">

          <div class="close-btn close-dark close" data-dismiss="modal">
            <span></span>
            <span></span>
          </div>

          <div class="container-fluid">
            <div class="row">
              <div class="col-md-5">
                <img src="assets/img/products/9.png" alt="product">
              </div>
              <div class="col-md-7">

                <div class="andro_product-single-content">

                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <span>4 Stars</span>
                  </div>

                  <h3> Pet Food Meat </h3>

                  <div class="andro_product-price">
                    <span>8$</span>
                    <span>14$</span>
                  </div>

                  <p class="andro_product-excerpt">Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>

                  <form class="andro_product-atc-form">

                    <div class="andro_product-variation-wrapper">
                      <div class="form-group">
                        <select class="form-control" name="amount">
                          <option value="">Select Amount</option>
                          <option value="1">1 Kilo</option>
                          <option value="2">Packets </option>
                          <option value="3">3 Packets </option>
                          <option value="4">4 Packets </option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" name="breed">
                          <option value="">Select a Breed</option>
                          <option value="italian">Italian</option>
                          <option value="egyptian">Egyptian</option>
                        </select>
                      </div>
                    </div>

                    <div class="qty-outter">
                      <a href="product-single.html" class="andro_btn-custom">Buy Now</a>
                      <div class="qty">
                        <span class="qty-subtract"><i class="fa fa-minus"></i></span>
                        <input type="text" name="qty" value="1">
                        <span class="qty-add"><i class="fa fa-plus"></i></span>
                      </div>
                    </div>

                  </form>

                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Quick View Modal End -->

  <!-- Aside (Right Panel) -->
  <aside class="andro_aside andro_aside-right">
    <div class="sidebar">

      <!-- Popular Categories Start -->
      <div class="sidebar-widget widget-categories-icons">
        <h5 class="widget-title">Popular Categories</h5>
        <div class="row">

          <div class="col-lg-6">
            <div class="andro_icon-block text-center has-link">
              <a href="#">
                <i class="flaticon-pawprint-1"></i>
                <h5>Canned Food</h5>
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="andro_icon-block text-center has-link">
              <a href="#">
                <i class="flaticon-snack"></i>
                <h5>Dental Chews</h5>
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="andro_icon-block text-center has-link">
              <a href="#">
                <i class="flaticon-cat"></i>
                <h5>Dry Food </h5>
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="andro_icon-block text-center has-link">
              <a href="#">
                <i class="flaticon-peanut"></i>
                <h5>Extrals </h5>
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="andro_icon-block text-center has-link">
              <a href="#">
                <i class="flaticon-dog-treat"></i>
                <h5>Treats  </h5>
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="andro_icon-block text-center has-link">
              <a href="#">
                <i class="flaticon-dog-bowl"></i>
                <h5>Pea Food  </h5>
              </a>
            </div>
          </div>

        </div>
      </div>
      <!-- Popular Categories End -->

      <!-- Popular Tags Start -->
      <div class="sidebar-widget">
        <h5 class="widget-title">Popular Tags</h5>
        <div class="tagcloud">
          <a href="#">Health</a>
          <a href="#">Canned Food</a>
          <a href="#">Biscuits</a>
          <a href="#">Organic</a>
          <a href="#">Fish Food</a>
          <a href="#">Bird</a>
          <a href="#">Fiber</a>
          <a href="#">Capsules </a>
          <a href="#">Parrot</a>
          <a href="#">Dog</a>
          <a href="#">Cat Food </a>
        </div>
      </div>
      <!-- Popular Tags End -->

    </div>
  </aside>
  <div class="andro_aside-overlay aside-trigger-right"></div>

  <!-- Aside (Mobile Navigation) -->
  <aside class="andro_aside andro_aside-left">
    <a class="navbar-brand" href="index-2.html"> <img src="assets/img/logo.png" alt="logo"> </a>

    <ul>
      <li class="menu-item menu-item-has-children">
        <a href="#">Home Pages</a>
        <ul class="sub-menu">
          <li class="menu-item"> <a href="index-2.html">Home v1</a> </li>
          <li class="menu-item"> <a href="home-v2.html">Home v2</a> </li>
          <li class="menu-item"> <a href="home-v3.html">Home v3</a> </li>
        </ul>
      </li>
      <li class="menu-item menu-item-has-children">
        <a href="#">Blog</a>
        <ul class="sub-menu">
          <li class="menu-item menu-item-has-children">
            <a href="blog-grid.html">Blog Archive</a>
            <ul class="sub-menu">
              <li class="menu-item"> <a href="blog-grid.html">Grid View</a> </li>
              <li class="menu-item"> <a href="blog-list.html">List View</a> </li>
              <li class="menu-item"> <a href="blog-masonry.html">Masonry View</a> </li>
            </ul>
          </li>
          <li class="menu-item"> <a href="post-single.html">Blog Single</a> </li>
        </ul>
      </li>
      <li class="menu-item menu-item-has-children">
        <a href="#">Pages</a>
        <ul class="sub-menu">
          <li class="menu-item"> <a href="about-us.html">About Us</a> </li>
          <li class="menu-item"> <a href="login.html">Login</a> </li>
          <li class="menu-item"> <a href="register.html">Sign Up</a> </li>
          <li class="menu-item"> <a href="checkout.html">Checkout</a> </li>
          <li class="menu-item"> <a href="cart.html">Cart</a> </li>
          <li class="menu-item"> <a href="wishlist.html">Wish List</a> </li>
          <li class="menu-item"> <a href="legal.html">Legal</a> </li>
          <li class="menu-item"> <a href="error.html">Error 404</a> </li>
        </ul>
      </li>
      <li class="menu-item menu-item-has-children">
        <a href="#">Shop Pages</a>
        <ul class="sub-menu">
          <li class="menu-item"> <a href="shop-v1.html"> Shop v1 (Default) </a> </li>
          <li class="menu-item"> <a href="shop-v2.html"> Shop v2 (Full Width) </a> </li>
          <li class="menu-item"> <a href="shop-v3.html"> Shop v3 (No Sidebar) </a> </li>
          <li class="menu-item"> <a href="shop-v4.html"> Shop v4 (List view) </a> </li>
        </ul>
      </li>
      <li class="menu-item"> <a href="contact-us.html">Contact Us</a> </li>
    </ul>

  </aside>
  <div class="andro_aside-overlay aside-trigger-left"></div>

  <!-- Header Start -->
  <header class="andro_header header-1">

    <!-- Topheader Start -->
    <div class="andro_header-top">
      <div class="container">
        <div class="andro_header-top-inner">
          <ul class="andro_header-top-sm andro_sm">
            <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
            <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
            <li> <a href="#"> <i class="fab fa-linkedin-in"></i> </a> </li>
            <li> <a href="#"> <i class="fab fa-youtube"></i> </a> </li>
          </ul>
          <ul class="andro_header-top-links">
            <li class="menu-item"><a href="login.html"> My Account </a></li>
            <li class="menu-item menu-item-has-children">
              <a href="#"> <span class="andro_current-currency-text">Currency</span> (USD) </a>
              <ul class="sub-menu sub-menu-left">
                <li> <a href="#">United States Dollar (USD)</a> </li>
                <li> <a href="#">Kuwait Dinar (KWD)</a> </li>
                <li> <a href="#">Pound Sterling (GBP)</a> </li>
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
          <a class="navbar-brand" href="index-2.html"> <img src="assets/img/logo.png" alt="logo"> </a>

          <!-- Search Form -->
          <div class="andro_search-adv">
            <form method="post">
              <div class="andro_search-adv-cats">
                <span>All Categories</span>

                <div class="sub-menu">
                  <div class="andro_dropdown-scroll">
                    <label>
                      <input type="checkbox" name="category1" value="food">
                      Canned Food
                      <i class="fas fa-check"></i>
                    </label>
                    <label>
                      <input type="checkbox" name="category2" value="home-care">
                      Cat Food 
                      <i class="fas fa-check"></i>
                    </label>
                    <label>
                      <input type="checkbox" name="category3" value="keto">
                      Beef Tomato
                      <i class="fas fa-check"></i>
                    </label>
                    <label>
                      <input type="checkbox" name="category4" value="baskets">
                      Dental Chews
                      <i class="fas fa-check"></i>
                    </label>
                    <label>
                      <input type="checkbox" name="category5" value="supplements">
                      Capsules 
                      <i class="fas fa-check"></i>
                    </label>
                    <label>
                      <input type="checkbox" name="category6" value="baby-kids">
                      Chicken Cutlets 
                      <i class="fas fa-check"></i>
                    </label>
                    <label>
                      <input type="checkbox" name="category7" value="serum">
                      Petwhisper Meet
                      <i class="fas fa-check"></i>
                    </label>
                  </div>

                </div>

              </div>
              <div class="andro_search-adv-input">
                <input type="text" class="form-control" placeholder="Look for Food Flower , Cat Food  " name="search" value="">
                <button type="submit" name="button"><i class="fa fa-search"></i></button>
              </div>
            </form>
          </div>

          <div class="andro_header-controls">

            <ul class="andro_header-controls-inner">
        
              <li class="andro_header-cart">
                <a href="panier.php" title="bag">
                  <i class="flaticon-shopping-basket"></i>
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

          <!-- Menu -->
          <ul class="navbar-nav">
            <li class="menu-item menu-item-has-children">
              <a href="#">Home Pages</a>
              <ul class="sub-menu">
                <li class="menu-item"> <a href="index-2.html">Home v1</a> </li>
                <li class="menu-item"> <a href="home-v2.html">Home v2</a> </li>
                <li class="menu-item"> <a href="home-v3.html">Home v3</a> </li>
              </ul>
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="#">Blog</a>
              <ul class="sub-menu">
                <li class="menu-item menu-item-has-children">
                  <a href="blog-grid.html">Blog Archive</a>
                  <ul class="sub-menu">
                    <li class="menu-item"> <a href="blog-grid.html">Grid View</a> </li>
                    <li class="menu-item"> <a href="blog-list.html">List View</a> </li>
                    <li class="menu-item"> <a href="blog-masonry.html">Masonry View</a> </li>
                  </ul>
                </li>
                <li class="menu-item"> <a href="post-single.html">Blog Single</a> </li>
              </ul>
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="#">Pages</a>
              <ul class="sub-menu">
                <li class="menu-item"> <a href="about-us.html">About Us</a> </li>
                <li class="menu-item"> <a href="login.html">Login</a> </li>
                <li class="menu-item"> <a href="register.html">Sign Up</a> </li>
                <li class="menu-item"> <a href="checkout.html">Checkout</a> </li>
                <li class="menu-item"> <a href="cart.html">Cart</a> </li>
                <li class="menu-item"> <a href="wishlist.html">Wish List</a> </li>
                <li class="menu-item"> <a href="legal.html">Legal</a> </li>
                <li class="menu-item"> <a href="error.html">Error 404</a> </li>
              </ul>
            </li>
            <li class="menu-item menu-item-has-children mega-menu-wrapper">
              <a href="shop-v1.html">Shop</a>
              <ul class="sub-menu">
                <li>
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="mega-menu-item">
                          <h6>Membership Delivery</h6>
                          <p>
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                            making it over 2000 years old.
                          </p>
                          <a href="login.html" class="andro_btn-custom shadow-none btn-sm">Become a Member</a>
                        </div>
                      </div>
                      <div class="offset-lg-1 col-lg-3">
                        <div class="mega-menu-item">
                          <h6>Shop Pages</h6>
                          <a href="shop-v1.html">Shop v1 (Default)</a>
                          <a href="shop-v2.html">Shop v2 (Full Width)</a>
                          <a href="shop-v3.html">Shop v3 (No Sidebar)</a>
                          <a href="shop-v4.html">Shop v4 (List view)</a>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="mega-menu-item">
                          <h6>Product Details Pages</h6>
                          <a href="product-single.html">Product Details v1</a>
                          <a href="product-single-v2.html">Product Details v2</a>
                          <a href="#" class="coming-soon">Product Details v3 <span>Coming Soon</span></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </li>
              </ul>
            </li>
            <li class="menu-item"> <a href="contact-us.html">Contact Us</a> </li>
          </ul>

          <!-- Side navigation toggle -->
          <div class="aside-toggler aside-trigger-right desktop-toggler">
            <span></span>
            <span></span>
            <span></span>
          </div>

        </div>

      </div>
    </div>
    <!-- Bottom Header End -->

  </header>
  <!-- Header End -->

  <div class="section">
    <div class="imgs-wrapper">
      <img src="assets/img/products/1.png" alt="veg" class="d-none d-lg-block">
      <img src="assets/img/products/14.png" alt="veg" class="d-none d-lg-block">
    </div>
    <div class="container">
      <div class="andro_auth-wrapper">

        <div class="andro_auth-description bg-cover bg-center dark-overlay dark-overlay-2" style="background-image: url('assets/img/auth.jpg')">
          <div class="andro_auth-description-inner">
            <i class="flaticon-pawprint-1"></i>
            <h2>Welcome Back!</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
        <div class="andro_auth-form">

          <h2>Password Recovery</h2>

          <form method="post">

            <div class="form-group">
              <input type="text" class="form-control" placeholder="CIN" name="CIN" name="CIN" value="">
            </div>
            
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email" name="Email" name="Email" value="">
            </div>

            <button type="submit" class="andro_btn-custom primary">Send Mail</button>

            <div class="andro_auth-seperator">
             
            </div>

           <a href="register.php">Create One</a> 

          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- Footer Start -->
  <footer class="andro_footer">
    <!-- Top Footer -->
    <div class="container">
      <div class="andro_footer-top">
        <div class="andro_footer-logo">
          <img src="assets/img/logo.png" alt="logo">
        </div>
        <div class="andro_footer-buttons">
          <a href="#"> <img src="assets/img/android.png" alt="download it on the app store"></a>
          <a href="#"> <img src="assets/img/ios.png" alt="download it on the app store"></a>
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
              <li> <a href="index-2.html">Home</a> </li>
              <li> <a href="blog-grid.html">Blog</a> </li>
              <li> <a href="about-us.html">About Us</a> </li>
              <li> <a href="shop-v1.html">Shop</a> </li>
              <li> <a href="contact-us.html">Contact Us</a> </li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title">Top Categories</h5>
            <ul>
              <li> <a href="#">Canned Food</a> </li>
              <li> <a href="#">Dental Chews</a> </li>
              <li> <a href="#">Capsules </a> </li>
              <li> <a href="#">Beef Tomato</a> </li>
              <li> <a href="#">Cat Food </a> </li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title">Others</h5>
            <ul>
              <li> <a href="checkout.php">Checkout</a> </li>
              <li> <a href="panier.php">Bag</a> </li>
              <li> <a href="afficherprod.php">Product</a> </li>
              
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 footer-widget">
            <h5 class="widget-title">Social Media</h5>
            <ul class="social-media">
              <li> <a href="#" class="facebook"> <i class="fab fa-facebook-f"></i> </a> </li>
              
            </ul>
            <div class="andro_footer-offer">
              <p>Signup and get exclusive offers and coupon codes</p>
              <a href="#" class="andro_btn-custom btn-sm shadow-none">Sign Up</a>
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
          <p> Copyright © 2020 <a href="#">Yourwebsite</a> All Rights Reserved. </p>
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


<!-- Mirrored from slidesigma.com/themes/html/petitudio/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 14:05:54 GMT -->
</html>
