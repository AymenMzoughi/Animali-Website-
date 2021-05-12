<?PHP
	
    include "../Controller/categorieC.php";
$categorieC=new categorieC();
$listecat= $categorieC->afficherCategorie();

if (isset($_POST["idcat"])){
	$categorieC->supprimerCategorie($_POST["idcat"]);
	header('Location: affichercat.php');
}

	

?>