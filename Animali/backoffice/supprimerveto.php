<?PHP
	require_once "../Controller/veterinaireC.php";

	$veterinaireC=new veterinaireC();
	
	if (isset($_POST["id"])){
		$veterinaireC->deleteveterinaire($_POST["id"]);
		header('Location:afficherveto.php');
	}

?>

