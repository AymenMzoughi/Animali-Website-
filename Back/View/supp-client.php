<?PHP
include "../Controller/clientC.php";
$clientC=new clientC();
if (isset($_GET["CIN"])){
	$clientC->supprimerclient($_GET["CIN"]);
	header('Location: afficherclient.php');
}

?>