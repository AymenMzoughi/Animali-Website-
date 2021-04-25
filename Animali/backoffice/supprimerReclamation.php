<?PHP
include "../Controller/ReclamationC.php";

$reclamationC=new reclamationC();

if (isset($_GET["id"])){
  
$reclamationC-> deletereclamation($_GET["id"]);
header('Location:AfficherReclamation.php');
}


?>
