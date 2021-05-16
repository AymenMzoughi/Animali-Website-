<?php
    include '../Controller/lignecommandeC.php';
	session_start();
	// On teste si la variable de session existe et contient une valeur
	if(empty($_SESSION['e']))
	{
		// Si inexistante ou nulle, on redirige vers le formulaire de login
		echo "<script type='text/javascript'>document.location.replace('login.php');</script>";
	   }
    $lignecommandeC =  new LignecommandeC();
    $idlgc=$_GET['idcommande'];
	$Listecommandes = $lignecommandeC->afficherlignecommande();
	$servername="localhost";
	$username="root";
	$password="";
	$bdd="animali";
	$con=mysqli_connect($servername,$username,$password,$bdd);
	$idcmd="SELECT * FROM commande";
	$recu="SELECT * FROM lignecommande where idcommande='$idlgc' ";
	$list=mysqli_query($con,$idcmd); 
	$list1=mysqli_query($con,$recu); 
	foreach($list1 as $row)
	{
		$id=$row['idcommande'];
		$prix=$row['prix'];
		$tauxTVA=$row['tauxTVA'];
		$quantite=$row['quantite'];
		$etat=$row['etat'];
		$idproduit=$row['id_produit'];
		$idcmd=$row['idcmd'];
	}
	

	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Web UI Kit &amp; Dashboard Template based on Bootstrap">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, web ui kit, dashboard template, admin template">

	<link rel="shortcut icon" href="../img/icons/icon-48x48.png" />

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

					<li class="sidebar-item">
						<a class="sidebar-link" href="afficherprod.php">
              <i class="align-middle" data-feather="box"></i> <span class="align-middle">Gestion des Produits </span>
            </a>
					</li>
					<li class="sidebar-item active">
						<a href="#ui" data-toggle="collapse" class="sidebar-link">
              <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle"> Gestion des commandes </span>
            </a>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
							<li class="sidebar-item "><a class="sidebar-link" href="afficherlignecommande.php"> Ligne de commande  </a></li>
						    <li class="sidebar-item active"><a class="sidebar-link" href="modifierlignecommande.php">  modifier Ligne de commande  </a></li>
							
							
						</ul>
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
            <form  method="POST" action="edit2.php"   id="modifier" name="modifier">
                <div class="container-fluid p-0">
                <a href="afficherlignecommande.php" >Retour à la liste</a></button>
				<div class="container-fluid p-0">
				<div class="card-body text-center">
									<div class="mb-3">		
	
                   </div>
                  </div>
                  </div>

                    <h1 class="h3 mb-3">Modifier  </h1>

                    <div class="row">
                        <div class="col-12 col-xl-6">
                            <div class="card">
                                
                            <table border=2 align = 'left'>
                            <div class="card-body card-block">
                                            
                                              <div class="form-group">
                                                     <div class="col col-md-3"><label for="text-input" class=" form-control-label" >id commande</label></div>
                                                     <div class="col-12 col-md-9"><input type="number" name="idcommande" id="idcommande" class="form-control"  value="<?PHP echo $id; ?>" disabled ><small class="form-text text-muted"></small></div>
													 <input type="hidden"  name="idcommande" id="idcommande"  value="<?PHP echo $id; ?>" >

                                                 </div>
                                             <div class="form-group">
                                                     <div class="col col-md-3"><label class=" form-control-label">prix</label></div>
                                                     <div class="col-12 col-md-9"><input type="text" id="prix" name="prix"  class="form-control" value="<?PHP echo $prix; ?>"><small class="form-text text-muted"></small></div>
                                                     <div class="col-12 col-md-9">

                                                       
                                                     </div>
                                                 </div>    

                                                 <div class="form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">quantite</label></div>
                                                     <div class="col-12 col-md-9"><input type="number" id="quantite" name="quantite"  class="form-control" value="<?PHP echo $quantite; ?>" ><small class="form-text text-muted"></small></div>
                                                     <div class="col-12 col-md-9">


                                                 </div>

                                                 <div class="form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">tauxTVA</label></div>
                                                     <div class="col-12 col-md-9"><input type="text" id="tauxTVA" name="tauxTVA"  class="form-control" value="<?PHP echo $tauxTVA; ?>"><small class="form-text text-muted"></small></div>
													 <input type="hidden"  name="idcommande" id="idcommande"  value="<?PHP echo $id; ?>" >

													 <div class="col-12 col-md-9">


                                                 </div>

                                                 <div class="form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">etat</label></div>
                                                     <div class="col-12 col-md-9"><input type="text" id="etat" name="etat"  class="form-control" value="<?PHP echo $etat; ?>"><small class="form-text text-muted"></small></div>
                                                     <div class="col-12 col-md-9">


                                                 </div>

                                                 <div class="form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">id_produit</label></div>
                                                     <div class="col-12 col-md-9"><input type="number" id="id_produit" name="id_produit"  class="form-control" value="<?PHP echo $idproduit;?>" ><small class="form-text text-muted"></small></div>
													 <div class="col-12 col-md-9">


                                                 </div>

                                                   
                                                 <div class="form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">id cmd</label></div>
                                                     <div class="col-12 col-md-9"><input type="number" id="idcmd" name="idcmd"  class="form-control" value="<?PHP echo $idcmd;?>" ><small class="form-text text-muted"></small></div>
                                                     
													 <div class="col-12 col-md-9">


                                                 </div>

                                                   

                                                 
                                                
                                                     <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm" id="ajouter" value="ajouter">
                                                            <i "fa fa-dot-circle-o"></i> Modifier
                                                        </button>
                                                    </div>
                                        </div>
                   
        </table>
        </div>
        </div>
        </div>
        </div>
        </form>
        </main>

            
        

  
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						
						<div class="col-6 text-right">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#"></a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#"></a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#"></a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#"></a>
								</li>
							</ul>
							
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/vendor.js"></script>
	<script src="js/app.js"></script>

</body>

</html>