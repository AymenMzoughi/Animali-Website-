<?PHP
include "../Controller/clientC.php";
$clientC=new clientC();
if (isset($_POST["CIN"])){
	$clientC->supprimerclient($_POST["CIN"]);
	header('Location: supprimerclient.php');
}

?>