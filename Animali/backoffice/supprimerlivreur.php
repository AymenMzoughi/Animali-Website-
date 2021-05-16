<?PHP
	include "../Controller/livreurC.php";
    

	$livreurC=new livreurC();
    $listeliv = $livreurC->afficherlivreur();
	
	if (isset($_POST["ID"])){
		$livreurC->supprimerlivrer($_POST["ID"]);
		header('Location:affich-livreur.php');
	}

?>

