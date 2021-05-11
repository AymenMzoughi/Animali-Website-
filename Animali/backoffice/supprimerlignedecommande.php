<?PHP
include '../Controller/lignecommandeC.php';
$lignecommandeC=new lignecommandeC();
if (isset($_GET["idcommande"])){
	$lignecommandeC->supprimerlignecommande($_GET["idcommande"]);
	header('Location: afficherlignecommande.php');
}

?>