<?php
    require_once '../Controller/produitC.php';

    $produitC =  new produitC();
    $listeprod = $produitC->afficherProduit();
    
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from slidesigma.com/themes/html/petitudio/shop-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 14:05:55 GMT -->
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
    <a class="navbar-brand" href="index-2.html"> <img src="assets/img/animaliLogo.png" alt="logo"> </a>

    <ul>
      <li class="menu-item menu-item-has-children">
        <a href="#">Home Pages</a>
        <ul class="sub-menu">
          <li class="menu-item"> <a href="index.html">Home v1</a> </li>
          
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
           
           <li class="menu-item"> <a href="shop-v2.html"> Shop v2 (Full Width) </a> </li>
           
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
          <a class="navbar-brand" href="index-2.html"> <img src="assets/img/animaliLogo.png" alt="logo"> </a>

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
              <li class="andro_header-favorites"> <a href="wishlist.html" title="Your Wishlist"> <i class="flaticon-like"></i> </a> </li>
              <li class="andro_header-cart">
                <a href="cart.html" title="Your Cart">
                  <i class="flaticon-shopping-basket"></i>
                  <div class="andro_header-cart-content">
                    <span>9 Items</span>
                    <span>249.99$</span>
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
                <li class="menu-item"> <a href="index.html">Home v1</a> </li>
                
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
                          
                          <a href="shop-v2.html">Shop v2 (Full Width)</a>
                          
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="mega-menu-item">
                          <h6>Product Details Pages</h6>
                          <a href="product-single.html">Product Details v1</a>
                          
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
        <h1>Shop v2 (Full Width)</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shop v2 (Full Width)</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Subheader End -->

  <!-- Products Start -->
  <div class="section">
    <div class="andro_section-fw">

      <div class="row">
        <div class="col-lg-9">

          <!-- Product Count & Orderby Start -->
          <div class="andro_shop-global">
            <p>Showing <b>20</b> of <b>320</b> products </p>
            <form method="post">
              <select class="form-control" name="orderby">
                <option value="default">Default sorting</option>
                <option value="latest">Latest release</option>
                <option value="price-down">Price: High - Low</option>
                <option value="price-up">Price: Low - High</option>
                <option value="popularity">Popularity Sorting</option>
              </select>
            </form>
          </div>
          <!-- Product Count & Orderby End -->
          <div class="container-fluid p-0">

<h1 class="h3 mb-3">Afficher liste produits </h1>

<div class="row">
    <div class="col-12 col-xl-6">
        <div class="card">
            
        <table border=1 align = 'center'>
<tr>
<th>ref</th>
<th>prix</th>
<th>nomproduit</th>
<th>description</th>
<th>idcategorie</th>
<th>supprimer</th>
<th>modifier</th>
<th>trier</th>

</tr>

