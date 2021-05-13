<?PHP
include "../Entities/client.php";
include "../Controller/clientC.php";

$userC = new clientC();
if (!empty($_POST['CIN']) and !empty($_POST['Sexe']!="Choix du Sexe:") and !empty($_POST['Nom']) and !empty($_POST['Prenom']) and !empty($_POST['NumTel'])and !empty($_POST['ADR'])and !empty($_POST['DNS'])and !empty($_POST['MDP'])){
if (isset($_POST['CIN']) and isset($_POST['Sexe']) and isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['NumTel'])and isset($_POST['ADR'])and isset($_POST['DNS'] )and isset($_POST['MDP'])){
$client1=new client($_POST['CIN'],$_POST['Sexe'],$_POST['Nom'],$_POST['Prenom'],$_POST['NumTel'],$_POST['Email'],$_POST['ADR'],$_POST['DNS'],$_POST['MDP']);

$userC->ajouterclient($client1);
 
    // On teste si la variable de session existe et contient une valeur
	header('Location: register.php');
}
}

?>