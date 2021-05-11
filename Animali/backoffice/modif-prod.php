<?php

include "../config.php";

//if (isset($_GET['ref'])){
  
  //$result=$produitC->getProdByRef($_GET['ref']);

  //$produit = new produit($_POST['ref'], $_POST['prix'], $_POST['nomprod'], $_POST['descprod']);



  
      


 $ref=$_POST['ref'];
 $prix = $_POST['prix'];
 $nomprod=$_POST['nomprod'];
 $descprod=$_POST['descprod'];
 $descprod=$_POST['idcat'];

  

 


$db=config::getConnexion();
$result=$db->prepare("UPDATE produits SET `prix`='$prix' , `nomprod`='$nomprod' , `descprod`='$descprod' , `idcat`='$idcat' WHERE `produits`.`ref`='$ref' ");
$result->execute();
header('location: modifierprod.php');


  ?>