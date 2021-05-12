<?PHP
include "../Entities/produit.php";
include "../Controller/produitC.php";

// On teste si la variable de session existe et contient une valeur

if (isset($_POST['ref']) and isset($_POST['prix']) and isset($_POST['nomprod']) and isset($_POST['descprod']) and isset($_POST['idcat'])) {
    $produit = new produit($_POST['ref'], $_POST['prix'], $_POST['nomprod'], $_POST['descprod'], $_POST['idcat']);

    $produitC =  new produitC();
    $produitC->ajouterProduit($produit);

    header('Location: ajouterprod.php');

    if (empty($ref)){
		header("Location: ajouterprod.php?error= erreur ref produit &$user_data");
	}
	else if (empty($prix)) {
		header("Location: ajouterprod.php?error=erreur prix produit&$user_data");
	}
	
	
	
	else if ($result) {
        header("Location: ajouterprod.php?success=successfully created");
        
  }else {
     header("Location: ajouterprod.php?error= error occurred&$user_data");
  }
      /* $sql = "INSERT INTO produits(ref, prix) 
               VALUES('$ref', '$prix')";   
       $result = mysqli_query($conn, $sql);*/
       
	

	
}
else{
	echo "vérifier les champs";
}

?>