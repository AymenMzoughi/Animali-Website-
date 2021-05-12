<?php
    require_once '../Controller/AvisC.php';
    require_once '../Entities/Avis.php';
	session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
	echo "<script type='text/javascript'>document.location.replace('login.php');</script>";
   }
    if (isset($_GET['id'])){
        $avisC=new AvisC();
         $result=$avisC-> recupereravis($_GET['id']);
       foreach($result as $row)
	   {
		   $id=$row['id'];
		   $message=$row['message'];
		   $nom=$row['nom'];
		   $prenom=$row['prenom'];
		   $email=$row['email'];
		   $note=$row['note'];
		 
		
	
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
              <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle"> Gestion des SAV </span>
            </a>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
							<li class="sidebar-item  "><a class="sidebar-link" href="AfficherReclamation.php">Reclamations </a></li>
							<li class="sidebar-item  "><a class="sidebar-link" href="StatistiqueReclamation.php"> Statistiques Reclamation </a></li>
							<li class="sidebar-item active "><a class="sidebar-link" href="Modiferavis.php"> Modifier Avis </a></li>
							
						</ul>
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
		 <a href="AfficherReclamation.php" >Retour à la liste</a></button>
			<form method="POST">
				<div class="container-fluid p-0">
				<div class="mb-3">
									
									</div>
					<h1 class="h3 mb-3">Modifier un avis  </h1>
                    
					<div class="row">
						<div class="col-12 col-xl-6">
							<div class="card">
								
								<div class="card-body">
									<form>
										<div class="form-group">
											<label class="form-label"> id Avis </label>
											<input type="text"  name="id" id="id" class="form-control"  value="<?PHP echo $id ?>" disabled  >
										</div>
										<div class="form-group">
											<label class="form-label w-100">  message  </label>
											<input type="text" class="form-control" id="message" value="<?PHP echo $message ?>" name="message">
											
										</div>
										<div class="form-group">
											<label class="form-label"> Prenom  </label>
											<input type="text" class="form-control"  id="prenom"value="<?PHP echo $prenom ?>" name="prenom">
										</div>
                                        <div class="form-group">
											<label class="form-label"> Nom  </label>
											<input type="text" class="form-control" id="nom" value="<?PHP echo $nom ?>" name="nom">
										</div>
										<div class="form-group">
											<label class="form-label"> Email  </label>
											<input type="email" class="form-control" id="email" value="<?PHP echo $email ?>" name="email">
										</div>
											<div class="form-group col-md-4">
											<label for="inputState"> Note </label>
											<input type="text" class="form-control" id="note" value="<?PHP echo $note ?>" name="note">
                                            </div>
										<div class="mb-3">
										<input type="submit"  class="btn btn-outline-secondary" name="modifier" value="modifier" > 
										<input type="hidden"   name="id_ini" value="<?PHP echo $_GET['id'];?>">
										</div>
										<?php

									
									}}
	if(isset($_POST['modifier'])&& !empty($_POST["nom"]) &&
	!empty($_POST["prenom"]) &&
	!empty($_POST["email"])&&
	!empty($_POST["note"])
	&&!empty($_POST["message"])){
		$avis= new avis($_POST['message'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['note']);
		$avisC->Modifieravis($avis,$_POST['id_ini']);
		?> 
		<script>
				document.location.replace("afficheravis.php") ;
			</script>
	<?php		
	}
	?>  
								</div>
							</div>
						</div>
						

				</div>
			</main>

			

	<script src="js/vendor.js"></script>
	<script src="js/app.js"></script>

</body>

</html>
