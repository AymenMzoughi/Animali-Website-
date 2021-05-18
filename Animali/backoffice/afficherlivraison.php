<?php
     include '../Controller/livraisonC.php';
     session_start();
     // On teste si la variable de session existe et contient une valeur
     if(empty($_SESSION['e']))
     {
         // Si inexistante ou nulle, on redirige vers le formulaire de login
         echo "<script type='text/javascript'>document.location.replace('login.php');</script>";
        }
     $livraisonC =  new livraisonC();
     $listelivraison = $livraisonC->afficherlivraisons();
 


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
						<a class="sidebar-link" href="ajouteradmine.php">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle"> Gestion Admins </span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="afficherclient.php">
              <i class="align-middle"  data-feather="users"></i> <span class="align-middle">Gestion des clients </span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="afficherprod.php">
              <i class="align-middle" data-feather="box"></i> <span class="align-middle">Gestion des Produits </span>
            </a>
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
                    <li class="sidebar-item active">
						<a href="#ui" data-toggle="collapse" class="sidebar-link">
              <i class="align-middle" data-feather="truck"></i> <span class="align-middle">  Gestion des livraisons  </span>
            </a>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
							<li class="sidebar-item active "><a class="sidebar-link" href="afficherlivraison.php"> afficher livraisons </a></li>
							<li class="sidebar-item  "><a class="sidebar-link" href="ajouterlivreur.php"> Ajouter livreur </a></li>
							<li class="sidebar-item  "><a class="sidebar-link" href="Affich-livreur.php">Afficher livreurs </a></li>
							<li class="sidebar-item  "><a class="sidebar-link" href=""> afficher livraisons </a></li>
						</ul>
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="AfficherReclamation.php">
              <i class="align-middle" data-feather="AfficherReclamation.php"></i> <span class="align-middle"> Gestion des SAV </span>
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
                <div class="text-center">
                         
                    <h1 class="h3 mb-3">Afficher liste des livraisons </h1>

                    <div class="row">
                        <div class="col-12 col-xl-15">
                            <div class="card">
                                
                            <table class="table table-bordered">
        <tr>
                <th>idliv</th>
                <th>idcmd</th>
                <th>idcmd</th>
                <th>adresse</th>
                <th>date</th>
               

                        

</tr>

<?PHP

foreach($listelivraison as $livraisonC){
?>
<tr>
                    <td><?PHP echo $livraisonC['idliv']; ?></td>
                    <td><?PHP echo $livraisonC['idcmd']; ?></td>
                    <td><?PHP echo $livraisonC['etat']; ?></td>
                    <td><?PHP echo $livraisonC['adresse']; ?></td>
                    <td><?PHP echo $livraisonC['date']; ?></td>
                   
                    
                    <td>
                        <form method="POST" action="supprimerlivraison.php">
                        <input type="submit" name="supprimer" value="supprimer">
                        <input type="hidden" value=<?PHP echo $livraisonC['idliv']; ?> name="idliv">
                        </form>
                    </td>
                    <td>
                        <a href="modifierlivraison.php?ID=<?PHP echo $livraisonC['idliv']; ?>"> Modifier </a>
                    </td>
                   <!-- <td>
                        <a href="trilivreur.php?ID=<?PHP echo $livreurC['ID']; ?>"> trier </a>
                    </td> -->
                </tr>

<?PHP
}
?>
</table>
        </div>
    </div>

    
  
                        
</main>


</div>
</div>

<script src="js/vendor.js"></script>
<script src="js/app.js"></script>

<!-- <script>
		$(function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-pie"), {
				type: "pie",
				data: {
					labels: ["alimentation", "hygiene", "accessoire"],
					datasets: [{
						
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger,
							"#dee2e6"
						],
						borderColor: "transparent"
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					}
				}
			});
		});
	</script> !-->
</body>

</html>