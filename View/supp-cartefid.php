<?PHP
include "../Controller/cartefidC.php";
$cartefidC=new cartefidC();
if (isset($_POST["IDC"])){
	$cartefidC->supprimercartefid($_POST["IDC"]);
	header('Location: supprimercartefid.php');
}

?>