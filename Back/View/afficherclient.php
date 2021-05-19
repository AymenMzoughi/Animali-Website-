<?php
    include "../Controller/clientC.php";
    
    $clientC =  new clientC();
    $liste=$clientC->afficherclient();

$Sexe1="Homme";
$Sexe2="Femme";
$nsexe1=$clientC->calculerClient($Sexe1);   
$nsexe2=$clientC->calculerClient($Sexe2);

if (isset($_POST["Search"]))
{ 
  if($_POST["choix"]=='CIN')
{$clientC=new clientC();
$liste=$clientC->recupCIN($_POST["Search"]);
}
if($_POST["choix"]=='Nom')
{$clientC=new clientC();
$liste=$clientC->recupNom($_POST["Search"]);
}
if($_POST["choix"]=='NumTel')
{$clientC=new clientC();
$liste=$clientC->recupNumTel($_POST["Search"]);
}
}

?>
    


    <html>
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

					<li class="sidebar-item active" >
						<a href="#ui" data-toggle="collapse" class="sidebar-link">
                        <i class="align-middle" data-feather="users"></i> <span class="align-middle"> Gestion des clients</span>
            </a>
            <ul id="ui" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
							<li class="sidebar-item active"><a class="sidebar-link" href="afficherclient.php">Afficher liste des Client </a></li>
							<li class="sidebar-item "><a class="sidebar-link" href="ajouterclient.php">Ajouter des clients</a></li>
							<li class="sidebar-item "><a class="sidebar-link" href="affichercartefid.php">Afficher liste des Carte fidelité</a></li>
							<li class="sidebar-item "><a class="sidebar-link" href="ajoutercartefid.php">Ajouter une Carte fidelité</a></li>
						</ul>

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
                    <li class="sidebar-item">
						<a class="sidebar-link" href="affichersav.php">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle"> Gestion des SAV </span>
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
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                <img src="img/avatars/avatar-1.jpg" class="avatar img-fluid rounded mr-1" alt="Aymen Mzoughi" /> <span class="text-dark">Aymen Mzoughi</span>
              </a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
            <main class="content">
                <div class="container-fluid p-0">
                <div class="text-center">
                            <form method="POST">
                            <div class="col-12 col-md-3"><select class="form-control"  placeholder="Choix" name="choix" id="choix" ></div>
            <option>Choisir :</option>
              <option>CIN </option>
              <option>Nom</option>
              <option> NumTel</option>
              </select>
<input type="text"  name="Search" name="Search" class="form-control" placeholder="Ecrire Ici">

<button class="btn btn-primary">Rechercher</button>
<button onclick="window.print()" class="btn btn-primary">Print</button>
</div>


	
     
</form>	
                    <h1 class="h3 mb-3">Afficher liste Client </h1>

                    <div class="row">
                        <div class="col-12 col-xl-15">
                            <div class="card">
                                
                            <table class="table table-bordered">
        <tr>
		<th style="width:10%;">CIN</th>
                                            <th style="width:10%;">Sexe</th>
											<th style="width:10%">Nom</th>
                                            <th style="width:10%">Prenom</th>
                                            <th style="width:10%">NumTel</th>
                                            <th style="width:10%">Email</th>
                                            <th style="width:10%">Adresse</th>
                        <th class="d-none d-md-table-cell" style="width:10%">Date de naissance</th>
                                            <th style="width:10%">Mot de Passe</th>
                                            <th style="width:10%">Actions</th>

</tr>

<?PHP
foreach($liste as $clientC){
?>
<tr>
<td><?PHP echo $clientC['CIN']; ?></td>
<td><?PHP echo $clientC['Sexe']; ?></td>
<td><?PHP echo $clientC['Nom']; ?></td>
<td><?PHP echo $clientC['Prenom']; ?></td>
<td><?PHP echo $clientC['NumTel']; ?></td>
<td><?PHP echo $clientC['Email']; ?></td>
<td><?PHP echo $clientC['ADR']; ?></td>
<td><?PHP echo $clientC['DNS']; ?></td>
<td><?PHP echo $clientC['MDP']; ?></td>
<td class="table-action">
<a href="ajouterclient.php"><i class="align-middle" data-feather="user-plus"></i></a>
<a href="modifierclient.php?CIN=<?= $clientC['CIN'] ?>"><i class="align-middle" data-feather="edit-2"></i></a>							
<a href="supp-client.php?CIN=<?= $clientC['CIN'] ?>"><i class="align-middle" data-feather="trash"></i></a>
<a href="Mail.php?CIN=<?= $clientC['CIN'] ?>"><i class="align-middle" data-feather="mail"></i></a>
                        </td>
    
</tr>

<?PHP
}
?>
</table>
        </div>
    </div>

    
    <div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title"> Statistiques du Sexe: </h5>
								</div>
								<div class="card-body">
									<div class="chart chart-sm">
										<canvas id="chartjs-doughnut"></canvas>
                                        
									</div>
								</div>
							</div>
						</div>
                        
</main>


</div>
</div>

<script src="js/vendor.js"></script>
<script src="js/app.js"></script>

<script>
		$(function() {
			// Doughnut chart
			new Chart(document.getElementById("chartjs-doughnut"), {
				type: "doughnut",
				data: {
					labels: ["Homme", "Femme"],
					datasets: [{
						data: [<?php echo $nsexe1; ?>, <?php echo $nsexe2;?>],
						backgroundColor: [
							window.theme.warning,
						],
						borderColor: "transparent"
					}]
				},
				options: {
					maintainAspectRatio: false,
					cutoutPercentage: 70,
					legend: {
						display: true
                        
					}
                    
				}
			});
		});
	</script>
</body>

</html>