<?PHP
foreach($listeprod as $produitC){
?>
<tr>
<td><?PHP echo $produitC['ref']; ?></td>
<td><?PHP echo $produitC['prix']; ?></td>
<td><?PHP echo $produitC['nomprod']; ?></td>
<td><?PHP echo $produitC['descprod']; ?></td>
<td><?PHP echo $produitC['idcat']; ?></td>

<td>
    <form method="POST" action="supprimerprod.php">
    <input type="submit" name="supprimer" value="supprimer">
    <input type="hidden" value=<?PHP echo $produitC['ref']; ?> name="ref">
    </form>
</td>
<td>
    <a href="modifierprod.php?ref=<?PHP echo $produitC['ref']; ?>"> Modifier </a>
</td>
<td>
    <a href="trierprod.php?id=<?PHP echo $produitC['ref']; ?>"> trier </a>
</td>
</tr>
<?PHP
}
?>
</table>
        </div>
    </div>

          <div class="row masonry">

            <!-- Product Start -->
            <div class="col-md-3 col-sm-4 masonry-item">
              <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-badge andro_badge-featured">
                  <i class="fa fa-star"></i>
                  <span>Featured</span>
                </div>
                <div class="andro_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/7.png" alt="product"></a>
                </div>
                <div class="andro_product-body">
                  <h6 class="andro_product-title"> <a href="product-single.html">Parrot Food</a> </h6>
                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="andro_product-footer">
                  <div class="andro_product-price">
                    <span>19$</span>
                    <span>29$</span>
                  </div>
                  <div class="andro_product-buttons">
                    <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-3 col-sm-4 masonry-item">
              <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/8.png" alt="product"></a>
                </div>
                <div class="andro_product-body">
                  <h6 class="andro_product-title"> <a href="product-single.html"> Pet Food Meat </a> </h6>
                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="andro_product-footer">
                  <div class="andro_product-price">
                    <span>8$</span>
                  </div>
                  <div class="andro_product-buttons">
                    <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-3 col-sm-4 masonry-item">
              <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/9.png" alt="product"></a>
                </div>
                <div class="andro_product-body">
                  <h6 class="andro_product-title"> <a href="product-single.html"> Pet Food Meat </a> </h6>
                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="andro_product-footer">
                  <div class="andro_product-price">
                    <span>6$</span>
                    <span></span>
                  </div>
                  <div class="andro_product-buttons">
                    <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-3 col-sm-4 masonry-item">
              <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/10.png" alt="product"></a>
                </div>
                <div class="andro_product-badge andro_badge-sale">
                  20% Off
                </div>
                <div class="andro_product-body">
                  <h6 class="andro_product-title"> <a href="product-single.html">Chicken Cutlets</a> </h6>
                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                    </div>
                  </div>
                </div>
                <div class="andro_product-footer">
                  <div class="andro_product-price">
                    <span>19$</span>
                  </div>
                  <div class="andro_product-buttons">
                    <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-3 col-sm-4 masonry-item">
              <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-badge andro_badge-featured">
                  <i class="fa fa-star"></i>
                  <span>Featured</span>
                </div>
                <div class="andro_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/11.png" alt="product"></a>
                </div>
                <div class="andro_product-body">
                  <h6 class="andro_product-title"> <a href="product-single.html">Snack Food</a> </h6>
                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="andro_product-footer">
                  <div class="andro_product-price">
                    <span>13$</span>
                  </div>
                  <div class="andro_product-buttons">
                    <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-3 col-sm-4 masonry-item">
              <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/12.png" alt="product"></a>
                </div>
                <div class="andro_product-body">
                  <h6 class="andro_product-title"> <a href="product-single.html">Chicken Cutlets</a> </h6>
                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="andro_product-footer">
                  <div class="andro_product-price">
                    <span>19$</span>
                    <span>29$</span>
                  </div>
                  <div class="andro_product-buttons">
                    <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-3 col-sm-4 masonry-item">
              <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/2.png" alt="product"></a>
                </div>
                <div class="andro_product-body">
                  <h6 class="andro_product-title"> <a href="product-single.html">Chicken Meal </a> </h6>
                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="andro_product-footer">
                  <div class="andro_product-price">
                    <span>19$</span>
                    <span>29$</span>
                  </div>
                  <div class="andro_product-buttons">
                    <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-3 col-sm-4 masonry-item">
              <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/4.png" alt="product"></a>
                </div>
                <div class="andro_product-body">
                  <h6 class="andro_product-title"> <a href="product-single.html"> Brown rice </a> </h6>
                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="andro_product-footer">
                  <div class="andro_product-price">
                    <span>29$</span>
                  </div>
                  <div class="andro_product-buttons">
                    <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-3 col-sm-4 masonry-item">
              <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/5.png" alt="product"></a>
                </div>
                <div class="andro_product-body">
                  <h6 class="andro_product-title"> <a href="product-single.html"> Petwhisper Meets 30:0 </a> </h6>
                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="andro_product-footer">
                  <div class="andro_product-price">
                    <span>29$</span>
                  </div>
                  <div class="andro_product-buttons">
                    <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-3 col-sm-4 masonry-item">
              <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/6.png" alt="product"></a>
                </div>
                <div class="andro_product-body">
                  <h6 class="andro_product-title"> <a href="product-single.html">Canned Food</a> </h6>
                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="andro_product-footer">
                  <div class="andro_product-price">
                    <span>29$</span>
                  </div>
                  <div class="andro_product-buttons">
                    <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-3 col-sm-4 masonry-item">
              <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/14.png" alt="product"></a>
                </div>
                <div class="andro_product-body">
                  <h6 class="andro_product-title"> <a href="product-single.html">Chicken Cutlets</a> </h6>
                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="andro_product-footer">
                  <div class="andro_product-price">
                    <span>29$</span>
                  </div>
                  <div class="andro_product-buttons">
                    <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-3 col-sm-4 masonry-item">
              <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/15.png" alt="product"></a>
                </div>
                <div class="andro_product-body">
                  <h6 class="andro_product-title"> <a href="product-single.html"> Red Meat  </a> </h6>
                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="andro_product-footer">
                  <div class="andro_product-price">
                    <span>13$</span>
                  </div>
                  <div class="andro_product-buttons">
                    <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

          </div>

          <!-- Pagination Start -->
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
          </ul>
          <!-- Pagination End -->

        </div>

        <!-- Sidebar Start -->
        <div class="col-lg-3">
          <div class="sidebar">

            <!-- Search Start -->
            <div class="sidebar-widget widget-search">
              <form method="post">
                <div class="andro_search-adv-input">
                  <input type="text" class="form-control" placeholder="Look for Food Flower , Cat Food  " name="search" value="">
                  <button type="submit" name="button"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div>
            <!-- Search End -->

            <!-- Filter: Categories Start -->
            <div class="sidebar-widget">
              <h5 class="widget-title"> Category </h5>
              <ul class="sidebar-widget-list">
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Canned Food</label>
                  </div>
                </li>
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">Beef Tomato</label>
                  </div>
                </li>
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3">Dental Chews</label>
                  </div>
                </li>
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                    <label class="custom-control-label" for="customCheck4">Chicken Cutlets </label>
                  </div>
                </li>
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                    <label class="custom-control-label" for="customCheck5">Cat Food </label>
                  </div>
                </li>
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                    <label class="custom-control-label" for="customCheck6">Capsules </label>
                  </div>
                </li>
              </ul>

            </div>
            <!-- Filter: Categories End -->

            <!-- Filter: Condition Start -->
            <div class="sidebar-widget">
              <h5 class="widget-title"> Condition </h5>
              <ul class="sidebar-widget-list">
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                    <label class="custom-control-label" for="customCheck7">Daily Deal</label>
                  </div>
                </li>
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                    <label class="custom-control-label" for="customCheck8">On Sale</label>
                  </div>
                </li>
              </ul>

            </div>
            <!-- Filter: Condition End -->

            <!-- Filter: State Start -->
            <div class="sidebar-widget">
              <h5 class="widget-title"> Brand </h5>
              <ul class="sidebar-widget-list">
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck9">
                    <label class="custom-control-label" for="customCheck9">Bird Life</label>
                  </div>
                </li>
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck10">
                    <label class="custom-control-label" for="customCheck10">Whole THC-Dominants</label>
                  </div>
                </li>
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck11">
                    <label class="custom-control-label" for="customCheck11">Shrubbery co.</label>
                  </div>
                </li>
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck12">
                    <label class="custom-control-label" for="customCheck12">Better Life</label>
                  </div>
                </li>
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck13">
                    <label class="custom-control-label" for="customCheck13">Organica</label>
                  </div>
                </li>
              </ul>

            </div>
            <!-- Filter: State End -->

            <!-- Filter: Freshness Start -->
            <div class="sidebar-widget">
              <h5 class="widget-title"> Freshness </h5>
              <input type="text" class="js-range-slider" name="freshness_range" value="" data-type="double" data-min="0" data-max="10" data-from="4" data-to="6" data-grid="true" data-postfix=" days" />
            </div>
            <!-- Filter: Freshness End -->

            <!-- Filter: Price Start -->
            <div class="sidebar-widget">
              <h5 class="widget-title"> Price </h5>
              <input type="text" class="js-range-slider" name="freshness_range" value="" data-type="double" data-min="0" data-max="500" data-from="10" data-to="100" data-grid="true" data-postfix=" $" />
            </div>
            <!-- Filter: Price End -->

          </div>
        </div>
        <!-- Sidebar End -->

      </div>

    </div>
  </div>
  <!-- Products End -->

  <!-- Instagram Start -->
  <div class="row no-gutters">
    <div class="col-lg-4 secondary-bg pattern-bg">
      <div class="andro_instagram">
        <h3 class="text-white">Follow Us On Instagram</h3>
        <a href="#" class="andro_btn-custom light">Follow Us</a>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="row no-gutters">
        <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
          <a href="#" class="andro_ig-item">
            <img src="assets/img/ig/1.jpg" alt="ig">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
          <a href="#" class="andro_ig-item">
            <img src="assets/img/ig/2.jpg" alt="ig">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
          <a href="#" class="andro_ig-item">
            <img src="assets/img/ig/3.jpg" alt="ig">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
          <a href="#" class="andro_ig-item">
            <img src="assets/img/ig/4.jpg" alt="ig">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
          <a href="#" class="andro_ig-item">
            <img src="assets/img/ig/5.jpg" alt="ig">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
          <a href="#" class="andro_ig-item">
            <img src="assets/img/ig/6.jpg" alt="ig">
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Instagram End -->

  <!-- Footer Start -->
  <footer class="andro_footer">
    <!-- Top Footer -->
    <div class="container">
      <div class="andro_footer-top">
        <div class="andro_footer-logo">
          <img src="assets/img/animaliLogo.png" alt="logo">
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
              <li> <a href="checkout.html">Checkout</a> </li>
              <li> <a href="cart.html">Cart</a> </li>
              <li> <a href="product-single.html">Product</a> </li>
              <li> <a href="shop-v1.html">Shop</a> </li>
              <li> <a href="legal.html">Legal</a> </li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 footer-widget">
            <h5 class="widget-title">Social Media</h5>
            <ul class="social-media">
              <li> <a href="#" class="facebook"> <i class="fab fa-facebook-f"></i> </a> </li>
              <li> <a href="#" class="pinterest"> <i class="fab fa-pinterest-p"></i> </a> </li>
              <li> <a href="#" class="google"> <i class="fab fa-google"></i> </a> </li>
              <li> <a href="#" class="twitter"> <i class="fab fa-twitter"></i> </a> </li>
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


<!-- Mirrored from slidesigma.com/themes/html/petitudio/shop-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 14:05:55 GMT -->
</html>