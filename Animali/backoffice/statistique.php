
            <?PHP
            include_once "../config.php";

            include '../Controller/lignecommandeC.php';
            session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
	echo "<script type='text/javascript'>document.location.replace('login.php');</script>";
   }
            $lignecommande=new lignecommandeC();
            $listeProduits=$lignecommande->afficherlignecommande();
            
            $db=config::getConnexion();
              
            
                
              $req1= $db->query("SELECT COUNT(*) as nb1 FROM lignecommande WHERE quantite BETWEEN '0' AND '5' ");
                $nb1 = $req1->fetch();
            
                $req2= $db->query("SELECT COUNT(*) as nb2 FROM lignecommande WHERE quantite BETWEEN '5' AND '10' " );
                $nb2 = $req2->fetch();
            
                $req3= $db->query("SELECT COUNT(*) as nb3 FROM lignecommande WHERE quantite BETWEEN '10' AND '15'  " );
                 $nb3 = $req3->fetch();
            
                $req4= $db->query("SELECT COUNT(*) as nb4 FROM lignecommande WHERE quantite BETWEEN '15' AND '20' " );
                $nb4 = $req4->fetch();
            
                  $req5= $db->query("SELECT COUNT(*) as nb5 FROM lignecommande WHERE quantite BETWEEN '20' AND '30' " );
                $nb5 = $req5->fetch();
            
                   $req6= $db->query("SELECT COUNT(*) as nb6 FROM lignecommande WHERE quantite BETWEEN '30' AND '40' " );
                $nb6 = $req6->fetch();
                   $req7= $db->query("SELECT COUNT(*) as nb7 FROM lignecommande WHERE quantite > '40'  ");
                   $nb7 = $req7->fetch();
            
            
            
            $dataPoints = array(
              array("label"=> "[0-5]", "y"=> intval($nb1['nb1'])),
              array("label"=> "[5-10]", "y"=> intval($nb2['nb2'])),
              array("label"=> "[10-15]", "y"=> intval($nb3['nb3'])),
              array("label"=> "[15-20]", "y"=> intval($nb4['nb4'])),
              array("label"=> "[20-30]", "y"=> intval($nb5['nb5'])),
              array("label"=> "[30-40]", "y"=> intval($nb6['nb6'])),
              array("label"=> ">40", "y"=> intval($nb7['nb7']))
            
            );




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
							<li class="sidebar-item active"><a class="sidebar-link" href="statistique.php">  Statistiques Ligne de commande  </a></li>
						
							
							
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
	


            <div class="main-content">
                <div class="section__content section__content--p30">
                <div class="container-fluid p-0">
                <a href="afficherlignecommande.php" >Retour à la liste</a></button>
				<div class="container-fluid p-0">
				<div class="card-body text-center">
									<div class="mb-3">		
	
                   </div>
                  </div>
                  </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                               
                                

                                    <script>
                                            window.onload = function () {
                                             
                                            var chart = new CanvasJS.Chart("chartContainer", {
                                                animationEnabled: true,
                                                exportEnabled: true,
                                                title:{
                                                    text: " Statistiques des quantités "
                                                },
                                                subtitles: [{
                                                    text: "des produits vendus"
                                                }],
                                                data: [{
                                                    type: "pie",
                                                    showInLegend: "true",
                                                    legendText: "{label}",
                                                    indexLabelFontSize: 16,
                                                    indexLabel: "{label} - #percent%",
                                                    yValueFormatString: "Dt#,##0",
                                                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                                }]
                                            });
                                            chart.render();
                                             
                                            }
                                            </script>
                                            </head>
                                            <body>
                                            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                                            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


<!-- HERE-->





                              </div>
                              </div>
                              </div>
                              </div>
                            </div>

                            <script src="js/vendor.js"></script>
	<script src="js/app.js"></script>

</body>

</html>
<!-- end document-->
