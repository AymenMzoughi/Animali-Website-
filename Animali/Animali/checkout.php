<?php

 include "../Entities/lignecommande.php";
 include "../Controller/lignecommandeC.php";
 session_start();
 // On teste si la variable de session existe et contient une valeur
 if(empty($_SESSION['c']))
 {
     // Si inexistante ou nulle, on redirige vers le formulaire de login
   echo "<script type='text/javascript'>document.location.replace('signin.php');</script>";
    }

 $error = "";
 
     $idclient=$_SESSION['id'];
    $LignecommandeC =  new LignecommandeC();
    $servername="localhost";
$username="root";
$password="";
$bdd="animali";
$con=mysqli_connect($servername,$username,$password,$bdd);
$idcmd="SELECT * FROM commande where id_client='$idclient' ";
$idprod="SELECT * FROM produits ";
$list=mysqli_query($con,$idcmd);
$list1=mysqli_query($con,$idprod);
    
    if(
      
        isset($_POST["prix"]) &&
        isset($_POST["quantite"]) &&
        isset($_POST["tauxTVA"]) &&
        isset($_POST["etat"]) &&
        isset($_POST["id_produit"])&&
        isset($_POST["idcmd"])
    )
    
    {
        if(  
            
            !empty($_POST["prix"])&&
            !empty($_POST["quantite"])&&
            !empty($_POST["tauxTVA"])&&
            !empty($_POST["etat"])&&
            !empty($_POST["id_produit"])&&
            !empty($_POST["idcmd"])
        ) 
        
        {
            $lignecommande = new lignecommande(
               
                $_POST['prix'],
                $_POST['quantite'],
                $_POST['tauxTVA'],
                $_POST['etat'],
                $_POST['id_produit'],
                $_POST['idcmd']
            );
            $LignecommandeC->ajouterlignecommande($lignecommande);
            $LignecommandeC->supprimercommande($_POST['idcmd']);
            header('Location: compte.php');
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
        <h1>Checkout</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Subheader End -->

  <!-- Checkout Start -->
  <div class="section">
    <div class="container">

      <form id="form1" name="f" method="post">
        <div class="row">
          <div class="col-xl-7">

            <!-- Login -->
            <div class="andro_notice">
              <p>Are you a returning customer? <a href="#">Click here to login</a> </p>
            </div>
            <div class="andro_notice-content">
              <div class="row">
                <div class="col-xl-6 form-group">
                  <label>Email Address</label>
                  <input type="text" class="form-control" name="login-email" placeholder="Email Address" value="">
                </div>
                <div class="col-xl-6 form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="login-pass" placeholder="Password" value="">
                </div>
                <div class="col-12 form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                    <label class="custom-control-label" for="rememberMe">Remember Me</label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="andro_btn-custom shadow-none btn-sm" name="button">Login</button>
                </div>
              </div>
            </div>

           <form class="form"  id="form" >
            <div idcommande = "error">
            <?php echo $error; ?>
           </div>
            <div class="form-group">
              <label>idcommande</label>
              <input type="number" class="form-control" name="idcommande" placeholder="idcommande" id="idcommande" disabled>
            </div>
            <div class="form-group">
              <label>prix</label>
              <input type="text" class="form-control" name="prix" placeholder="prix" id="prix"  value="">
            </div>
            
              <div class="form-group">
                <label>quantite</label>
                <input type="number" class="form-control" name="quantite" placeholder="quantite" id="quantite" value="">
              </div>
              <div class="form-group">
                <label>tauxTVA</label>
                <input type="number" class="form-control" name="tauxTVA" placeholder="tauxTVA" id="tauxTVA" value="">
              </div>
              <div class="form-group">
                <label>etat</label>
                <input type="text" class="form-control" name="etat" placeholder="etat" id="etat" value="">
              </div>
              <div class="form-group">
                <label>id_produit</label>
                <select type="id_produit" class="form-control" name="id_produit" placeholder="id_produit" id="id_produit" >
						<option value="">Faites votre choix </option>
						
						<?php while($row=mysqli_fetch_array($list)):?>
					
						<option value="<?php echo $row[2];?>" > <?php echo $row[2];?>   </option>";
						<?php endwhile; ?>
						</select>
              </div>
              <div class="form-group">
                <label>id cmd</label>
                <select class="form-control"  placeholder="idcmd"  id="idcmd" name="idcmd">
						<option value="">Faites votre choix </option>
						
						<?php while($row=mysqli_fetch_array($list)):?>
					
						<option value="<?php echo $row[0];?>" > <?php echo $row[0];?></option>";
						<?php endwhile; ?>
					
					
						</select>
            </div>
             </form>
              <td>
<div >
<hr>
<button onclick="return verif();" type="submit" class="andro_btn-custom shadow-none btn-sm" name="button" >Confirmer votre commande</a>
</div>  

</td>
<br>
                    <td>
                        <input type="reset" class="andro_btn-custom shadow-none btn-sm" value="Annuler" >
                    </td>
                </tr>
                
          </div>
        </div>
      </form>

    </div>
  </div>
  <!-- Checkout End -->


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
              <a href="afficherveto.php">show veterinarians</a> 
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


<!-- Mirrored from slidesigma.com/themes/html/petitudio/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 14:05:54 GMT -->
</html>
