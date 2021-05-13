<?PHP
include '../controller/commandeC.php';
$commandeC=new commandeC();
if (isset($_GET["idcommande"])){
	$commandeC->supprimercommande($_GET["idcommande"]);
	header('Location: panier.php');
}

?>
