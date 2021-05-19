<?php

 include "../Entities/commande.php";
 include "../Controller/commandeC.php";

 session_start();
 // On teste si la variable de session existe et contient une valeur
 if(empty($_SESSION['c']))
 {
     // Si inexistante ou nulle, on redirige vers le formulaire de login
   echo "<script type='text/javascript'>document.location.replace('signin.php');</script>";
    }
 $error = "";
    $commandeC =  new commandeC();
    
    if (isset($_GET['ref'])){
      $commandeC =  new commandeC();
 
      $result =  $commandeC->recupererprix($_GET['ref']);
     foreach($result as $row)
   {
     $prix=$row['prix'];
   
   
   }}
   


    if(
      
        isset($_POST["date_commande"]) &&
        isset($_POST["produits"]) &&
        isset($_POST["prix"]) &&
        isset($_POST["id_client"])
       )
    
    {
        if(  
            
            !empty($_POST["date_commande"])&&
            !empty($_POST["produits"])&&
            !empty($_POST["prix"])&&
            !empty($_POST["id_client"])
        ) 
        
        {
            $Commande = new Commande(
               
                $_POST['date_commande'],
                $_POST['produits'],
                $_POST['prix'],
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


<!-- Mirrored from slidesigma.com/themes/html/petitudio/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 14:05:54 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animali - Pet Shop </title>

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
  <script src="assets/js/formulaire.js"></script>
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
   }else if(f.prix.value =="" )
   {alert ("veillez remplir votre champs de prix !");
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

  

  <!-- Header Start -->
  <header class="andro_header header-1">

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
            <div class="">

                
            </div>
            
            </div>
          </div>
          <!-- Pagination End -->

        </div>
        <div class="col-md-7">

          <div class="andro_product-single-content">

           

            <h3> Pet Food Meat </h3>

            
          <form id="form1" name="f" method="post">

            <div idcommande = "error">
            <?php echo $error; ?>
           </div>
            <div class="form-group">
              <label>Id commande</label>
              <input type="number" class="form-control" name="idcommande" placeholder="idcommande" disabled>
            </div>
            <div class="form-group">
              <label>Date commande</label>
              <input type="date" class="form-control" name="date_commande" placeholder="date_commande" value="">
            </div>
            <div class="form-group">
                <label> Id produit</label>
                <input type="text" class="form-control" name="produits" placeholder="produits" value="<?php echo  $_GET["ref"]; ?>" >
               
              </div>

              <div class="form-group">
                <label>Prix</label>
                <input type="text" class="form-control" name="prix" placeholder="prix" value="<?php echo  $prix ; ?>" >
              </div>
              
              <div class="form-group">
                <label>Id client</label>
                <input type="number" class="form-control" name="id_client"  value="<?php echo $_SESSION['id'];?>"   >
                
              </div>
              <td>
<div >
<button onclick="return verif();" type="submit" class="andro_btn-custom shadow-none btn-sm" name="button">ajouter</a>

</div>  

</td>
                  
             
              

           </form>

           
          

          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- Product Content End -->

  


  <!-- Footer Start -->
  <footer class="andro_footer">
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


<!-- Mirrored from slidesigma.com/themes/html/petitudio/product-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 14:02:46 GMT -->
</html>
