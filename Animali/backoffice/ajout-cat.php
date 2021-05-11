<?PHP
include "../Entities/categorie.php";
include "../Controller/categorieC.php";

if (isset($_POST['idcat']) and isset($_POST['nomcat'])){
$categorie=new categorie($_POST['idcat'],$_POST['nomcat']);
$categorieC=new categorieC();
$categorieC->ajouterCategorie($categorie);
header('Location: ajoutercat.php');
	
}
else{
	echo "vérifier les champs";
}

?>