<?PHP
include "../Controller/livraisonC.php";
$livraisonC=new livraisonC();
if (isset($_POST["idliv"])){
	$livraisonC->supprimerlivraison($_POST["idliv"]);
	header('Location: afficherlivraison.php');
}

?>