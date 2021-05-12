<?php
    include '../Controller/lignecommandeC.php';
	include "../Controller/produitC.php";
	include "../Controller/veterinaireC.php";
	session_start();
	// On teste si la variable de session existe et contient une valeur
	if(empty($_SESSION['e']))
	{
		// Si inexistante ou nulle, on redirige vers le formulaire de login
		echo "<script type='text/javascript'>document.location.replace('login.php');</script>";
	   }
    $lignecommandeC =  new LignecommandeC();

	$Listecommandes = $lignecommandeC->afficherlignecommande();

	

	

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
							<li class="sidebar-item active"><a class="sidebar-link" href="afficherlignecommande.php"> Ligne de commande  </a></li>
						
							
							
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
			<div class="container-fluid p-0">
			<table>
<form method="POST" action="search.php">
	<select class="form-control"  placeholder="sujet" name="choix" id="choix" >
            <option>Select</option>
              <option>id commande</option>
              <option>id produit</option>
              <option>id cmd</option>
              </select>
    <input type="text"  name="Search" name="Search" class="form-control" placeholder="Search">
	
     <input type="submit" class="btn btn-outline-primary" ></i>
</form>	
</table>
<h1 class="h3 mb-3"> Gestion des lignes de commande </h1>
<div class="row">
	<div class="col-15 col-xl-10">
		<div class="card">
			<table class="table">
				<thead>
					<tr>
						<th style="width:40%;"> id commande</th>
						<th style="width:25%"> prix</th>
						<th style="width:25%"> quantite</th>
						<th style="width:25%"> tauxTVA </th>
						<th style="width:70%"> etat </th>
						<th style="width:70%"> id_produit </th>
						<th style="width:70%"> id_cmd </th>
						<th style="width:70%"> Supprimer </th>
						<th style="width:70%"> Modifier </th>
					
					</tr>
				</thead>
				<tbody>
				<?PHP
foreach($Listecommandes as $user){
?>
<tr>
<td><?PHP echo $user['idcommande']; ?></td>
<td><?PHP echo $user['prix']; ?></td>
<td><?PHP echo $user['quantite']; ?></td>
<td><?PHP echo $user['tauxTVA']; ?></td>
<td><?PHP echo $user['etat']; ?></td>
<td><?PHP echo $user['id_produit']; ?></td>
<td><?PHP echo $user['idcmd']; ?></td>
<td>
<form>
<div >
<a type="button" class="btn btn-outline-primary" href = "supprimerlignedecommande.php?idcommande=<?= $user['idcommande'] ?>">Supprimer</a>
</div>  
</td>
<td>
<div >
<a type="button" class="btn btn-outline-primary" href = "modifierlignecommande.php?idcommande=<?= $user['idcommande'] ?>">Modifier</a>
</div>  
</form>
</td>

</tr>


<?PHP
}
?>
				</tbody>
			</table>
			<br>
           <form name="f1"  method="POST" action="pdf.php" onSubmit="return verif()" >
        <center>
        <td><button type="submit" name="Imprimer" value="Imprimer" class="btn btn-danger">Imprimer</button></td>
      </center>
    </form>
	<hr>
	<form name="f2"  method="POST" action="statistique.php" onSubmit="return verif()" >
	<center>
        <td><button type="submit" name="statistique" value="statistique" class="btn btn-danger">statistique</button></td>
		</center>
    </form>

        </fieldset>
		</div>
	</div>
	</div>
	</div>		




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