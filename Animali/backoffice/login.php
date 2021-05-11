<?php
session_start();
include_once '../Entities/Utilisateur.php';
include_once '../Controller/UtilisateurC.php';
$message="";
$userC = new UtilisateurC();
if (isset($_POST["email"]) &&
    isset($_POST["password"])) {
    if (!empty($_POST["email"]) &&
        !empty($_POST["password"]))
    {   $message=$userC->connexionUser($_POST["email"],$_POST["password"]);
         $_SESSION['e'] = $_POST["email"];// on stocke dans le tableau une colonne ayant comme nom "e",
        //  avec l'email à l'intérieur
        if($message!='pseudo ou le mot de passe est incorrect'){
           header('Location:index.php');}
        else{
            $message='pseudo ou le mot de passe est incorrect';
        }}
    else
        $message = "Missing information";}
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

	<title> Login | Animali Backoffice</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
<br>
              <br>
<center>

<h1 class="card-body"  >Login </h1>
</center>
<div class="container-fluid p-0">
<?php if($message!="") { echo $message; } ?>      
              <br>
              <br>
              <br>
              
                        
					
                            <div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
                                       
											<form  name="frmUser" method="post" action="">
												
													<div class="col-md-8">
														<div class="form-group">
															<label for="inputUsername">Email</label>
															<input type="text" class="form-control" id="email"  name ="email"placeholder="Username">
														</div>
														<div class="form-group">
															<label for="inputUsername">Password</label>
															<textarea rows="2" class="form-control" id="password" name="password" placeholder="Tell something about yourself"></textarea>
														</div>
													</div>
													
										
                                                
												<button nput type="submit" name="submit" value="Submit" class="btnSubmit">Login</button>
											</form>
                                         
										</div>
									</div>
                                    </div>

					
			</main>

		
		</div>
	</div>

	<script src="js/vendor.js"></script>
	<script src="js/app.js"></script>

</body>

</html>