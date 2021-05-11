<?php
    
    require_once '../Controller/categorieC.php';

    $categorieC =  new categorieC();
    $listecat = $categorieC->afficherCategorie();
    
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
                <a class="sidebar-brand" href="index.html">
          <span class="align-middle">AdminKit</span>
        </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item">
                        
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Gestion des clients </a>
                        <ul class="sub-menu children dropdown-menu">
                        <li class="sidebar-item"><a class="sidebar-link" href="../View/ajouterprod.php">Ajouter</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="../View/modifierprod.php">Modifier</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="../View/supprimerprod.php">Supprimer</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="../View/afficherprod.php">Afficher</a></li>
							
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Gestion des carte fidelité </a>
                        <ul class="sub-menu children dropdown-menu">
                        <li class="sidebar-item"><a class="sidebar-link" href="../View/ajoutercat.php">Ajouter</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="../View/modifiercat.php">Modifier</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="../View/supprimercat.php">Supprimer</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="../View/affichercat.php">Afficher</a></li>
							
                        </ul>
                    </li>
                        <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="sidebar">
						
                        
                    </li>
                    </ul>
                    </ul>

                    
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle d-flex">
          <i class="hamburger align-self-center"></i>
        </a>

                <form class="form-inline d-none d-sm-inline-block">
                    <div class="input-group input-group-navbar">
                        <input type="text" class="form-control" placeholder="Search…" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn" type="button">
                <i class="align-middle" data-feather="search"></i>
              </button>
                        </div>
                    </div>
                </form>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">4</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                            
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                    
                                            <div class="col-10">
                                                <div class="text-dark">Update completed</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                                <div class="text-muted small mt-1">30m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <i class="text-primary" data-feather="home"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Login from 192.186.1.8</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <i class="text-success" data-feather="user-plus"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">New connection</div>
                                                <div class="text-muted small mt-1">Christina accepted your request.</div>
                                                <div class="text-muted small mt-1">14h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="message-square"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
                                <div class="dropdown-menu-header">
                                    <div class="position-relative">
                                        4 New Messages
                                    </div>
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                            </div>
                                            <div class="col-10 pl-2">
                                                <div class="text-dark">Vanessa Tucker</div>
                                                <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
                                                <div class="text-muted small mt-1">15m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
                                            </div>
                                            <div class="col-10 pl-2">
                                                <div class="text-dark">William Harris</div>
                                                <div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
                                            </div>
                                            <div class="col-10 pl-2">
                                                <div class="text-dark">Christina Mason</div>
                                                <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
                                                <div class="text-muted small mt-1">4h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
                                            </div>
                                            <div class="col-10 pl-2">
                                                <div class="text-dark">Sharon Lessman</div>
                                                <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all messages</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
              </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="pie-chart"></i> Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages-settings.html"><i class="align-middle mr-1" data-feather="settings"></i> Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
            <form  method="POST" action="supp-cat.php"   id="supprimercategorie" name="supprimercat">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3">Supprimer Carte Fidelité </h1>

                    <div class="row">
                        <div class="col-12 col-xl-6">
                            <div class="card">
                                
                            <table border=1 align = 'center'>
                            <div class="card-body card-block">
                                            
                                              <div class="row form-group">
                                                     <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID categorie</label></div>
                                                     <div class="col-12 col-md-9"><input type="text" name="idcat" id="idcat" class="form-control"><small class="form-text text-muted"></small></div>
                                                     <span id='missPrenom'></span><br>

                                                 </div>
                                             
                                                
                                                     <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm" id="supprimer" value="supprimer"
                                                       >
                                                            <i "fa fa-dot-circle-o"></i>Supprimer
                                                        </button>
                                                    </div>
                                        </div>
                                        </table>
                                        <main class="content">
                <div class="container-fluid p-0">

                <h1 class="h3 mb-3">Afficher liste categorie </h1>

<div class="row">
    <div class="col-12 col-xl-15">
        <div class="card">
            
        <table border=1 align = 'left'>
        <tr>
        <th>ID categorie</th>
<th>nom categorie</th>

</tr>

<?PHP
foreach($listecat as $categorieC){
?>
<tr>
<td><?PHP echo $categorieC['idcat']; ?></td>
<td><?PHP echo $categorieC['nomcat']; ?></td>
    
    </form>
</tr>
<?PHP
}
?>
</table>
        </div>
    </div>

    
    
                                    <div class="card-footer">
                                    <form method="POST" action="ajoutercat.php">
                                    <button type="submit" class="btn btn-primary btn-sm" id="ajouter" value="ajouter">
                                        <i "fa fa-dot-circle-o"></i>Ajouter
                                        </form>
                                    </button>
                                </div>
                               
                            <div class="card-footer">
                                    <form method="POST" action="modifiercat.php">
                                    <button type="submit" class="btn btn-primary btn-sm" id="supprimer" value="supprimer">
                                    
                                        <i "fa fa-dot-circle-o"></i>Modifier
                                        </form>
                                    </button>
                                </div>
    

</main>


</div>
</div>

    <script src="js/vendor.js"></script>
    <script src="js/app.js"></script>

</body>

</html>