<?php

include "../config.php";
 $IDC=$_POST['IDC'];
 $DATEC = $_POST['DATEC'];
 $DATEX=$_POST['DATEX'];
 $NbP=$_POST['NbP'];
 $CINC=$_POST['CINC'];


$db=getConnexion();
$result=$db->prepare("UPDATE cartefid SET `IDC`='$IDC' , `DATEC`='$DATEC' , `DATEX`='$DATEX' , `NbP`='$NbP' , `CINC`='$CINC' WHERE `cartefid`.`IDC`='$IDC' ");
$result->execute();
header('location: modifiercartefid.php');


  ?>