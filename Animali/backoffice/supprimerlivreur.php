<?PHP
	include "../Controller/livreurC.php";
	$livreurC=new livreurC();	
	if (isset($_POST["ID"])){
		$livreurC->supprimerlivrer($_POST["ID"]);
		header('Location:affich-livreur.php');
	}

?>

