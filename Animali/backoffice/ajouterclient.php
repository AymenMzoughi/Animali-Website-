<?php
    require_once '../Controller/clientC.php';
    session_start();
    // On teste si la variable de session existe et contient une valeur
    if(empty($_SESSION['e']))
    {
        // Si inexistante ou nulle, on redirige vers le formulaire de login
        echo "<script type='text/javascript'>document.location.replace('login.php');</script>";
       }
    $clientC =  new clientC();
    $listeclient = $clientC->afficherclient();
    
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
    <script src="js/client.js"></script>
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
							<li class="sidebar-item "><a class="sidebar-link" href="afficherclient.php">Afficher liste des Client </a></li>
							<li class="sidebar-item active"><a class="sidebar-link" href="ajouterclient.php">Ajouter des clients</a></li>
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
            <form  method="POST" action="ajout-client.php"   id="ajouterclient" name="ajoutrclieent">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Ajouter un Client </h1>

                    <div class="card"  style="width:100%">
                        <div class="col-12 col-xl-20" >
                            <div class="card">
                                
                            <table>
                            <div class="card-body card-block">
                                            
                                              <div class="row form-group">
                                                     <div class="col col-md-3"><label for="text-input" class=" form-control-label">CIN</label><span class="text-danger">*</span></div>
                                                     <div class="col-12 col-md-3"><input type="text" name="CIN" id="CIN" class="form-control"><small class="form-text text-muted"></small></div>
                                                </div>
                                                
                                                <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Sexe</label><span class="text-danger">*</span></div>
                                                <div class="col-12 col-md-3"><select class="form-control"  placeholder="Sexe" name="Sexe" id="Sexe" >
                                                        <option>Choix du Sexe:</option>
                                                        <option>Homme</option>
                                                        <option>Femme</option>
                                                    </select></div>
                                                </div>


                                             <div class="row form-group">
                                                     <div class="col col-md-3"><label class=" form-control-label">Nom</label><span class="text-danger">*</span></div>
                                                     <div class="col-12 col-md-3"><input type="text" id="Nom" name="Nom"  class="form-control"><small class="form-text text-muted"></small></div>
                                                     </div>       
                                                 

                                                <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Prenom</label><span class="text-danger">*</span></div>
                                                     <div class="col-12 col-md-3"><input type="text" id="Prenom" name="Prenom"  class="form-control"><small class="form-text text-muted"></small></div>
                                                     </div>

                                                 <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Numero Telephone</label><span class="text-danger">*</span></div>
                                                     <div class="col-12 col-md-3"><input type="text" id="NumTel" name="NumTel"  class="form-control"><small class="form-text text-muted"></small></div>
                                                     </div>

                                                     <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Adresse Email</label><span class="text-danger">*</span></div>
                                                     <div class="col-12 col-md-3"><input type="text" id="Email" name="Email"  class="form-control"><small class="form-text text-muted"></small></div>
                                                     </div>

                                                 <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Adresse</label><span class="text-danger">*</span></div>
                                                     <div class="col-12 col-md-3"><input type="text" id="ADR" name="ADR"  class="form-control"><small class="form-text text-muted"></small></div>
                                                    </div>

                                                 <div class="row form-group">
                                                 <div class="col col-md-3"><label class=" form-control-label">Date de naissance</label><span class="text-danger">*</span></div>
                                                     <div class="col-12 col-md-3"><input type="date" id="DNS" name="DNS"  class="form-control"><small class="form-text text-muted"></small></div>
                                                     </div>

                                                     <div class="row form-group">
                                                 <div class="col col-md-3"><label class=" form-control-label">Mot de Passe</label><span class="text-danger">*</span></div>
                                                     <div class="col-12 col-md-3"><input type="text" id="MDP" name="MDP"  class="form-control"><small class="form-text text-muted"></small></div>
                                                     </div>

                                                     <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm" onclick="Client()==true"></i> Ajouter </button>
                                                    </div>
                                                    <div class="col col-md-4"><label class=" form-control-label"><span class="text-danger">* </span>Cette case est obligatoire</label></div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        
        </table>
</form>

        <main class="content">
                <div class="container-fluid p-0">

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
foreach($listeclient as $clientC){
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
</main>


<script src="js/vendor.js"></script>
<script src="js/app.js"></script>

</body>

</html>