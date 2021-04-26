<?PHP
include "../Model/cartefid.php";
include "../Controller/cartefidC.php";

if (isset($_POST['IDC']) and isset($_POST['DATEC']) and isset($_POST['DATEX']) and isset($_POST['NbP'])and isset($_POST['CINC'])){
$cartefid1=new cartefid($_POST['IDC'],$_POST['DATEC'],$_POST['DATEX'],$_POST['NbP'],$_POST['CINC']);
$cartefid1C=new cartefidC();
$cartefid1C->ajoutercartefid($cartefid1);
header('Location: ajoutercartefid.php');
	
}
else{
	echo "vérifier les champs";
}

?>