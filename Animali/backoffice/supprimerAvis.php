<?PHP
include "../Controller/AvisC.php";

$avisC=new AvisC();

if (isset($_GET["id"])){
  
$avisC-> deleteavis($_GET["id"]);
header('Location:Afficheravis.php');
}


?>