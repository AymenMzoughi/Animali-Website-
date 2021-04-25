<?PHP
	require_once "../controller/conseilC.php";

	$conseilC=new conseilC();
	
	if (isset($_POST["idc"])){
		$conseilC->deleteconseil($_POST["idc"]);
		header('Location:afficherconseil.php');
	}

?>