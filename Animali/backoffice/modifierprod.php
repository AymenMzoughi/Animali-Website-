<?php
    require_once '../Controller/produitC.php';
    session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
	echo "<script type='text/javascript'>document.location.replace('login.php');</script>";
   }
    $produitC =  new produitC();

    if (isset($_GET['ref'])){
    $listeprod = $produitC->recupererProduit($_GET['ref']);
    foreach($listeprod as $row)
	   {
		   $ref=$row['ref'];
		   $prix=$row['prix'];
		   $nomprod=$row['nomprod'];
		   $descprod=$row['descprod'];
           $descprod=$row['idcat'];

		   
    
    
    
?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Web UI Kit &amp; Dashboard Template based on Bootstrap">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, web ui kit, dashboard template, admin template">

    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <title>Tables | AdminKit Demo</title>

    <link href="css/app.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
    <nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.php">
          <span class="align-middle">Animali Backoffice</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="index.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle"> accueil </span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="Admins.php">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle"> Gestion Admins </span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="Afficherclients.php">
              <i class="align-middle"  data-feather="users"></i> <span class="align-middle">Gestion des clients </span>
            </a>
					</li>

					<li class="sidebar-item active">
						<a href="#ui" data-toggle="collapse" class="sidebar-link">
              <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle"> Gestion des Produits </span>
            </a>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
							<li class="sidebar-item "><a class="sidebar-link" href="affichercat.php">categories </a></li>
                            <li class="sidebar-item   "><a class="sidebar-link" href="ajoutercat.php"> Ajouter categories </a></li>
							<li class="sidebar-item active  "><a class="sidebar-link" href="modifierprod.php"> modifier  Produit  </a></li>
							<li class="sidebar-item   "><a class="sidebar-link" href="ajouterprod.php"> Ajouter  Produit  </a></li>
                            <li class="sidebar-item   "><a class="sidebar-link" href="chercherprod.php">  chercher Produits  </a></li>
						</ul>
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="afficherlignecommande.php">
              <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Gestion des commandes </span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="afficherveto.php">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle"> Gestions des veterinaires </span>
            </a>
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="AfficherReclamation.php">
              <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle"> Gestions des SAV </span>
            </a>
					</li>
                    
                    <li class="sidebar-item">
						<a class="sidebar-link" href="Afficherlivraison.php">
              <i class="align-middle" data-feather="truck"></i> <span class="align-middle"> Gestion des livraisons </span>
            </a>
					</li>

					

				
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
          <i class="hamburger align-self-center"></i>
        </a>

				

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
								
						
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-toggle="dropdown">
								
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											
										</div>
									</a>
									
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											
											
										</div>
									</a>
									
								</div>
								<div class="dropdown-menu-footer">
									
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                <img src="<?php echo$_SESSION['i'];?>" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span class="text-dark"><?php echo$_SESSION['e'];?></span>
              </a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="deconnexion.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
	
            <main class="content">
            <form  method="POST">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Modifier un produit </h1>

                    <div class="row">
                        <div class="col-12 col-xl-6">
                            <div class="card">
                                
                            <form>
                            <div class="card-body card-block">
                                            
                                              <div class="row form-group">
                                                     <div class="col col-md-3"><label for="text-input" class=" form-control-label">ref</label></div>
                                                     <div class="col-12 col-md-9"><input type="text" name="ref" id="ref" class="form-control" value="<?PHP echo $ref; ?>" disabled></div>
                                                     <span id='missPrenom'></span><br>

                                                 </div>
                                             <div class="row form-group">
                                                     <div class="col col-md-3"><label class=" form-control-label">prix</label></div>
                                                     <div class="col-12 col-md-9"><input type="text" id="prix" name="prix"  class="form-control" value="<?PHP echo $prix; ?>"></div>
                                                     <div class="col-12 col-md-9">

                                                       
                                                     </div>
                                                 </div>    

                                                <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">nomproduit</label></div>
                                                     <div class="col-12 col-md-9"><input type="text" id="nomprod" name="nomprod"  class="form-control" value="<?PHP echo $nomprod; ?>"></div>
                                                     <div class="col-12 col-md-9">


                                                 </div>
                                                 <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">description</label></div>
                                                     <div class="col-12 col-md-200"><input type="text" id="descprod" name="descprod"  class="form-control" value="<?PHP echo $descprod; ?>"></div>
                                                     <div class="col-12 col-md-200"></div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label for="idcat">ID de categorie</label>
                                                            <br>
                                                               <?php 
                                                                  $mysqli =NEW mysqli('localhost','root','','animali');
                                                                $resultSet = $mysqli->query("SELECT idcat FROM categories");
                                                                ?>
                                                            <select name="idcat">
                                                                 <?php 
                                                                    while($rows =$resultSet->fetch_assoc())
                                                                      {$idcat= $rows['idcat'];
                                                                      echo"<option value ='$idcat'>$idcat<option>";
                                                                    }
                                                                          ?>
                                                            </select>
                                                   </div>                                            
                                                     <div class="card-footer">
                                                     <input type="submit"  class="btn btn-outline-secondary" name="modifier" value="modifier" > 
										<input type="hidden"   name="ref_ini" value="<?PHP echo $_GET['ref'];?>">
                                                    </div>
                                        </div>
                   
</form>
          
            
                           
                    
            <?PHP
                }
            }
                if(isset($_POST['modifier'])){
                    $produit = new produit($_POST['ref_ini'], $_POST['prix'], $_POST['nomprod'], $_POST['descprod'],$_POST['idcat']);
                    $produitC->modifierProduit($produit,$_POST['ref_ini']);
                    ?> 
                   
                   <script>
				document.location.replace("afficherprod.php") ;
			</script>          
                   
	<?php		
	}
    ?>
             
                    

    <script src="js/vendor.js"></script>
    <script src="js/app.js"></script>

</body>

</html>