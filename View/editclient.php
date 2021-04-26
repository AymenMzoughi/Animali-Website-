<?php

include "../config.php";
 $CIN=$_POST['CIN'];
 $Nom = $_POST['Nom'];
 $Prenom=$_POST['Prenom'];
 $NumTel=$_POST['NumTel'];
 $ADR=$_POST['ADR'];
 $DNS=$_POST['DNS'];


$db=getConnexion();
$result=$db->prepare("UPDATE Client SET `Nom`='$Nom' , `Prenom`='$Prenom' , `NumTel`='$NumTel' , `ADR`='$ADR' , `DNS`='$DNS' WHERE `Client`.`CIN`='$CIN' ");
$result->execute();
header('location: modifierclient.php');


  ?>