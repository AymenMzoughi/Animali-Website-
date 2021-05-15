<?php

 include "../Entities/commande.php";
 include "../Controller/commandeC.php";

 session_start();
 // On teste si la variable de session existe et contient une valeur
 if(empty($_SESSION['e']))
 {
     // Si inexistante ou nulle, on redirige vers le formulaire de login
   echo "<script type='text/javascript'>document.location.replace('signin.php');</script>";
    }
 $error = "";
    $commandeC =  new commandeC();
    

   


    if(
      
        isset($_POST["date_commande"]) &&
        isset($_POST["produits"]) &&
        isset($_POST["quantite"]) &&
        isset($_POST["id_client"])
       )
    
    {
        if(  
            
            !empty($_POST["date_commande"])&&
            !empty($_POST["produits"])&&
            !empty($_POST["quantite"])&&
            !empty($_POST["id_client"])
        ) 
        
        {
            $Commande = new Commande(
               
                $_POST['date_commande'],
                $_POST['produits'],
                $_POST['quantite'],
                $_POST['id_client']
            );
            $commandeC->ajoutercommande($Commande);
            header('Location:panier.php');
        }
        else
            $error = "Missing information";
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from slidesigma.com/themes/html/petitudio/product-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 14:02:27 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Petitdio - Pet Shop </title>

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
  <script language="javascript">
  function verif()
  {
    if (f.date_commande.value == "" )
   {alert ("veillez remplir votre champs de date_commande !");
   return false;
   }
   else if(f.produits.value =="" )
   {alert ("veillez remplir votre champs de nom produit !");
   return false;
   }else if(f.quantite.value =="" )
   {alert ("veillez remplir votre champs de quantite !");
   return false;
   }else if(f.id_client.value == "" )
   {alert ("veillez remplir votre champs d id_client !");
   return false;
   }
   return true;

  }
  </script>

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
          <li class="menu-item"> <a href="checkout.php">Checkout</a> </li>
          <li class="menu-item"> <a href="panier.php">Bag</a> </li>
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
            <li class="menu-item"><a href="compte.php"> My Account </a></li>
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
          <li class="menu-item"> <a href="checkout.php">Checkout</a> </li>
          <li class="menu-item"> <a href="panier.php">Bag</a> </li>
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

  <!-- Subheader Start -->
  <div class="andro_subheader pattern-bg primary-bg">
    <div class="container">
      <div class="andro_subheader-inner">
        <h1>Product Details</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product Details</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Subheader End -->

  <!-- Product Content Start -->
  <div class="section">
    <div class="container">

      <div class="row">
        <div class="col-md-5">
          

          <!-- Pagination Start -->
          <div class="andro_single-pagination">
            <div class="andro_single-pagination-item andro_single-pagination-prev">

                
                
                <i class="fas fa-chevron-left"></i>
              </a>
            </div>
            
               
              </a>
            </div>
          </div>
          <!-- Pagination End -->

        </div>
        <div class="col-md-7">

          <div class="andro_product-single-content">

            <div class="andro_product-single-controls andro_post-share">
              <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="andro_add-to-favorite"> <i class="flaticon-like"></i> </a>
              <ul class="andro_sm">
                <li> <a href="#" data-toggle="tooltip" title="Share on Facebook"> <i class="fab fa-facebook-f"></i> </a> </li>
                <li> <a href="#" data-toggle="tooltip" title="Share on Twitter"> <i class="fab fa-twitter"></i> </a> </li>
                <li> <a href="#" data-toggle="tooltip" title="Share on Linkedin"> <i class="fab fa-linkedin-in"></i> </a> </li>
              </ul>
            </div>

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

            
          <form id="form1" name="f" method="post">

            <div idcommande = "error">
            <?php echo $error; ?>
           </div>
            <div class="form-group">
              <label>id commande</label>
              <input type="number" class="form-control" name="idcommande" placeholder="idcommande" disabled>
            </div>
            <div class="form-group">
              <label>date commande</label>
              <input type="date" class="form-control" name="date_commande" placeholder="date_commande" value="">
            </div>
            <div class="form-group">
                <label> id produit</label>
                <input type="text" class="form-control" name="produits" placeholder="produits" value="<?php echo  $_GET["ref"]; ?>">
              </div>

              <div class="form-group">
                <label>quantite</label>
                <input type="number" class="form-control" name="quantite" placeholder="quantite" value="">
              </div>
              
              <div class="form-group">
                <label>id_client</label>
                <input type="number" class="form-control" name="id_client"  value="<?php echo $_SESSION['id'];?>" >
              </div>
              <td>
<div >
<button onclick="return verif();" type="submit" class="andro_btn-custom shadow-none btn-sm" name="button">ajouter</a>
</div>  

</td>
                    <td>
                        <input type="reset" class="andro_btn-custom shadow-none btn-sm" value="Annuler" >
                    </td>
             
              

           </form>

            <ul class="andro_product-meta">
              <li>
                <span>Categories: </span>
                <div class="andro_product-meta-item">
                  <a href="#">Canned Food</a>
                </div>
              </li>
              <li>
                <span>Tags: </span>
                <div class="andro_product-meta-item">
                  <a href="#">Healthy</a>,
                  <a href="#">Organic</a>,
                  <a href="#">Farm</a>
                </div>
              </li>
              <li>
                <span>SKU: </span>
                <div class="andro_product-meta-item">
                  <span>N/A</span>
                </div>
              </li>
            </ul>

          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- Product Content End -->

  <!-- Additional Information Start -->
  <div class="section pt-0">
    <div class="container">
      <div class="andro_product-additional-info">
        <div class="row">

          <div class="col-lg-4">
            <ul class="nav andro_sticky-section" id="bordered-tab" role="tablist">
              
              <li class="nav-item">
                <a class="nav-link" id="tab-product-info-tab" data-toggle="pill" href="#tab-product-info" role="tab" aria-controls="tab-product-info" aria-selected="false">Additional Information</a>
              </li>
              
            </ul>
          </div>

          <div class="col-lg-8">
            <div class="tab-content" id="bordered-tabContent">
              
              <div class="tab-pane fade" id="tab-product-info" role="tabpanel" aria-labelledby="tab-product-info-tab">
                <h4>Additional Information</h4>

                <table>
                  <thead>
                    <tr>
                      <th scope="col">Attributes</th>
                      <th scope="col">Values</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> <strong>Color</strong> </td>
                      <td>blue, red, yellow, green</td>
                    </tr>
                    <tr>
                      <td> <strong>Material</strong> </td>
                      <td>wood, plastic, stainless steel</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
  <!-- Additional Information End -->



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


<!-- Mirrored from slidesigma.com/themes/html/petitudio/product-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 14:02:46 GMT -->
</html>
