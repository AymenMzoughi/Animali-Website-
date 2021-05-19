<?PHP
include "../Entities/Utilisateur.php";
include "../Controller/UtilisateurC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['role']) and isset($_POST['login']) and isset($_POST['password']) and isset($_POST['image'])) {
    $utilisateur = new Utilisateur( $_POST['nom'], $_POST['prenom'], $_POST['role'], $_POST['login'], $_POST['password'], $_POST['image']);

    $utilisateurC =  new UtilisateurC();
    $utilisateurC->ajouterUtilisateur($utilisateur);

    header('Location: ajouteradmine.php');

    

	
}
else{
	echo "vérifier les champs";
}

?>