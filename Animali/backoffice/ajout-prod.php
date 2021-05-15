<?PHP
include "../Entities/produit.php";
include "../Controller/produitC.php";

// On teste si la variable de session existe et contient une valeur

if (isset($_POST['ref']) and isset($_POST['prix']) and isset($_POST['image'])and isset($_POST['nomprod']) and isset($_POST['descprod']) and isset($_POST['idcat'])) {
    $produit = new produit($_POST['ref'], $_POST['prix'], $_POST['nomprod'], $_POST['descprod'], $_POST['idcat'],$_POST['image']);

    $produitC =  new produitC();
    $produitC->ajouterProduit($produit);

    header('Location: ajouterprod.php');
}
else{
	echo "vérifier les champs";
}

?>