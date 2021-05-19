<?php
    require_once '../Controller/clientC.php';
    require_once '../Model/client.php';
    $clientC =  new clientC();
    $listeclient = $clientC->afficherclient();


    if (isset($_GET['CIN'])){
        $listeprod = $clientC->recupCIN($_GET['CIN']);
        foreach($listeprod as $row)
           {
               $CIN=$row['CIN'];
               $Sexe=$row['Sexe'];
               $Nom=$row['Nom'];
               $Prenom=$row['Prenom'];
               $NumTel=$row['NumTel'];
               $Email=$row['Email'];
               $ADR=$row['ADR'];
               $DNS=$row['DNS'];
			        $MDP=$row['MDP'];
           
    
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
            <form  method="POST">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Modifier un client </h1>

                    <div class="card"  style="width:100%">
                        <div class="col-12 col-xl-20" >
                            <div class="card">
                                
                            <table>
                            <div class="card-body card-block">
                                            
                                              <div class="row form-group">
                                                     <div class="col col-md-3"><label for="text-input" class=" form-control-label">CIN</label><span class="text-danger">*</span></div>
                                                     <div class="col-12 col-md-3"><input type="text" name="CIN" id="CIN" class="form-control" value="<?PHP echo $CIN; ?>" disabled><small class="form-text text-muted"></small></div>
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
                                                     <div class="col-12 col-md-3"><input type="text" id="Nom" name="Nom"  class="form-control" value="<?PHP echo $Nom; ?>"><small class="form-text text-muted"></small></div>
                                                     </div>       
                                                 

                                                <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Prenom</label><span class="text-danger">*</span></div>
                                                     <div class="col-12 col-md-3"><input type="text" id="Prenom" name="Prenom"  class="form-control" value="<?PHP echo $Prenom; ?>"><small class="form-text text-muted"></small></div>
                                                     </div>

                                                 <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Numero Telephone</label><span class="text-danger">*</span></div>
                                                     <div class="col-12 col-md-3"><input type="text" id="NumTel" name="NumTel"  class="form-control" value="<?PHP echo $NumTel; ?>"><small class="form-text text-muted"></small></div>
                                                     </div>

                                                <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Email Adresse</label><span class="text-danger">*</span></div>
                                                     <div class="col-12 col-md-3"><input type="text" id="Email" name="Email"  class="form-control" value="<?PHP echo $Email; ?>"><small class="form-text text-muted"></small></div>
                                                     </div>

                                                 <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Adresse</label><span class="text-danger">*</span></div>
                                                     <div class="col-12 col-md-3"><input type="text" id="ADR" name="ADR"  class="form-control" value="<?PHP echo $ADR; ?>"><small class="form-text text-muted"></small></div>
                                                    </div>

                                                 <div class="row form-group">
                                                 <div class="col col-md-3"><label class=" form-control-label">Date de naissance</label><span class="text-danger">*</span></div>
                                                     <div class="col-12 col-md-3"><input type="date" id="DNS" name="DNS"  class="form-control" value="<?PHP echo $DNS; ?>"><small class="form-text text-muted"></small></div>
                                                     </div>

													 <div class="row form-group">		
													 <div class="col col-md-3"><label class=" form-control-label">Mot De Passe</label><span class="text-danger">*</span></div>
                                                     <div class="col-12 col-md-3"><input type="text" id="MDP" name="MDP"  class="form-control" value="<?PHP echo $MDP; ?>"><small class="form-text text-muted"></small></div>
                                                    </div>
                                                     <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm" name="modifier" value="modifier">Modifier </button>
                                                        <input type="hidden"   name="CIN_ini" value="<?PHP echo $_GET['CIN'];?>">
                                                    </div>
                                                    <div class="col col-md-4"><label class=" form-control-label"><span class="text-danger">* </span>Cette case est obligatoire</label></div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        
        </table>
        <?PHP
             }}
                if(isset($_POST['modifier'])){
                    $client = new client($_POST['CIN_ini'], $_POST['Sexe'], $_POST['Nom'], $_POST['Prenom'],$_POST['NumTel'], $_POST['Email'], $_POST['ADR'], $_POST['DNS'],$_POST['MDP']);
                    $clientC->modifierClient($client,$_POST['CIN_ini']);
                    ?>
                    <script>
				document.location.replace("afficherclient.php") ;
			</script> 
            <?PHP
                }
                ?>
                     


<script src="js/vendor.js"></script>
<script src="js/app.js"></script>

</body>

</html>