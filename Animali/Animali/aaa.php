<?php
include_once '../Entities/Avis.php';
include_once '../Controller/AvisC.php';
if (
isset($_POST["nom"]) &&
isset($_POST["prenom"]) &&
isset($_POST["note"])
&&isset($_POST["message"])) 
  {
  $avis = null;
  $avisC = new AvisC();
$avis= new Avis($_POST['message'],$_POST['nom'],$_POST['prenom'],$_POST['note']);
$avisC->ajouteravis($avis);
  }

 
?>