<?PHP
include "../Controller/categorieC.php";
$categorieC=new categorieC();
if (isset($_POST["idcat"])){
	$categorieC->supprimerCategorie($_POST["idcat"]);
	header('Location: supprimercat.php');
}

?>