<?php

include "../config.php";
 $idcat=$_POST['idcat'];
 $nomcat = $_POST['nomcat'];
 


$db=config::getConnexion();
$result=$db->prepare("UPDATE categories SET `idcat`='$idcat' , `nomcat`='$nomcat'  WHERE `categories`.`idcat`='$idcat' ");
$result->execute();
header('location: modifiercat.php');


  ?>