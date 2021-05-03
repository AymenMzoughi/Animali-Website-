<?php

include "../config.php";
 $CIN=$_POST['CIN'];
 $Sexe=$_POST['Sexe'];
 $Nom = $_POST['Nom'];
 $Prenom=$_POST['Prenom'];
 $NumTel=$_POST['NumTel'];
 $Email=$_POST['Email'];
 $ADR=$_POST['ADR'];
 $DNS=$_POST['DNS'];


$db=getConnexion();
$result=$db->prepare("UPDATE Client SET `Sexe`='$Sexe', `Nom`='$Nom' , `Prenom`='$Prenom' , `NumTel`='$NumTel' , `Email`='$Email', `ADR`='$ADR' , `DNS`='$DNS' WHERE `Client`.`CIN`='$CIN' ");
$result->execute();
header('location: modifierclient.php');


  ?>