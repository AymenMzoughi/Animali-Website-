<?php
use PHPMailer\PHPMailer\PHPMailer;
    require_once '../Controller/ReclamationC.php';
    require_once '../Entities/Reclamation.php';
	require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
	echo "<script type='text/javascript'>document.location.replace('login.php');</script>";
   }
    if (isset($_GET['id'])){
        $reclamationC=new reclamationC();
         $result=$reclamationC-> recupererReclamation($_GET['id']);
       foreach($result as $row)
	   {
		   $id=$row['id'];
		   $probleme=$row['probleme'];
		   $date=$row['date'];
		   $etat=$row['etat'];
		   $sujet=$row['sujet'];
		   $idclient=$row['idclient'];
		
	
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
              <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle"> Gestion des SAV </span>
            </a>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
							<li class="sidebar-item active"><a class="sidebar-link" href="modifierReclamation.php"> cherhcher Reclamations </a></li>
							<li class="sidebar-item  "><a class="sidebar-link" href="StatistiqueReclamation.php"> Statistiques Reclamation </a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="Afficheravis.php">Avis </a></li>
							
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
		 <a href="AfficherReclamation.php" >Retour à la liste</a> 
			<form method="POST">
				<div class="container-fluid p-0">
				<div class="mb-3">
									
									</div>
					<h1 class="h3 mb-3">Modifier une reclamation </h1>
                    
					<div class="row">
						<div class="col-12 col-xl-6">
							<div class="card">
								
								<div class="card-body">
									<form>
										<div class="form-group">
											<label class="form-label"> id reclamation</label>
											<input type="text"  name="id" id="id" class="form-control"  value="<?PHP echo $id ?>" disabled  >
										</div>
										<div class="form-group">
											<label class="form-label w-100"> sujet </label>
											<input type="text" class="form-control" id="sujet" value="<?PHP echo $sujet ?>" name="sujet">
											
										</div>
										<div class="form-group">
											<label class="form-label">Probleme </label>
											<input type="text" class="form-control"  id="probleme"value="<?PHP echo $probleme ?>" name="probleme">
										</div>
                                        <div class="form-group">
											<label class="form-label"> date  </label>
											<input type="date" class="form-control" id="date" value="<?PHP echo $date ?>" name="date">
										</div>
											<div class="form-group col-md-4">
											<label for="inputState">Etat </label>
											<input type="text" class="form-control" id="etat" value="<?PHP echo $etat ?>" name="etat">
				
					<div class="form-group">
					<label class="form-label"> id client </label>
					      
									<input type="text" class="form-control" id="idclient" value="<?PHP echo $idclient ?>" name="idclient">
										</div>
										<div class="mb-3">
										<input type="submit"  class="btn btn-outline-secondary" name="modifier" value="modifier" > 
										<input type="hidden"   name="id_ini" value="<?PHP echo $_GET['id'];?>">
										</div>

									
										<?php
									}}
	if(isset($_POST['modifier']) && !empty($_POST["sujet"]) &&
	!empty($_POST["probleme"]) 
	&&!empty($_POST["date"])
	&&!empty($_POST["idclient"])){
		$reclamation= new reclamation($_POST['probleme'],$_POST['date'],$_POST['etat'],$_POST['sujet'],$_POST['idclient']);
		$reclamationC->Modifierreclamation($reclamation,$_POST['id_ini']);
		if($_POST['etat']=="A traiter")
		{
			$mail=new PHPMailer();
			$mail->IsSMTP();
			$mail -> Host="smtp.gmail.com";
			$mail ->SMTPAuth=true;
			$mail ->Username="animalitn2021@gmail.com";
			$mail ->Password='animali123';
			$mail ->Port=465;
			$mail ->SMTPSecure='ssl';
			$mail->isHTML(true);
			$mail ->setFrom('animalitn2021@gmail.com');
			$mail->addAddress("zeinebmb19@gmail.com");
			$mail->Subject = " Reclamation a traiter ";
			$mail->Body = "Bonjour , Vous avez une reclamation num ".$_POST['id_ini']." a traiter . ";
			if($mail->send())
				{
				   echo " oui";	}
				else
				{
					echo $mail->ErrorInfo;
				}
		}
		?> 
		<script>
				document.location.replace("AfficherReclamation.php") ;
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
