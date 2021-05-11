<?php
    require_once '../Controller/veterinaireC.php';

    $veterinaireC =  new veterinaireC();
	$listeveto = $veterinaireC->afficherVeterinaire();
	
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

					<li class="sidebar-item active">
						<a href="#ui" data-toggle="collapse" class="sidebar-link">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle"> Gestion des veterinaires </span>
            </a>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
							<li class="sidebar-item "><a class="sidebar-link" href="afficherveto.php"> veterinaires </a></li>
							<li class="sidebar-item  active"><a class="sidebar-link" href="afficherconseil.php">  conseils </a></li>
							
							
						</ul>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="AfficherReclamation.php">
              <i class="align-middle" data-feather="truck"></i> <span class="align-middle"> Gestion des SAV </span>
            </a>
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="Afficherlivraison.php">
              <i class="align-middle" data-feather="truck"></i> <span class="align-middle"> Gestion des livraisons </span>
            </a>
					</li>

        </div>
		</nav>
		
			<main class="content">
			<div class="container-fluid p-0">
		
			<form method="POST" action="chercherveto.php">
						<input type="submit" name="chercher" value="Chercher un veterinaire ">
						</form>
					<h1 class="h3 mb-3"> Liste des veterinaire :  </h1>

					<div class="row">
						<div class="col-12 col-xl-6">
							<div class="card">
								
							<table border=1 align = 'center'>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Adresse</th>
				<th>supprimer</th>
				<th>modifier</th>
			</tr>

			<?PHP
				foreach($listeveto as $veterinaireC){
			?>
				<tr>
					<td><?PHP echo $veterinaireC['id']; ?></td>
					<td><?PHP echo $veterinaireC['nom']; ?></td>
					<td><?PHP echo $veterinaireC['prenom']; ?></td>
					<td><?PHP echo $veterinaireC['adresse']; ?></td>
					
					<td>
						<form method="POST" action="supprimerveto.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $veterinaireC['id']; ?> name="id">
						</form>
					</td>
					<td>
						<a href="modifierveto.php?id=<?PHP echo $veterinaireC['id']; ?>"> Modifier </a>
					</td>
					<td>
						<form method="POST" action="triveto.php">
						<input type="submit" name="trier" value="trier">
						<input type="hidden" value=<?PHP echo $veterinaireC['id']; ?> name="id">
						</form>
					</td>
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

</body>

</html>