<?PHP
include "../Entities/client.php";
include "../Controller/clientC.php";


if (!empty($_POST['CIN']) and !empty($_POST['Sexe']!="Choix du Sexe:") and !empty($_POST['Nom']) and !empty($_POST['Prenom']) and !empty($_POST['NumTel'])and !empty($_POST['ADR'])and !empty($_POST['DNS'])){
if (isset($_POST['CIN']) and isset($_POST['Sexe']) and isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['NumTel'])and isset($_POST['ADR'])and isset($_POST['DNS'] )){
$client1=new client($_POST['CIN'],$_POST['Sexe'],$_POST['Nom'],$_POST['Prenom'],$_POST['NumTel'],$_POST['Email'],$_POST['ADR'],$_POST['DNS']);
$client1C=new clientC();
$client1C->ajouterclient($client1);
header('Location: ajouterclient.php');
	
}}
else{
	echo "vérifier les champs";
	header('Location: ajouterclient.php');
}

?>