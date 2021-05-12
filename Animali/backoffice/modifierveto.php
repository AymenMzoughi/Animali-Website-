<?php
   require_once '../Controller/veterinaireC.php';
   require_once '../Entities/veterinaire.php';
   session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
	echo "<script type='text/javascript'>document.location.replace('login.php');</script>";
   }
   $error = "";
   $veterinaireC =  new veterinaireC();
   if(
       isset($_POST["id"]) &&
       isset($_POST["nom"]) &&
       isset($_POST["prenom"]) &&
       isset($_POST["adresse"])
   )
   
   {
       if(  
           !empty($_POST["id"])&&
           !empty($_POST["nom"])&&
           !empty($_POST["prenom"])&&
           !empty($_POST["adresse"])
       ) 
       
       {
           $veterinaire = new veterinaire(
               $_POST['id'],
               $_POST['nom'],
               $_POST['prenom'],
               $_POST['adresse']
           );
           $veterinaireC->updateveterinaire($veterinaire, $_GET['id']);
           header('Location:afficherveto.php');
       }
       else
           $error = "Missing information";
   }

?>
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

					<li class="sidebar-item active">
						<a href="#ui" data-toggle="collapse" class="sidebar-link">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle"> Gestion des veterinaires </span>
            </a>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
							<li class="sidebar-item   active"><a class="sidebar-link" href="modiferrveto.php">  modifier veterinaire </a></li>
							<li class="sidebar-item  "><a class="sidebar-link" href="ajouterveto.php"> Ajouter  veterinaire </a></li>
							<li class="sidebar-item "><a class="sidebar-link" href="afficherconseil.php"> Afficher  conseils </a></li>
							<li class="sidebar-item  "><a class="sidebar-link" href="ajouterconseil.php"> Ajouter  conseil </a></li>
							
						</ul>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="AfficherReclamation.php">
              <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle"> Gestion des SAV </span>
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
	
<div id="error">
    <?php echo $error; ?>
</div>

<?php
$veterinaire = $veterinaireC->getvetoById($_GET['id']);
?>
  <form action="" method="post">
      <table border="1" align="center">
          <tr>
              <td><label for="id">id</label></td>
              <td><label for="nom">nom</label></td>
              <td><label for="prenom">prenom</label></td>
              <td><label for="adresse">adresse</label></td>
            
          </tr>
      <tr>
      <td><input type="text" name="id" id="id" value="<?php echo $veterinaire['id'];?>" ></td>
      <td><input type="text" name="nom" id="nom" value="<?php echo $veterinaire['nom'];?>"></td>
      <td><input type="text" name="prenom" id="prenom" value="<?php echo $veterinaire['prenom'];?>"></td>
      <td><input type="text" name="adresse" id="adresse" value="<?php echo $veterinaire['adresse'];?>"></td>
    
      
      </tr>
          <tr>
      <input type="submit" value="envoyer">
          </tr>
      </table>
  </form>
  <script src="js/vendor.js"></script>
	<script src="js/app.js"></script>
</body>
</html>