<?PHP
include "../Controller/cartefidC.php";
$cartefidC=new cartefidC();
if (isset($_GET["IDC"])){
	$cartefidC->supprimercartefid($_GET["IDC"]);
	header('Location: affichercartefid.php');
}

?>