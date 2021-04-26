<?PHP
include "../Model/client.php";
include "../Controller/clientC.php";

if (isset($_POST['CIN']) and isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['NumTel'])and isset($_POST['ADR'])and isset($_POST['DNS'])){
$client1=new client($_POST['CIN'],$_POST['Nom'],$_POST['Prenom'],$_POST['NumTel'],$_POST['ADR'],$_POST['DNS']);
$client1C=new clientC();
$client1C->ajouterclient($client1);
header('Location: ajouterclient.php');
	
}
else{
	echo "vérifier les champs";
}

?>